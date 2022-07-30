<?php 
    session_start();

    require_once ("database_run.php");
    $db = new Database();

    if(isset($_GET['employer_detail'])){
        $result = $db->getEmployerDetails($_SESSION['email']);
        $count = mysqli_num_rows($result);
        $rows = mysqli_fetch_row($result);
        foreach($rows as $row){
            echo $row.',';
        }
    }

    if(isset($_GET['edit_employer_detail'])){
        $result = $db->editEmployerDetails($_GET['name'],$_GET['address'],$_GET['contact'],$_GET['estd'],$_GET['logo'],$_GET['description'],$_GET['email']);
        echo $_GET['name'].$_GET['address'].$_GET['contact'].$_GET['estd'].$_GET['logo'].$_GET['description'].$_GET['email'].$result;
    }
    $db->databaseClose();
?>