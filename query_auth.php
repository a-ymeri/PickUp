<?php 
require_once('init.php');

function verify_user($username,$password){
    $conn = db_connect();
    $sql = "SELECT username,password FROM user";
    

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $usr = $row["username"];
            $psw = $row["password"];
            if ($username == $usr) {
                if($psw == $password){
                    $success = true;
                    echo 'They are correct';
                    return true;
                }
                else if ($psw != $password){
                    return false;
                }
                break;
            }
        }

    }

}


function get_name($username){

    $conn = db_connect();
   
    $sql = "SELECT fname FROM user WHERE username='". $username ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $usr = $row["fname"];
            return $usr;
        }

    }

}

function get_email($username){
    $conn = db_connect();
   
    $sql = "SELECT email FROM user WHERE username='". $username ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $email = $row["email"];
            return $email;
        }

    }
}


function get_password($username){
    $conn = db_connect();
   
    $sql = "SELECT password FROM user WHERE username='". $username ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $password = $row["password"];
            return $password;
        }

}
}







?>