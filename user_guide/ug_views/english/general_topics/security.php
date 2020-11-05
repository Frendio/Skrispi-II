<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | General Topics | Security');
      responsive_meta();
      base_url();

      system_css('reset');
      system_css('font');
      bootstrap_icon();
      system_css('madeline');
      system_css('manual-ls');
      bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');
    tc('head');

    to('body', 'role::content');
      to('div', 'class::inner-body');

        INCLUDE USER_GUIDE_PATH.'ug_views/navigation/left-menu.php';

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
              to('a', 'class::link*docs href::manual/english').show('Manual &nbsp;').tc('a').arrow();
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; Security');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');
            
              to('h1','class::h1').show('Security').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Madeline comes with its own security prevention for the following security threats: ');
              tc('p');

              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/general-topics/security#sql-injection');
                    show('SQL Injection');
                  tc('a');
                tc('li');

                to('li');
                  to('a', 'class::link*docs href::manual/english/general-topics/security#xss');
                    show('Cross Site Scripting');
                  tc('a');
                tc('li');

                to('li');
                  to('a', 'class::link*docs href::manual/english/general-topics/security#xsrf');
                    show('Cross Site Request Forgery');
                  tc('a');
                tc('li');
              tc('ol');
              
              bl();
              
              to('h2','id::sql-injection').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('SQL Injection').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('SQL injection has become one of the major web security threatsdes. 
                      <br>To make your site free of this threat, MadeLine has inplemented an SQL Injection prevention when doing a form submission.');
              tc('p');
              
              bl();
              
              to('h2','id::xss').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Cross Site Scripting (XSS)').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('XSS has also become one of the major web security threats. 
                      <br>To make your site free of this threat, MadeLine has inplemented a prevention for this kind of threat when doing a form submission.');
              tc('p');
              
              bl();
              
              to('h2','id::xsrf').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Cross Site Request Forgery (XSRF)').
              tc('h2');
              
              to('p', 'class::welcome-text');
                  show('XSRF has also become one of the major web security threats. 
                      <br>To make your site free of this threat, 
                      MadeLine has inplemented a prevention for this kind of threat when doing a form submission.');
              tc('p');
              
              to('p', 'class::welcome-text');
                  show('To use XSRF in your form, go to ');
                  to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/xsrf').show('XSRF.').tc('a');
              tc('p');
              
              bl(2);
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Security.');
              tc('p');
              
              bl();
                
              to('a', 'class::link href::manual/english/general-topics/using-madeline-error');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
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
      
    tc('body');

?>
