<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();
require './database/connect.php';
//$db = mysqli_connect("localhost", "id3469281_tahasin_islam", "26[@]494", "id3469281_comment");
$ipaddress = '';
if (isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $text = $_POST["text"];
    $ip = $_POST["ip"];


    $sql = "INSERT INTO cmnt (name, email,website,text,ip) VALUES ('$name', '$email','$website','$text','$ip')";


    if ($conn->query($sql) === TRUE) {
        $message = "Message recieved! THANK YOU.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo"<script>document.location='message.php';</script>";
    } else {
        $message = "Something went wrong ! Please try again later.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo"<script>document.location='message.php';</script>";
    }
}
$conn->close();
?>

