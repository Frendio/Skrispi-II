<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html', 'lang::en');
    to('head');
      title('MadeLine | Configuration');
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
              show(' MadeLine Configuration');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');  
              to('a', 'class::ns-link href::'.BASE_URL.'configuration/database'.$this->ml_config_uri);
                  to('div', 'class::conf-menu*db_conf');
                      tag('img', 'class::conf-icon src::'.BASE_URL.'system_config/ML_Assets/icons/db.png');
                      to('div', 'class::conf-menu-name');
                          show('Database Configuration');
                      tc('div');
                  tc('div');
              tc('a');

              to('a', 'class::ns-link href::'.BASE_URL.'configuration/directory'.$this->ml_config_uri);
                  to('div', 'class::conf-menu*dir_conf');
                      tag('img', 'class::conf-icon src::'.BASE_URL.'system_config/ML_Assets/icons/directory.png');
                      to('div', 'class::conf-menu-name');
                          show('Directory Configuration');
                      tc('div');
                  tc('div');
              tc('a');

              to('a', 'class::ns-link href::'.BASE_URL.'configuration/route'.$this->ml_config_uri);
                  to('div', 'class::conf-menu*route_conf');
                      tag('img', 'class::conf-icon src::'.BASE_URL.'system_config/ML_Assets/icons/route.png');
                      to('div', 'class::conf-menu-name');
                          show('Route Configuration');
                      tc('div');
                  tc('div');
              tc('a');              
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