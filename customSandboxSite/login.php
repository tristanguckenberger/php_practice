<?php
// require db files
require('config/config.php');
require('config/db.php');
session_start();

// Create Query
$query = 'SELECT * FROM users';

// Get result
$result = mysqli_query($conn, $query);

// Fetch data
$creds = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {

        // validate fields
        if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password') && isset($_POST['username']) && isset($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            foreach($creds as $cred){
                //var_dump($cred);
                if ($cred['username'] == $username && $cred['password'] == $password) {
                    //echo 'correct';
                    $_SESSION['user'] = $username;
                    header('Location: index.php');
                    break;
                } else {
                    unset($_SESSION['user']);
                    unset($username);
                    unset($password);
                    //echo 'Incorrect password or username';
                }
            }

        } else {
            //echo "Failed at filter has var";
            echo 'Please fill all fields';
        }
    } else {
        //echo "Failed at isset for submit ";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="form-container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="container-form">
        <input type="text" name="username" value="" placeholder="Username" class="input">
        <br>
        <br>
        <input type="password" name="password" value="" placeholder="Password" class="input">
        <br>
        <br>
        <br>
        <input type="submit" name="submit" value="Sign In" class="button">
    </form>
</div>
<div class="page-extended">

</div>

</body>
</html>



