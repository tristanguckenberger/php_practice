<?php
    // Check for posted data
    /*
     * INPUT_POST gets the input tag within the post method form.
     * data is the name of the input field within the form
     * The filter_has_var() checks if the the variable -data- exists
     * or in our case if the data has been entered
     */
//    if(filter_has_var(INPUT_POST, data)){
//        echo 'Data found';
//    } else {
//        echo 'No data';
//    }
//
//    if(filter_has_var(INPUT_POST, 'data')){
//        $email = $_POST['data'];
//
//        // Remove illegal chars
//
//        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//        echo $email.'<br>';
//
//        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            echo 'Email is valid';
//        } else {
//            echo 'Email is Not valid';
//        }
//    }

/*
 * These are filters that can be applied to the filter_var, filter_has_var, functions etc...
 *
 */
    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    /*
     * We can use filter_var to both sanitize and validate variables
     */

    # INTEGER VALIDATION
    /*
     * filter_var allows you to pass a variable, and give it a 'command'
     */
//    $var = dsfsdfdsf324234dsf234234;
//
//    if(filter_var($var, FILTER_VALIDATE_INT)){
//        echo $var.' is a number';
//    } else {
//        echo $var. ' is NOT a number';
//    }


    /*
     * Can use FILTER_SANITIZE_NUMBER_INT to
     * filter out any characters that aren't integers
     */
//    $var = 'sdjfdskfjhdd98sf7sd98f7dsfhsdfkjdsf9sd7f';
//    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

//    $var = '<script>alert(1)</script>';
//    //echo $var;
//    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    # filter_input_array()
//    $filters = array(
//        "data" => FILTER_VALIDATE_EMAIL,
//        "data2"=> array(
//                "filter" => FILTER_VALIDATE_INT,
//                "options"=> array(
//                    "min_range" => 1,
//                    "max_range" => 100
//
//
//                )
//
//        )
//    );
//    print_r(filter_input_array(INPUT_POST, $filters));

    $arr = array(
            "name"  => "tristan guckenberger",
            "age"   => "22",
            "email" => "tristan@gcans.com"
    );
    $filters = array(
            "name"  => array(
                    "filter"  => FILTER_CALLBACK,
                    "options" => "ucwords"
            ),
            "age"   => array(
                    "filter"  => FILTER_VALIDATE_INT,
                    "options" => array(
                        "min_range" => 1,
                        "max_range" => 120
                )
            ),
            "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));
?>
<!-- Using $_SERVER['PHP_SELF'] instead of the file name because
if we ever want to change the file name we wont have to touch the action-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>