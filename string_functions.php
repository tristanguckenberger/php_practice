<?php
    # substr()
    /*
     * Returns a portion of a string
     * Counts like an array, 0 is the starting position
     * We can define the string, its start and its end
     *
     * We can also start from the back using an negative number
     */

//    $output = substr('Hello', 0, 12);
//
//    $output = substr('Hello',0, 12);
//
//    echo $output;

    # strlen()
    /*
     * This will return the length of a string
     */

//    $output  = strlen('Hello World');
//    echo $output;

    # strpos
    /*
     * Finds the position of the first occurence of a specified
     * Sub String, for example get the position of the first 'o' in
     * 'Hello World'
     */

//    $output = strpos('Hello World', 'o');
//    echo $output;

    # strrpos
    /*
     * Finds the position of the LAST occurence of a specified
     * Sub String, for example get the position of the LAST 'o' in
     * 'Hello World'
     */

//    $output = strrpos('Hello World', 'o');
//    echo $output;

    # trim()
    /*
     * Strips whitespace
     */

//    $text = 'Hello World              ';
//    //var_dump($text);
//
//    $trimmed = trim($text);
//    var_dump($trimmed);

    # strtoupper
    /*
     * Makes everything uppercase
     */

//    $output = strtoupper('Hello World');
//    echo $output;

    # strtolower
    /*
     * Makes everything lowercase
     */

//    $output = strtolower('Hello World');
//    echo $output;

    # ucwords()
    /*
     * Capitalize every word
     */
//    $output = ucwords('hello world my name is tristan');
//    echo $output;

    # str_replace()
    /*
     * Replace all occurences of a search string with a
     * Replacement
     * Takes 3 parameters, 1st is what we search for,
     * 2nd is what we replace the 1st with,
     * 3rd is the string we are searching
     */

//    $text = 'Hello World';
//    $output = str_replace('World', 'Everyone', $text);
//    echo $output;

    # is_string()
    /*
     * Check if the variable is
     * A string
     */

//    $val = 'text';
//    $output = is_string($val);
//
//    echo $output;

//    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
//
//    foreach($values as $value) {
//        if(is_string($value)) {
//            echo "{$value} is a string<br>";
//        }
//    }

    # gzcompress()
    /*
     * Compress a string
     */

    $string =
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum.";

    $compressed = gzcompress($string);
    echo $compressed.'<br>';
    // How to uncompress a compressed string, use gzuncompress()
    $original = gzuncompress($compressed);
    echo $original;




?>