<?php
    // Start the session
    session_start();
    // See what in $_SESSION with print_r()
    // Carry over session variables name and email, write them to variables
    print_r($_SESSION);
    // Short hand if $_SESSION['name'] is set, use it, if not, set the name value to 'Guest'
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
        <h1>Hello <?php echo $name; ?></h1>
    </body>
</html>
