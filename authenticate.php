<?php
require_once('init.php');
require_once('database.php');
require_once('query_auth.php');

function usr_log_in($username,$password){
            if (verify_user($username,$password)) {
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }

    

    else{
        if(!verify_user($username,$password)){
            echo "<script> alert('wrong password dude')</script>";

        }
    }
}



function get_username(){

    if(isset($_SESSION['username'])){
        $u = $_SESSION['username'];
        return $u;
    }

    else{
        return 'avatar';
    }
}




?>
