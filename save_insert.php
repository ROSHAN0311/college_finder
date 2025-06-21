<?php

$servername= "localhost";
$username="root";
$password="";
$dbname ="college_finder";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cname=test_input($_POST["cname"]);
        $abt=test_input($_POST["abt"]);
        $city=test_input($_POST["city"]);
        $addr=test_input($_POST["addr"]);
        $web=test_input($_POST["web"]);
        $addr=test_input($_POST["addr"]);
        $phone=test_input($_POST["phone"]);
        $web=test_input($_POST["web"]); 
        $mail=test_input($_POST["mail"]);
        $exam=test_input($_POST["exam"]);
        $duration=test_input($_POST["duration"]);
        $eligb=test_input($_POST["eligb"]);
        $proc=test_input($_POST["proc"]);
        $cstatus=test_input($_POST["cstatus"]);
        $fees=test_input($_POST["fees"]);
        $courses=test_input($_POST["courses"]);
        $img1=test_input($_POST["img1"]);
        $img2=test_input($_POST["img2"]);
        $img3=test_input($_POST["img3"]);
        $recog=test_input($_POST["recog"]);
        $cstatus=test_input($_POST["cstatus"]);
        $degree=test_input($_POST["degree"]);
        $district=test_input($_POST["district"]);
        $scholarship=test_input($_POST["scholarship"]);
        $eca=test_input($_POST["eca"]);
        $passpercent=test_input($_POST["passpercent"]);
        $studentmark=test_input($_POST["studentmark"]);
        $entrance=test_input($_POST["entrance"]);
        $keyword=test_input($_POST["keyword"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO college_info VALUES ('8','$cname','$addr','$city','$web','$phone','$mail','$abt','$exam','$duration','$eligb','$recog','$proc','$fees','$cstatus','$courses','$degree','$district','$scholarship','$passpercent','$eca','$studentmark','$entrance','$keyword','$img1','$img2','$img3')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
    header("location: admin_panel.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }
    
$conn->close();
?>