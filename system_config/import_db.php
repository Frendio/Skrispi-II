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

    class Import_Db extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();
            $this->library('file, form');

            $dbconfig['host']       = $GLOBALS['configuration']['host'];    
            $dbconfig['user']       = $GLOBALS['configuration']['user'];    
            $dbconfig['password']   = $GLOBALS['configuration']['password'];    
            $dbconfig['dbname']     = $GLOBALS['configuration']['dbname'];    
            $dbconfig['fetch_type'] = $GLOBALS['configuration']['fetch_type'];           
    
            $this->db               = new ML_DB_Connection($dbconfig); 
        }

        # ====================================================#
        # A D D   D A T A B A S E   C O N F I G U R A T I O N #
        # ====================================================#
        
        public function index() 
        {
            $config['input_name']   = 'db_file';
            $config['path']         = 'system/database';
            $config['type']         = 'sql';

            if($this->file->upload($config))
            {
                $templine   = ''; 
                $filename   = $this->file->name();
                $lines      = file(MADELINE.'system/database/'.$filename);

                foreach ($lines as $line)
                { 
                    # Skip comment 
                    if (substr($line, 0, 2) == '--' || $line == '' || substr($line, 0, 2) == '/*') continue; 
                    
                    # Add this line to the current segment 
                    $templine .= $line; 
                    
                    # If it has a semicolon at the end, it's the end of the query 
                    if (substr(trim($line), -1, 1) == ';') 
                    {                    
                        if(!$this->db->execute($templine))
                        {
                            exit('Error performing query '.$templine);
                        }
                        $templine = '';
                    }
                }

                $this->file->delete('system/database/'.$filename);
                    
                # close db conn
                $this->model->close_conn();
                
                # responds back to ajax return and exit the process
                exit('done::Tables imported successfully');
            }
            else
            {
                exit('error::db_file::asdf');
            }
        }
    }
?>