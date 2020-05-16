<?php 

    $title  = $_POST['title'];

    $location= $_POST['budget'];

    $date = $_POST['date'];

    $time = $_POST['time'];


    //Which radio option was picked
    if($location == "Library"){
        $lat = 40.6401;
        $lng = 22.9444;
    }else if($location == "YMCA"){
        $lat =40.626573;
        $lng = 22.951844;
    }else if($location == "Warehouse"){
        $lat =40.634825;
        $lng = 22.934286;
    }


    // $date =  str_replace("/","-",$date);


    $date1=date_create($date);
    $l = date_format($date1,"Y/m/d");
    $datefinal =  str_replace("/","-",$l);
 
     //echo $datefinal;


     require_once('query_auth.php');

     insert_event($datefinal,$time,$title,$lat, $lng);



     echo '<script>location.replace("index.php");</script>'



    



?>