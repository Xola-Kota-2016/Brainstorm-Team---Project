<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "xolakota";
$dbname = "mls";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>