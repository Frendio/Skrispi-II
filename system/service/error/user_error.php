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
    
    REQUIRE CONFIGURATION_PATH  . "routes.php";

    if($route['status'] == 'development' || !defined('AJAXPATH'))
    {
        title('MadeLine Development Error');
        system_css('PNF');
        system_css('ML_alert');
        system_css('ML_notifier');
        system_css('madeline');
        bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');  
    
        to('div','class::body*ajax-body');        
            to('div','class::sr_body*ucr_sr_body id::sr_body');            
                to('div','class::mydiv*md-crs id::mydiv');
                    to('div','class::mfw-holder*ajax-mfw-holder');                    
                        to('div', 'class::mf-instruction*rfc*ajax-mfi');
                            show(make('b','WARNIG!'));
                        tc('div');

                        to('div', 'class::path-h*ajax-path-h');
                            to('code','class::err-p*ajax-err-p');
                                show($data);
                            tc('code');
                        tc('div');                    
                    tc('div');                    
                tc('div');                    
            tc('div');                    
        tc('div');
    }
    else
    {
        show($data);
    }                    
?>