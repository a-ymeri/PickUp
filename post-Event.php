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

     //var_dump($_FILES['picfile']['name']);
    // if(isset($_FILES['file'])){
        $errors= array();
        $file_name = $_FILES['picfile']['name'];
        $fileTmpName = (explode('.', $file_name));
        $file_size =$_FILES['picfile']['size'];
        $file_tmp =$_FILES['picfile']['tmp_name'];
        $file_type=$_FILES['picfile']['type'];
        $file_ext = strtolower(end($fileTmpName));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        // if($file_size > 2097152){
        //    $errors[]='File size must be excately 2 MB';
        // }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           echo "Success";
        }else{
           print_r($errors);
        }
    // }


     require_once('query_auth.php');

     insert_event($datefinal,$time,$title,0,0);

    //  echo '<script>location.replace("index.php");</script>';

?>