
    <?php

    $firstname = $_POST['uname'];
    $pass = $_POST['psw'];


    echo "<BR>";
    echo "USERNAME: " . $firstname . "<BR>";
    echo "PASSWORD: " . $pass . "<BR>";



    $servername = "localhost";
    $username = "memli1";
    $password = "3591";
    $dbname = "cwtest";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully   <BR>";

    $pdo = new PDO('mysql:host=localhost;dbname=cwtest', $username, $password);

    $username =  $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $userpassword = $_POST['psw2'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (username, fname,lname,email,password) 
VALUES(?, ?,?,?,?);";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $fname, $lname, $email, $userpassword]);



    $sql = "SELECT username,password FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $usr = $row["username"];

            $psw = $row["password"];

            if ($username == $usr && $userpassword == $psw) {

                // echo "THIS USER IS IN THE DATABASE AND PASS MATCHES";
                header('Location: account.html');

                break;
            }
        }
    } else {
        // echo "0 results";
    }



    $_SESSION['username'] = $username;




    $conn->close();
    ?>