<?php

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    # add doctype() in view
    doctype();

    # ad open html tag
    to('html', 'lang::en');
        to('head');
            base_url();
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
        to('head');

        to('body');
            to('div', 'class::body');
                to('div', 'class::pnf-header*mfn-fsize');
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

                                if(!empty($controller) && !empty($method))
                                {
                                    to('div', 'class::err-f');
                                        show(make('b,i',"\"".$method)."\"".' method is not defined in your :');
                                    tc('div');
                                    
                                    to('div', 'class::path-h');
                                        to('code','class::err-p');
                                            show(str_replace(getcwd().DS, '', $controller));
                                        tc('code');
                                    tc('div');
                                }
                                else
                                {
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
                                                show('Requested ').make('b,i','"'.$name.'.php controller"').show(' is not found in your :');
                                                
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
                                                show('Requested ').make('b,i','"'.$name.'.php controller"').show(' is not found in your :');
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
    tc('html'); 
?>
