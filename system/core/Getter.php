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

    
    # Getter Class
    #
    # @package		Madeline
    # @subpackage	Library
    # @category	    Getter
    # @author		Stevani Andolo
    #
    class ML_Getter
    {
        public function ip(){            
            return preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));    
        }
        
        # get user's ip
        public function user_ip()
        {
            $ip_address = preg_replace('#[^0-9.]#', '', $_SERVER['REMOTE_ADDR']);
            if(strpos($_SERVER['REMOTE_ADDR'], ':'))
            {
                $ip_address = '127.0.0.1';
            }
            return $ip_address;
        }
    
        # get local ip
        public function local_ip()
        {            
            // return preg_replace('#[^0-9.]#', '', gethostbyname(gethostname()));
            // return preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
            // return preg_replace('#[^0-9.]#', '', $_SERVER['SERVER_ADDR']);
            return '127.0.0.1';
        }   
    }
?>