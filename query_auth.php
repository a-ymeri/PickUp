<?php 
require_once('init.php');


function verify_user($username,$password){
    $conn = db_connect();
    $sql = "SELECT username,password FROM user";
    

    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $usr = $row["username"];
            $psw = $row["password"];
            if ($username == $usr) {
                if($psw == $password){
                    $success = true;
                    return true;
                }
                else{
                    return false;
                }
                break;
            }
        }

    }

}


function get_name($username){

    $conn = db_connect();
   
    $sql = "SELECT name FROM user WHERE username='". $username ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $usr = $row["name"];
            return $usr;
        }

    }

}

function get_email($username){
    $conn = db_connect();
   
    $sql = "SELECT email FROM user WHERE username='". $username ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $email = $row["email"];
            return $email;
        }

    }
}


function get_password($username){
    $conn = db_connect();
   
    $sql = "SELECT password FROM user WHERE username='". $username ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $password = $row["password"];
            return $password;
        }

}
}



function insert_event($date,$time,$title,$location){
    $conn = db_connect();
    $pdo = new PDO('mysql:host=localhost;dbname=cwtest1', 'learta', '123');

    $query = "INSERT INTO events (event_id , date_of_event, time_of_event, subject,max_users,duration_of_event,address) 
    VALUES(?,?,?,?,?,?,?);";
    $stmt = $pdo->prepare($query);

    $randomNumber = rand(10,200); 
    $stmt->execute([$randomNumber,$date, $time ,$title,4,$time,$location]);

}


function get_event(){
    $conn = db_connect();
    $sql = "SELECT * from events where event_id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $event_id = $row["event_id"];
            $date = $row["date_of_event"];
            $time = $row["time_of_event"];
            $title = $row["subject"];
            $location = $row["address"];
        }
        $event = new Event($event_id,$date,$time,$title,$location);
         //echo $event->get_title();
        return $event;
}
}

function get_eventbyID($eventid){
    $conn = db_connect();
    $sql = "SELECT * from events where event_id = ".$eventid."";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $event_id = $row["event_id"];
            $date = $row["date_of_event"];
            $time = $row["time_of_event"];
            $title = $row["subject"];
            $location = $row["address"];
        }
        $event = new Event($event_id,$date,$time,$title,$location);
        // echo $event->get_title();
        return $event;
}
}


function get_UserEvents(){
    $username = $_SESSION['username'];
    $conn = db_connect();
    $sql = "SELECT * from isin where username = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $event_ids = array();
        $events = array();
        //output data of each row
        for ($x = 0; $x < $result->num_rows; $x++) {
            $row = $result->fetch_assoc();
            $event_id = $row["event_id"];
            array_push($event_ids,$event_id);

            array_push($events,get_eventbyID($event_ids[$x]));
        }
        // $event = get_eventbyID($event_id);
         //echo $event->get_title();
        return $events;


    }
}

function get_AllEvents(){
    $conn = db_connect();
    $sql = "SELECT * from events ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $event_ids = array();
        $events = array();
        //output data of each row
        for ($x = 0; $x < $result->num_rows; $x++) {
            $row = $result->fetch_assoc();
            $event_id = $row["event_id"];
            array_push($event_ids,$event_id);

            array_push($events,get_eventbyID($event_ids[$x]));
        }
        // $event = get_eventbyID($event_id);
         //echo $event->get_title();
        return $events;


    }

}

function get_NumberOfUserEvents(){

    $username = $_SESSION['username'];
    $conn = db_connect();
    $sql = "SELECT * from isin where username = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->num_rows;


    }

}


function insert_changes($email,$name){
    $conn = db_connect();
   
    $current_User = $_SESSION['username'];
    $sql = "UPDATE user SET name='".$name."',email='".$email."' where username='".$current_User."'";

    if (mysqli_query($conn, $sql)) {
        return true;
     } else {
       // echo "Error updating record: " . mysqli_error($conn);
       return false;
     }

}

function change_password($password){
    $conn = db_connect();
   
    $current_User = $_SESSION['username'];
    $sql = "UPDATE user SET password='".$password."' where username='".$current_User."'";

    if (mysqli_query($conn, $sql)) {
        return true;
     } else {
        //echo "Error updating record: " . mysqli_error($conn);
        return false;
     }

}






class Event {
    // Properties
    public $event_id,$date,$time,$title,$location;
  
  
    function __construct($event_id,$date,$time,$title,$location) {
      $this->event_id = $event_id;
      $this->date = $date;
      $this->time = $time;
      $this->title = $title;
      $this->location = $location;
    }
  
   
    function set_eventid($event_id)
    {
      $this->event_id = $event_id;
    }
  
  
    function get_eventid() {
      return $this->event_id;
    }
  
    function get_date() {
      return $this->date;
    }
  
    function get_time() {
      return $this->time;
    }
  
  
    function get_location() {
      return $this->location;
    }
  
    function get_title() {
      return $this->title;
    }
  
  }

  ?>
