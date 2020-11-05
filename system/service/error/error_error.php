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

    $url                = isset($_GET['url']) ? $_GET['url'] : null;
    $url                = explode('/', str_replace('-','_',rtrim($url, '/')));
    $url_count          = count($url);

    $identity           = $url[$url_count-1];
    $error_type         = $file_name;
    
    if($identity == '403.php' || $identity == '403') {
        if($route['403_custom_page'] == 'FA_CP') {
            REQUIRE ERROR403;
        } else {
            $this->view($route['403_custom_page']);
        }
    }
    else if($identity == '404.php' || $identity == '404') {
        if($route['404_custom_page'] == 'NF_CP') {
            REQUIRE ERROR404;
        } else {
            $this->view($route['404_custom_page']);
        }
    } else {    
        if($route['status'] == 'live') {
            if($route['404_custom_page'] == 'NF_CP') {
                REQUIRE ERROR404;
            } else {
                $this->view($route['404_custom_page']);
            }
        } else if($route['status'] == 'development') {
            if($error_type == '404') {
                if($route['404_custom_page'] == 'NF_CP') {
                    REQUIRE ERROR404;
                } else {
                    $this->view($route['404_custom_page']);
                }
            } else {
                REQUIRE ERROR_DEVELOPMENT;
            }
        }
    }    
?>