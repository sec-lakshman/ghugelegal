<?php
// Database configuration
// $dbHost     = "localhost";
// $dbUsername = "adminsibstc";
// $dbPassword = "Sibstcpass";
// $dbName     = "sibstc";

//$dbHost     = "us-imm-web484.main-hosting.eu";
$dbHost     = "localhost";
$dbUsername = "u833937764_admin";
$dbPassword = "Admin@123";
$dbName     = "u833937764_ghugeimmig";

// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    
    die("Connection failed: " . $db->connect_error);
}
else{
     //echo("testsucess");
}