<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

$user = array('tristan' => 'tjg123');
//create a user array to store users

//$_SESSION['userArray'] = $user;
/*
 * @param string $pass
 *
 * Checks if password is longer than 6 characters
 */
function checkPass($pass) {
    // check that password is longer that 6 char
    if(strlen($pass) >= 6){
        return true;
    }
}

//function checkUserNameDup($usernamePass, $array) {
//    // check for username duplication
//    foreach($array as $username => $usernameArray){
//        if($usernamePass === 5){
//            return true;
//        } else {
//            echo 'The username '.$usernamePass.' already exists';
//        }
//    }
//
//}
/*
 * @param $username, $password, $user
 */

/*
YOU NEED TO IMPLEMENT A DB FOR PERMANATE DATA STORAGE, HOWEVER this could be useful when incrementing
variable names. See the for loop:

                                    <?php

                                    $user = array();
                                    //$j = count($user);


                                    $u1='alpha';
                                    $p1='alpha123';

                                    for($i=1; $i <= 6; $i++) {
                                        ${'u' . $i} = 'Username: '.$i;
                                        ${'p' . $i} = 'Password: '.$i;
                                        $user[${'u' . $i}]  = ${'p' . $i};

                                    };

                                    //$user[$u1]=$p1;
                                    //$user[$u2]=$p2;






                                    //$name = "u{$i}";
                                    //$$name = "foo";
                                    //$user[$name]= $p4;
                                    //print_r($user);

                                    //$user[$u1]='other';

                                    //echo "Now we have";
                                    var_dump($user);


*/





















function addToArray($var1, $var2, &$array){
    $tmp = array($var1 => $var2);
    $array = $array + $tmp;
    //array_merge($array, $tmp);

}



// check if submit button has been pressed
if(isset($_POST['submit'])){
    session_start();
    // validate fields
    if(filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')){
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        if(checkPass($password)){

            if(is_file('array.php')){
                $handle = fopen('array.php', 'r');
                $file = 'array.php';
                $content = file_get_contents($file);
                fclose($handle);
                echo($content);
            } else {
                $handle = fopen('array.php', 'w');
                $array = '<?php $user = array(); ?>';
                fwrite($handle, $array);
                //echo fwrite($handle, $array);
                fclose($handle);
            }


                //$tmp = [];
                //$tmp[$username] = $password;
                //addToArray($username, $password, $user);
                //var_dump($user);

           // header('Location: index.php');
        } else {
            echo'Please enter a password longer than 6 characters';
        }
    } else {
        echo 'Values required in all fields';
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
<h2>Create an account</h2>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3>Enter a Username</h3>
    <input type="text" name="username" value="" placeholder="Username">
    <h3>Enter a Username</h3>
    <input type="text" name="password" value="" placeholder="Password">
    <input type="submit" name="submit" value="Create Account">
</form>
</body>
</html>
