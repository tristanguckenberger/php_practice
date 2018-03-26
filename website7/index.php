<?php
    # File System Functions
    /*
     * Return file name with file extension
     */
    $path ='/dir1/myfile.php';
    $file = 'file1.txt';

//    // Return file name
//    echo basename($path);
//
//    // Return file name without extension
//    echo basename($path, '.php');

    // Return the dir name from path
    //echo dirname($path);

    // Check to see if a file exists, can be used for folder
//    echo file_exists($file);

    // Get absolute path
    //echo realpath($file);

    // Checks to see if file, is a file, only used for files
    //echo is_file($file);

    // Check if file is writable
    //echo is_writeable($file);

    // Check if file is readable
    //echo is_readable($file);

    // Get file size
    //echo filesize($file);

    // Create a directory
    //mkdir('testing');

    // Delete a directory, if it is empty
    //rmdir('testing');

    // Copy the contents of a file
//    echo copy('file1.txt', 'file2.txt');

    // Rename files
    //rename('file2.txt','myfile.txt');

    // Delete a file
    //unlink('myfile.txt');

    // Write from file to string
    //echo file_get_contents($file);

    // Write a string to file

    //echo file_put_contents($file, 'Goodbye World');

//    $current = file_get_contents($file);
//
//    $current .= ' Goodbye World';
//
//    file_put_contents($file, $current);

    // open file for reading, r stands for read

//    $handle = fopen($file, 'r');
//    $data   = fread($handle, filesize($file));
//    fclose($handle);
//    echo $data;

    // OPEN FILE FOR WRITING

    $handle = fopen('file2.txt', 'w');
    $TXT = "JOHN DOE\n";
    fwrite($handle, $TXT);
    $TXT = "Steve Smith\n";
    fwrite($handle, $TXT);
    fclose($handle);



?>