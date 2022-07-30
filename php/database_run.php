<?php

    class Database{
        private $db;

        function __construct() {
            $this->db = mysqli_connect('localhost','root', '', 'job_portal');
        }

        function getCredentialDatasOfGivenEmail($email){
            $sql = "SELECT * FROM login WHERE email='".$email."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }


        function signInUser($email,$name,$password,$employer,$token){
            $sql = "INSERT INTO login(email,name,password,employer,token) values('".$email."','".$name."','".$password."','".$employer."','".$token."')";
            
            $result = mysqli_query($this->db,$sql);
            return $result;
        }

        function getUserVerificationStatusForGivenToken($email,$token){
            $sql = "SELECT verified, name, employer, email FROM login WHERE email='".$email."' and token='".$token."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        function setVerifiedUser($email){
            $sql = "UPDATE login SET verified=true WHERE email='".$email."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        function updateTokenForUser($token,$email){
            $sql = "UPDATE login SET token='".$token."' WHERE email='".$email."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        function userExistsForEmployerStatus($email,$employer){
            $sql = "SELECT * FROM login WHERE email='".$email."' && employer=".$employer;
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        function getVerifyStatusForUserCredentials($email,$password){
            $sql = "SELECT verified, name FROM login WHERE email='".$email."' and password='".$password."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        function checkUserFormDetails($employer,$email){
            $sql="";
            if($employer == '1'){
                $sql = "SELECT * FROM employer WHERE email='".$email."'";
            }else{
                $sql = "SELECT * FROM employee WHERE email='".$email."'";
            }
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        function addEmployerDetails($id,$name,$address,$contact,$date,$companyDescription,$image,$email){
            $sql = "INSERT INTO employer(employer_id,name,address,contact,estd,logo,description,email) values('".$id."','".$name."','".$address."','".$contact."','".$date."','".$image."','".$companyDescription."','".$email."')";
            
            $result = mysqli_query($this->db,$sql);
            return $result;
        }
        
        function checkEmployerIds($id){
            $sql = "SELECT * FROM employer WHERE employer_id LIKE'".$id."%'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        function getEmployerDetails($email){
            $sql = "SELECT * FROM employer WHERE email='".$email."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        function editEmployerDetails($name,$address,$contact,$estd,$logo,$description,$email){
            $sql = "UPDATE employer SET name=".$name.", address=".$address.", contact=".$contact.", estd=".$estd.", logo=".$logo.", description=".$description." WHERE email=".$email."";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        function checkJobIds($id){
            $sql = "SELECT * FROM job WHERE job_id LIKE'".$id."%'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        function postJob($id,$title,$category,$type,$deadline,$description,$requirements,$recruiter,$email,$employer_id){
            $insert = "INSERT INTO job VALUES ('".$id."','".$title."','".$category."','".$type."','".$deadline."','".$description."','".$requirements."','".$recruiter."','".$email."','".$employer_id."')";
    
            $result = mysqli_query($this->db,$insert);
            return $result;
        }

        function getCurrentEmployerId(){
            $sql = "SELECT employer_id FROM employer WHERE email='".$_SESSION['email']."'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        function getJobsList(){
            $data=[];
            $sql = "SELECT * FROM job";
            $result = mysqli_query($this->db, $sql);
            
            while($rows = $result->fetch_assoc()){
               array_push($data,$rows);
            }
            return json_encode($data);
        }

        function databaseClose(){
            $this->db->close();
        }
    }