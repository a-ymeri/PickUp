<?php 


require_once('init.php');
require_once('authenticate.php');

if(isset($_POST['do_login'])){

    $username = $_POST['username'];
    $pass = $_POST['password'];

    if(usr_log_in($username,$pass)){

        echo 1;
    }


    else{

        echo 2;

    }

    exit();

}

?>