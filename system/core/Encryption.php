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
    # @version  V1

    DEFINED('BASE_URL') OR exit(header('location: 303'));
    
    
    /**
     * Input Class
     *
     * @package		Madeline
     * @subpackage	Core
     * @category	Encription
     * @author		Stevani Andolo
     */
    class ML_Encryption
    {
        # encrypt with password_hash
        public function this($str)
        {            
            return password_hash($str, PASSWORD_BCRYPT);     
        }
    
        # encrypt with md5
        public function md5($str)
        {            
            return md5($str);     
        }
    
        # encrypt with sha1
        public function sha1($str)
        {            
            return sha1($str);     
        }    
    }
?>