<?php
session_start();
//print_r($_SERVER['PHP_SELF']);

if($_SERVER['PHP_SELF'] == '/phpSandbox/customSandboxSite/index.php') {
    require('navbar.php');
} else {
    require('navbar2.php');
}




?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="./JS/textEdit.js"></script>
    <title>Tristan Guckenberger</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



