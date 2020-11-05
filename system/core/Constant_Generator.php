<?php

    # MadeLine PHP - Ajax Framework
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
    # @version  V1
    
    DEFINED('ROOT') OR exit(header('location: 303'));    

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    {
        DEFINE("HTTP",  'https://'.$_SERVER['HTTP_HOST']);
    }
    else
    {
        DEFINE("HTTP",  'http://'.$_SERVER['HTTP_HOST']);
    }

    DEFINE("DS",                str_replace('\\', '/', DIRECTORY_SEPARATOR));
    DEFINE("DR",                $_SERVER['DOCUMENT_ROOT']);
    DEFINE("REQUEST_METHOD",    $_SERVER['REQUEST_METHOD']);
    DEFINE("CD",                str_replace(DR.DS, '', ROOT));
    DEFINE("BASE_URL",          HTTP . DS . CD . DS);
    DEFINE("MADELINE",          ROOT . DS);
    
    # A L L   A J A X   &   R E G U L A R   R E Q U E S T   D I R E C T O R I E S
    define("UPLOAD_BPATH", MADELINE . "upload" . DS);
    define("PUBLIC_BPATH", MADELINE . "public" . DS);
    
    
    if($directory['system'] != 'S_D') 
    {
        $sys_fn = $directory['system'];
    } 
    else 
    {
        $sys_fn = 'system';
    }

    $data   = array_filter(glob('*',GLOB_ONLYDIR), 'is_dir');
    $ak     = array_keys($data);
    $iz     = 0;

    while($iz < count($data)) 
    {
        $folder_name = $data[$ak[$iz]];

        # APPLICATION FOLDER NAME AND PATH CONFIGURATION
        if($folder_name == $directory['application']) 
        {
            $fn_constant    = str_replace('-','_',strtoupper($directory['application'])).'_PATH';
            $app_fn         = $directory['application'];
        } 
        else 
        {
            $fn_constant    = str_replace('-','_',strtoupper($folder_name)).'_PATH';
            $app_fn         = 'application';
        }

        # SYSTEM FOLDER PATH CONFIGURATION
        if($folder_name == $directory['system']) 
        {
            $fn_constant    = str_replace('-','_',strtoupper($directory['system'])).'_PATH';
        } 
        else 
        {
            $fn_constant    = str_replace('-','_',strtoupper($folder_name)).'_PATH';
        }

        if($folder_name == $app_fn || $folder_name == 'public' || $folder_name == $sys_fn || $folder_name == 'upload' || $folder_name == 'system_config' || $folder_name == 'user_guide') 
        {
            if(!DEFINED("$fn_constant")) 
            {
                if($folder_name == 'upload' || $folder_name == 'public') 
                {
                    DEFINE($fn_constant, BASE_URL . $folder_name . DS);
                } 
                else 
                {
                    DEFINE($fn_constant, MADELINE . $folder_name . DS);
                }
            }

            $sub1   = array_filter(glob(''.$folder_name.'/*'), 'is_dir');
            $ak1    = array_keys($sub1);
            $iz1    = 0;

            while($iz1 < count($sub1)) 
            {
                $folder_name1 = str_replace($folder_name.'/', '', $sub1[$ak1[$iz1]]);
                $fn_constant1 = str_replace('-','_',strtoupper($folder_name1)).'_PATH';

                if(!DEFINED("$fn_constant1")) 
                {
                    if(($folder_name == 'upload' || $folder_name == 'public')) 
                    {
                        DEFINE($fn_constant1, constant($fn_constant) . $folder_name1 . DS);
                    } 
                    else 
                    {
                        DEFINE($fn_constant1, constant($fn_constant) . $folder_name1 . DS);
                    }
                }

                $iz1++;
            }
        }
        $iz++;
    }

    if(!DEFINED("ERROR_PATH")) 
    {
        DEFINE("ERROR_PATH", SERVICE_PATH . "error" . DS);
    }

    if(!DEFINED("ERROR403")) 
    {
        DEFINE("ERROR403", ERROR_PATH . "403_error.php");
    }

    if(!DEFINED("ERROR404")) 
    {
        DEFINE("ERROR404", ERROR_PATH . "404_error.php");
    }

    if(!DEFINED("NOTFOUND_ERROR")) 
    {
        DEFINE("NOTFOUND_ERROR", ERROR_PATH . "fnf_error.php");
    }

    if(!DEFINED("AJAX_NOTFOUND_ERROR")) 
    {
        DEFINE("AJAX_NOTFOUND_ERROR", ERROR_PATH . "ajax_fnf_error.php");
    }

    if(!DEFINED("ERROR_DEVELOPMENT")) 
    {
        DEFINE("ERROR_DEVELOPMENT", ERROR_PATH . "development_error.php");
    }

    if(!DEFINED("PHP_VERSION_ERROR")) 
    {
        DEFINE("PHP_VERSION_ERROR", ERROR_PATH . "php_version_error.php");
    }

    if(!DEFINED("MOD_REWRITE_ERROR")) 
    {
        DEFINE("MOD_REWRITE_ERROR", ERROR_PATH . "mod_rewrite_error.php");
    }
?>