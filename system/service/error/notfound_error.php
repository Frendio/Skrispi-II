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

    $url    = isset($_GET['url']) ? $_GET['url'] : null;
    $url    = explode('/', str_replace('-','_',rtrim($url, '/')));
    
    REQUIRE CONFIGURATION_PATH  . "routes.php";
    REQUIRE SYSTEM_CONFIG_PATH  . "directory_configuration.php";

    if($route['status'] == 'live')
    {
        if(isset($url[0]) && $url[0] === ML_API)
        {
            exit(json_encode("Something went wrong, please change system status in [ configurtion/route ] to development to see the errors!"));
        }
        else
        {
            $url_count  = count($url);
            $identity   = $url[$url_count-1];
            if($identity == '403.php' || $identity == '403') {
                if($route['403_custom_page'] == 'FA_CP') {
                    REQUIRE ERROR403;
                } else {
                    $this->view($route['403_custom_page']);
                }
            } else {
                if($route['404_custom_page'] == 'NF_CP') {
                    REQUIRE ERROR404;
                } else {
                    $this->view($route['404_custom_page']);
                }
            }
        }
    }
    else if($route['status'] == 'development')
    {
        if(isset($url[0]) && $url[0] === ML_API)
        {
            $f_type = explode('|', get_fType($type))[0];
            $d_type = explode('|', get_fType($type))[1];

            if($f_type == 'library')
            {
                $dir_path = LIBRARY_PATH;
            }
            else
            {
                if($directory['application'] == 'A_D')
                {
                    $app_fn = strtoupper('application_path');
                }
                else
                {
                    $app_fn = strtoupper($directory['application'].'_path');
                }

                $dir_path = constant($app_fn).$d_type.'';                
            }
            echo json_encode('"'.$file_name.'.php" '. $f_type.' is not found in your : "'.str_replace(getcwd()."/",'',$dir_path).'" directory!');
        }
        else
        {
            REQUIRE NOTFOUND_ERROR;
        }
    }

    function get_fType($type)
    {
        if($type == 'models')
        {
            return 'model|models';
        }
        else if($type == 'controllers')
        {
            return 'controller|controllers';
        }
        else if($type == 'mylibraries')
        {
            return 'my_library|my_libraries';
        }
        else if($type == 'my_libraries')
        {
            return 'my_library|my_libraries';
        }
        else if($type == 'library')
        {
            return 'library|library';
        }
    }    
?>