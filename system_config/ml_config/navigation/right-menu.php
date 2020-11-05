<?php

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    REQUIRE CONFIGURATION_PATH.'routes.php';
    $ml_config_uri = '';
    if(!empty($GLOBALS['configuration_API_Key']))
    {
        $ml_config_uri  = (last_ori_uri === $GLOBALS['configuration_API_Key']) ? '/'.$GLOBALS['configuration_API_Key'] : '';
    }

    if(last_ori_uri === CONF_API && $route['right_configuration'] == 'show' || CONF_API === 'ML_CONFIG_API_ID' && $route['right_configuration'] == 'show') {
        if(uri1 != '' || $route['default_controller'] != 'welcome') {
        to('div','class::ml-rs-conf');                    
            to('a', 'class::ml-ns-link href::'.BASE_URL.'manual/english'.$ml_config_uri);
                to('div', 'class::ml-conf-menu*ml-rsc');
                    tag('img', 'class::ml-conf-icon*ml-rsc-icon src::'.BASE_URL.'system_config/ML_Assets/icons/manual.png');
                    to('div', 'class::ml-conf-menu-name*ml-rsc-fs*ml-mcolor');
                        show('User Manual').bl();
                        show('[English]');
                    tc('div');
                tc('div');
            tc('a');

            to('a', 'class::ml-ns-link href::'.BASE_URL.'configuration'.$ml_config_uri);
                to('div', 'class::ml-conf-menu*ml-rsc');
                    tag('img', 'class::ml-conf-icon*ml-rsc-icon src::'.BASE_URL.'system_config/ML_Assets/icons/config.png');
                    to('div', 'class::ml-conf-menu-name*ml-rsc-fs*ml-cfc');
                        show('MadeLine').bl();
                        show('Configuration');
                    tc('div');
                tc('div');
            tc('a');

            to('a', 'class::ml-ns-link*ml-mcolor href::'.BASE_URL.'manual/bahasa'.$ml_config_uri);
                to('div', 'class::ml-conf-menu*ml-rsc');
                    tag('img', 'class::ml-conf-icon*ml-rsc-icon src::'.BASE_URL.'system_config/ML_Assets/icons/manual.png');
                    to('div', 'class::ml-conf-menu-name*ml-rsc-fs*ml-mcolor');
                        show('User Manual').bl();
                        show('[Bahasa]');
                    tc('div');
                tc('div');
            tc('a');
        tc('div');
        }
    }

?>