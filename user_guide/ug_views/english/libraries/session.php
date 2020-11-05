<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype().
  to('html').
    to('head');
      title('User Manual | Librares | Session Class');
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries &nbsp;').tc('a').arrow().show('&nbsp; Session Class');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('Session').tc('h1');              
              to('p', 'class::welcome-text');
                show('MadeLine provides session class for you to use to have a better user experience.');
              tc('p');
              
              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#loading-session-library');
                    show('Loading Up Session Library');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#set-session');
                    show('Set Session');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#get-session');
                    show('Get Session');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#check-session');
                    show('Check Session');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#clear-session');
                    show('Clear Session');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#logout-session');
                    show('Logout Session');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#session-loged-in');
                    show('Login Check');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#session-access');
                    show('Access Check');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#session-in-controller');
                    show('Using Session Library in A Controller');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/session#session-in-view');
                    show('Using Session Library in A View');
                  tc('a');
                tc('li');
              tc('ol');
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Loading Up Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Before using session library, you have to first load the library.').bl().
                show('To load session library, you have to include the following code in your ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers').show('controller').tc('a');
                show(';');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::set-session').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Set Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To set a session, MadeLine provides a function called ');
                to('span','class::fun_name*consolas').show('set()').tc('span');
                show('. Bellow is how you do it:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts two (2) parameters:').bl().
                show('Parameter 1 : session_name').bl().
                show('Parameter 2 : session_value').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('set').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::string').show("'session_data'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::get-session').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Get Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To set a session, MadeLine provides a function called ');
                to('span','class::fun_name*consolas').show('get()').tc('span');
                show('. Bellow is how you do it:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts one (1) parameters : session_name').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('get').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(');').tc('span').bl();

                  to('span','class::comment').show('- OR -').tc('span').bl();

                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show("session_name").tc('span');
                  to('span').show(';').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::check-session').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Check Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to check whether the session is set or not, MadeLine provides a function called ');
                to('span','class::fun_name*consolas').show('exists()').tc('span');
                show('. Bellow is how you do it:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts one (1) parameters : session_name').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('exists').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::clear-session').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Clear Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to clear your session, MadeLine provides a function called ');
                to('span','class::fun_name*consolas').show('unset_session()').tc('span');
                show('. Bellow is how you do it:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts one (1) parameters : session_name').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('unset_session').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(');').tc('span').bl(2).

                  make('span','Multiple session names','class::comment').bl().
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('unset_session').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name1, session_name2'").tc('span');
                  to('span').show(');').tc('span').
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::logout-session').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Logout Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to clear your session and do a logout action, MadeLine provides a function called ');
                to('span','class::fun_name*consolas').show('logout()').tc('span');
                show('. Bellow is how you do it:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts two (2) parameters:').bl().
                show('Parameter 1 : session_name').bl().
                show('Parameter 2 : redirect_page').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::string').show("'redirect_page'").tc('span');
                  to('span','class::comment').show(' is a page to redirect if logout is successful').tc('span').bl(2);
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('logout').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::string').show("'redirect_page'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::session-loged-in').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Login Check').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to secure your controller and view using ');
                to('span','class::consolas*fun_name').show('login_check()').tc('span');
                show(' session, look at the following code:').bl().
                show('This will be best used in ').make('span','login','class::consolas*fun_name').
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts three (3) parameters:').bl().
                show('Parameter 1 : session_name').bl().
                show('Parameter 2 : page_name').bl().
                show('Parameter 3 : boolean (true = ajax) or Optional').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::string').show("'page_name'").tc('span');
                  to('span','class::comment').show(' is a page to redirect to when ').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span','class::comment').show(' is set ').tc('span').bl(2);

                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('login_check').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::string').show("'page_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::session-access').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Access Check').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to secure your controller and view using ');
                to('span','class::consolas*fun_name').show('access_check()').tc('span');
                show(' session, look at the following code:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Accepts three (3) parameters:').bl().
                show('Parameter 1 : session_name').bl().
                show('Parameter 2 : page_name').bl().
                show('Parameter 3 : boolean (true = ajax) or Optional').
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::string').show("'page_name'").tc('span');
                  to('span','class::comment').show(' is a page to redirect to when ').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span','class::comment').show(' is not set ').tc('span').bl(2);

                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('session').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('access_check').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'session_name'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::string').show("'page_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::session-in-controller').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Using Session Library in a Controller').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To see how it works, lets use a controller we previously created in ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers').show('controller').tc('a');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
                  REQUIRE 'extra/session.php';
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::session-in-view').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Using Session Library in a View').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To see how it works, let\'s use a view we previously created in ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/views').show('views').tc('a');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
                  REQUIRE 'extra/session_view.php';
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Session Library.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/pagination');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/xsrf');
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