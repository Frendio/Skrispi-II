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

    DEFINED('AJAXPATH') OR exit(header('location: 303'));

    class Drop_Database_Conf extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();
            $this->library('form');
        }

        # ======================================================#
        # D R O P   D A T A B A S E   C O N F I G U R A T I O N #
        # ======================================================#

        public function index() 
        {
            $this->form->input('db-name');
            if($this->form->validate()) 
            {
                $db_name    = strtolower($this->input->post('db-name'));
                $sql        = "DROP DATABASE `{$db_name}`";

                # execute
                $this->model->execute($sql);
                    
                # close db conn
                $this->model->close_conn();
                
                # responds back to ajax return and exit the process
                echo 'done::'.$db_name;
                exit();
            } 
            else 
            {
                # responds back to ajax return and exit the process
                echo 'error::'.$this->form->empty();
                exit();
            }
        }
    }
?>