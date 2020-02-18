<?php

/**
* Simple Ajax Uploader
* Version 1.11
* httpss://github.com/LPology/Simple-Ajax-Uploader
*
* Copyright 2014 LPology, LLC
* Released under the MIT license
*
*/

if (isset($_SERVER['https_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['https_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if (isset($_SERVER['REQUEST_METHOD'])) {

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    
        if (isset($_SERVER['https_ACCESS_CONTROL_REQUEST_METHOD'])) {
            header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        }
            
        if (isset($_SERVER['https_ACCESS_CONTROL_REQUEST_HEADERS'])) {
            header("Access-Control-Allow-Headers: {$_SERVER['https_ACCESS_CONTROL_REQUEST_HEADERS']}");
        }
            
        exit;
    }
}