<?php
    // Start the session
    session_start();
    // Carry over session variables name and email, write them to variables
    /*
     * We can also update a session variable at any time,
     *
     */
    //$_SESSION['name'] = 'John Doe';
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
<h5>Thank you <?php echo $name; ?>, you have subscribed with the email, <?php echo $email; ?></h5>
<a href="page3.php">Go to page 3</a>
</body>
</html>
