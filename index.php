<?php 
session_start();
require_once('init.php');

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
        <link rel="stylesheet" href="section-sidebar.css">
        <link rel="stylesheet" href="date-picker.css">

        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
              integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
              crossorigin="" />


        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
                integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
                crossorigin=""></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
 

        <title>COURSEWORK</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="normalize.css"> -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet1" href="style.scss">




    </head>

    <body>

        <nav>

            <div class="logo">
                PICK-UP

            </div>



            <ul class="nav-links">
                <li> <a href="#"> Home</a></li>
                <li> <a href="Map.html"> Map</a></li>
                <li> <a href="about.html"> About</a></li>
                <li> <a href="#"> Entertaiment</a></li>
            </ul>


            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>



            </div>



        </nav>

        <div>

        
        </div>



        <div id="id01" class="modal">

            <form class="modal-content animate" action="action.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                          title="Close Modal">&times;</span>
                    <img src="images/avatar.png" alt="Avatar" class="avatar">


                </div>

                <div class="container">
                    <label for="uname"><b>Username</b>
                    </label>
                    <input type="text" placeholder="Enter Username" name="uname" required class="uname" id="username">

                    <label for="psw"><b>Password</b>
                    </label>
                    <input type="password" placeholder="Enter Password" name="psw" required class="password" id="password">

                    <button type="submit" class="logsubmit">Login</button>

                    <input type="checkbox" checked="checked" name="remember"> Remember me

                    <br>
                    <br> Not a member Yet ?

                    <button type="button" id="signupButton" title="Close Modal"> Signup</button>



                </div>
            </form>
        </div>


        <!-- ------------------------------------------------ -->


        <!-- <div id="signout" class="signuoutclass">

<form class="modal-content animate" action="action.php" method="post">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
              title="Close Modal">&times;</span>
              <a href= "account.php">
        <img src="images/avatar.png" alt="Avatar" class="avatar">
        </a>

        <button>Signout</button>


    </div>

    <div class="container">
        <label for="uname"><b>Username</b>
        </label>
        <button type="button" id="signupButton" title="Close Modal"> Signup</button>



    </div>
</form>
</div> -->




        <div id="signup" class="signupclass">

            <form class="modal-content animate" action="signup.php" method="post">

                <div class="imgcontainer">
                    <span onclick="document.getElementById('signup').style.display='none'" class="close"
                          title="Close Modal">&times;</span>

                </div>

                <div class="container">
                    Signup
                    <!-- <h1 style="margin-left: 35%;"> SIGN UP</h1> -->
                    <br>

                    <input type="text" placeholder="Enter first name" name="fname" required class="uname">
                    <input type="text" placeholder="Enter last name" name="lname" required class="uname">


                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required class="uname">

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="psw1" name="psw" required class="password">

                    <input type="password" placeholder="Re-enter Password" id="psw2" name="psw2" required class="password">
                    Email
                    <input type="email" placeholder="Your email" name="email" required class="password"
                           style="width:100%; height:50px;" required>

                    <button type="submit" class="logsubmit" id="signupButton1" onclick="return Validate()">Sign up</button>
                    <br>
                    <br>
                </div>
            </form>

        </div>



        <!--

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->


        <div class = "indexcontainer">

            <div class="section-sidebar">
                <br>

                <!-- this button is serves as a login button or account button based on php user session -->
            <?php 

require_once('authenticate.php');
$u = get_username();
            
            //"<a href = 'account.php'> <button style='width:auto;' 
            //class='greenbtn'> $u </button> </a>"

            //this determines when to display the signup button and when to display the user photo
            echo (isset($_SESSION['username']) ?  "": " <button id ='login-accountbutton' style='width:auto;' 
                        class='greenbtn'>  Login</button>");  ?>

 <?php 
    require_once('authenticate.php');
 $u = get_username();
 echo (isset($_SESSION['username']) ?  "<a href ='account.php'><img class='circular--square' src='images/$u.jpg'style=' position: relative;
  width: 70px;
  height:70px;
  overflow: hidden;
  border-radius: 50%; margin-top:2%;margin-left:13%;'></a>" : "");      
      ?>


                <section class ="stealthy-scroll-container">
                    
                        


                    <ul class="sidebar-nav">
                    
                        
                        
                     <a href = "<?php echo (isset($_SESSION['username']) ? "account.php" : "account.php"); ?>" > <li > 

                            <i class= "thumbnail">
                                
                            </i>
                            Profile
                            </li></a>
                        
                                              <a href = "#" > <li > 

                            <i class= "thumbnail">
                                
                            </i>

                            Feed

                            </li></a>
                        
                                              <a href = "#" > <li > 

                            <i class= "thumbnail">
                                
                            </i>

                            Events

                            </li></a>
                        
                                               <a href = "#" > <li > 

                            <i class= "thumbnail">
                                
                            </i>

                            Whatever

                            </li></a>
                        
                    </ul>   




                </section> 


<!--                    This is the end of the section sidebar-->
<!--            /---------------------------------------------------------------->
            </div>
            
            
            
            




            <div class="indexfeed">
                
                <!-- <div id="map"></div> -->



                
                <div class="eventfeed">
                    <section class="postsection" onclick="thisfn()">
                        <div class="text" >
                            <header style="font-size:large;">Post a new event</header>
                          <textarea placeholder="Title" id ="title"></textarea>

                          <div class="date-picker">
                            <div class="selected-date"></div>
                    
                            <div class="dates">
                                <div class="month">
                                    <div class="arrows prev-mth">&lt;</div>
                                    <div class="mth"></div>
                                    <div class="arrows next-mth">&gt;</div>
                                </div>
                    
                                <div class="days"></div>
                            </div>
                        </div>
                          
                            <div id="eventoption">

                                <header>Choose a facility</header>
                          <button>Warehouse</button>
                          <button>Library</button>
                          <button>YMCA</button>
                        </div>
                        

    
                        <input type="submit" value="post" />
                        
                        </div>
                      </section>



                

                
                
                </div>

                
            </div>
            
            
            
            
        
        </div>











        <!--

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->


        <!-- <footer>
            <div class="foot">

                This was made by memli,ardit,lola,learta

            </div>



        </footer> -->








        <script>



            const signup = document.getElementById('signupButton');

            signup.addEventListener('click', () => {
                var s = document.getElementById('signup');
                var modal = document.getElementById('id01');
                modal.style.display = "none";
                s.style.display = 'block';

            });
        </script>




        <script src="index.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#signupButton1").click(function () {
                    var passalert = document.getElementById('alert');
                    var password = $("#psw1").val();
                    var confirmPassword = $("#psw2").val();
                    if (password != confirmPassword) {
                        swal({
                            title: "Passwords do not match",
                            type: "error",
                            showConfirmButton: true,
                            showCancelButton: false,
                            customClass: "Custom_Cancel",
                            confirmButtonColor: "#DD6B55"
                        });
                        return false;
                    }
                    swal({
                        title: "Success",
                        type: "success",
                        showConfirmButton: false,
                        customClass: "success",
                        timer: 1500

                    });

                    return true;
                });
            });
        </script>


        <script>
            const mymap = L.map('mapid').setView([51.505, -0.09], 13);
            const attribution =
                  '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
            const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
            const tiles = L.tileLayer(tileUrl, { attribution });
            tiles.addTo(mymap);
            const marker = L.marker([51.505, -0.09], 13).addTo(mymap);
        </script>
        
        
        
        <script>

    function initMap(){
        var location = {lat: 40.6401, lng:22.9444};
        var library = {lat: 40.637350, lng:22.936904};

        var YMCA = {lat: 40.626573, lng:22.951844};

        var warehouse = {lat: 40.634825, lng:22.934286};
        var map = new google.maps.Map(document.getElementById("map"),{
            zoom:14,
            center: location
        });


        var librarymarker = new google.maps.Marker({
    position: library,
    map: map,
    title: 'library'
  });


  var warehousemarker = new google.maps.Marker({
    position: warehouse,
    map: map,
    title: 'Warehouse'
  }); 


  var ymcamarker = new google.maps.Marker({
    position: YMCA,
    map: map,
    title: 'YMCA    '
  });




    }



    </script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB07Drl0GKvcqjGeHy6W_U0XXsMzR7tMEs&callback=initMap"
type="text/javascript"></script>


<script>

    function thisfn(){
        var eventpost = document.getElementById('postsection');
        var eventoption = document.getElementById('eventoption');
        const date_picker_element = document.querySelector('.date-picker');
        console.log('post is clicked');

        eventoption.style.display = 'block';
        eventoption.classList.toggle('eventoption-active');
        date_picker_element.style.display = "block";
    }
</script>


<script src="date-js.js"></script>

<script>
var button = document.getElementById('login-accountbutton');
var modal = document.getElementById('id01');

button.addEventListener('click',() => {

    modal.style.display= "block";

    

});


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}

</script>



    </body>


</html>