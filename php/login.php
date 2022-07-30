<?php 
    require_once ("database_run.php");
 
    session_start();
    $email = $_GET['email'];
    $password = $_GET['password'];
    $employer = $_GET['for_employer'];
    
    $db = new Database();

    // get user with given credential
    $result = $db->userExistsForEmployerStatus($email,$employer);
    $count = mysqli_num_rows($result);

    // check user exist for given email and employer status
    if($count > 0){
        // get verified status of user with credentials
        $result = $db->getVerifyStatusForUserCredentials($email,$password);
        // fetch row data
        $row = mysqli_fetch_row($result);
    
        if($row!=null){
            if($row[0]==0){
                // code message user not verified
                echo 0;
            }else{
                // code message user verified
                $_SESSION['email'] = $email;
                $_SESSION['employer'] = $employer;
                $_SESSION['name'] = $row[1];
                $_SESSION['logged'] = 1;
                echo 1;
            }
        }else{
            // code message user details wrong
            echo -10;
        }
    }else{
        // code message user isn't registered
        echo -1;
    }
    $db->databaseClose();
 ?>