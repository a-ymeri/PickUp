
    <?php
    require_once('database.php');

    $conn = db_connect();

    $firstname = $_POST['uname'];
    $pass = $_POST['psw'];


    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username =  $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $userpassword = $_POST['psw2'];
    $email = $_POST['email'];

    $pdo = new PDO('mysql:host=localhost;dbname=cwtest1', 'learta', '123');


    $query = "INSERT INTO user (username, fname,lname,email,password) 
VALUES(?, ?,?,?,?);";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $fname, $lname, $email, $userpassword]);


    require_once('query_auth.php');

    if(verify_user($username,$userpassword)){
        $_SESSION['username'] = $username;
        echo "<script> window.location.replace('index.php');</script>";

    }

 else {
        echo "<script>alert('Something went wrong);</script>";
    }


    $conn->close();
    ?>