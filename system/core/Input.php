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
     * Input Class
     *
     * @package		Madeline
     * @subpackage	Core
     * @category	Input
     * @author		Stevani Andolo
     */
    class ML_Input
    {        
        public function __construct()
        {    
            $dbconfig['host']       = $GLOBALS['configuration']['host'];    
            $dbconfig['user']       = $GLOBALS['configuration']['user'];    
            $dbconfig['password']   = $GLOBALS['configuration']['password'];    
            $dbconfig['dbname']     = $GLOBALS['configuration']['dbname'];    
            $dbconfig['fetch_type'] = $GLOBALS['configuration']['fetch_type'];           
    
            $this->input_check = new ML_DB_Connection($dbconfig);  
        }
    
        public function get($uri)
        {
            if(isset($_GET[$uri]))
            {
                return $this->clean_string($_GET[$uri]);
            }
            else
            {
                return '';
            }
        }
    
        public function file($input)
        {
            if(isset($_FILES[$input]))
            {
                return $_FILES[$input]['name'];
            }
            else
            {
                return '';
            }
        }
    
        public function post($input, $json = false)
        {
            if(isset($_POST[$input]))
            {
                if($json === true)
                {
                    # Getting & decoding the received JSON
                    $input  = json_decode(file_get_contents('php://input'), true)[$input];
                }
                else
                {
                    $input  = $_POST[$input];
                }

                return $this->clean_string($input);
            }
            else
            {
                return '';
            }
        }

        protected function clean_string($post)
        {
			$post = nl2br($post);
			$post = str_replace("&amp;","&",$post);
            $post = stripslashes($post);
            $post = htmlentities($post);
            $post = trim($post);
            $post = $this->input_check->escape_string($post);

            return $post;
        }
    
        public function selected($value, $option)
        {            
            if($value == $option) 
            {
                echo 'selected';
            } 
            else 
            {
                echo '';
            }
        }
    
        public function ph($value,$placeholder)
        {            
            if($value == '') 
            {
                echo "placeholder=\"$placeholder\"";
            } 
            else 
            {
                echo "value=\"$value\"";
            }    
        }
    }
?>