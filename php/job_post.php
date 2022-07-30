<?php
    session_start();

    require_once ("database_run.php");
    $db = new Database();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $type = $_POST['type'];
        $deadline = $_POST['deadline'];
        $description = $_POST['description'];
        $requirements = $_POST['requirements'];
        $recruiter = $_POST['recruiter'];
        $email = $_POST['email'];
        
        // all for unique id
        $title_arr = explode(' ', trim($title));
        $id_title = '';
        foreach($title_arr as $arr){
            echo $arr;
            $id_title.=$arr[0];
        }
        $id = ''.$id_title.''.count($title_arr);

        $result = $db->checkJobIds($id);
        
        $count = mysqli_num_rows($result);
        $id.=$count;
        // unique id created

        $employer_info = $db->getCurrentEmployerId();
        $employer_id = mysqli_fetch_row($employer_info);
        $query = $db->postJob($id,$title,$category,$type,$deadline,$description,$requirements,$recruiter,$email,$employer_id[0]);
      
        echo $query;
        $db->databaseClose();
    }
    exit;
?>