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

<div class='accontainer' style="height:2000px;">
</br>
</br>

<?php 
    
    require_once('authenticate.php');
   $u = get_username();
   
   echo (isset($_SESSION['username']) ?  "<img class='circular--square' src='images/$u.jpg'style=' position: relative;
    width: 100px;
    height:100px;
    overflow: hidden;
    border-radius: 50%; margin-top:3%;'>" :  "<img class='circular--square' src='images/avatar.png' style='margin-top:2%;'>");
        ?>
      
      <br>
        <h1><?php echo (isset($_SESSION['username']) ? $_SESSION['username'] : ""); ?></h1>  
        <?php  
  
    echo (isset($_SESSION['username']) ? "<a href = 'logout.php'><button class='logoutbutton'> Logout</button></a>" : "");
  
  ?>
   

    <fieldset class="accountDetailsCard_formFieldset">
								<input type="hidden" name="csrf_token" value="24651548247506085110">
                                <legend class="accountDetailsCard_formLegend">Your Details</legend>
                                <br>

								<div class="accountDetailsCard_header_personalDetails">

								</div>

								
									
									
										<div class="accountDetailsCard_formRow">
                                            <label for="customerName" class="accountDetails-name">First name:*</label>
                                            <br>
                                            <input id="customerName" name="customerName" class="accountDetails-name" type="text"
                                             <?php  require_once('query_auth.php');
                                                     $u = get_name($_SESSION['username']);
                                                 echo (isset($_SESSION['username'])? "value='$u'": "" ); ?>>
											
												
											
                                        </div>
                                        


                                        <div class="accountDetailsCard_formRow">
                                            <label for="customerName" class="accountDetails-name">USERNAME:*</label>
                                            <br>
                                            <input id="customerName" name="customerName" class="accountDetails-name" type="text"
                                             <?php  require_once('authenticate.php');
                                                     $u = get_username();
                                                 echo (isset($_SESSION['username'])? "value='$u'": "" ); ?>>
											
												
											
										</div>
									
								

								<div class="accountDetailsCard_formRow">
                                    <label for="customerEmail" class="accountDetailsCard_formLabel">Email Address:*</label>
                                    <br>
                                    <input id="customerEmail" name="customerEmail" class="accountDetails-email" type="email" <?php
                                      require_once('query_auth.php');
                                                     $u = get_email($_SESSION['username']);
                                                 echo (isset($_SESSION['username'])? "value='$u'": "" ); ?>>
									
										
									
								</div>



									
								<div class="accountDetailsCard_formRow">
									<input type="hidden" name="presentSetId" value="1">
                                    <label for="mobileNumber" class="accountDetailsCard_formLabel">Mobile Number:</label>
                                    <br>
									<input id="mobileNumber" name="mobileNumber" class="accountDetails-number" placeholder="optional" type="text" value="OPTIONAL">
									
										
									
								</div>



								
									<!-- <div class="accountDetailsCard_formRow">
										<input type="hidden" name="presentSetId" value="1">
                                        <label for="dateOfBirth" class="accountDetailsCard_formLabel">Date Of Birth:</label>
                                        <br>
										<input id="dateOfBirth" name="dateOfBirth" class="sessioncamexclude accountDetailsCard_formField" placeholder="optional" type="date" value="">
										
											
										
									</div> -->
								

								<div class="accountDetailsCard_header_passwordDetails">
									<h2 class="accountDetailsCard_header_passwordDetails_title">
                                        Password Details</h2>
                                        <br>
								</div>

								<div class="accountDetailsCard_formRow">
                                    <label for="oldPassword" class="accountDetailsCard_formLabel">Current Password:*</label>
                                    <br>
									<input id="oldPassword" name="oldPassword" class="accountDetailsCard_formField" type="password" value="">
									
										
									
								</div>

									
								<div class="accountDetailsCard_formRow">
                                    <label for="newPassword" class="accountDetailsCard_formLabel">New Password:</label>
                                    <br>
									<input id="newPassword" name="newPassword" class="accountDetailsCard_formField" type="password" value="">
									
										
									
								</div>

								<div class="accountDetailsCard_formRow">
                                    <label for="confirmPassword" class="accountDetailsCard_formLabel">Confirm Password:</label>
                                    <br>
									<input id="confirmPassword" name="confirmPassword" class="accountDetailsCard_formField" type="password" value="">
									
										
									
								</div>


								<button type="submit" class="savechanges">
									Save Changes
								</button>

							</fieldset>
  

        </div>          
       
          
        </div>




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

 