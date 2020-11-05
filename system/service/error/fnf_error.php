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

    # add doctype() in view
    doctype();
    
    # ad open html tag
    to('html', 'lang::en');
        to('head');    
            title('MadeLine Development Error');
            responsive_meta();

            system_css('reset');
            system_css('bs/bs-font');
            system_css('font');
            system_css('ML_alert');
            system_css('ML_notifier');
            system_css('madeline');
            system_css('manual-ls');
            system_css('ML-template');

            bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');        
        tc('head');
            
        to('body');    
            to('div','class::body');    
                to('div','class::pnf-header*mfn-fsize');
                    tag('img', 'class::pnf-ad src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
                    bl();
                    to('span').show('Made').tc('span');
                    to('span','class::ml-line').show('Line').tc('span');
                    to('div','class::ml-line style::font-size:14.7px;*margin-top:-5px').show('PHP - Ajax Framework').tc('div');
                tc('div');
            
                to('div','class::sr_body*ucr_sr_body id::sr_body');            
                    to('div','class::mydiv*md-crs id::mydiv');
                        to('div','class::mfw-holder');
                            to('div','class::mli-holder');                    
                                to('div', 'class::mf-instruction*rfc');
                                    show(make('b','WARNIG!'));
                                    bl();
                                tc('div');
                                
                                if($type == 'ajaxviews')
                                {
                                    $f_type = 'ajax_view';
                                }
                                else if($type == 'views' || $type == 'ugviews')
                                {
                                    $f_type = 'view';
                                }
                                else if($type == 'models')
                                {
                                    $f_type = 'model';
                                }
                                else if($type == 'controllers')
                                {
                                    $f_type = 'controller';
                                }
                                else if($type == 'libraries')
                                {
                                    $f_type = 'library';
                                }
                                else if($type == 'mylibraries' || $type == 'uglibraries')
                                {
                                    $f_type = 'my_library';
                                }
                                else if($type == 'my_libraries')
                                {
                                    $f_type = 'my_library';
                                }
                                else if($type == 'library')
                                {
                                    $f_type = 'library';
                                }
                                else if($type == 'mlviews')
                                {
                                    $f_type = 'ml_view';
                                }
                                else if($type == 'mlcontroller' || $type == 'ugcontrollers')
                                {
                                    $f_type = 'controller';
                                }

                                if($f_type == 'library')
                                {
                                    $dir_path = LIBRARY_PATH;
                                }
                                else if($f_type == 'ml_views')
                                {
                                    if($directory['system'] == 'S_D')
                                    {
                                        $app_fn = strtoupper('system_path');
                                    }
                                    else
                                    {
                                        $app_fn = strtoupper($directory['system'].'_path');
                                    }
                                    $dir_path = constant($app_fn).$f_type;                                
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
                                    $dir_path = constant($app_fn).$f_type;                                
                                }

                                // if(strpos($file_name, '/') !== false)
                                // {
                                //     $file_name = explode('/', $file_name);
                                //     $file_name = end($file_name);
                                // }
                                // else
                                // {
                                //     $file_name = $file_name;
                                // }

                                to('div', 'class::err-f');
                                    show('Requested ').make('b,i',"\"".$file_name.".php $f_type\"").show(' is not found in your :');
                                tc('div');
                            
                                to('div', 'class::path-h');
                                    to('code','class::err-p');
                                        show(str_replace(getcwd()."/",'',$dir_path));
                                    tc('code');
                                tc('div');                    
                            tc('div');
                        tc('div');                    
                    tc('div');                    
                tc('div');                    
            tc('div');
        tc('body');
    tc('html');
?>