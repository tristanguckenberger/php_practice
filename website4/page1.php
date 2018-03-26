<?php
    //When using $_POST[''] we pass a name value
    if(isset($_POST['submit'])){
        // Catch the values and put them into session variables
        session_start(); // Start the session, this has to be applied to every page you want to use sessions on
        $_SESSION['name'] = htmlentities($_POST['name']); // $_SESSION['value'] set equal to specified form field name, use htmlentities(around the $_POST['name']) for security
        $_SESSION['email'] = htmlentities($_POST['email']);

        /*
         * We also want to redirect to a new page.
         * This can be done with the header(); function
         * give it 'Location: the page we want to go to'
         * So when we click submit, header redirects to a different page
         */
        header('Location: page2.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>