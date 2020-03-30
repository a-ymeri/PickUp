<?php
require_once('init.php');
require_once('authenticate.php');

    $firstname = $_POST['uname'];
    $pass = $_POST['psw'];
   usr_log_in($firstname,$pass);
    ?>