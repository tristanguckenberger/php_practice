<?php
    # CONDITIONALS

    /*
     *
     * == - EQUALS
     * === - VALUE + DATA TYPE, IDENTICAL
     * < - LESS THAN
     * > - GREATER THAN
     * <= - LESS THAN OR EQUAL TO
     * >= - GREATER THAN OR EQUAL TO
     * != - NOT EQUAL TO
     * !== - NOT IDENTICAL
     *
     */
    /*
     * 5 is not identical to '5' so 5 !== '5'
     * This is because while the value is the same, the data type is different
     */
//    $num = '5';
//
//
//    if($num !== 5){
//        echo '5 passed';
//    } elseif($num == 6){
//        echo '6 passed';
//    } else {
//        echo 'Did not pass';
//    }
//
//    if($num > 4 && $num < 10){
//        echo "$num passed";
//    }


    # NESTING IF

    $num = 6;
//
//    if($num > 4){
//        if($num < 10){
//            echo "$num passed";
//        }
//    }

    # LOGICAL OPERATORS
    /*
     * AND &&
     * OR ||
     * XOR
     * It's better to use logical operators than nesting if statements
     * Unless you need to add and else statement for one of the conditions
     */

//    if($num > 4 || $num < 10){
//        echo "$num passed";
//    }
    # SWITCH

    /*
     * Good for any sort of selector function,
     * Lets say the users has an option to pick a color
     * For an article of clothing
     * Depending on what the user picks (ie, the case)
     * We can have an action be performed, so if I
     * Pick red for a shirt color, the image
     * Displayed could change to a red shirt,
     * The unselected option is Default, which doesn't need
     * A break; Or if something is entered that the code doesn't
     * Recognize, it will go to default
     */
    $favColor = 'red';

    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
    }

?>