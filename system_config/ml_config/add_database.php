<?php

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    doctype();
    to('html', 'lang::en');
        to('head');
            title('MadeLine | Configuration | Add Database');
            tag('meta', 'charset::utf-8');
            responsive_meta();
            base_url();

            system_css('reset');
            system_css('font');
            system_css('madeline');
            system_css('manual-ls');
            bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');
        tc('head');

        to('body', 'role::content');
            to('div', 'class::inner-body');
                INCLUDE ML_CONFIG_PATH.'navigation/left-menu.php';
                to('div', 'class::mm-menu*show-mmm');
                    tag('img', 'src::'.BASE_URL.'system_config/ML_Assets/icons/menu.png');
                tc('div');
                to('div', 'class::rsb-heading*hide');
                    to('a', 'href::');
                        tag('img','class::manual-mi src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
                        to('div', 'class::rsm-heading');
                            to('div', 'class::manual-lfn style::letter-spacing:1.7px').
                                to('span', 'style::color:#006d88').show('Made').tc('span').
                                to('span').show('Line').tc('span').
                            tc('div');
                            to('div', 'class::manual-lfn*bot-manual-lfn').show('PHP - Ajax Framewok').tc('div');
                        tc('div');
                    tc('a');
                tc('div');
                to('section', 'class::wy-nav-content-wrap');
                    to('div', 'class::wy-nav-content');
                        to('div' ,'class::head-nav role::navigation');
                            to('a', 'class::link*docs href::configuration'.$this->ml_config_uri).show('MadeLine Configuration &nbsp;').tc('a') .' '. arrow().show('&nbsp; Add Database');
                        tc('div');
                        ul();                    
                        to('div', 'id::content-holder');                    
                            to('form', 'class::add_database ajax::1');
                                to('table', 'class::ml-table');
                                    to('tr', 'class::bb');
                                        to('td', 'class::td-table').show('Database Name').tc('td');
                                        to('td');
                                            tag('input', 'class::ML-input-full*ML-rounded*ML-border-gray*db-name ac::off type::text name::db-name placeholder::input*db*name');
                                        tc('td');
                                    tc('tr');                            
                                    to('tr');
                                        to('td', 'class::td-table').tc('td');
                                        to('td');
                                            to('button', 'class::ganti_password*db_con').show('Create New Database').tc('button');
                                        tc('td');
                                    tc('tr');                                
                                tc('table');
                            tc('form');                        
                        tc('div');
                        ul();
                        INCLUDE ML_CONFIG_PATH.'navigation/footer.php';
                    tc('div');
                tc('section');
            tc('div');

            ajax();
            system_js('ajax_function');
            system_js('ajax_return');
            
            ml_alert();
        tc('body');
    tc('html');
?>