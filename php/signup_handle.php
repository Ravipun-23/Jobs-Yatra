<?php
    require_once ("send_mail.php");
    require_once ("database_run.php");

    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];

        // database connection
        $db = new Database();

        // check email first if it is unique
        $result = $db -> getCredentialDatasOfGivenEmail($email);
        $count = mysqli_num_rows($result);
        // check number of login with the given email
        if($count > 0){
            //email duplicate code = 2
            echo 2;
            $db->databaseClose();
            exit;
        }
        
        // continue to insert in database
        $name = $_POST['name'];
        $password = $_POST['password'];
        $employer = $_POST["for_employer"];
        $token = md5(uniqid(rand(), true));
                   
        $query = $db->signInUser($email,$name,$password,$employer,$token);

        // if user is recorded in database
        if($query){
            // send mail
            $mail = new Mail();
            echo $mail->sendMail($email,$token);
        }else{
            // user record unsuccessfull code = 0
            echo 0;
        }
        $db->databaseClose();
    }
    exit;
?>