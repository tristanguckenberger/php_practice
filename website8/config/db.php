<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');
// Create Connection
session_start();
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if(mysqli_connect_errno()){
    // Connection failed
    echo 'Failed to connection to mysql'. mysqli_connect_errno();
}
?>