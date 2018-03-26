<?php
    //echo date('d'); // Lowercase d will give the # of the Day
    //echo date('m'); // Lowercase m will give the # of the Month
    //echo date('Y'); // Uppercase Y will give the # of the year
    //echo date('l'); // Lowercase l will give you day of the week (ie, monday, tuesday, etc.)
    //echo date('Y/m/d'); // Year, month, day
    //echo date('m-d-Y');

//    echo date('h'); // Hour
//    echo date('i'); // Min
//    echo date('s'); // Seconds
//    echo date('a'); // AM or PM

    // Set Time Zone to Eastern
    date_default_timezone_set('America/New_York');

    //echo date('h:i:sa');

    /*
     * Unix timestamp is a long integer containing the number of
     * Seconds between the Unix Epoch (January 1 1970 00:00:00 GMT)
     * And the Time specified.
     */

    //mktime(); takes hour, minute, second, month, day, and year
    $timestamp = mktime(7, 11, 00, 1, 12, 1996);

    //We can take $timestamp and make it readable
    //echo date('m/d/y h:i:sa', $timestamp);

    // We can convert string to time with the strtotime(); function
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');


//echo $timestamp2;

    echo date('m/d/Y h:i:sa', $timestamp5);

    # See php.net/manual/en/function.date.php for more on date and time formatting


?>