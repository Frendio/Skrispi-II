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
        responsive_meta();

        system_css('reset');
        system_css('font');
        system_css('PNF');
        system_css('madeline');
        system_css('manual-ls');
        system_css('ML_alert');
        system_css('ML_notifier');

        bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');        
    tc('head');
        
    to('body');    
        to('div','class::body');    
            to('div','class::pnf-header*mfn-fsize');
                tag('img','class::pnf-ad src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
                bl();
                to('span').show('M a d e').tc('span');  
                to('span','class::ml-line').show(' L i n e').tc('span');                
            tc('div');
        
            to('div','class::sr_body*ucr_sr_body id::sr_body');            
                to('div','class::mydiv*md-crs id::mydiv');
                    to('div','class::mfw-holder');
                        to('div','class::mli-holder');                    
                            to('div', 'class::mf-instruction*rfc');
                                show(make('b','WARNIG!'));
                                bl();
                            tc('div');

                            $url        = isset($_GET['url']) ? $_GET['url'] : null;
                            $url        = explode('/', str_replace('-','_',rtrim($url, '/')));                        
                            $url_count  = count($url);

                            $name       = '';
                            $file_name  = '';
                            $file_path  = '';
                            $url_name   = array();
                            $url_index  = array();
                            $found      = array();
                            $counter    = 0;
                                
                            $data       = array_filter(glob('application/controllers/*'), 'is_dir');
                            $data_count = count($data);
                            $ak         = array_keys($data);

                            if($url[0] != '')
                            {
                                for($i = 0; $i < $url_count; $i++)
                                {                                    
                                    if($data_count == 0)
                                    {
                                        if (!file_exists(CONTROLLERS_PATH  . $url[$i].'.php'))
                                        {
                                            array_push($url_name, $url[$i]);
                                            array_push($found, $i);
                                            break;
                                        }
                                    }
                                    else
                                    {
                                        for($iz = 0; $iz < $data_count; $iz++)
                                        {
                                            $fn_constant = $data[$ak[$iz]];

                                            if (!file_exists(CONTROLLERS_PATH  . $url[$i].'.php'))
                                            {
                                                if (!file_exists(MADELINE . $fn_constant . DS . $url[$i].'.php'))
                                                { 
                                                    array_push($url_name, $url[$i]);
                                                    array_push($found, $i);
                                                    break;
                                                }
                                                break;
                                            }                         
                                        }
                                    }
                                    array_push($url_index, $i);
                                }
                            }
                            else
                            {
                                for($i = 0; $i < $url_count; $i++)
                                {   
                                    if($data_count == 0)
                                    {
                                        if (!file_exists(CONTROLLERS_PATH  . $route['default_controller'].'.php'))
                                        {
                                            array_push($url_name, $route['default_controller']);
                                            break;
                                        }
                                    }
                                    else
                                    {
                                        for($iz = 0; $iz < $data_count; $iz++)
                                        {
                                            $fn_constant = $data[$ak[$iz]];

                                            if (!file_exists(CONTROLLERS_PATH  . $route['default_controller'].'.php'))
                                            {
                                                if (!file_exists(MADELINE . $fn_constant . DS . $route['default_controller'].'.php'))
                                                { 
                                                    array_push($url_name, $route['default_controller']);
                                                    break;
                                                }
                                                break;
                                            }                         
                                        }
                                    }
                                    array_push($url_index, $i);
                                }
                            }

                            if($url[0] != '')
                            {
                                for($i = 0; $i < $url_count; $i++)
                                { 
                                    for($iz = 0; $iz < $data_count; $iz++)
                                    {
                                        $fn_constant = $data[$ak[$iz]];
                                        
                                        if (file_exists(CONTROLLERS_PATH  . $url[$i].'.php'))
                                        {
                                            $file_path  = str_replace(getcwd().DS, '', CONTROLLERS_PATH);
                                        }
                                        else if (file_exists(MADELINE . $fn_constant . DS . $url[$i].'.php'))
                                        {
                                            $file_path  = str_replace(getcwd().DS, '', MADELINE . $fn_constant);
                                        }                              
                                    }
                                }
                            }
                            else
                            {
                                for($i = 0; $i < $url_count; $i++)
                                { 
                                    for($iz = 0; $iz < $data_count; $iz++)
                                    {
                                        $fn_constant = $data[$ak[$iz]];
                                        
                                        if (file_exists(CONTROLLERS_PATH  . $route['default_controller'].'.php'))
                                        {
                                            $file_path  = str_replace(getcwd().DS, '', CONTROLLERS_PATH);
                                        }
                                        else if (file_exists(MADELINE . $fn_constant . DS . $route['default_controller'].'.php'))
                                        {
                                            $file_path  = str_replace(getcwd().DS, '', MADELINE . $fn_constant);
                                        }                              
                                    }
                                }
                            }

                            if(isset($found[0]) && $found[0] != '')
                            {                            
                                $name   = $url_name[0];
                                
                                if($found[0] < $url_count)
                                {
                                    for($i = 0; $i < $url_count; $i++)
                                    {
                                        if($url[$i] == $name)
                                        {
                                            $file_name  = $url[$i-1];
                                        }
                                    }
                                }
                                else
                                {
                                    $file_name  = $url_name[0];
                                }
                            }
                            else
                            {
                                $name   = $url[0];
                            }


                            if($url_count <= 1)
                            {
                                to('div', 'class::err-f');
                                    if($name == '')
                                    {
                                        if(isset($url_name[0]) && $url_name[0] != '')
                                        {
                                            show(make('b', "Default Controller").' ('.make('b,i', $route['default_controller']).') set in ');
                                            to('a','class::link*docs href::configuration/route').show(make('b', "Route Configuration")).tc('a');
                                            show(' is not found in your:');

                                            to('div', 'class::path-h');
                                                to('code','class::err-p');
                                                    show(str_replace(getcwd().DS,'',CONTROLLERS_PATH));
                                                tc('code');
                                            tc('div');
                                        }
                                        else
                                        {
                                            show(make('b', "Default Method").' "'.make('b,i', $route['default_method']).'" set in ');
                                            to('a','class::link*docs href::configuration/route').show(make('b', "Route Configuration")).tc('a');
                                            show(' is not defined in your:');

                                            to('div', 'class::path-h');
                                                to('code','class::err-p');
                                                    show(str_replace(getcwd().DS,'',$file_path.''.$route['default_controller'].'.php'));
                                                tc('code');
                                            tc('div');
                                        }
                                    }
                                    else
                                    {
                                        show($name.'.php is not found in your :');
                                        
                                        to('div', 'class::path-h');
                                            to('code','class::err-p');
                                                show(str_replace(getcwd().DS,'',CONTROLLERS_PATH));
                                            tc('code');
                                        tc('div');
                                    }
                                tc('div');                            
                            }
                            else
                            {
                                if($url[0] == $name)
                                {
                                    to('div', 'class::err-f');
                                        show($name.'.php is not found in your :');
                                    tc('div');
                                
                                    to('div', 'class::path-h');
                                        to('code','class::err-p');
                                            show(str_replace(getcwd().DS,'',CONTROLLERS_PATH));
                                        tc('code');
                                    tc('div');
                                }
                                else
                                {
                                    if(method_exists($file_name,$name))
                                    {
                                        to('div', 'class::err-f');
                                            show('Requested controller and method exist!');
                                        tc('div');
                                        
                                        to('div', 'class::path-h');
                                            to('code','class::err-p');
                                                show(make('b,i','Check the requested ID(s) in your URL'));
                                            tc('code');
                                        tc('div');
                                    }
                                    else
                                    {
                                        to('div', 'class::err-f');
                                            show(make('b,i',"\"".$name)."\"".' method is not defined in your :');
                                        tc('div');
                                        
                                        to('div', 'class::path-h');
                                            to('code','class::err-p');
                                                show($file_path.DS.$file_name.'.php');
                                            tc('code');
                                        tc('div');
                                    }
                                }
                            }

                            to('div', 'class::pnf-bholder*bh-relative');
                                to('a', 'class::ns-link');
                                    to('button', 'class::pnf-button*ed-bcolor click::window.history.back()').show('Go Back').tc('button');
                                tc('a');

                                to('a', 'class::ns-link href::'.BASE_URL.'');
                                    to('button', 'class::pnf-button*ed-bcolor').show('Home').tc('button');
                                tc('a');
                            tc('a');
                        tc('div');                    
                    tc('div');                    
                tc('div');                    
            tc('div');                    
        tc('div');                    
    tc('body');                    
?>