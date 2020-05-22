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
    <link rel="stylesheet" href="date-picker.css">

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />


    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />


    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script> -->

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


    <title>COURSEWORK</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <link rel="stylesheet" href="radio.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="section-sidebar.css">
    <link rel="stylesheet" href="post-Event.css">
    <link rel="stylesheet" href="pagination.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



</head>

<body>

    <nav>

        <div class="logo">
            <a href="landing.php" class="logolink"> <img src="images/logo.png"> </a>

        </div>

        <div class="search-bar">
            <i class="fa fa-search"></i>
            <form method="post" action="search.php">
                <input type="search" placeholder="Search" name="searchbar" onkeydown="search(this)">
            </form>
        </div>

        <ul class="nav-links">
            <li> <a href="#"> Feed</a></li>
            <li> <a href="Map.php"> Map</a></li>
            <!-- <li> <a href="about.html"> About</a></li>
            <li> <a href="#"> Entertaiment</a></li> -->
        </ul>


        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>



        </div>



    </nav>




    <div id="id01" class="modal">

        <form class="modal-content animate" action="ajax.php" onsubmit="return do_login();">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/avatar.png" alt="Avatar" class="avatar">


            </div>

            <div class="container">

                <div class="g-signin2" data-onsuccess="onSignIn" id="googlebutton"></div>
                <label for="uname"><b>Username</b>
                </label>
                <input type="text" placeholder="Enter Username" name="uname" required class="uname" id="username">

                <div class="loader-wrapper">
                    <span class="loader"><span class="loader-inner"></span></span>
                </div>

                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" class="password" id="password">
                <h5 class="errorlabel"></h5>
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
                <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>

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
                <input type="email" placeholder="Your email" name="email" required class="signupemail" style="width:100%; height:50px; padding: 12px 20px;" required>

                <button type="submit" class="logsubmit" id="signupButton1" onclick="return Validate()">Sign up</button>
                <br>
                <br>
            </div>
        </form>

    </div>



    <!--
                                            HERE the MODAL(login/signup) ends
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-->


    <div class="indexcontainer">

        <div class="section-sidebar">
            <br>

            <!-- this button is serves as a login button or account button based on php user session -->
            <?php

            require_once('authenticate.php');
            $u = get_username();

            //"<a href = 'account.php'> <button style='width:auto;' 
            //class='greenbtn'> $u </button> </a>"

            //this determines when to display the signup button and when to display the user photo
            echo (isset($_SESSION['username']) ?  "" : " <button id ='login-accountbutton' style='width:auto;' 
                        class='greenbtn'>  Login</button>");  ?>

            <?php
            require_once('authenticate.php');
            $u = get_username();
            echo (isset($_SESSION['username']) ?  "<a href ='account.php'><img class='circular--square' src='images/$u.jpg' style='position: relative;
                width: 70px;
                height:70px;
                overflow: hidden;
                border-radius: 50%; margin-top:2%;margin-left:13%;'></a>" : "");
            ?>


            <section class="stealthy-scroll-container">




                <ul class="sidebar-nav">



                    <a href="account.php">
                        <li>

                            <i class="thumbnail">

                            </i>
                            Profile
                        </li>
                    </a>

                    <a href="#">
                        <li>

                            <i class="thumbnail">

                            </i>

                            Notifications

                        </li>
                    </a>

                    <a href="bookmark.php">
                        <li>

                            <i class="thumbnail">

                            </i>

                            Bookmarks

                        </li>
                    </a>

                    <a href="settings.php">
                        <li>

                            <i class="thumbnail">

                            </i>

                            Settings and Privacy

                        </li>

                    </a>

                    <a>

                        <li> Display</li>

                    </a>

                </ul>
                <?php
                echo "<a href = 'logout.php'><button class='sslogout'> Logout</button></a>";
                ?>


            </section>


            <!--                    This is the end of the section sidebar-->
            <!------------------- --------------------------------------------------------------------------------------->
        </div>

        <div class="indexfeed">


            <!-- <div class="search-bar">
                <i class="fa fa-search"></i>
                <form method="post" action="search.php">
                    <input type="search" placeholder="Search" name="searchbar" onkeydown="search(this)">
                </form>
            </div> -->

            <!-- <div id="map"></div> -->


            <!-- <h1>Event Feed</h1> -->
            <br>
            <div id="eventbutton" onclick="popEvent()">
                <header style="font-size:large;">Host new event</header>
                <!-- <input placeholder="Title" id="title1" name="title" autocomplete="off"></input> -->

            </div>


            <div class="eventfeed " id="id02">
                <!-- used to be postsection1, changed bc the css is causing me problems -->
                <section class="postsection1">

                    <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
                    <form action="post-Event.php" method="POST" enctype="multipart/form-data" class="event-content animate" autocomplete="off">



                        <div class="text">

                            <header style="font-size:large;">Post a new event</header> <br>
                            <input placeholder="Title" id="title" name="title" required></input>

                        </div>
                        <div class="date-picker"> </div>

                        <label for="time" name="time">Start Time</label>
                        <input type="time" name="time" id="time" />
                        <!-- <input class="bridgePHP" value='MEMLI'></input> -->

                        <div id="eventoption">

                            <input type="text" id="date1" name="date" value="" style="width:50%;">
                            <h4>Select a Facility</h4>

                            <div class="venueOptions">

                                <input class="checkbox-budget" type="radio" name="budget" id="budget-1" value="Sofou Building" onclick="removeDiv()" checked>
                                <label class="for-checkbox-budget" for="budget-1">
                                    <span data-hover="Sofou Building">Sofou Building</span>
                                </label>

                                <input class="checkbox-budget" type="radio" name="budget" id="budget-2" value="Warehouse" onclick="removeDiv()">
                                <label class="for-checkbox-budget" for="budget-2">
                                    <span data-hover="Warehouse">Warehouse</span>
                                </label>

                                <input class="checkbox-budget" type="radio" name="budget" id="budget-3" value="YMCA" onclick="removeDiv()">
                                <label class="for-checkbox-budget" for="budget-3">
                                    <span data-hover="YMCA">YMCA</span>
                                </label>

                                <div id="budget-4id">
                                    <input class="checkbox-budget" type="radio" name="budget" id="budget-4" value="Other" onclick="showDiv()">
                                    <label class="for-checkbox-budget" for="budget-4">
                                        <span data-hover="Other">Other</span>
                                    </label>
                                </div>
                                <div id="map" style="display:none"></div>



                            </div>




                        </div>
                        <div class="evetDscp">
                            <h5>Event Description</h5>
                            <input type="text" name="eventDescription">
                        </div>


                        <input type="file" name="picfile">
                        <!-- <button type="submit" name="submit">Upload Event Poster</button> -->

                        <!-- Submit form -->
                        <input type="submit" value="post" id="postsectionsubmit" />

                        <!-- <div id="poster" style="display: none">
                            <input type="file" name="picfile">
                        </div> -->



                    </form>



                </section>
            </div>
            <script>

            function hashtag(text){
                var repl = text.replace(/#(\w+)/g, '<a class="nonevent" href="?str=$1">#$1</a>');
                return repl;
            }

            </script>
            <!-- --------------------------TEST FOR EVENT POPUPP------------------------------------ -->
            <div id="events">


                <?php
                require_once('query_auth.php');
                $event;
                if(isset($_GET['str'])){
                    $event = getHashtagEvents();
                }else{
                    $event = get_AllEvents();
                }

                for ($x = 0; $x < sizeof($event); $x++) {

                    $id = $event[$x]->get_eventid();
                    $dscp = $event[$x]->get_description();
                    $pic = 'uploads/' . $id . '.jpg';

                    echo
                        '<div class="eventtest ' . $x . '" id="eventtest ' . $x . '">
                                <section class="postsection" onclick="popInfo()">
                                <h1 style="color:#0077CC;">
                                    ' . $event[$x]->get_title() . '
                                </h1> 
                                <p>' . $date = $event[$x]->get_date() . '</p>
                                
                                    Time: ' . $event[$x]->get_time() . '
                                    <br>
                                    Location: <span class="events"></span> 
                                    
                                    
                                
                                ' . choosePic($pic, $id) . '<br>' . '<script>document.write(hashtag("' . $dscp . '"))</script>'  . '
                                
                                <button type="submit" class="button1 nonevent" id="' . $id . '" name="join" value="join ' . $id . '" onclick="changeButton(this)">Join</button>
                                <button type="submit" class="button1 nonevent" id="b' . $id . '" name="join" value="bookmark ' . $id . '" onclick="changeButton(this)">Bookmark</button>
                                </section>
                            </div>';
                }


                function choosePic($pic, $id)
                {
                    if (file_exists($pic)) {
                        return '<img src="uploads/' . $id . '.jpg" style= "width: 70px;
                            height:70px; float=left">';
                    } else
                        return '<img src="images/eventpic.jpg" style= "width: 70px"
                         height:70px>';
                }


                ?>
            </div>

            <div class="paginationList">
                <ul class="pagination">
                    <li>
                        <a id="previous-page" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="viewMore" class="eventfeed">
                <!-- this is where we put info on events-->
                <section class="postsection1">
                    <P> TEST </P>
                </section>
            </div>
            <!-- ----------------------------end of INDEXFEED------------------------------------------------------------------------->

        </div>
    </div>

    <script src="pagination.js"></script>

    <script>
        var postsection = document.querySelectorAll(".postsection");

        for (var i = 0; i < postsection.length; i++) {
            postsection[i].addEventListener("click", function event(event) {
                popInfo();
            });
        }

        var joinBookmarkButtons = document.querySelectorAll(".nonevent");
        for (var i = 0; i < joinBookmarkButtons.length; i++) {
            joinBookmarkButtons[i].addEventListener("click", function nonevent(event) {
                event.stopPropagation();
                changeButton(this);
            });
        }




        function changeButton(button) {
            if (button.innerHTML == "Join") {
                button.innerHTML = "joined!";
            } else if (button.innerHTML == "Bookmark") {
                button.innerHTML = "bookmarked!";
            }
            //button.style.hover = "false";
            //button.style.disabled = "true";
        }
    </script>


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

    <script>
        hasJoined = <?php require_once('query_auth.php');
                    //$joinedArray = array();
                    $joinedArray = get_UserEvents();
                    echo json_encode($joinedArray); ?>;
        hasBookmarked = <?php require_once('query_auth.php');
                        //$bookmarkArray = array();
                        $bookmarkArray = getBookmarks();
                        echo json_encode($bookmarkArray); ?>;

        for (i = 0; i < hasJoined.length; i++) {
            if (document.getElementById(hasJoined[i].event_id) != null)
                changeButton(document.getElementById(hasJoined[i].event_id));
        }
        console.log(hasBookmarked.length);
        for (i = 0; i < hasBookmarked.length; i++) {
            //if(document.getElementById("b"+hasBookmarked[i])==null)
            if (document.getElementById("b" + hasBookmarked[i].event_id) != null)
                changeButton(document.getElementById("b" + hasBookmarked[i].event_id));
        }
    </script>


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

    <!-- <script>
    var button = document.getElementById('login-accountbutton');
    var modal = document.getElementById('id01');


    button.addEventListener('click', () => {

        modal.style.display = "block";

    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script> -->

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
                if (event.target == view) {
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
        $(document).ready(function() {
            $('.button1').click(function() {
                var clickBtnValue = $(this).val();
                var ajaxurl = 'ajax.php',
                    data = {
                        'action': clickBtnValue
                    };
                $.post(ajaxurl, data, function(response) {
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