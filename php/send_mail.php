<?php

    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once ("database_run.php");

    if(isset($_GET['email'])){
        $email = $_GET['email'];
        $token = md5(uniqid(rand(), true));

        // database connection
        $db = new Database();

        // update a new token for the user for new verification
        $result = $db->updateTokenForUser($token,$email);

        // if token updated in database then send mail
        if($result){
            $mail = new Mail();
            echo $mail->sendMail($email,$token);
        }
        else{
            // mail send code failed / update token fail
            echo -1;
        }
        $db->databaseClose();
    }

    class Mail{
        function sendMail($email,$token){
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;                               
                $mail->Username   = 'jobs19yatra@gmail.com';
                $mail->Password   = 'Jobs19y@tr@';    
                $mail->SMTPSecure   = "tls";            
                $mail->Port       = 587;                           
                $mail->isHTML(true);     
                $mail->Subject = 'Jobs Yatra account verification';        
                $mail->setFrom('jobs19yatra@gmail.com', 'Jobs');
                $mail->Body    = 'Please click the link to verify your account in Jobs Yatra <link>http://localhost/Jobs-Yatra-main/php/email_verify.php?email='.$email.'&token='.$token.'</link>';
                $mail->addAddress($email);     
                
                if($mail->send()){
                    // mail send successfull
                    echo 1;
                }else{
                    // mail send unsuccessfull
                    echo -1;
                }
                $mail->smtpClose();
            } catch (Exception $e) {
                // mail send unsuccessfull
                echo -1;
            }
        }
    }
?>