<?php

    # FUNCTION - Block of code that can be repeatedly called

    /*
     * Format types:
     *
     * Camel Case - myFunction()
     * Lower Case - my_function()
     * Pascal Case - MyFunction()
     *
     */

    // Create Simple Function
    function simpleFunction() {
        //echo 'Hello World';
    }

    // Run Simple Function
    //simpleFunction();



    /*
     *
     * We can also pass parameters to functions.
     * If the user doesn't give a parameter we can
     * Set a default with = 'value'
     */
    function sayHello($name = 'World'){
        //echo 'Hello ' . $name;
        echo "Hello $name<br>";
    }
    //sayHello('Joe');
    //sayHello('Bob');
    //sayHello();

    /*
     * IT SHOULD BE NOTED THAT THESE ARE USER
     * DEFINED FUNCTIONS. PHP HAS A CATALOG OF
     * CORE FUNCTIONS THAT CAN BE USED, THAT
     * COME WITH THE LANGUAGE.
     *
     * ie print_r() & var_dump
     */


    /*
     * Return a value
     * We won't see the value unless we echo it,
     * It could also be set to a variable.
     */
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2,3);

    // By Reference or & allows a value to be changed

    $myNum = 10;

    function addFive($num){

        $num += 5; // is the same as writing $num = $num + 5;

    }

    //
    function addTen(&$num){
        $num += 10;
    }

    // The value doesn't change because the addFive doesn't
    addFive($myNum);
    echo "Value: $myNum<br>";

    //Second value is passed by reference
    addTen($myNum);
    echo "Value: $myNum<br>";



?>