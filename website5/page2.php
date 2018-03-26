<?php

    // We can update cookies the same way we set them as long as the name stays the same
    setcookie('username', 'Frank', time() + (86400 * 30));

    // Delete cookie,
    //setcookie('username', 'Frank', time() - 3600);


    // We can use count($_COOKIE) to get the number of cookies
    if(count($_COOKIE) > 0){
        echo 'There are '.count($_COOKIE).' cookie(s) saved.<br>';
    }else{
        echo 'There are no cookies saved.';
    }

    // Check to see if cookie is set with isset(cookie superglobal)
    if(isset($_COOKIE['username'])){
        echo 'User '.$_COOKIE['username'].' is set<br>';
    }else{
        echo 'User is not set';
    }

?>
