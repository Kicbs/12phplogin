<?php
// Initialize the session
session_start();
echo "<font size=4><center>Greetings</center><br>";
 //echo "Welcome Person"
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>