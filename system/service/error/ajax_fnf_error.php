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
    
    to('head');    
        title('Error');
        base_url();
        responsive_meta();

        system_css('font');
        system_css('PNF');
        system_css('madeline');
        system_css('ML_alert');
        system_css('ML_notifier');

        bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');        
    tc('head');
        
    to('body');    
        to('div','class::body');        
            to('div','class::sr_body*ucr_sr_body id::sr_body');            
                to('div','class::mydiv*md-crs id::mydiv');
                    to('div','class::mfw-holder*ajax-mfw-holder');                    
                        to('div', 'class::mf-instruction*rfc');
                            show(make('b','WARNIG!'));
                            bl();
                        tc('div');
                        
                        if($type == 'views')
                        {
                            $f_type = 'views';
                        }
                        else if($type == 'models')
                        {
                            $f_type = 'models';
                        }
                        else if($type == 'controllers')
                        {
                            $f_type = 'controllers';
                        }
                        else if($type == 'libraries')
                        {
                            $f_type = 'library';
                        }
                        else if($type == 'my_libraries')
                        {
                            $f_type = 'my_libraries';
                        }
                        else if($type == 'mylibraries')
                        {
                            $f_type = 'my_libraries';
                        }
                        else if($type == 'library')
                        {
                            $f_type = 'library';
                        }
                        else if($type == 'ajaxviews')
                        {
                            $f_type = 'ajax_views';
                        }
                        else if($type == 'configuration')
                        {
                            $f_type = 'configuration';
                        }
                        else if($type == 'database')
                        {
                            $f_type = 'database';
                        }
                        else if($type == 'ugcontrollers')
                        {
                            $f_type = 'ug_controllers';
                        }

                        if($f_type == 'library')
                        {
                            $dir_path = LIBRARY_PATH;
                        }
                        else if($f_type == 'configuration')
                        {
                            if($directory['system'] == 'S_D')
                            {
                                $app_fn = strtoupper('system_path');
                            }
                            else
                            {
                                $app_fn = strtoupper($directory['system'].'_path');
                            }
                            $dir_path = constant($app_fn).$f_type.'';                            
                        }
                        else
                        {
                            if($directory['application'] == 'A_D')
                            {
                                $app_fn = strtoupper('application_path');
                            }
                            else
                            {
                                $app_fn = strtoupper($directory['application'].'_path');
                            }
                            $dir_path = constant($app_fn).$f_type.'';
                        }

                        if($undefined == 'method')
                        {
                            to('div', 'class::err-f');
                                show(''.make('b,i',"\"".$method."\"").' method is not defined in your :');
                            tc('div');
                    
                            to('div', 'class::path-h');
                                to('code','class::err-p');
                                    show(str_replace(getcwd()."/",'',"$path/$file_name.php"));
                                tc('code');
                            tc('div');
                        }
                        else
                        {
                            to('div', 'class::err-f');
                                show(''.make('b,i',"\"".$file_name.".php\"").' '.$f_type.' is not found in your :');
                            tc('div');
                    
                            to('div', 'class::path-h');
                                to('code','class::err-p');
                                    show(str_replace(getcwd()."/",'',$dir_path));
                                tc('code');
                            tc('div');
                        }                    
                    tc('div');                    
                tc('div');                    
            tc('div');                    
        tc('div');                    
    tc('body');                    
?>