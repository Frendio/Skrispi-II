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

    class Directory_Conf extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();            
        }

        # ==============================================#
        # D I R E C T O R Y   C O N F I G U R A T I O N #
        # ==============================================#
        
        public function index() 
        {               
            $this->library('form');    
            $this->form->input('application:0, system:0');
            
            if($this->form->validate()) 
            {                    
                $lines      = file(SYSTEM_CONFIG_PATH.'directory_configuration.php');
                $str        = file_get_contents(SYSTEM_CONFIG_PATH.'directory_configuration.php');

                $existed    = '';
                $succeed    = '';
                $not_found  = '';

                foreach($lines as $line) 
                {
                    if(strpos(strtolower($line), '=') !== false) 
                    { 
                        $call   = explode('=', $line);
                                            
                        $name   = str_replace("'",'',$call[0]);
                        $name   = str_replace(" ",'',$name);
                        $name   = str_replace('$directory','',$name);
                        $name   = str_replace('[','',$name);
                        $name   = str_replace(']','',$name);
                        
                        $value  = str_replace(";",'',$call[1]);
                        $value  = str_replace("'",'',$value);
                        $value  = str_replace("\n",'',$value);
                        $value  = str_replace(" ",'',$value);
                        $value  = str_replace(",",', ',$value);


                        if($name == 'application' && $this->input->post($name) == '') 
                        {
                            if($value == 'A_D') 
                            {      
                                $new        = ''.$call[0].' = \''.$value.'\';'."\n";
                                $old_ADN    = 'application';
                                $new_ADN    = 'application';
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' = \'A_D\';'."\n";
                                $old_ADN    = "$value";
                                $new_ADN    = 'application';
                            }
                        }
                        else if($name == 'system' && $this->input->post($name) == '') 
                        {
                            if($value == 'S_D') 
                            {         
                                $new        = ''.$call[0].' = \''.$value.'\';'."\n";
                                $old_ADN    = 'system';
                                $new_ADN    = 'system';
                            } 
                            else 
                            {
                                $new        = ''.$call[0].' = \'S_D\';'."\n";
                                $old_ADN    = "$value";
                                $new_ADN    = 'system';
                            }
                        } 
                        else 
                        {
                            $new        = ''.$call[0].' = \''.$this->input->post($name).'\';'."\n";
                            
                            if($name == 'application' && $value == 'A_D') 
                            {        
                                $old_ADN    = 'application';
                            } 
                            else if($name == 'system' && $value == 'S_D') 
                            {       
                                $old_ADN    = 'system';
                            } 
                            else 
                            {
                                $old_ADN    = "$value";
                            }
                            $new_ADN    = $this->input->post($name);
                        }

                        $str = str_replace($line, str_replace(' = ', "= ", $new), $str);        
                        file_put_contents(SYSTEM_CONFIG_PATH.'directory_configuration.php', $str);
                        
                        REQUIRE SYSTEM_CONFIG_PATH.'directory_configuration.php';
                        
                        if(file_exists(MADELINE.$old_ADN) && is_dir(MADELINE.$old_ADN)) 
                        {
                            if(!file_exists(MADELINE.$new_ADN)) 
                            {                                
                                rename(MADELINE.$old_ADN, MADELINE.$new_ADN);
                                
                                if($directory['system'] == 'S_D') 
                                {
                                    file_put_contents(MADELINE."system/core/Constant.php", "");
                                } 
                                else 
                                {
                                    file_put_contents(MADELINE.$directory['system']."/core/Constant.php", "");
                                }

                                $succeed    .= $old_ADN.' to '.$new_ADN.' & ';
                            } 
                            else 
                            {
                                $existed .= $new_ADN.' & ';
                            }
                        } 
                        else 
                        {
                            $not_found  .= $old_ADN.' & ';
                        }                    
                    }
                }                

                if($succeed != '') 
                {    
                    $succeed = rtrim($succeed, ' & ');
                    echo 'done::'.$succeed;
                    exit();    
                } 
                else 
                {
                    if($existed != '') 
                    {    
                        $existed = rtrim($existed, ' & ');
                        echo 'existed::'.$existed;   
                    } 
                    else if($not_found != '') 
                    {    
                        $not_found = rtrim($not_found, ' & ');
                        echo 'nf::'.$not_found;      
                    }
                }
            } 
            else 
            {
                echo 'error::'.$this->form->empty();
            }
        }
    }
?>