<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html', 'lang::en');
    to('head');
      title('Manual | Developer Profile');
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
              to('a', 'class::link*docs href::configuration'.$this->ml_config_uri).show('MadeLine Configuration &nbsp;').tc('a') .' '. arrow().show('&nbsp; Developer Profile');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');          
              to('div', 'class::dp-content-wrap style::margin:30px*0*0*0');
                to('div', 'class::dp-picture style::background:url('.BASE_URL.'system_config/ML_Assets/developer/stevando.jpeg)*no-repeat*top*center;*background-size:cover;').tc('div');
                to('div', 'class::dp-content');
                  
                  to('div', 'class::dp-detail-wrap');
                    to('div','class::dp-det-att').show('Name :').tc('div');
                    to('div','class::dp-det-val').show('Stevani Andolo').tc('div');
                  tc('div');
                  
                  to('div', 'class::dp-detail-wrap');
                    to('div','class::dp-det-att').show('Occupation :').tc('div');
                    to('div','class::dp-det-val').show('Senior full stack web developer, Junior mobile developer (React Native), System Design and Analyst & DBMS').tc('div');
                  tc('div');
                    
                  to('div', 'class::dp-detail-wrap');
                    to('div','class::dp-det-att').show('Research Area :').tc('div');
                    to('div','class::dp-det-val').show('Web Development, PHP web application framework & mobile developement').tc('div');
                  tc('div');
                  
                tc('div');  
              tc('div');            
            tc('div');

            ul();

            INCLUDE ML_CONFIG_PATH.'navigation/footer.php';

          tc('div');
        tc('section');
      tc('div');

      ajax();
      system_js('ajax_function');
      system_js('ajax_return');    
    tc('body');
  tc('html');
?>

