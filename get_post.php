<?php
    /*
     * Use $_GET['value']; To pull information
     * From form on submit.
     * DATA IS VISIBLE THROUGH THE URL
     * WHEN USING $_GET[];
     * Use if + isset()to make sure the
     * Form has been filled out, on submit,
     * The data will be stored in an array,
     * $_GET[]
     *
     * A big problem here is a hacker can
     * Insert a script into the form, which will write
     * Script to the page. They can then use this
     * To cause all sorts of issues.
     * To avoid this, Use the function htmlentities();
     * Which takes the power out of html tags
     * Inserted into the form and makes them just text.
     *
     */
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        //print_r($_GET);
        echo $name;
    }
    /*
     * $_POST[];
     * When changing between $_POST[];
     * And $_GET[]; make sure to change
     * The method from GET to POST
     */
//    if(isset($_POST['name'])){
//        $name = htmlentities($_POST['name']);
//        //print_r($_GET);
//        echo $name;
//    }
    /*
     * $_Request[];
     * Will Work whether the method value
     * Is post or Get
     */
//    if(isset($_REQUEST['name'])){
//        $name = htmlentities($_REQUEST['name']);
//        //print_r($_GET);
//        echo $name;
//    }
    /*
     * QUERY_STRING gives us the full key and value
     */
    //echo $_SERVER['QUERY_STRING'];

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>My Website</title>
    </head>
    <body>
        <form method="REQUEST" action="get_post.php">
            <div>
                <label>Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>
        <!-- We can send QUERY STRING without using a form-->
        <ul>
            <li>
                <a href="get_post.php?name=Brad">Brad</a>
            </li>
            <li>
                <a href="get_post.php?name=Steve">Steve</a>
            </li>
        </ul>
        <h1><?php echo "{$name}'s Profile"; ?></h1>
    </body>
    </html>