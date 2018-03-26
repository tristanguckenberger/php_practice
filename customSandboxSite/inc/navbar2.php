<?php
session_start();
$user = $_SESSION['user'];

if (isset($_GET['login']) == true) {
    //echo 'THIS SHOULDN\'t echo';
    unset($_SESSION['user']);
    unset($user);
    echo 'LOGOUT CLICKED <br>';
    header("Location: login.php");

}

?>
<nav class="container">
    <span>Welcome, <?php echo $user; ?>!</span>
    <ul class="main-menu">
        <li class="menu-item"><a href="index.php">HOME</a></li>
        <li class="menu-item drop"><a href="#">ACCOUNT</a>
            <span class="menu-item second"><a href="#">EDIT INFO</a></span>
            <span class="menu-item second"><a name="login" href="hivemindstart.php?login">LOG OUT</a></span>
        </li>
    </ul>
</nav>