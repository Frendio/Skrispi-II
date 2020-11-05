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
              to('h1','class::h1').show('XSRF').tc('h1');              
              to('p', 'class::welcome-text');
                show('XSRF stands Cross Site Request Forgery is one of the threat in World Wide Web today.').bl().
                show('To help users preventing this threat, MadeLine provides XSRF prevention functions within Session Library.');
              tc('p');
              
              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/xsrf#loading-session-library');
                    show('Loading Up Session Library');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/xsrf#meta');
                    show('XSRF Meta');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/xsrf#input');
                    show('XSRF Input');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/xsrf#data');
                    show('XSRF Data');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/xsrf#email');
                    show('XSRF Email Verification');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/xsrf#example');
                    show('Simple Example (XSRF Iinput)');
                  tc('a');
                tc('li');
              tc('ol');
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Loading Up Session').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Before using XSRF functions in session library, you have to firstly load the library if you haven\'t already loaded it yet.').bl().
                // show('To load session library, you have to include the following code in your ');
                // to('a','class::link*docs*consolas*fun_name href::manual/english/general-topics/controllers').show('controller').tc('a');
                // show(';');
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
                
                to('h2','id::meta').
                    make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                    show('XSRF Meta').
                tc('h2');
                
                to('p', 'class::welcome-text');
                    show('This has to be placed in your head.:');
                tc('p');
                
                to('div', 'class::welcome-text');
                    to('table', 'class::mc-const-table*code_table');
                        to('tr','class::bb*bt');
                            to('th','class::ml-th').show('Function Name').tc('td');
                            to('th','class::ml-th').show('Parameter').tc('td');
                            to('th','class::ml-th').show('Implementation').tc('td');
                            to('th','class::ml-th').show('Result').tc('td');
                        tc('tr');

                        to('tr','class::odd*bb');
                            to('td','class::gfc').
                                make('span','xsrf_meta','class::function').
                                show('();').
                            tc('th');
                            to('td','class::gfc').
                                show('Accepts two (2) parameters:').bl().
                                show('Parameter 1 = time_type (h : hour & m : minutes)').bl().
                                show('Parameter 2 = length (in minutes OR hours)').bl().

                                make('span','-- OR --','class::comment').bl().

                                show('Accepts no parameters').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_meta','class::function').
                                make('span','(').
                                make('span',"'m'",'class::string').
                                make('span',', ').
                                make('span',"5",'class::int').
                                make('span',');').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_meta','class::function').
                                make('span','();').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                show('Sets XSRF meta token for 5 mintues').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                show('Sets XSRF meta token for 1 mintue').
                            tc('th');
                        tc('tr');
                    tc('table');
                tc('div');
                
                bl().

                to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px;margin-bottom:-15px; id::caller.js').
                    show('# XSRF Meta Validation').
                tc('p');
                
                to('p', 'class::welcome-text id::caller.js').
                    show('When performing a meta validation, you can always start with validating it against ').
                    make('span','XSRF.','class::consolas*fun_name').bl().
                    show('The validation is the same as the ').
                    make('span','XSRF','class::consolas*fun_name').
                    show(' input validation.').bl().
                tc('p');
                
                to('div', 'class::highlight');
                    to('pre');
                        to('span','class::if').show('if').tc('span');
                        to('span').show(' (').tc('span');
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('validate_xsrf').tc('span');
                        to('span').show('())').tc('span').bl();
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return true;').tc('span').bl();
                        to('span').show('}').tc('span').bl();
                        to('span','class::else').show('else').tc('span').bl();
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return false;').tc('span').bl();
                        to('span').show('}').tc('span');
                    tc('pre');
                tc('div');

                bl();
                
                to('h2','id::input').
                    make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                    show('XSRF Input').
                tc('h2');
                
                to('p', 'class::welcome-text');
                    show('This has to be placed inside your form.');
                tc('p');
                
                to('div', 'class::welcome-text');
                    to('table', 'class::mc-const-table*code_table');
                        to('tr','class::bb*bt');
                            to('th','class::ml-th').show('Function Name').tc('td');
                            to('th','class::ml-th').show('Parameter').tc('td');
                            to('th','class::ml-th').show('Implementation').tc('td');
                            to('th','class::ml-th').show('Result').tc('td');
                        tc('tr');

                        to('tr','class::odd*bb');
                            to('td','class::gfc').
                                make('span','xsrf_input','class::function').
                                show('();').
                            tc('th');
                            to('td','class::gfc').
                                show('Accepts two (2) parameters:').bl().
                                show('Parameter 1 = time_type (h : hour & m : minutes)').bl().
                                show('Parameter 2 = length (in minutes OR hours)').bl().

                                make('span','-- OR --','class::comment').bl().

                                show('Accepts no parameters').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_input','class::function').
                                make('span','(').
                                make('span',"'m'",'class::string').
                                make('span',', ').
                                make('span',"5",'class::int').
                                make('span',');').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_input','class::function').
                                make('span','();').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                show('Sets XSRF input token for 5 mintues').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                show('Sets XSRF input token for 1 mintue').
                            tc('th');
                        tc('tr');
                    tc('table');
                tc('div');
                
                bl().

                to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px;margin-bottom:-15px; id::caller.js').
                    show('# XSRF Input Validation').
                tc('p');
                
                to('p', 'class::welcome-text id::caller.js').
                    show('When performing a form validation, you can always start with validating it against ').
                    make('span','XSRF.','class::consolas*fun_name').bl().
                    show('The validation is the same as the ').
                    make('span','XSRF','class::consolas*fun_name').
                    show(' meta validation.').bl().
                tc('p');
                
                to('div', 'class::highlight');
                    to('pre');
                        to('span','class::if').show('if').tc('span');
                        to('span').show(' (').tc('span');
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('validate_xsrf').tc('span');
                        to('span').show('())').tc('span').bl();
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return true;').tc('span').bl();
                        to('span').show('}').tc('span').bl();
                        to('span','class::else').show('else').tc('span').bl();
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return false;').tc('span').bl();
                        to('span').show('}').tc('span');
                    tc('pre');
                tc('div');
              
                bl();
                
                to('h2','id::data').
                    make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                    show('XSRF Data').
                tc('h2');
                
                to('p', 'class::welcome-text');
                    show('This will be best used in logout function so only the original device can perform logout.');
                tc('p');
                
                to('div', 'class::welcome-text');
                    to('table', 'class::mc-const-table*code_table');
                        to('tr','class::bb*bt');
                            to('th','class::ml-th').show('Function Name').tc('td');
                            to('th','class::ml-th').show('Parameter').tc('td');
                            to('th','class::ml-th').show('Implementation').tc('td');
                            to('th','class::ml-th').show('Result').tc('td');
                        tc('tr');

                        to('tr','class::odd*bb');
                            to('td','class::gfc').
                                make('span','xsrf_data','class::function').
                                show('();').
                            tc('th');
                            to('td','class::gfc').
                                show('Accepts two (2) parameters:').bl().
                                show('Parameter 1 = Optional OR time_type (h : hour & m : minutes)').bl().
                                show('Parameter 2 = Optional OR length (in minutes OR hours)').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_data','class::function').
                                make('span','(').
                                make('span',"'m'",'class::string').
                                make('span',', ').
                                make('span',"5",'class::int').
                                make('span',');').bl(2).

                                make('span','With parameter 1','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_data','class::function').
                                make('span','(').
                                make('span',"'h'",'class::string').
                                make('span',');').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_data','class::function').
                                make('span','();').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                show('Sets XSRF data token for 5 mintues').bl(2).

                                make('span','With parameter 1','class::comment').bl().
                                show('Sets XSRF data token for 1 hour').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                show('Sets XSRF data token for 1 mintue').bl(2).
                            tc('th');
                        tc('tr');
                    tc('table');
                tc('div');

                bl().
                
                to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px;margin-bottom:-15px; id::caller.js').
                    show('# XSRF Data Validation').
                tc('p');
                
                to('p', 'class::welcome-text id::caller.js').
                    show('When performing a logout, you will need to send the data token as a ').
                    make('span','uri','class::consolas*fun_name').
                    show(' segment.').
                tc('p');
                
                to('div', 'class::highlight');
                    to('pre');
                        make('span','Assign the token (expires in 1 minute) as an uri,','class::comment').
                        make('span',' where logout is the controller and followed by the token.','class::comment').bl().
                        make('span',"href",'class::keyword').
                        make('span'," = ").
                        make('span',"'http://MadeLine/logout/'",'class::string').show('.').
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('xsrf_data').tc('span');
                        to('span').show('()').tc('span').bl(2).

                        make('span','In your controller:','class::comment').bl().
                        make('span','#1. Get token from url: keep in mind that the token was assigned as the second uri in uri:','class::comment').bl().
                        make('span','$uri_token','class::keyword').
                        make('span',' = uri2').make('span',' // or uri[1];','class::comment').bl(2).

                        make('span','#2. Validate the ','class::comment').
                        make('span','$uri_token','class::fun_name').
                        make('span',' with ','class::comment').
                        make('span','xsrf_data()','class::fun_name').
                        make('span',' token:','class::comment').bl().

                        to('span','class::if').show('if').tc('span');
                        to('span').show(' (').tc('span');
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('xsrf_data').tc('span');
                        to('span').show('() === ').tc('span').
                        to('span','class::keyword').show('$uri_token').tc('span');
                        to('span').show(')').tc('span').bl().
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return true;').tc('span').bl();
                        to('span').show('}').tc('span').bl();
                        to('span','class::else').show('else').tc('span').bl();
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return false;').tc('span').bl();
                        to('span').show('}').tc('span');
                    tc('pre');
                tc('div');
                
                bl();
                
                to('h2','id::email').
                    make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                    show('XSRF email verification.').
                tc('h2');
                
                to('p', 'class::welcome-text');
                    show('This will be best used in an email verification after a user signed up.');
                tc('p');
                
                to('div', 'class::welcome-text');
                    to('table', 'class::mc-const-table*code_table');
                        to('tr','class::bb*bt');
                            to('th','class::ml-th').show('Function Name').tc('td');
                            to('th','class::ml-th').show('Parameter').tc('td');
                            to('th','class::ml-th').show('Implementation').tc('td');
                            to('th','class::ml-th').show('Result').tc('td');
                        tc('tr');

                        to('tr','class::odd*bb');
                            to('td','class::gfc').
                                make('span','xsrf_email_verification','class::function').
                                show('();').
                            tc('th');
                            to('td','class::gfc').
                                show('Accepts three (3) parameters:').bl().
                                show('Parameter 1 = identifier').bl().
                                show('Parameter 2 = Optional OR time_type (h : hour & m : minutes)').bl().
                                show('Parameter 3 = Optional OR length (in minutes OR hours)').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With three (3) parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_email_verification','class::function').
                                make('span','(').
                                make('span',"'my_identifer'",'class::string').
                                make('span',', ').
                                make('span',"'m'",'class::string').
                                make('span',', ').
                                make('span',"5",'class::int').
                                make('span',');').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                to('span','class::keyword').show('$this').tc('span');
                                to('span').show('->session->').tc('span');
                                make('span','xsrf_email_verification','class::function').
                                make('span','(').
                                make('span',"'my_identifer'",'class::string').
                                make('span',');').
                            tc('th');
                            to('td','class::gfc').
                                make('span','With two (2) parameters','class::comment').bl().
                                show('Sets XSRF email_verification token with "my_identifer" as the identifier for 5 mintues').bl(2).

                                make('span','With no parameters','class::comment').bl().
                                show('Sets XSRF email_verification token with "my_identifer" as the identifier for 1 mintue').
                            tc('th');
                        tc('tr');
                    tc('table');
                tc('div');

                bl().
                
                to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px;margin-bottom:-15px; id::caller.js').
                    show('# XSRF Data Validation').
                tc('p');
                
                to('p', 'class::welcome-text id::caller.js').
                    show('When performing a logout, you will need to send the data token as a ').
                    make('span','uri','class::consolas*fun_name').
                    show(' segment.').
                tc('p');
                
                to('div', 'class::highlight');
                    to('pre');
                        make('span','Assign the token (expires in 5 minutes) as an uri,','class::comment').
                        make('span',' where verification is the controller and followed by the token.','class::comment').bl().
                        make('span',"href",'class::keyword').
                        make('span'," = ").
                        make('span',"'http://MadeLine/verification/'",'class::string').show('.').
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('xsrf_email_verification').tc('span');
                        to('span').show('(').tc('span').
                        to('span','class::string').show("'my_identifier'").tc('span').
                        to('span').show(', ').tc('span').
                        to('span','class::string').show("'m'").tc('span').
                        to('span').show(', ').tc('span').
                        to('span','class::int').show("5").tc('span').
                        to('span').show(')').tc('span').bl(2).

                        make('span','In your controller:','class::comment').bl().
                        make('span','#1. Get token from url: keep in mind that the token was assigned as the second uri in uri:','class::comment').bl().
                        make('span','$uri_token','class::keyword').
                        make('span',' = uri2').make('span',' // or uri[1];','class::comment').bl(2).

                        make('span','#2. Validate the ','class::comment').
                        make('span','$uri_token','class::fun_name').
                        make('span',' with ','class::comment').
                        make('span','xsrf_email_verification()','class::fun_name').
                        make('span',' token:','class::comment').bl().

                        to('span','class::if').show('if').tc('span');
                        to('span').show(' (').tc('span');
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('xsrf_email_verification').tc('span');
                        to('span').show('(').tc('span').
                        to('span','class::string').show("'my_identifier'").tc('span').
                        to('span').show(', ').tc('span').
                        to('span','class::string').show("'m'").tc('span').
                        to('span').show(', ').tc('span').
                        to('span','class::int').show("5").tc('span').
                        to('span').show(') === ').tc('span').
                        to('span','class::keyword').show('$uri_token').tc('span');
                        to('span').show(')').tc('span').bl().
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return true;').tc('span').bl();
                        to('span').show('}').tc('span').bl();
                        to('span','class::else').show('else').tc('span').bl();
                        to('span').show('{').tc('span').bl();
                            to('span','class::comment').tab(4).show('return false;').tc('span').bl();
                        to('span').show('}').tc('span');
                    tc('pre');
                tc('div');
                
                bl();
                
                to('h2','id::example').
                    make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                    show('Simple Example (XSRF Iinput)').
                tc('h2');
                
                to('p', 'class::welcome-text');
                    show('First thing you need to do is create a view and save as ');
                    make('span','blog.php','class::consolas*fun_name');
                    show(' in your ');
                    make('span','application/views','class::consolas*fun_name');
                tc('p');
                
                to('div', 'class::highlight');
                    to('pre'); 
                    to('span','class::keyword').show("<").tc('span');
                    to('span','class::keyword').show("?").tc('span');
                    to('span','class::keyword').show("php").tc('span').bl(2);

                    to('span','class::function').show("to").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'form'").tc('span');   
                    to('span').show(",").tc('span'); 
                    to('span','class::string').show("'action::blog/xsrf method::post'").tc('span'); 
                    to('span').show(");").tc('span').bl(); 
                        to('span','class::function').tab(4).show("tag").tc('span'); 
                        to('span').show("(").tc('span'); 
                        to('span','class::string').show("'input', 'type::text name::text'").tc('span'); 
                        to('span').show(");").tc('span').bl(2);

                        tab(4).make('span','Sets token for 2 minutes','class::comment').bl().
                        to('span','class::keyword').tab(4).show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('session').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('xsrf_input').tc('span');
                        to('span').show('(').tc('span').
                        to('span','class::string').show("'m'").tc('span');
                        to('span').show(', ').tc('span').
                        to('span','class::int').show("2").tc('span');
                        to('span').show(');').tc('span').bl(2);

                        to('span','class::function').tab(4).show("tag").tc('span'); 
                        to('span').show("(").tc('span'); 
                        to('span','class::string').show("'input', 'type::submit value::Submit'").tc('span'); 
                        to('span').show(");").tc('span').bl();
                    to('span','class::function').show("tc").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'form'").tc('span');   
                    to('span').show(");").tc('span').bl(2);
                    
                    to('span','class::keyword').show("?".">").tc('span').bl().
                    tc('pre');
                tc('div');
                
                to('p', 'class::welcome-text');
                    show('Second thing you need to do is create a ');
                    make('span','controller','class::consolas*fun_name');
                    show(' and save as ');
                    make('span','blog.php','class::consolas*fun_name');
                    show(' in your ');
                    make('span','application/controllers','class::consolas*fun_name');
                    show(' directory.');
                tc('p');
              
                to('div', 'class::highlight');              
                  to('pre');
                    to('span','class::keyword').show("<").tc('span');
                    to('span','class::keyword').show("?").tc('span');
                    to('span','class::keyword').show("php").tc('span').bl(2);
  
                    to('span','class::function').show("DEFINED").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'BASE_URL'").tc('span');
                    to('span').show(")").tc('span');
                    to('span').show(" OR").tc('span');
                    to('span','class::exit').show(" EXIT").tc('span');
                    to('span').show(" (").tc('span');
                    to('span','class::function').show("header").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'location: 403'").tc('span');
                    to('span').show("));").tc('span').bl(2);
                    
                    to('span','class::keyword').show('class').tc('span');
                    to('span','class::variable').show(' Blog').tc('span');
                    to('span','class::keyword').show(' extends').tc('span');
                    to('span','class::variable').show(' ML_Controller').tc('span').bl();
                    show('{').bl();
                        tab(4).to('span','class::comment').show('Constructor method to load the session library').tc('span').bl();
                        tab(4).to('span','class::keyword').show('public').tc('span');
                        to('span','class::keyword').show(' function').tc('span');
                        to('span','class::function').show(' __construct').tc('span'); 
                        to('span').show('()').tc('span').bl();
                        tab(4).show('{').tc('span').bl();
                          tab(8).to('span','class::keyword').show('parent').tc('span');
                          to('span').show('::').tc('span');
                          to('span','class::function').show('__construct').tc('span');
                          to('span').show('();').tc('span').bl();

                          tab(8).to('span','class::keyword').show('$this').tc('span');
                          to('span').show('->').tc('span');
                          to('span','class::variable').show('library').tc('span');
                          to('span').show('(').tc('span');
                          to('span','class::string').show("'session'").tc('span');
                          to('span').show(');').tc('span').bl();
                        to('span').tab(4).show('}').tc('span').bl(2);

                        tab(4).to('span','class::comment').show('Index method to load the view').tc('span').bl();
                        tab(4).to('span','class::keyword').show('public').tc('span');
                        to('span','class::keyword').show(' function').tc('span');
                        to('span','class::function').show(' index').tc('span'); 
                        to('span').show('()').tc('span').bl();
                        tab(4).show('{').tc('span').bl();
                            tab(8).to('span','class::keyword').show('$this').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::variable').show('view').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'blog'").tc('span');
                            to('span').show(');').tc('span').bl();
                        to('span').tab(4).show('}').tc('span').bl(2);
                        
                        tab(4).to('span','class::comment').show('xsrf method to respond to form request in the view.').tc('span').bl();
                        tab(4).to('span','class::keyword').show('public').tc('span');
                        to('span','class::keyword').show(' function').tc('span');
                        to('span','class::function').show(' xsrf').tc('span'); 
                        to('span').show('()').tc('span').bl();
                        tab(4).show('{').tc('span').bl();
                            tab(8).to('span','class::if').show('if').tc('span');
                            to('span').show(' (').tc('span');
                            to('span','class::keyword').show('$this').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::variable').show('session').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('validate_xsrf').tc('span');
                            to('span').show('())').tc('span').bl();
                            tab(8).to('span').show('{').tc('span').bl();
                                tab(12).to('span','class::comment').show('return true;').tc('span').bl();
                                tab(12).to('span','class::function').show('echo ').tc('span').
                                to('span','class::string').show("'Success'").tc('span');
                                to('span').show(';').tc('span').bl();
                            tab(8).to('span').show('}').tc('span').bl();
                            tab(8).to('span','class::else').show('else').tc('span').bl();
                            tab(8).to('span').show('{').tc('span').bl();
                                tab(12).to('span','class::comment').show('return false;').tc('span').bl();
                                tab(12).to('span','class::function').show('echo ').tc('span').
                                to('span','class::string').show("'Token is expired, please refresh!'").tc('span').bl().
                            tab(8).to('span').show('}').tc('span').bl();
                        to('span').tab(4).show('}').tc('span').bl();  
                    to('span').show('}').tc('span').bl(2); 
                    
                    to('span','class::keyword').show("?".">").tc('span');
                  tc('pre');
                tc('div');
                
                to('p', 'class::welcome-text');
                    show('Run it by the following url:');
                tc('p');
              
                to('div', 'class::highlight');
                    to('pre');
                        show('MadeLine/blog').
                    tc('pre');
                tc('div');
                
                bl();
                
                to('h1','class::h1-footer').show("Thats's it!").tc('h1');
                
                to('p', 'class::welcome-text');
                    show('That is all you need to know about Session Library.');
                tc('p');
                
                bl();
                to('a', 'class::link href::manual/english/libraries/session');
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
  tc('html');
?>