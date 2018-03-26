<?php
// session start
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
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
    <div class="doc">
        <div contenteditable="false" class="doc__text-editor">PLEASE TYPE</div>
    </div>
</div>

<?php
//require 'inc/footer.php'
//
//?>



