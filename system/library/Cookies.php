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
    
    # Session Class
    #
    # @package		Madeline
    # @subpackage	Library
    # @category	Cookies
    # @author		Stevani Andolo
     
    class ML_Cookies
    {        
        # Set Session Name and Value
        public function set($cookie_name = "", $cookie_value = "", $cookie_time = 1, $domain = "", $secure = "", $http_only = true) 
        {            
            setcookie($cookie_name, $cookie_value, strtotime( "+$cookie_time days" ), "/", $domain, $secure, $http_only);
        }
        
        # Get Session Value
        public function get($cookie_name) 
        {          
            if(isset($_COOKIE[$cookie_name])) 
            {         
                return $_COOKIE[$cookie_name]; 
            } 
            else 
            {
                exit('PLEASE PROVIDE A COOKIE NAME');
            }   
        }
        
        # Clear session
        public function unset($cookie_name) 
        {
            # check if more than one cookie names
            if(strpos($cookie_name, ',') !== false)
            {
                $cookie         = str_replace(' ', '', $cookie_name);
                $cookie         = str_replace("\n", '', $cookie);
                $cookie         = explode(',', $cookie);
                $count_cookie   = count($cookie);
                for($i = 0; $i < $count_cookie; $i++) 
                {
                    # unset the cookie
                    setcookie($cookie[$i], "", time() - 3600);
                }
            } 
            else 
            {
                # unset the cookie
                setcookie($cookie_name, "", time() - 3600);
            }
        }
        
        # Check Session Exists
        public function exists($cookie_name) 
        {
            # check if cookie is set
            if(isset($_COOKIE[$cookie_name])) 
            {
                return true;
            } 
            else 
            {
                return false;
            }    
        }        
    }    
?>