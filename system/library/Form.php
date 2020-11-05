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

    # File Uploading Class
    #
    # @package		Madeline
    # @subpackage	Library
    # @category	    Upload
    # @author		Stevani Andolo
     
    class ML_Form
    {        
        # Default input       
        protected $input        = array();
        
        # Default required
        protected $require      = array();
        
        # Default required
        protected $message      = array();
        
        # Default required
        protected $_input_data  = array();
        
        # Default status
        protected $status       = false;
        
        # Default input name
        protected $input_name   = '';     
        
        
        # Constructor
        #
        # @param	array	$config
        # Assign Parsed Values  
        # creates ML_DB_Connection object         
        public function __construct($config = array()) 
        {
            if(!defined('AJAX')) REQUIRE CORE_PATH.'Form_error_handler.php';
        }

    
        # Upload a file
        #
        # @return	bool         
        public function validate($json = false) 
        {
            $i = 0;

            # loop through inputs
            while($i < count($this->input)) 
            {
                if($json === true)
                {
                    # Getting & decoding the received JSON
                    $input  = json_decode(file_get_contents('php://input'), true)[$this->input[$i]];

                    # check if the input is set
                    if(isset($input)) 
                    {
                        # check if the input is required
                        if($this->require[$i] == 1) 
                        {
                            # check if input is not empty
                            if(trim($input) == '') 
                            {
                                if(isset($this->message[$i]) && $this->message[$i] != '') 
                                {
                                    $this->input_name   .= $this->input[$i].'::'.$this->message[$i].',';
                                }
                                else
                                {
                                    $this->input_name   .= $this->input[$i].',';
                                }
                            }

                            array_push($this->_input_data, $this->input[$i]);
                        }
                    } 
                    else 
                    {
                        $this->input_name   .= $this->input[$i].',';
                    }
                }
                else
                {
                    # check if the input is set
                    if(isset($_POST[$this->input[$i]])) 
                    {
                        # check if the input is required
                        if($this->require[$i] == 1) 
                        {
                            # check if input is not empty
                            if(trim($_POST[$this->input[$i]]) == '') 
                            {
                                if(isset($this->message[$i]) && $this->message[$i] != '') 
                                {
                                    $this->input_name   .= $this->input[$i].'::'.$this->message[$i].',';
                                }
                                else
                                {
                                    $this->input_name   .= $this->input[$i].',';
                                }
                            }

                            array_push($this->_input_data, $this->input[$i]);
                        }
                    } 
                    else 
                    {
                        $this->input_name   .= $this->input[$i].',';
                    }
                }
                $i++;
            }

            # return status
            if($this->input_name == '')
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        
        # Upload a file
        #
        # @param	string	$input
        # @param	int	    $require
        # @return	array_push         
        public function input($input,$require=1) 
        {
            # check if multiple input name are passed
            if(strpos($input, ',') !== false) 
            {
                $input          = trim(preg_replace('/\s\s+/', ' ', $input));
                $input          = str_replace(', ', ',', $input);
                $input          = explode(',', $input);
                $count_input    = count($input);

                # loop through all input names
                for($i = 0; $i < $count_input; $i++) 
                {
                    # check for required input
                    if(strpos($input[$i], ':') !== false) 
                    {
                        # put in an array
                        if(explode(':', $input[$i])[1] === '0' || explode(':', $input[$i])[1] === '1')
                        {
                            array_push($this->input, explode(':', $input[$i])[0]);
                            array_push($this->require, explode(':', $input[$i])[1]);

                            if(isset(explode(':', $input[$i])[2]) && explode(':', $input[$i])[1] === '1' && explode(':', $input[$i])[2] !== '')
                            {
                                array_push($this->message, explode(':', $input[$i])[2]);
                            }
                            else
                            {
                                array_push($this->message, '');
                            }
                        }
                        else
                        {
                            if(explode(':', $input[$i])[1] !== '')
                            {
                                # put in an array
                                array_push($this->input, explode(':', $input[$i])[0]);
                                array_push($this->require, $require);
                                array_push($this->message, explode(':', $input[$i])[1]);
                            }
                        }
                    } 
                    else 
                    {
                        # put in an array
                        array_push($this->input, $input[$i]);
                        array_push($this->require, $require);
                        array_push($this->message, '');
                    }                    
                }
            } 
            else 
            {
                # check for required input
                if(strpos($input, ':') !== false) 
                {
                    if(explode(':', $input)[1] === '0' || explode(':', $input)[1] === '1')
                    {
                        array_push($this->input, explode(':', $input)[0]);
                        array_push($this->require, explode(':', $input)[1]);

                        if(isset(explode(':', $input)[2]) && explode(':', $input)[1] === '1' && explode(':', $input)[2] !== '')
                        {
                            array_push($this->message, explode(':', $input)[2]);
                        }
                    }
                    else
                    {
                        if(explode(':', $input)[1] !== '')
                        {
                            # put in an array
                            array_push($this->input, explode(':', $input)[0]);
                            array_push($this->require, $require);
                            array_push($this->message, explode(':', $input)[1]);
                        }
                    }
                }
                else
                {
                    # put in an array
                    array_push($this->input, $input);
                    array_push($this->require, $require);
                    array_push($this->message, '');
                }
            }
        }
        
        
        # Get empty input
        #
        # @return	input name 
        public function empty() 
        {
            # return empty input name
            return rtrim(ltrim($this->input_name,','),',');
        }
        
        
        # Get empty input
        #
        # @return	input name 
        public function isempty($input, $message = '') 
        {
            if(isset($_POST[$input]) && $_POST[$input] == '') 
            {
                $index  = array_search($input, $this->input);
                if(isset($this->message[$index]) && $this->message[$index] != '')
                {
                    return $this->message[$index];
                }
                else
                {
                    return $message;
                }
            }
        }

        public function get_input($input)
        {
            return isset($this->input[$input]);
        }

        public function get_message($input)
        {
            return isset($this->message[$input]);
        }
        
        
        # Get empty input
        #
        # @return	input name 
        public function error() 
        {
            # return empty input name
            return rtrim(ltrim($this->input_name,','),',');
        }

        public function has_rule($field)
        {
            return isset($this->_input_data[$field]);
        }

        public function set_value($field, $default = '')
        {
            if ( ! isset($this->_field_data[$field]))
            {
                return $default;
            }
        }
    }

?>
