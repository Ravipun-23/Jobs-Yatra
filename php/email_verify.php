<?php 

    require_once ("database_run.php");

    session_start();
    $email = $_GET['email'];
    $token = $_GET['token'];
    $db = new Database();

    $result = $db -> getUserVerificationStatusForGivenToken($email,$token);
    $row = mysqli_fetch_row($result);
    if($row==null || $row[0]){
        echo 'The link has expired for '.$email;
        $db->databaseClose();
        exit;
    }

    // user is verified
    $result = $db->setVerifiedUser($email);
    if($result){
        $_SESSION['logged']=1;
        $_SESSION['name']=$row[1];
        $_SESSION['employer']=$row[2];
        $_SESSION['email']=$row[3];
        
        echo 'Verified!! Please check the verifying page';
    }
    else{
        echo 'Not verified!! Unknown error try clicking the link again';
    }
    $db->databaseClose();
?>