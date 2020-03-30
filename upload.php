<?php

if (($_FILES['userfile']['name']!="")){
// Where the file is going to be stored
 $target_dir = "C:\xampp\htdocs\images";
 $file = $_FILES['userfile']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['userfile']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Sorry, file already exists.";
 }else{
 if(move_uploaded_file($temp_name,$path_filename_ext));
 echo "Congratulations! File Uploaded Successfully.";
 }
}

?>