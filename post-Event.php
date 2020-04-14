<?php 

    $title  = $_POST['title'];

    $location= $_POST['budget'];

    $date = $_POST['date'];

    $time = $_POST['time'];

    // $date =  str_replace("/","-",$date);


    $date1=date_create($date);
    $l = date_format($date1,"Y/m/d");

    

     $datefinal =  str_replace("/","-",$l);
 
     //echo $datefinal;


     require_once('query_auth.php');

     insert_event($datefinal,$time,$title,$location);



     echo '<script>location.replace("index.php");</script>'



    



?>