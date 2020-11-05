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

    # define ROOT constant
    DEFINE("ROOT", str_replace('\\', "/", getcwd()));
    DEFINE('BROWSER', $_SERVER['HTTP_USER_AGENT']);

    $url_id = isset($_GET['url']) ? $_GET['url'] : null;
    $url_id = explode('/', str_replace('-','_',rtrim($url_id, '/')));
    
    # check to start a new session
    if(session_status() != PHP_SESSION_ACTIVE) session_start();

    # define new PHP_VERSION_ID if not defined yet
    if (!defined('PHP_VERSION_ID')) 
    {
        $version = explode('.', PHP_VERSION);    
        define('PHP_VERSION_ID', ($version[0]));
    }
    
    # load directory configuration
    REQUIRE 'system_config/directory_configuration.php';
    
    if($directory['system'] == 'S_D') 
    {
        # load error handler
        REQUIRE 'system/register/error_handler.php';
   
        # load constant generator
        REQUIRE "system/core/Constant_Generator.php";
    
        # load html library
        REQUIRE 'system/core/Html.php';
    
        # load data setter
        REQUIRE 'system/core/Data_setter.php';
    
        # load data setter
        REQUIRE 'system/configuration/routes.php';
    
        # load MadeLine
        if($url_id[0] === $GLOBALS['ApiLine_API_Key'])
        {
            REQUIRE 'system/core/ML_Api.php';
        }
        else
        {
            REQUIRE 'system/core/MadeLine.php';
        }
    } 
    else 
    {
        # load error handler
        REQUIRE $directory['system'].'/register/error_handler.php';
   
        # load constant generator
        REQUIRE $directory['system']."/core/Constant_Generator.php";
    
        # load html library
        REQUIRE $directory['system'].'/core/Html.php';
    
        # load data setter
        REQUIRE $directory['system'].'/core/Data_setter.php';
    
        # load data setter
        REQUIRE $directory['system'].'/configuration/routes.php';
    
        # load MadeLine
        if($url_id[0] === $GLOBALS['ApiLine_API_Key'])
        {
            REQUIRE $directory['system'].'/core/ML_Api.php';
        }
        else
        {
            REQUIRE $directory['system'].'/core/MadeLine.php';
        }
    }

    # check for PHP version
    if (PHP_VERSION_ID < 70000)
    {    
        exit(REQUIRE PHP_VERSION_ERROR);
    }

    DEFINED('BASE_URL') OR redirect('403');  

    if($url_id[0] === $GLOBALS['ApiLine_API_Key'])
    {
        # run MadeLne API Framework
        MadeLine::Api();
    }
    else
    {
        # run MadeLne Framework
        if(strpos(BROWSER, 'okhttp') !== false)
        {
            exit(json_encode("ApiLine.ml Error :\nWrong API Key!"));
        }
        else
        {
            Made::Line();
        }
    }
?>