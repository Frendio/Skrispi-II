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

    class ML_pagination_url extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();            
        }

        public function index() 
        {
            $page   = $this->input->post('page');
            $url    = $this->input->post('url');
            if($page < 1)
            {
                $page = ($page === '0') ? 1 : $page * (-1);
            }
            redirect("$url/$page");
        }
    }
?>
