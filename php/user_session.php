<?php  
    session_start();

    require_once ("database_run.php");
    $db = new Database();


    if(isset($_GET['logged'])){
        if(isset($_SESSION['logged'])){
            echo $_SESSION['logged'].',';
        }else{
            echo '0,';
        }
    }

    if(isset($_GET['name'])){
        if(isset($_SESSION['name'])){
            echo $_SESSION['name'].',';
        }else{
            echo 'For employer'.',';
        }
    }

    if(isset($_GET['email'])){
        if(isset($_SESSION['email'])){
            echo $_SESSION['email'].',';
        }else{
            echo ' '.',';
        }
    }

    if(isset($_GET['employer'])){
        if(isset($_SESSION['employer'])){
            echo $_SESSION['employer'].',';
        }else{
            echo '0'.',';
        }
    }

    if(isset($_GET['checkForm'])){
        if(isset($_SESSION['logged'])){
            if($_SESSION['logged']=="1"){
                $result = $db->checkUserFormDetails($_SESSION['employer'],$_SESSION['email']);
                
                $count = mysqli_num_rows($result);
                if($count>0){
                    echo '1,';
                }else{
                    echo '0,';
                }
            }else{
                echo '0,';
            }
        }else{
            echo '0,';
        }
    }

    if(isset($_GET['destroy'])){
        session_destroy();
    }

    if(isset($_GET['jobs_shown_count'])){
        if(isset($_SESSION['jobs_shown_count'])){
            echo $_SESSION['jobs_shown_count'].'||';
        }else{
            $_SESSION['jobs_shown_count'] = 0;
            echo '0'.'||';
        }
    }

    if(isset($_GET['get_jobs'])){
        $result = $db->getJobsList();
        echo $result.'||';
    }
    
?>