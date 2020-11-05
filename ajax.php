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
    

    # get identifier
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    {
        $identifier     = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    else
    {
        $identifier     = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    # define identifier
    DEFINE('IDENTIFIER', explode('?',substr(strrchr(rtrim($identifier, '/'), '/'), 1))[0]);
    DEFINE('BROWSER', $_SERVER['HTTP_USER_AGENT']);

    # validate identifier
    if(IDENTIFIER == 'ajax.php') exit(header('location: 403'));

    # validating ajax request
    isset($_GET['ML_Ajax_Request']) ? $_GET ['ML_Ajax_Request'] : exit (header('location: 403'));

    # define a ROOT constant
    DEFINE("ROOT",  str_replace('\\', "/", getcwd()));
    
    # check to start a new session
    if(session_status() != PHP_SESSION_ACTIVE) session_start();

    # load director configuration
    REQUIRE 'system_config/directory_configuration.php';
    
    if($directory['system'] == 'S_D') 
    {    
        # load error handler
        REQUIRE 'system/register/error_handler.php';

        # load ajax path
        require "system/core/Ajax_Path.php";
    
        # load data setter
        REQUIRE 'system/core/Data_setter.php';

        # load ajax MadeLine
        INCLUDE "system/core/MadeLine_Ajax.php";
    } 
    else 
    {    
        # load error handler
        REQUIRE $directory['system'].'/register/error_handler.php';

        # load ajax path
        require $directory['system']."/core/Ajax_Path.php";
    
        # load data setter
        REQUIRE $directory['system'].'/core/Data_setter.php';

        # load ajax MadeLine
        INCLUDE $directory['system']."/core/MadeLine_Ajax.php";
    }

    # load routes configuration
    REQUIRE CONFIGURATION_PATH."routes.php";

    # check requested controller
    if(isset($_GET['controller'])) 
    {
        # run Ajax MadeLine
        MadeLine::Ajax();
    } 
    else 
    {    
        if($directory['system'] == 'S_D') 
        {    
            # load loader
            REQUIRE "system/core/Loader.php";
    
            # load html generator
            REQUIRE "system/core/Html.php";    
        }
        else 
        {
            # load loader
            REQUIRE $directory['system']."/core/Loader.php";
    
            # load html generator
            REQUIRE $directory['system']."/core/Html.php";
        }

        # create new ML_Loader object
        $ajax_ml_loader = new ML_Loader();

        # check if system status = development
        if($route['status'] == 'development') 
        {
            # check controller & method is set
            if(!isset($_GET['controller']) && !isset($_GET['method'])) 
            {
                # display error
                $ajax_ml_loader->user_error('YOU HAVE NOT PUT A CONTROLLER AND METHOD YET!');
                exit();
            }
            else if(!isset($_GET['controller']))
            {
                # display error
                $ajax_ml_loader->user_error('YOU HAVE NOT PUT A CONTROLLER YET!');
                exit();
            }
        } 
        else 
        {
            # display error
            $ajax_ml_loader->user_error('CANNOT PROCESS ANY REQUESTS!');
            exit();
        }
    }
?>