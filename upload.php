<?php
        if(isset($_POST['submit'])){
            $file = $_FILES['file'];

            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            //Might need to limit size: $fileSize = $_FILES['file']['size'];
            //Might need for error-checking: $fileError = $_FILES['file']['error'];
            //IDK $fileType = $_FILES['file']['type'];
            
            //Retrieve the part after the '.' (extension)
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            //Allowed formats
            $allowed = array('jpg', 'jpeg', 'bmp', 'png');
            
            if(in_array($fileActualExt, $allowed)){
                    //Instead of test, use get_username from the session.
                    $fileNameNew = "get_username()".".".$fileActualExt;
                    $fileDestination = 'images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    
                    //Go back to the site that called upload.php
                    header("location:".$_SERVER['HTTP_REFERER']);
                    //Testing purposes
                    //echo '<img src="images/'.$fileNameNew.'">';
            }
            else{
                echo "Inappropriate format";
            }
        }
?>