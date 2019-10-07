<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();
require '../database/connect.php';


// $db = mysqli_connect('localhost', 'id3469281_tahasin_islam', '26[@]494', 'id3469281_comment');
$message = '';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $cause = $_POST["cause"];

    $sql = "SELECT * FROM access WHERE name='$name' AND  cause='$cause' ";

    $run_query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($run_query) > 0) {

        $sql = "SELECT * FROM access";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            header('location:../access/update-messages.php');
        }
    } 
    else { 
        $message = "Sorry! No stranger is allowed to come in!";
    }
}
?>
