<?php
session_start();
 
 $user_name = "root";
$password = "";
$database = "mobistore";
$server = "127.0.0.1";

error_reporting(E_ERROR | E_PARSE);

// Create connection
$conn = new mysqli($server, $user_name, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//mysql_select_db($database) or die("MySQL Error: " . mysql_error());
?>