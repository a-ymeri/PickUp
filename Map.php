<!-- AY: TODO: Make uniform navbar for evert webpage-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />-->
    <meta name="apple-mobile-web-app-capable" content="yes" />


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
            <li> <a href="index.php"> Home</a></li>
            <li> <a href="#"> Map</a></li>
            <li> <a href="about.html"> About</a></li>
            <li> <a href="#"> Entertaiment</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>

        </div>

    </nav>



    <!--            <img src="AR_Ausbau1024a.jpg" class="AR">-->

    <div class='container'>



        <div id="map"></div>








        <div class="parallax">
            <div class="textparallax">




            </div>




        </div>
    </div>





    <footer>
        <div class="foot">

        </div>



    </footer>
    <script src="index.js"></script>


    <!--
        
        <script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "30px";
  } else {
      document.getElementById("header").style.fontSize = "15px";
  }
}
</script>
-->

<script src="Map.js"></script>
    <script>
        //populate JS array with the the events from the DB
        eventArray = <?php require_once('query_auth.php');
                    $php_array = array();
                    $php_array = get_AllEvents();
                    echo json_encode($php_array); ?>;
    </script>
    
    <script> getAddress();</script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB07Drl0GKvcqjGeHy6W_U0XXsMzR7tMEs&callback=initMap" type="text/javascript"></script>

    <script src="index.js"></script>

</body>


</html>