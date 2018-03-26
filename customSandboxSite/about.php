<?php
// session start
session_start();
// check if there is a user logged in for my current session
if(isset($_SESSION['user'])){
    // if user is logged in, with sessions
    if(5==5){
        require 'inc/header.php';
    } else {
        // else go to login page
        header('Location: login.php');
    }

} else {
    header('Location: login.php');
}










?>
<div class="site-content">


</div>


<?php
require 'inc/footer.php'

?>
