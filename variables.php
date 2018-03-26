<?php

    // Single line comment
    # Also a single line comment
    /*


        Multi-line comment


    */

    // print 'Hello World';
    // echo 'Hello World'; is quicker.
    #VARIABLES
    /*

        - Prefix with $
        - Start with a letter or an underscore
        - Only letters, numbers, and underscores
        - Case sensitive

     */

    #Data Types
    /*

        String
        Integers
        floats
        Booleans
        Arrays
        Objects
        NULL
        Resource

     */





    $output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';

    /*
        We can use concatonation to combine the two strings
        In PHP this is done with the .

        See below sample

        To add a space between 'Hello' and 'World'
        You would have to create another string, perhaps $string3
        In this case, and make it $string3 = ' '; OR
        You can simply add quotes with a space in them like so.
        Same goes for punctuation, see the below example.

        There is an easier way to do this; with double quotes.
        See $greeting2

    */
    $greeting = $string1 .' '. $string2 .'!';
    $greeting2 = "$string1 $string2";

    # Escape a character
    /*
        We can 'escape' a character by putting a
        Backslash infront of said character

        If I wanted to echo They're Here I
        Would simply add a backslash in front
        Of the 're

        We only need to escape a character if the string
        In question has something in it that matches the
        Quotation type that is wrapping it.

    */
    $string3 = 'They\'re Here';

    $float1 = 4.4;
    $bool1 = true;

    # Constants - absolutely not going to change, maybe a server name, etc.
    /*
        Only use if you know the value isn't going to change
        Popular practice is to make them all uppercase
        1st is the name, 2nd is its value
        Constants are case sensitive by default
        They can be made case insensitive by adding a third
        Parameter of 'true'
    */

    define('GREETING', 'Hello Everyone');



    echo GREETING;

?>