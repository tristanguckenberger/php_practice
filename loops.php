<?php
    # LOOPS - Execute code a set number of times
    /*

        Sometimes we know the set number, sometimes we don't
        There are 4 different types of loops

        For
        While
        Do...While
        Foreach

     */

    # For Loop
    /*
        Usually used if you know the number
        Of times it will be executed

        @params - initializer (init), condition, increment (inc)
        Each parameter is separated by a ;

        $i++ will increment by 1 with each iteration

        Notice this will only echo to 9
        This is because we specified $i < 10, not <=

     */

//    for($i = 0;$i < 10;$i++){
//        echo 'Number '. $i;
//        echo '<br>';
//    }



    # While Loop
    /*
        Only takes a condition, setting variables
        Happens outside of the loop
        @params - condition
        Incrementing is the last thing done in the while loop

     */
//    $i = 0;
//
//    while($i < 10){
//        echo $i;
//        echo '<br>';
//        $i++;
//    }





    # Do...While
    /*
        @params - condition
        Do while loop will always run at least once no matter what

        The 'do' does not have () because it does not
        Take a condition, only the 'while' takes
        a condition.

        The 'while' does not have curly braces because
        all the 'action' is in the do.



     */
//    $i = 0;
//
//    do{
//        echo $i;
//        echo '<br>';
//        $i++;
//    }
//
//    while($i < 10);




    # foreach
    /*

        The foreach loop is meant to work with arrays

        Takes the array, plural, and assigns each index
        to a variable, singular, as it steps through it.


     */

    #Indexed array + foreach
//    $people = array('Brad', 'Jose', 'William');
//
//    foreach($people as $person){
//        echo $person;
//        echo '<br>';
//    }

    #Associative array + foreach
    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');
    /*
        Foreach + associative adds    key => value, both
        Are set to variables with whatever names you want
        The key is typically the singular version of the
        Array, where as the value can be named after
        The value type you're trying to get
     */
    foreach($people as $person => $email){
        echo $person . ': ' . $email;
        echo '<br>';
    }

?>