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
    
    to('html');
        to('head');
            title('ML Error 403');
            responsive_meta();
            
            system_css('reset');
            system_css('font');
            system_css('PNF');
            system_css('ML_alert');
            system_css('ML_notifier');
            system_css('madeline');
            
            bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');   
        tc('head');
        
        to('body','class::ml-no-bak');
            to('div', 'class::nf_error style::background:url('.BASE_URL.'system_config/ML_Assets/error/403.jpg)*center*no-repeat;*background-size:cover;').tc('div');
            to('div', 'class::ml-bholder');
                to('div', 'class::ml-iholder');
                    show('Forbidden access!');
                    bl(2);
                tc('div');
                to('a', 'class::ns-link onclick::window.history.back();');
                    tag('button', 'class::pnf-button*ml-bfa*ml-button').show('Go Back').tc('button');
                tc('a');
                to('a', 'href::'.BASE_URL.'');
                    tag('button', 'class::pnf-button*ml-bfa*ml-button').show('Home').tc('button');
                tc('a');
            tc('div');
        tc('body');
    tc('html');
?>