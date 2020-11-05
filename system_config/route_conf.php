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

    class Route_Conf extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();            
        }

        # ======================================#
        # R O U T E   C O N F I G U R A T I O N #
        # ======================================#
        
        public function index() 
        {               
            $this->library('form');    
            $this->form->input('default_controller, default_method, status, ApiLine_API_Key');
            
            if($this->form->validate()) 
            {                    
                $lines      = file(CONFIGURATION_PATH.'routes.php');
                $str        = file_get_contents(CONFIGURATION_PATH.'routes.php');

                foreach($lines as $line) 
                {
                    if(strpos(strtolower($line), '=') !== false) 
                    { 
                        $call  = explode('=', $line);
                                            
                        $name   = str_replace(',','',$call[0]);
                        $name   = str_replace("'",'',$name);
                        $name   = str_replace("\n",'',$name);
                        $name   = str_replace(" ",'',$name);
                        $name   = str_replace('$route','',$name);
                        $name   = str_replace('$GLOBALS','',$name);
                        $name   = str_replace('[','',$name);
                        $name   = str_replace(']','',$name);
                        
                        $value  = str_replace(";",'',$call[1]);
                        $value  = str_replace("\n",'',$value);
                        $value  = str_replace(" ",'',$value);
                        $value  = str_replace("'",'',$value);
                        $value  = str_replace(",",', ',$value);
                        
                        if($name == '404_image' && $this->input->post($name) == '') 
                        {
                            if($value == 'N_F')
                            {                                
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'N_F\';'."\n";
                            }
                        } 
                        else if($name == '404_custom_page' && $this->input->post($name) == '') 
                        {
                            if($value == 'NF_CP')
                            {                                
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'NF_CP\';'."\n";
                            }
                        } 
                        else if($name == '403_custom_page' && $this->input->post($name) == '') 
                        {
                            if($value == 'FA_CP')
                            {                                
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'FA_CP\';'."\n";
                            }
                        }
                        else if($name == 'autoLoad_js_files' && $this->input->post($name) == '') 
                        {
                            if($value == 'AL_JSF') 
                            {
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";                                
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'AL_JSF\';'."\n";
                            }
                        } 
                        else if($name == 'autoLoad_css_files' && $this->input->post($name) == '') 
                        {
                            if($value == 'AL_CSSF') 
                            {
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";                                
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'AL_CSSF\';'."\n";
                            }
                        }
                        else if($name == 'ApiLine_API_Key' && $this->input->post($name) == '') 
                        {
                            if($value == 'ML_API_ID') 
                            {
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";                                
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'ML_API_ID\';'."\n";
                            }
                        }
                        else if($name == 'configuration_API_Key' && $this->input->post($name) == '') 
                        {
                            if($value == 'ML_CONFIG_API_ID') 
                            {
                                $new    = ''.$call[0].' = \''.$value.'\';'."\n";                                
                            } 
                            else 
                            {
                                $new    = ''.$call[0].' = \'ML_CONFIG_API_ID\';'."\n";
                            }
                        }
                        else 
                        {
                            $new        = ''.$call[0].' = \''.$this->input->post($name).'\';'."\n";
                        }

                        $str = str_replace($line, str_replace(' = ', "= ", $new), $str);

                        file_put_contents(CONFIGURATION_PATH.'routes.php', $str);
                    }
                }
                echo 'done';
            } 
            else 
            {
                echo 'error::'.$this->form->empty();
            }
        }
    }
?>