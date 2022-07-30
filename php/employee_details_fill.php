<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        
        $description = $_POST['description'];
        $requirements = $_POST['requirements'];
        $recruiter = $_POST['recruiter'];
        $email = $_POST['email'];
        
        // all for unique id
        $title_arr = explode(' ', trim($title));
        $id_title = '';
        foreach($title_arr as $arr){
            $id_title.=$arr[0];
        }
        $id = ''.$id_title.''.count($title_arr);

        $sql = "SELECT * FROM job WHERE Job_Id LIKE'".$id."%'";

        $db = mysqli_connect('localhost','root', '', 'job_portal');
        // $mysqli_connection = new mysqli("localhost", "root", "", "job");
        // $result = $mysqli_connection->query($sql);
        $result = mysqli_query($db, $sql);
        
        $count = mysqli_num_rows($result);
        // $row = $result->fetch_row();
        $id.=$count;
        // unique id created
        

        // creating folder and writing in files
        $folder = 'F'.$id;
        
        if(!is_dir('Employers_data/'.$folder)){
            mkdir('Employers_data/'.$folder);
            $folder = 'Employers_data/'.$folder;
        }

        $requirements_file = $folder.'/rq.txt';
        $req = fopen($requirements_file,"w");
        if ($req) {
            fwrite ($req, $requirements);
            fclose ($req);
        }
        
        $description_file = $folder.'/des.txt';
        $des = fopen($description_file,"w");
        if ($des) {
            fwrite ($des, $description);
            fclose ($des);
        }

        $insert = "INSERT INTO post_job VALUES ('".$id."','".$title."','".$category."','".$type."','".$deadline."','".$description_file."','".$requirements_file."','".$recruiter."','".$email."')";

    	  $query = mysqli_query($db,$insert);
      
        if($query) {
            // echo json_encode("Success");
        } 
        else {
            // echo json_encode("Error");
        }
        $db->close();
    }
    exit;
?>