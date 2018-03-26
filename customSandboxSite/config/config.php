<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');
define('ROOT_URL', 'http://http://localhost:8888/phpSandbox/customSandboxSite/');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','custom_sandbox');




    # $_SERVER SUPERGLOBAL

    /*
     * Create Server Array
     *
     * Get SERVER_NAME which is The name
     * Of the server host under which
     * The current script is executing.
     *
     * Get Host Header which is the
     * Contents of the Host: header from
     * The current request, if there is one.
     *
     * Get Server Software which is the
     * Server identification string, given
     * In the headers when responding to
     * Requests.
     *
     * Get Document Root which is the
     * The document root directory under which
     * The current script is executing, as
     * Defined in the server's configuration
     * File.
     *
     * Get Current Page or PHP_SELF which
     * Is the filename of the currently executing
     * Script, relative to the document root.
     *
     * Script Name is the same as the
     * Current Page.
     *
     * Absolute Path is the full path for the
     * Current window.
     */

    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header'      => $_SERVER['HTTP_HOST'],
        'Server Software'  => $_SERVER['SERVER_SOFTWARE'],
        'Document Root'    => $_SERVER['DOCUMENT_ROOT'],
        'Current Page'     => $_SERVER['PHP_SELF'],
        'Script Name'      => $_SERVER['SCRIPT_NAME'],
        'Absolute Path'    => $_SERVER['SCRIPT_FILENAME']
    ];

//    echo 'Host Server Name: ' . $server['Host Server Name'].'<br>';
//    echo 'Host Header: ' . $server['Host Header'].'<br>';
//    echo 'Server Software: ' . $server['Server Software'].'<br>';
//    echo 'Document Root: ' . $server['Document Root'].'<br>';
//    echo 'Current Page: ' . $server['PHP_SELF'].'<br>';

    //print_r($server);

    /*
     * Create Client Array
     *
     * Get Client System Info which is
     * The OS, and browser info.
     *
     * Get Client IP... Self Explanatory.
     * Returns users IP address.
     *
     *
     *
     *
     */

    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP'          => $_SERVER['REMOTE_ADDR'],
        'Remote Port'        => $_SERVER['REMOTE_PORT'],

    ];

    //print_r($client);

?>

