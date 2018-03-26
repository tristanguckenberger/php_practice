<?php
    // session start
session_start();
if(!isset($_SESSION['user'])){
    //header('Location: login.php');
} else {

    // Create Query
    $query = 'SELECT * FROM users';

// Get result
    $result = mysqli_query($conn, $query);

// Fetch data
    $creds = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($creds);
// Free result
    mysqli_free_result($result);

// Close connection
    mysqli_close($conn);

// check if there is a user logged in for my current session
    if(isset($_SESSION['user'])){
        require('inc/header.php');

    } else {
        // else go to login page
        header('Location: login.php');

    }
//if(isset($_SESSION['user'])){
//        unset($_SESSION['user']);
//
//}

}



?>

<div class="site-content">
    <div class="site-content2"></div>
    <div class="container-content">
        <div class="site-content3">
            <div class="blurred-div"></div>
            <div class="tagline">THE ONLY DEV TOOL</div>
        </div>
    </div>
    <div class="tagline2">
        REPLACE THE INTERNET
    </div>
</div>





