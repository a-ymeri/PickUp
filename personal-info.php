<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />-->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="loginstyle.css">
         <link rel="stylesheet" href="personal-infostyle.css">
        
        
        <title>COURSEWORK</title>
        
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="normalize.css"> -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="accountstyle.css">

        
        
        

    </head>
    <body>
        
        <nav>
             
            <div class ="logo">
              PICK-UP
            </div>
            
            
            
        <ul class = "nav-links">
            <li> <a href = "index.php"> Home</a></li>
            <li> <a href = "Map.html"> Map</a></li>
            <li> <a href = "about.html"> About</a></li>
            <li> <a href = "#"> Entertaiment</a></li>
        </ul>
            
            <div class="burger">
                <div class= "line1"></div>
                <div class= "line2"></div>
                <div class= "line3"></div>
            
            </div>

            

        </nav>
        
        
        
<!--            <img src="AR_Ausbau1024a.jpg" class="AR">-->

<div class='accontainer'>
</br>
</br>
    <?php 
    
  require_once('authenticate.php');
 $u = get_username();
 
 echo (isset($_SESSION['username']) ?  "<img class='circular--square' src='images/$u.jpg'style=' position: relative;
  width: 100px;
  height:100px;
  overflow: hidden;
  border-radius: 50%; margin-top:2%;'>" :  "<img class='circular--square' src='images/avatar.png' style='margin-top:2%;'>");
      ?>
    
    <br>
      <h1><?php echo (isset($_SESSION['username']) ? $_SESSION['username'] : ""); ?></h1>  
      <?php  

  echo (isset($_SESSION['username']) ? "<a href = 'logout.php'><button class='logoutbutton'> Logout</button></a>" : "");

?>


<form enctype="multipart/form-data" action="upload.php" method="POST" class="changepic">
    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
    Change profile picture
    <input name="userfile" type="file" />
   <input type="submit" value="Send File" class="sendfile"></input>
</form>

    
<p>Name:<l class="l"> <?php   require_once('query_auth.php');  $name = get_name($_SESSION['username']);  echo (isset($_SESSION['username']) ? "$name" : "");?></l></p><br>
    <p>Email:<l class="l"> <?php   require_once('query_auth.php');  $email = get_email($_SESSION['username']);  echo (isset($_SESSION['username']) ? "$email" : "");?></l></p><br>
    <p>Username: <l class="l"> <?php  echo (isset($_SESSION['username']) ? $_SESSION['username'] : "");?></l></p><br>
    <p>Password: <l class="l">**********</l></p>

    </div>





<div id="id01" class="modal">
  
    <form class="modal-content animate" action="action.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="images/avatar.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required class="uname">
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required class="password">
          
        <button type="submit" class="logsubmit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  
      
        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span> -->
      
    </form>
  </div>
  

        </div>          
       
          
    
        

<!-- <footer>
    <div class="foot">
   
    </div>
    

        
        </footer> -->
       

<script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>


<script src = "index.js" ></script>

<script>
</script>

 </body>
    
   
</html>

 