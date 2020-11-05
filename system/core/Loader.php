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
    
    
    /**
     * Loader Class
     *
     * @package		Madeline
     * @subpackage	Core
     * @category	Loader
     * @author		Stevani Andolo
     */
    class ML_Loader
    {
        public function user_error($data=null)
        {
            INCLUDE_ONCE ERROR_PATH . "user_error.php";
        }
    }
?>
