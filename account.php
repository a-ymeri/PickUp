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
    
   


    <title>COURSEWORK</title>

    <script src="https://use.fontawesome.com/a31a0bdd36.js"></script>

    <script src="https://kit.fontawesome.com/d0528b62e3.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="personal-infostyle.css">
    <link rel="stylesheet" href="section-sidebar.css">
    <link rel="stylesheet" href="radio.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
    
    <link rel="stylesheet/less" type="text/css" href="idk.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />


    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />


    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script> -->

   <!-- <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


    <title>COURSEWORK</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!--<link rel="stylesheet" href="radio.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="section-sidebar.css">
    <link rel="stylesheet" href="personal-infostyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->



</head>

<body>

    <nav>

        <div class="logo">
            <a href="landing.php" class="logolink"> <img src="images/logo.png"> </a>

        </div>

        <div class="search-bar">
            <form method="post" action="search.php" class="search">
                
                <input type="text" placeholder="Search.." name="searchbar" onkeydown="search(this)">
            </form>
        </div>



        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>



        </div>



    </nav>

 



  

    <div class="indexcontainer">
        
        
        
        
        <div class="section-sidebar">
            <br>

            <!-- this button is serves as a login button or account button based on php user session -->


            <section class="stealthy-scroll-container">




                <ul class="sidebar-nav">


                    
                    <a href="landing.php">
                        <li>
                            <i class="fas fa-home"></i> 
                            <p>Home</p>
                        
                        </li>
                    
                    </a>

                    <a href="#">
                        <li>
                            <i class="fas fa-bell"></i>
                            <p>Notifications</p>

                        </li>
                    </a>

                    <a href="bookmark.php">
                        <li>
                            <i class="fas fa-bookmark"></i>
                            <p>Bookmarks</p>

                        </li>
                    </a>
                    <a href="Map.php">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Map</p>
                        
                        </li>
                    </a>
                    
                    <a href="account.php">
                        
                        <li class="profile">
                            <?php
                        require_once('authenticate.php');
                        $u = get_username();
                        echo (isset($_SESSION['username']) ?  "<img class='circular--square' src='images/$u.jpg' style='
                            width: 70px;
                            height:70px;
                            overflow: hidden;
                            border-radius: 50%; margin-top:2%;margin-left:5px; margin-right: 10px;'>" : "");
                        ?>
                            <p class="prof" style="color: rgb(82, 227, 77);">Profile</p>
                        </li>
                    </a>

                    <a href="settings.php">
                        <li>
                            <i class="fas fa-user-cog"></i>
                            <p>Settings and Privacy</p>

                        </li>

                    </a>
                    

                    

                </ul>
                <?php
                echo "<a href = 'logout.php'><button class='sslogout'> Logout</button></a>";
                ?>


            </section>


            <!--                    This is the end of the section sidebar-->
            <!------------------- --------------------------------------------------------------------------------------->
        </div>

        <div class="index-account">

            <?php

        require_once('authenticate.php');
        $u = get_username();

        echo (isset($_SESSION['username']) ?  "<div class='personal-container'>
        <div class='avatar-upload'>
            <div class='avatar-edit'>
                <input type='file' id='imageUpload' accept='.png, .jpg, .jpeg' />
                <label for='imageUpload' id = 'edit-label'></label>
            </div>
            <div class='avatar-preview'>
                <div id='imagePreview' style='background-image: url(images/$u.jpg);'>
                </div>
            </div>
        </div>
    </div>" :  "<img class='circular--square' src='images/avatar.png' style='margin-top:2%;'>");
        ?>

        <h1><?php echo (isset($_SESSION['username']) ? $_SESSION['username'] : ""); ?></h1>
        
            <br>
            <br>
        <button class="btn1">Your Events</button>
        <button class="btn2">Joined Events</button>
            
            <div class="your-events">
                <p>These are your events</p>
            </div>
            <div class="joined-events">
                <p>These are joined events</p>
            </div>

        </div>
    </div>
     
    <script>
        document.querySelector(".btn1").addEventListener("click", function(){
        document.querySelector(".your-events").style.display = "block";
        document.querySelector(".joined-events").style.display = "none";
        });
        
        document.querySelector(".btn2").addEventListener("click", function(){
        document.querySelector(".joined-events").style.display = "block";
        document.querySelector(".your-events").style.display = "none";
        });
    
    </script>
    
    
    
    <script>
        function changeButton(button){
            button.innerHTML = "Joined!";
            button.style.hover = "false";
            button.style.disabled = "true";
            button.style.backgroundColor= "#2bba75";
        }
        function changeButton1(button){
            button.innerHTML = "Bookmarked!";
            button.style.hover = "false";
            button.style.disabled = "true";
            button.style.backgroundColor= "#2bba75";
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB07Drl0GKvcqjGeHy6W_U0XXsMzR7tMEs&callback=initMap" type="text/javascript"></script>
    <script src="Map.js"></script>
    <script>
        //$event is a variable used earlier to store the list of all events from the DB
        //These 4 lines convert the event array to json and assign it to a JS array "eventArray"
        eventArray = <?php require_once('query_auth.php');

                        $php_array = array();
                        $php_array = $event;
                        echo json_encode($php_array); ?>;

        for (let i = 0; i < eventArray.length; i++) {
            //Geolocate each event using jquery and geolocation api.
            $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?latlng=' + eventArray[i].lat + ',' + eventArray[i].lng +
                '&key=AIzaSyDqe2RY-PDPAopRRejPnD2uKibuvjsEKjM',
                function(data) {
                    //use the json result and take only the address from it. Change the event spans to have the addresses.
                    document.getElementsByClassName("events")[i].innerHTML = data.results[0].formatted_address;
                });
        }
    </script>




    <!--

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



    <script>
        function showDiv() {
            //Toggle the map option when selecting event location
            document.getElementById('map').style.display = "block";
            document.getElementById('budget-4id').style.display = "none";
        }

        function removeDiv() {
            document.getElementById('map').style.display = "none";
            document.getElementById('budget-4id').style.display = "block";
        }
    </script>


    <script src="index.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            //checks if passwords are the same
            $("#signupButton1").click(function() {
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



   

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB07Drl0GKvcqjGeHy6W_U0XXsMzR7tMEs&callback=initMap" type="text/javascript">
    </script>



    <script>
        function thisfn() {
            var eventpost = document.querySelector('.postsection');
            var eventoption = document.getElementById('eventoption');
            const date_picker_element = document.querySelector('.date-picker');
            const date_selected = document.querySelector('.selected-date');

            // alert(event_content);
            date_picker_element.style.display = "block";
            eventoption.style.display = 'block';
            event_content.style.display = "block";
            eventpost.classList.toggle('eventpost-active');
            eventoption.classList.toggle('eventoption-active');
        }
    </script>


    <script src="date-js.js"></script>

   

    <script>
        function popEvent() {


            //var eventbutton = document.getElementById('eventbutton');
            var modal2 = document.getElementById('id02');

            modal2.style.display = "block";



            window.onclick = function(event) {
                if (event.target == modal2) {
                    modal2.style.display = "none";

                }
            }
        }
    </script>

    <script>
        function popInfo() {
            //var events = document.getElementById('events');
            var view = document.getElementById('viewMore');

            view.style.display = "block";

            window.onclick = function(event) {
                if (event.target == view || event.target == document.querySelector(".button1")) {
                    console.log("worked");
                    view.style.display = "none";
                }
            }
        }
    </script>

  
    <script src="datedropper.pro.min.js">


    </script>



    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <meta name="google-signin-client_id" content="991209987037-ai24ultf2fv5i9up0kiiv1bmjik38hho.apps.googleusercontent.com">



    <script>
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        var l = document.getElementById("date1");

        l.value = m + "/" + d + "/" + y;


        $("#date1").dateDropper({});
    </script>





    <script type="text/javascript">
       $(document).ready(function(){
        $('.button').click(function(){
            var clickBtnValue = $(this).val();
            var ajaxurl = 'ajax.php',
            data =  {'action': clickBtnValue};
            $.post(ajaxurl, data, function (response) {
                // Response div goes here.
                //alert("action performed successfully");
            });
        });
    });
    
    </script>






    <script>
        //Handles the event form time. Also adds a time graphic on the side that updates based on the time that was input.
        document.querySelector("#time").addEventListener("input", function(e) {
            const reTime = /^([0-1][0-9]|2[0-3]):[0-5][0-9]$/;
            const time = this.value;
            if (reTime.exec(time)) {
                const minute = Number(time.substring(3, 5));
                const hour = Number(time.substring(0, 2)) % 12 + (minute / 60);
                this.style.backgroundImage =
                    `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='none' stroke='%23222' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><circle cx='20' cy='20' r='2' fill='%23222' stroke='%23222' stroke-width='2' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,4 20.5,4 21.5,24.5 Z' fill='%23222' style='transform:rotate(${360 * minute / 60}deg); transform-origin: 50% 50%;' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,8.5 20.5,8.5 21.5,24.5 Z' style='transform:rotate(${360 * hour / 12}deg); transform-origin: 50% 50%;' /></svg>")`;
            }
        });
    </script>

    <script>
        function search(keyword) {
            if (event.key === 'Enter') {
                submitFunction();
            }
        }
    </script>



</body>

</html>