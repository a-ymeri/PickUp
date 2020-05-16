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
    

    //used in index to upload poster LJ01 
    //var_dump($_FILES['picfile']['name']);
    // if(isset($_FILES['file'])){
        $errors= array();
        $file_name = $_FILES['picfile']['name'];
        $fileTmpName = (explode('.', $file_name));
        $file_size =$_FILES['picfile']['size'];
        $file_tmp =$_FILES['picfile']['tmp_name'];
        $file_type=$_FILES['picfile']['type'];

        $file_ext = strtolower(end($fileTmpName));

        //lets you upload the same file may times
        $fileNameNew = uniqid('', true) . "." . $file_ext;
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 10000000){
            $errors[]='File size is to big';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$fileNameNew );
           //echo "Successfully uploaded";
        }else{
           print_r($errors);
        }
    // }


     require_once('query_auth.php');

     insert_event($datefinal,$time,$title,0,0);

    echo '<script>location.replace("index.php");</script>';

?>