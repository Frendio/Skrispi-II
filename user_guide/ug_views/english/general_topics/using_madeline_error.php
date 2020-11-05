<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | General Topics | Using MadeLine Error');
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
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; Using MadeLine Error');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('Using MadeLine Error').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Madeline provides error types that you can use based on your system status, which are as follows: ');
              tc('p');
              
              bl();
              
              to('h2','id::not-found-error').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Development Error').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This error will be best used in development status, you can try on your own time.').bl();
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('error').tc('span');
                  to('span').show('();').tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h2','id::404').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('404 Error').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This error is used when notifying the users that the page is not found.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('error').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'404'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h2','id::403').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('403 Error').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This error is used when notifying the users that the page has a forbiden access.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('error').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'403'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h2','id::user-error').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('User Error').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This type of error is where you will show an error from your controller when user makes a mistake.').bl();
                show('For Example, when a required input is empty or anything we would like to notify our users.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('user_error').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'your error message'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl(2);
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Using MadeLine Error.');
              tc('p');
              
              bl();
                
              to('a', 'class::link href::manual/english/general-topics/madeline-constant');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/general-topics/security');
                to('button','class::pn-button').
                  show('Next ').
                  make('span','','class::glyphicon*glyphicon-circle-arrow-right style::font-size:13px').
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
  tc('html');
?>