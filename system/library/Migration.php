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
    
    class ML_Migration
    {    
        # Constructor
        #
        # creates ML_DB_Connection object    
        public function __construct()
        {    
            $dbconfig['host']       = $GLOBALS['configuration']['host'];    
            $dbconfig['user']       = $GLOBALS['configuration']['user'];    
            $dbconfig['password']   = $GLOBALS['configuration']['password'];    
            $dbconfig['dbname']     = $GLOBALS['configuration']['dbname'];    
            $dbconfig['fetch_type'] = $GLOBALS['configuration']['fetch_type'];           
    
            $this->db               = new ML_DB_Connection($dbconfig); 
        }
    
        # Create database
        public function create_database($db_name) 
        {
            # generates create database query
            $sql    = "CREATE DATABASE `{$db_name}`";
            # create new database
            $this->db->create_database($sql);
        }

        # Create database class
        public function _create_database($db_name) 
        {
            $go = "<?php \n\n";

            $go .= "\t CREATE FILE FOR \"$db_name\" DATABASE \n\n";

            $go .= "\tDEFINED('AJAXPATH') OR exit('header(location: 403)');\n\n";

            $go .= "\t".'class Migration_'.ucfirst($db_name).'_Database extends ML_Migration {'."\n\n";

                $go .= "\t\t\n";
                $go .= "\t\t # Performs create database.\n";
                $go .= "\t\t #\n";
                $go .= "\t\t # @return void\n";
                $go .= "\t\t \n\n";

                $go .= "\t\tpublic function create() {\n";
                    $go .= "\t\t\t".'$this->create_database(\''.$db_name.'\');'."\n";
                $go .= "\t\t}\n\n";

                $go .= "\t\t\n";
                $go .= "\t\t # Performs drop database.\n";
                $go .= "\t\t #\n";
                $go .= "\t\t # @return void\n";
                $go .= "\t\t \n\n";

                $go .= "\t\tpublic function drop() {\n";
                    $go .= "\t\t\t".'$this->drop_database(\''.$db_name.'\');'."\n";
                $go .= "\t\t}\n\n";
            
            $go .= "\t}\n\n";
            
            $go .= "?>";

            return $go;
        }        
    }    
?>