<?php
    /*
     * Include will allow the page to still run if the
     * File does not exist. Require will stop the page
     * If the specified file does not exist. Use require
     * If you don't want the script to continue. Use
     * Continue if you do.
     */
    //include 'inc/header1.php';
    //require 'inc/header1.php';
    include 'inc/header.php';
    /*
     * Require_once will check to see if the file has
     * Already been included or required, and if it
     * Has it won't be included or required again
     */
    //include 'inc/header.php';
?>

    <h1>Contact</h1>

<?php include 'inc/footer.php'; ?>