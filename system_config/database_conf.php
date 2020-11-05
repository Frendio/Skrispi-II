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

    class Database_Conf extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();                          
        }

        # ============================================#
        # D A T A B A S E   C O N F I G U R A T I O N #
        # ============================================#
        
        public function index() 
        {               
            $this->library('form');    
            $this->form->input('host, user, fetch_type');
            
            if($this->form->validate()) 
            {
                $host       = $this->input->post('host');
                $user       = $this->input->post('user');
                $password   = $this->input->post('password');
                $dbname     = $this->input->post('dbname');
                $fetch_type = $this->input->post('fetch_type');

                    
                $lines      = file(CONFIGURATION_PATH.'database.php');
                $str        = file_get_contents(CONFIGURATION_PATH.'database.php');
    
                $dbconfig['host']       = $host;        
                $dbconfig['user']       = $user;        
                $dbconfig['password']   = $password;        
                $dbconfig['dbname']     = $dbname;        
                $dbconfig['fetch_type'] = $fetch_type;
                $connection             = new ML_DB_Connection($dbconfig);  

                foreach($lines as $line) 
                {
                    if(strpos(strtolower($line), '=>') !== false) 
                    { 
                        $call  = explode('=>', $line);
                                            
                        $name   = str_replace(',','',$call[0]);
                        $name   = str_replace(",",'',$name);
                        $name   = str_replace("'",'',$name);
                        $name   = str_replace("\n",'',$name);
                        $name   = str_replace(" ",'',$name);

                        $value  = str_replace(',','',$call[1]);
                        $value  = str_replace(",",'',$value);
                        $value  = str_replace("\n",'',$value);
                        $value  = str_replace(" ",'',$value);
                        
                        if($name == 'host' && $this->input->post($name) == '') 
                        {
                            if($value == 'DB_H') 
                            {                                
                                $new        = ''.$call[0].' => \''.$value.'\','."\n";
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' => \'DB_H\','."\n";
                            }
                        } 
                        else if($name == 'user' && $this->input->post($name) == '') 
                        {
                            if($value == 'DB_U') 
                            {
                                $new        = ''.$call[0].' => \''.$value.'\','."\n";                                
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' => \'DB_U\','."\n";
                            }
                        } 
                        else if($name == 'password' && $this->input->post($name) == '') 
                        {
                            if($value == 'DB_P') 
                            {
                                $new        = ''.$call[0].' => \''.$value.'\','."\n";                                
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' => \'DB_P\','."\n";
                            }
                        } 
                        else if($name == 'dbname' && $this->input->post($name) == '') 
                        {
                            if($value == 'DB_N') 
                            {
                                $new        = ''.$call[0].' => \''.$value.'\','."\n";                                
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' => \'DB_N\','."\n";
                            }
                        }
                        else if($name == 'fetch_type' && $this->input->post($name) == '') 
                        {
                            if($value == 'DB_RS') 
                            {
                                $new        = ''.$call[0].' => \''.$value.'\''."\n";                                
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' => \'DB_RS\''."\n";
                            }
                        }
                        else
                        {
                            if($name == 'fetch_type') 
                            {
                                $new            = ''.$call[0].' => \''.$this->input->post($name).'\''."\n";
                            } 
                            else 
                            {
                                $new            = ''.$call[0].' => \''.$this->input->post($name).'\','."\n";
                            }
                        }

                        $str = str_replace($line, str_replace(' => ', "=> ", $new), $str);

                        file_put_contents(CONFIGURATION_PATH.'database.php', $str);
                    }
                }

                echo 'done';
                exit();
            } 
            else 
            {
                echo 'error::'.$this->form->empty();
            }
        }
    }
?>