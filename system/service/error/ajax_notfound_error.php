<?php 

    # Madeline Framework
    #
    # A custom built application development framework for PHP
    #
    # Permission is hereby granted to anyone who is
    # AN ACTIVE STUDENT AT UNIVERSITAS KLABAT
    # to use this application
    #
    # THE SOFTWARE IS PROVIDED "AS IS" TO HELP STUDENTS UNDERSTAND
    # AND BUILD A SIMPLE WEBSITE WITH THE CONCEPT OF MVC (MODEL, VIEW, CONTROLLER)
    #
    # @package	MadeLine (ML)
    # @author	Stevani Andolo
    # @version V1

    DEFINED('BASE_URL') OR exit(header('location: 303'));
    
    REQUIRE CONFIGURATION_PATH  . "routes.php";
    REQUIRE SYSTEM_CONFIG_PATH  . "directory_configuration.php";
    
    if($route['status'] == 'live') {
        if(DEFINED('AJAXPATH')) {
            echo 'ERROR 404 - PAGE NOT FOUND!';
        } else {
            REQUIRE ERROR404;
        }
    } else if($route['status'] == 'development') {
        REQUIRE AJAX_NOTFOUND_ERROR;
    }
    
?>