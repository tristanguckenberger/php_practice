<?php

    $loggedIn = true;
    $arr = [1,2,3,4,5];
    // LONG HAND OF IF STATEMENT
//    if($loggedIn) {
//        echo 'You are logged in';
//    } else {
//        echo 'You are NOT logged in';
//    }
    // SHORT HAND OF IF STATEMENT
    /*
     * (condition) ? if : else
     *
     * USED THE TERNARY OPERATOR
     * WHICH IS A ?
    */
    //echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

//    $isRegistered = ($loggedIn == true) ? true : false;
//    echo $isRegistered;

//    $age   = 20;
//    $score = 15;

    /*
     * Below is an example of a nested shorthand if statement
     */
//    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average'));
?>
    # OPTION 1, AVOID IF POSSIBLE
<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php }  ?>
</div>

    # OPTION 2, CLEANER
<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>
    # CAN ALSO BE DONE WITH A FOREACH LOOP
<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>
    # AND EVEN A FOR LOOP
<div>
    <?php for($i = 0;$i < 10;$i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>