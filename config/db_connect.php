<?php
// $servername = "";
// $username = ""; 
// $password = "";
// $dbname = "";

$servername = "localhost";
$username = "root";
$password = "";

// Initialize a variable to store the connection message
$message = "";

// Create a connection to the database
try {
    $mysqli = new mysqli($servername, $username, $password);
    $message = "Connected successfully to the database.";
} catch (Exception $ex) {
    die("I cannot connect to the database because: " . $ex->getMessage());
}
$mysqli->set_charset("utf8");

// Close the database connection (only if it was successful)
if ($mysqli->connect_error === null) {
    $mysqli->close();
}
date_default_timezone_set("Asia/Kolkata");
// $config['host_url'] = "https://vercel.com/";
?>
