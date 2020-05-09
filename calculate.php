<?php

/* 
    Author  : Vlachopoulos Dimitrios
    Version : 1.0.0.0
    Created : 22 November 2019
    Licence : MIT
*/

// Init Variables
$target_dir = '../temp_files/';

// Checking if submit is set
if(isset($_POST['Calculate'])){
    $target_file = $target_dir . basename($_FILES["Upload"]["name"]);
    if (move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file)) {
        echo "CRC32 is : " . strtoupper(hash_file('crc32b', $target_file, false));
        unlink($target_file);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}