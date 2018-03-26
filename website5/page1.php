<?php
    /*
     * Cookies differ from sessions,
     * Cookies are stored locally on user machines
     * Sessions are stored on servers
     */
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);
        // To set a cookie use setcookie();
        setcookie('username', $username, time()+3600); // sets cookie for one hour
        // redirect to new page
        header('Location: page2.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookies</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>