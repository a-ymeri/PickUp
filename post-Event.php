<?php 

   $title  = $_POST['title'];

    //IDK why this is named budget, TODO: reconsider changing name
   $location= $_POST['budget'];


   $date = $_POST['date'];


   $time = $_POST['time'];
   $lat = 0;
   $lng = 0;

   //give value to the event id here, we need to create it before posting because we need it for the pics.
   $id = rand(10, 200);

    // $date =  str_replace("/","-",$date);


   $date1=date_create($date);
   $l = date_format($date1,"Y/m/d");

   $dscp = $_POST['eventTxt'];

    

   $datefinal =  str_replace("/","-",$l);

   require_once('query_auth.php');
   
 
     //echo $datefinal;
    

    //used in index to upload poster LJ01 
    //var_dump($_FILES['picfile']['name']);
   if(isset($_FILES['picfile'])){
      $errors= array();
      $file_name = $_FILES['picfile']['name'];
      $fileTmpName = (explode('.', $file_name));
      $file_size =$_FILES['picfile']['size'];
      $file_tmp =$_FILES['picfile']['tmp_name'];
      $file_type=$_FILES['picfile']['type'];
      $name = addslashes($_FILES['picfile']['name']);

      $file_ext = strtolower(end($fileTmpName));

      //lets you upload the same file may times
      //$fileNameNew = uniqid('', true) . "." . $file_ext;
      //$event = get_event();
      //var_dump($event_id);
      $fileNameNew = $id . "." . "jpg";
      
      
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

      
   }

   


     //If user selected a static location, here are their LatLngs
     if($location == 'Sofou Building'){
        $lat = 40.637350;
        $lng = 22.936904;
     }else if($location == 'Warehouse'){
         $lat= 40.634825;
         $lng= 22.93428;
      }else if($location == 'YMCA'){
         $lat= 40.626573;
         $lng= 22.951844;

      }
      //TODO: cover the custom case as well
  
     insert_event($id,$datefinal,$time,$title,$lat,$lng,$dscp);


    echo '<script>location.replace("index.php");</script>';