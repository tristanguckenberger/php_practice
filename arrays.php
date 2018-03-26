<?php
    # Arrays - Variable that holds multiple values

    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    # Indexed Arrays

    /*
        Remember Arrays are zero based - 0,1,2,....,etc.
        We can use the array function

     */
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    //echo $ids[2];

    /*  Another way to create an array is with just brackets
        Equivalent to using the array function
    */
    $cars = ['Honda', 'Toyota', 'Ford'];

    /*  We can add something to an array by specifying
        The next index of the array and setting it equal
        To something
    */
    $cars[3] = 'Chevy';

    /*
        In some cases we won't know what index we're at
        But we still want to add to our array.
        This will add the specified value to the next index:
        $arrayName[] = 'value'; Will always add to the next Index
     */
    $cars[] = 'BMW';
    //echo $cars[4];

    # Some functions to know
    /*

        count(); - The count function with give us the amount of indicies in the array

        print_r(); - basically echo but for the whole array

        var_dump(); - similar to print_r(); but will also provide the data type, and all values
            works for any variable type and number of characters
     */
    //echo count($cars);
    //print_r($cars);
    //var_dump($cars);



    # Associative Arrays

    /*

        Allows you to define the 'key' and the 'value'
        In the example below we use the string 'Brad' as
        The 'key' and the number '35' as the 'value'.

        It should be noted that key could be the number
        And the value could be the string, if we wanted
        See the $ids example for this.


     */
    // This instance of $people overrides the previous instance
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids = array(22 => 'Brad', 44 => 'Jose', 63 => 'William');

    /*

        To get a value we would echo similarly to the way
        We do with indexed arrays, but add the key
        This will print '35' in our case since
        We've passed 'Brad' in as the specified key.

     */
    //echo $people['Brad']; The key here is 'Brad', returns the value of 35
    //echo $ids[44]; The key here is 44, returns the value of 'Jose'

    /*

        To add to an associative array, we set the new key we want
        (following the style of previous keys) to a new value

     */
    $people['Jill'] = 42;
    //echo $people['Jill'];
    //print_r($people);
    //var_dump($people);



    # Multi-dimensional Arrays

    /*

        This is an array within an array, think Inception

     */

    $cars = array(
        // Brand, # in stock, # sold
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)

    );

    /*

        To echo a multi-dimensional array, we echo the array with
        Two sets of brackets, the 1st being the array we want, the
        2nd bracket is the index in the specified array that we want
        So echo $cars[1][0]; will echo 'Toyota'
        echo $cars[1][2]; will echo '20'

     */
    //echo $cars[1][0];
    echo $cars[1][2];



?>

