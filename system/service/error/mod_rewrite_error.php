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
        title('PHP Version Error');
        responsive_meta();
        
        system_css('reset');
        system_css('font');
        system_css('PNF');
        system_css('ML_alert');
        system_css('ML_notifier');
        system_css('madeline');
        
        bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');   
    tc('head');  
    
    to('body');
        to('div', 'class::body');
            to('div', 'class::sr_body*ucr_sr_body id::sr_body');
                to('div', 'class::mydiv*md-crs id::mydiv');
                    to('div','class::pnf-header*mfn-fsize');
                        tag('img', 'class::pnf-ad src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
                        bl();
                        to('span').show('Made').tc('span');
                        to('span','class::ml-line').show('Line').tc('span');
                        to('div','class::ml-line style::font-size:14.7px;*margin-top:-5px').show('PHP - Ajax Framework').tc('div');
                        bl();
                        show('mod_rewrite Not Enabled');
                        bl(2);
                    tc('div');

                    to('div', 'class::pnf-holder');
                        tag('img', 'class::pnf-image src::'.BASE_URL.'system_config/ML_Assets/error/404.png');
                        to('div', 'class::pnf-iholder');
                            show('We are sorry, but mod_rewrite is not enabled in your server.');
                            bl(2);
                            show('Dont Worry!');
                            bl();
                            show('You can set the configuration or contact your server admin and request!');
                            bl(2);
                            show('Sorry for any inconvinient, Kindly Regards');
                            bl(2);
                            show('-- MadeLine --');
                        tc('div');
                    tc('div');
                tc('div');
            tc('div');
        tc('div');
    tc('body');

?>