<?php
    require_once ("database_run.php");

    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name= $_POST['name'];
        $address= $_POST['address'];
        $contact= $_POST['contact'];
        $date= $_POST['date'];
        $companyDescription= $_POST['companyDescription'];
        $image= $_POST['image'];
        $email= $_POST['email'];

        // database connection
        $db = new Database();

        // all for unique id
        $name_arr = explode(' ', trim($name));
        $id_name = '';
        foreach($name_arr as $arr){
            $id_name.=$arr[0];
        }
        $id = ''.$id_name.''.count($name_arr);

        $result = $db->checkEmployerIds($id);
        
        $count = mysqli_num_rows($result);
        $id.=$count;
                   
        $query = $db->addEmployerDetails($id,$name,$address,$contact,$date,$companyDescription,$image,$email);

        if($query){
            echo 1;
        }else{
            echo 0;
        }

        $db->databaseClose();
    }
    exit;
?>