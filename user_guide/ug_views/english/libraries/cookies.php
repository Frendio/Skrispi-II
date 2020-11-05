<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype().
  to('html').
    to('head').
      title('User Manual | Librares | Cookies Class').
      responsive_meta().
      base_url().

      system_css('reset').
      system_css('font').
      bootstrap_icon().
      system_css('ML_alert').
      system_css('ML_notifier').
      system_css('madeline').
      system_css('manual-ls').
      bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png').
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries &nbsp;').tc('a').arrow().show('&nbsp; Cookie Class');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('Cookies').tc('h1');              
              to('p', 'class::welcome-text');
                show('MadeLine provides cookies class for you to use to have a better user experience.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Page Contents:');
              tc('p');
              
              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#loading-cookies-library');
                    show('Loading Up Cookies Library ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#set-cookies');
                    show('Set Cookies ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#get-cookies');
                    show('Get Cookies ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#check-cookies');
                    show('Check Cookies ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#unset-cookies');
                    show('Unset Cookies ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#controller-to-view');
                    show('Send Cookies From Controller To View ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#from-view');
                    show('Calling Cookies from within a View ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/cookies#simple-example');
                    show('Simple Example ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
              tc('ol');
            
              to('h2','id::loading-cookies-library').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Loading Up Cookies').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Before using cookies library, you have to first load the library.').bl().
                show('To load cookies library, you have to include the following code in your ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers').
                  show('controller ').
                  to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                tc('a');
                show('.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'cookies'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::set-cookies').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Set Cookies').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To set a cookie, MadeLine provides a function called set_cookie. Bellow is how you do it:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('cookies').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('set').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'cookie_name'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::string').show("'cookie_value'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::string').show("'cookie_time (in days)'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::get-cookies').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Get Cookies').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To set a cookie, MadeLine provides a function called set_cookie. Bellow is how you do it:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('cookies').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('get').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'cookie_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::check-cookies').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Check Cookies').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to check whether the cookie is set or not, MadeLine provides a function called check_cookie. Bellow is how you do it:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('cookies').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('exists').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'cookie_name'").tc('span');
                  to('span').show('))').tc('span').bl();
                  to('span').show('{').tc('span').bl();
                    to('span','class::comment').tab(4).show('/*').tc('span').bl();
                    to('span','class::comment').tab(4).show(' * return true;').tc('span').bl();
                    to('span','class::comment').tab(4).show(' * your codes go here').tc('span').bl();
                    to('span','class::comment').tab(4).show(' */').tc('span').bl();
                  to('span').show('}').tc('span').bl();
                  to('span','class::else').show('else').tc('span').bl();
                  to('span').show('{').tc('span').bl();
                    to('span','class::comment').tab(4).show('/*').tc('span').bl();
                    to('span','class::comment').tab(4).show(' * return false;').tc('span').bl();
                    to('span','class::comment').tab(4).show(' * your codes go here').tc('span').bl();
                    to('span','class::comment').tab(4).show(' */').tc('span').bl();
                  to('span').show('}').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::unset-cookies').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Unset Cookies').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to unset your cookies, MadeLine provides a function called unset. Bellow is how you do it:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('cookies').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('unset').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'cookie_name'").tc('span');
                  to('span').show(');').tc('span').bl();
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::controller-to-view').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Send Cookies From Controller To View').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('If you want to send your cookies, bellow is how you do it:');
              tc('p');
              
              to('div', 'class::welcome-text id::regular-caller-style');
                to('table', 'class::mc-const-table*dark*code_table');
                  to('tr');
                    to('td').
                      to('span','class::comment').show('Create array variable for cookies').tc('span').bl();
                      to('span','class::variable').show('$data').tc('span');
                      to('span').show('[').tc('span');
                      to('span','class::string').show("'cookie'").tc('span');
                      to('span').show(']').tc('span');
                      to('span').tab(2).show(' = ').tc('span');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('cookies').tc('span');
                      to('span').show(';').tc('span').bl(2);

                      to('span','class::comment').show('Pass the cookies array variable as parameter').tc('span').bl();
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('laod').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('view').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'view_name'").tc('span');
                      to('span').show(', ').tc('span');
                      to('span','class::variable').show('$data').tc('span');
                      to('span').show(');').tc('span');
                    tc('td').
                  tc('tr');
                tc('table');
              tc('div');
              
              bl();

              make('h2',
                make('span', '', 'class::glyphicon*glyphicon-console*ccode', 0).
                'Calling Cookies from within a View', 
                'id::from-view'
              );
              
              make('p',
                'There are two (2) style getting cookies value; '.
                'you can call using the key name in your view as follows',
                'class::welcome-text'
              );

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                        to('th','class::ml-th colspan::2').
                          show('If you didn\'t pass cookies variable through views.');
                        tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            to('span','class::comment').show('1. ').tc('span');
                            to('span','class::keyword').show('$this').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::variable').show('cookie').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('get').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'cookie_name'").tc('span');
                            to('span').show(');').tc('span').bl();

                            to('span','class::comment').show('2. ').tc('span');
                            to('span','class::keyword').show('$this').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::variable').show('cookie').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::string').show('cookie_name').tc('span');
                            to('span').show(';').tc('span');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              bl();
              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                        to('th','class::ml-th colspan::2').
                          show('If you passed cookies variable through views.');
                        tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            to('span','class::comment').show('1. ').tc('span');
                            to('span','class::variable').show('$cookie').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('get').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'cookie_name'").tc('span');
                            to('span').show(');').tc('span').bl();
                            make('spann','2. ','class::comment');
                            make('span','$cookie','class::variable');
                            to('span').show('->').tc('span');
                            to('span','class::string').show('cookie_name').tc('span');
                            to('span').show(';').tc('span').bl();
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();

              make('h2',
                make('span', '', 'class::glyphicon*glyphicon-console*ccode', 0).
                'Simple example', 
                'id::simple-example'
              );

              make('p', 
                'To see how it works, lets use a controller we previously created in '.
                make('a', 'controller '.make('span','','class::glyphicon*glyphicon-link style::font-size:13px',0), 'class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers', 0), 
                'class::welcome-text'
              );

              to('p', 'class::welcome-text').
                  show('Change ').
                  make('span','index','class::function*consolas*fun_name').
                  show(' method as follows:').
              tc('p').

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                          to('th','class::ml-th colspan::2').
                            make('span','blog.php','class::docs*consolas*fun_name1').
                            show(' controller');
                          tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                              to('span','class::keyword').show('public').tc('span');
                              to('span','class::keyword').show(' function').tc('span');
                              to('span','class::function').show(' index').tc('span'); 
                              to('span').show('()').tc('span').bl();
                              to('span').show('{').tc('span').bl();   
                                to('span','class::comment').tab(4).show('/* 1, load cookies library */').tc('span').bl();
                                to('span','class::keyword').tab(4).show('$this').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::function').show('library').tc('span');
                                to('span').show('(').tc('span');
                                to('span','class::string').show("'cookies'").tc('span');
                                to('span').show(');').tc('span').bl();
            
                                to('span','class::comment').tab(4).show('/* 2, set cookie */').tc('span').bl();
                                to('span','class::keyword').tab(4).show('$this').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::variable').show('cookies').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::function').show('set').tc('span');
                                to('span').show('(').tc('span');
                                to('span','class::string').show("'cookie_name'").tc('span');
                                to('span').show(', ').tc('span');
                                to('span','class::string').show("'cookie_value'").tc('span');
                                to('span').show(', ').tc('span');
                                to('span','class::string').show("'cookie_time (in days)'").tc('span');
                                to('span').show(');').tc('span').bl();
            
                                to('span','class::comment').tab(4).show('/* 3, get cookie */').tc('span').bl();
                                to('span','class::keyword').tab(4).show('$this').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::variable').show('cookies').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::function').show('get').tc('span');
                                to('span').show('(').tc('span');
                                to('span','class::string').show("'cookie_name'").tc('span');
                                to('span').show(');').tc('span').bl();
            
                                to('span','class::comment').tab(4).show('/* to use cookies in your view */').tc('span').bl();
                                to('span','class::variable').tab(4).show('$data').tc('span');
                                to('span').show('[').tc('span');
                                to('span','class::string').show("'cookie'").tc('span');
                                to('span').show(']').tc('span');
                                to('span').tab(2).show(' = ').tc('span');
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::variable').show('cookies').tc('span');
                                to('span').show(';').tc('span').bl(2);
            
                                to('span','class::comment').tab(4).show('/* pass $data variable as parameter */').tc('span').bl();
                                to('span','class::keyword').tab(4).show('$this').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::variable').show('laod').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::function').show('view').tc('span');
                                to('span').show('(').tc('span');
                                to('span','class::string').show("'view_name'").tc('span');
                                to('span').show(', ').tc('span');
                                to('span','class::variable').show('$data').tc('span');
                                to('span').show(');').tc('span').bl(2);
            
                                to('span','class::comment').tab(4).show('/* You can call using the key name in your view as follows */').tc('span').bl();
                                tab(4).to('span','class::variable').show('$cookie').tc('span');
                                to('span').show('->').tc('span');
                                to('span','class::function').show('get').tc('span');
                                to('span').show('(').tc('span');
                                to('span','class::string').show("'cookie_name'").tc('span');
                                to('span').show(');').tc('span').bl();
                                tab(4).make('spann','/* Or */','class::comment').bl();
                                tab(4).make('span','$cookie','class::variable');
                                to('span').show('->').tc('span');
                                to('span','class::string').show('cookie_name').tc('span');
                                to('span').show(';').tc('span').bl(); 
                              to('span').show('}').tc('span');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('p', 'class::welcome-text').
                  show('You can echo one of the following options based on how you pass cookies variable to the view:').
              tc('p').

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                          to('th','class::ml-th colspan::2').
                            make('span','blog.php','class::docs*consolas*fun_name1').
                            show(' view');
                          tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            to('span','class::comment').show('/* You can call using the key name in your view as follows */').tc('span').bl();
                            to('span','class::variable').show('$cookie').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('get').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'cookie_name'").tc('span');
                            to('span').show(');').tc('span').bl();
                            make('spann','/* Or */','class::comment').bl();
                            make('span','$cookie','class::variable');
                            to('span').show('->').tc('span');
                            to('span','class::string').show('cookie_name').tc('span');
                            to('span').show(';').tc('span').bl(); 
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Cookies Library.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/ajax');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/file');
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