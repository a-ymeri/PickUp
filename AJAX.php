<?php 


require_once('init.php');
require_once('authenticate.php');
require_once('query_auth.php');

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

if (isset($_POST['action'])) {
    $button = explode(" ",$_POST['action']);
    switch($button[0]){
        case "join": 
            joinEvent($button[1]);
            exit();
            break;
        case "bookmark":
            bookmarkEvent($button[1]);
            exit();
            break;
    }
}

?>