<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | Librares | Form Class');
      responsive_meta();
      base_url();

      system_css('reset');
      system_css('font');
      bootstrap_icon();
      system_css('ML_alert');
      system_css('ML_notifier');
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries &nbsp;').tc('a').arrow().show('&nbsp; Form Library');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');          
              to('h1','class::h1').show('Form').tc('h1');            
              to('p', 'class::welcome-text');
                show('MadeLine provides form validation class called form for you to use when playing around with form and its inputs.').bl().
                show('Page Contents:');
              tc('p');
              
              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/form#loading-form-library');
                    show('Loading Up Form Library ').
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/form#set-input-rules');
                    show('Set Input Rules ');
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/form#validating-form');
                    show('Validating the Form ');
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/form#empty-input');
                    show('Getting Empty Input (Ajax Only) ');
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/form#non-ajax');
                    show('Form Error Handler (Non Ajax) ');
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('li');
              tc('ol');
            
              to('h2','id::loading-form-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Loading Up Form Library').
              tc('h2');            
              to('p', 'class::welcome-text');
                show('Before using form library, you have to first load the library.').bl().
                show('To load form library, you have to include the following code in your ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers').
                  show('controller ').
                  to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                tc('a');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'form'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::set-input-rules').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Set Input Rules').
              tc('h2');            
              to('p', 'class::welcome-text');
                show('To set an input rule, MadeLine provides an easy way of doing so. Bellow is how you do it:');
              tc('p');

              to('div', 'class::welcome-text id::regular-caller-style');
                to('table', 'class::mc-const-table*dark*code_table');
                  to('tr');
                    to('th','class::ml-th colspan::2').
                      show('if input value is required.');
                    tc('th');
                  tc('tr');
      
                  to('tr');
                    to('td','class::gfc colspan::2');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('form').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('input').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'input_name'").tc('span');
                      to('span').show(');').tc('span').
                    tc('td').
                  tc('tr').
                tc('table').
              tc('div');

              bl();

              to('div', 'class::welcome-text id::regular-caller-style');
                to('table', 'class::mc-const-table*dark*code_table');
                  to('tr');
                    to('th','class::ml-th colspan::2').
                      show('if input value is optional.');
                    tc('th');
                  tc('tr');
      
                  to('tr');
                    to('td','class::gfc colspan::2');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('form').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('input').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'input_name'").tc('span');
                      to('span').show(', ').tc('span');
                      to('span').show('0').tc('span');
                      to('span').show(');').tc('span').
                    tc('td').
                  tc('tr').
                tc('table').
              tc('div');

              bl();

              to('div', 'class::welcome-text id::regular-caller-style');
                to('table', 'class::mc-const-table*dark*code_table');
                  to('tr');
                    to('th','class::ml-th colspan::2').
                      show('Input has returned error message.');
                    tc('th');
                  tc('tr');
      
                  to('tr');
                    to('td','class::gfc colspan::2');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('form').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('input').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'input_name:error message'").tc('span');
                      to('span').show(');').tc('span').
                    tc('td').
                  tc('tr').
                tc('table').
              tc('div');

              bl();

              to('div', 'class::welcome-text id::regular-caller-style');
                to('table', 'class::mc-const-table*dark*code_table');
                  to('tr');
                    to('th','class::ml-th colspan::2').
                      show('Multiple inputs have returned error message.');
                    tc('th');
                  tc('tr');
      
                  to('tr');
                    to('td','class::gfc colspan::2');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('form').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('input').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'input_name1:error message 1").tc('span');
                      to('span').show(', ').tc('span');
                      to('span','class::string').show("input_name2:error message 2'").tc('span');
                      to('span').show(');').tc('span').
                    tc('td').
                  tc('tr').
                tc('table').
              tc('div');
              
              bl();
            
              to('h2','id::validating-form').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Validating the Form').
              tc('h2');            
              to('p', 'class::welcome-text');
                show('To validate or run the Form, follow the bellow example:');
              tc('p');

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                        to('th','class::ml-th colspan::2').
                          show('Form validation.');
                        tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            make('span','Accepts one (1) parameter:','class::comment').bl().
                            make('span','If you send a json data the param should be "true", otherwise no parameter','class::comment').bl(2).
                            to('span','class::if').show('if').tc('span');
                            to('span').show(' (').tc('span');
                            to('span','class::keyword').show('$this').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::variable').show('form').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('validate').tc('span');
                            to('span').show('())').tc('span').bl();
                            to('span').show('{').tc('span').bl();
                              to('span','class::comment').tab(4).show('return true;').tc('span').bl();
                            to('span').show('}').tc('span').bl();
                            to('span','class::else').show('else').tc('span').bl();
                            to('span').show('{').tc('span').bl();
                              to('span','class::comment').tab(4).show('return false;').tc('span').bl();
                            to('span').show('}').tc('span');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();
            
              to('h2','id::empty-input').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Getting Empty Input (Ajax Only)').
              tc('h2');
              to('p', 'class::welcome-text');
                show('When validating your form, in your else condition, 
                      you can get the empty input name and return to ').make('span','ajax_return','class::consolas*fun_name').show(' if you want to you use javascript 
                      to handle this type of error.').bl().
                      show('See how it works with an ');
                      to('a', 'class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#update-controller');
                        show('Ajax Controller ');
                        to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                      tc('a');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('form').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('empty').tc('span');
                  to('span').show('();').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('To return to ajax_return:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::function').show('echo ').tc('span');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('form').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('empty').tc('span');
                  to('span').show('();').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::non-ajax').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Form Error Handler (Non Ajax)').
              tc('h2');
              to('p', 'class::welcome-text');
                show('The good thing of this framework is that you don\'t need a helper for this.
                      <br>Once the Form library is loaded, you can use the error handler, 
                      BUT keep in mind that it only works for non ajax even if you load the Form library from an Ajax Controller.').bl().
              tc('p');

              to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::setting-up-error').
              show('1. Setting Up Error').tc('p');

              to('p', 'class::welcome-text');
                show('set_error() is used to display errors or inform the users that an input is required or other errors related to a specific input from.
                      <br>It is usualy echoed in side an HTML tag located bellow an input in a view.');
              tc('p');

              to('p', 'class::welcome-text');
                show('* Keep in mind that if you didn\'t put your returned error mesage in ');
                to('a', 'class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#update-controller');
                  show('Set Input Rules ');
                  to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                tc('a');
                show(', you can use ');
                make('span','set_error()','class::consolas*fun_name').
                show(' to show your returned message.');
              tc('p');

              to('p', 'class::welcome-text');
                show('* set_error() accepts two (3) parameters:').bl().
                show('Parameter 1 = input_name.
                      <br>Parameter 2 = your retuned error message (lieve it as empty \'\' if no returned message.)
                      <br>Parameter 3 = (1 : if you want to echo & empty : if you want to return.)');
              tc('p');

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                          to('th','class::ml-th colspan::2').
                            show('set_error()');
                          tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            make('spann','With a returned error message','class::comment').bl();
                            to('span','class::function').show('set_error').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'input_name'").tc('span');
                            to('span').show(', ').tc('span');
                            to('span','class::string').show("'returned error message'").tc('span');
                            to('span').show(');').tc('span').bl(2);
                            make('spann','Without a returned error message','class::comment').bl();
                            to('span','class::function').show('set_error').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'input_name'").tc('span');
                            to('span').show(');').tc('span').bl();
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::re-populate').
              show('2. Re-populating the form').tc('p');

              to('p', 'class::welcome-text');
                show('set_value() is used to re-populate all inserted data of an input.').bl().
                show('* set_value() accepts one (1) parameter, which is input_name.').bl().
              tc('p');

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                          to('th','class::ml-th colspan::2').
                            show('set_value()');
                          tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            to('span','class::function').show('set_value').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'input_name'").tc('span');
                            to('span').show(');').tc('span').bl();
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::validation-error').
              show('3. Validation Error Checking').tc('p');

              to('p', 'class::welcome-text');
                show('validation_error() is used to check if there is a form validation error.').bl().
                show('* set_value() accepts no parameters.').bl().
              tc('p');

              to('div', 'class::welcome-text id::regular-caller-style');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                          to('th','class::ml-th colspan::2').
                            show('set_value()');
                          tc('th');
                      tc('tr');
          
                      to('tr');
                          to('td','class::gfc colspan::2');
                            to('span','class::if').show('if').tc('span');
                            to('span').show(' (').tc('span');
                            to('span','class::function').show('validation_error').tc('span');
                            to('span').show('())').tc('span').bl();
                            to('span').show('{').tc('span').bl();
                              to('span','class::comment').tab(4).show('return true;').tc('span').bl();
                            to('span').show('}').tc('span').bl();
                            to('span','class::else').show('else').tc('span').bl();
                            to('span').show('{').tc('span').bl();
                              to('span','class::comment').tab(4).show('return false;').tc('span').bl();
                            to('span').show('}').tc('span');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::simple-example').
              show('4. Simple example').tc('p');
              to('p', 'class::welcome-text').tc('p');

              to('div', 'class::welcome-text id::blog.view');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr');
                          to('th','class::ml-th colspan::2').
                            show('blog.php (View) using ');
                            to('a','class::link*docs*fun_name1 href::manual/english/libraries/html-generator').
                              show('HTML Generator ').
                              to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                            tc('a');
                          tc('th');
                      tc('tr');            
          
                      to('tr');
                          to('td','class::gfc colspan::2');
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
            
                            to('span','class::function').show("doctype").tc('span');  
                            to('span').show("();").tc('span').bl();
            
                            to('span','class::function').show("to").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'html'").tc('span');
                            to('span').show(");").tc('span').bl();
            
                            tab(4).to('span','class::function').show("to").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'head'").tc('span');
                            to('span').show(");").tc('span').bl();
                                tab(8).to('span','class::function').show("title").tc('span');  
                                to('span').show("(").tc('span'); 
                                to('span','class::string').show("'Ajax Experimentation'").tc('span');
                                to('span').show(");").tc('span').bl();
            
                                tab(8).to('span','class::function').show("base_url").tc('span');  
                                to('span').show("();").tc('span').bl();
                            tab(4).to('span','class::function').show("tc").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'head'").tc('span');
                            to('span').show(");").tc('span').bl(2);

                            tab(4).to('span','class::function').show("to").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'body'").tc('span');
                            to('span').show(");").tc('span').bl();
                              
                              tab(8).to('span','class::if').show('if').tc('span');
                              to('span').show(' (').tc('span');
                              to('span','class::function').show('validation_error').tc('span');
                              to('span').show('())').tc('span').bl();
                              tab(8).to('span').show('{').tc('span').bl();
                                tab(12).to('span','class::function').show('echo').tc('span');
                                to('span','class::string').show(' \'There is a validation error\'').tc('span').show(';').bl();
                              tab(8).to('span').show('}').tc('span').bl();
                              tab(8).to('span','class::else').show('else').tc('span').bl();
                              tab(8).to('span').show('{').tc('span').bl();
                                tab(12).to('span','class::function').show('echo').tc('span');
                                to('span','class::string').show(' \'Success\'').tc('span').show(';').bl();
                              tab(8).to('span').show('}').tc('span').bl(2);
          
                              tab(8).make('span', 'Keep in mind that ','class::comment').
                              make('span',"'text'",'class::string*fun_name').
                              make('span',' parameter is an input name ','class::comment').bl().

                              tab(8).make('span', 'If using multipart/form-data, you can put ','class::comment').make('span',"'fmp'",'class::string*fun_name').make('span',' instaed of ','class::comment').make('span',"'form'",'class::string*fun_name').make('span',' in your to(); function.','class::comment').bl();
                              tab(8).to('span','class::function').show("to").tc('span');  
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'form'").tc('span');   
                              to('span').show(", ").tc('span');
                              to('span','class::string').show("'action::blog.php'").tc('span').
                              to('span').show(");").tc('span').bl();
          
                              tab(12).to('span','class::function').show("tag").tc('span'); 
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'input', 'type::text name::text value::'.").tc('span').
                              to('span','class::function').show("set_value").tc('span'); 
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'text'").tc('span'); 
                              to('span').show("));").tc('span').bl(2);
                              // make('span',"",'class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').bl();

                              tab(12).to('span','class::comment').show('1. Use the following style, if you are not using echo.').tc('span').bl().
                              tab(12).to('span','class::function').show("to").tc('span'); 
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'div'").tc('span'); 
                              to('span').show(").").tc('span'); 
                              to('span','class::function').show("show").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::function').show("set_error").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'text'").tc('span').
                              to('span').show(", ").tc('span');
                              to('span','class::string').show("'Text cannot be empty!'").tc('span').
                              to('span').show(")).").tc('span');
                              to('span','class::function').show("tc").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'div'").tc('span').
                              to('span').show(");").tc('span').bl();
                              tab(12).to('span','class::comment').show('-- OR --').tc('span').bl().
                              tab(12).to('span','class::function').show("to").tc('span'); 
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'div'").tc('span'); 
                              to('span').show(", ").tc('span');
                              to('span','class::string').show("''").tc('span').
                              to('span').show(", ").tc('span');
                              to('span','class::function').show("set_error").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'text'").tc('span').
                              to('span').show(", ").tc('span');
                              to('span','class::string').show("'Text cannot be empty!'").tc('span').
                              to('span').show(")).").tc('span');
                              to('span','class::function').show("tc").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'div'").tc('span').
                              to('span').show(");").tc('span').bl(2);
          
                              tab(12).to('span','class::comment').show('2. Use the following style, if you are using echo.').tc('span').bl().
                              tab(12).to('span','class::function').show("to").tc('span'); 
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'div'").tc('span'); 
                              to('span').show(");").tc('span').bl();
                              tab(16).to('span','class::function').show("echo ").tc('span');
                              to('span','class::function').show("set_error").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'text'").tc('span').
                              to('span').show(", ").tc('span');
                              to('span','class::string').show("'Text cannot be empty!'").tc('span').
                              to('span').show(");").tc('span').bl();
                              tab(12).to('span','class::function').show("tc").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'div'").tc('span').
                              to('span').show(");").tc('span').bl(2);
          
                              tab(12).to('span','class::comment').show('3. Use the following style, if you are echoing from set_error() function.').tc('span').bl().
                              tab(12).to('span','class::comment').show('Parameter 3 = 1, which means echo function is triggered, otherwise return function is triggered.').tc('span').bl().
                              tab(12).to('span','class::function').show("to").tc('span'); 
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'div'").tc('span'); 
                              to('span').show(").").tc('span');
                              to('span','class::function').show("set_error").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'text'").tc('span').
                              to('span').show(", ").tc('span');
                              to('span','class::string').show("'Text cannot be empty!'").tc('span').
                              to('span').show(", ").tc('span');
                              to('span','class::int').show("1").tc('span').
                              to('span').show(").").tc('span');
                              to('span','class::function').show("tc").tc('span');
                              to('span').show("(").tc('span');
                              to('span','class::string').show("'div'").tc('span').
                              to('span').show(");").tc('span').bl(2);
          
                              tab(12).to('span','class::function').show("tag").tc('span'); 
                              to('span').show("(").tc('span'); 
                              to('span','class::string').show("'input', 'type::submit value::Submit'").tc('span'); 
                              to('span').show(");").tc('span').bl();
          
                            tab(8).to('span','class::function').show("tc").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'form'").tc('span');   
                            to('span').show(");").tc('span').bl();
                            tab(4).to('span','class::function').show("tc").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'body'").tc('span');
                            to('span').show(");").tc('span').bl();
            
                            to('span','class::function').show("tc").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'html'").tc('span');   
                            to('span').show(");").tc('span').bl(2);
                            to('span','class::keyword').show("?".">").tc('span');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('You are now set view file. ');
                  show('You can now create a controller to respond to action in ').
                  to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/form#blog.view').
                      show('blog.php  ').
                      to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a').
                  show(' view.').bl().
                  show('For this example, we will use and modify ').
                  to('a','class::link*docs*fun_name*consolas href::manual/english/madeline-cmv/controllers#hello-world').
                      show('Blog controller ').
                      to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a').
              tc('p');
          
              to('p', 'class::welcome-text').
                  show('Add ').
                  make('span','__cunstructor()','class::function*consolas*fun_name').
                  show(' method to load the Form library to be used in all the methods.').
              tc('p').

              to('div', 'class::welcome-text');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Cunstructor method').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::keyword').show('public').tc('span');
                            to('span','class::keyword').show(' function').tc('span');
                            to('span','class::function').show(' __construct').tc('span'); 
                            to('span').show('()').tc('span').bl();
                            show('{').bl();             
                              to('span','class::keyword').tab(4).show('parent').tc('span');
                              to('span').show('::').tc('span');
                              to('span','class::function').show('__construct').tc('span');
                              to('span').show('();').tc('span').bl();

                              tab(4).to('span','class::keyword').show('$this').tc('span');
                              to('span').show('->').tc('span');
                              to('span','class::function').show('library').tc('span');
                              to('span').show('(').tc('span');
                              to('span','class::string').show("'form'").tc('span');
                              to('span').show(');').tc('span').bl();
                            to('span').show('}').tc('span').bl();
                            tc('td');
                        tc('tr');
                    tc('table');
                tc('div');
          
              to('p', 'class::welcome-text').
                  show('Change ').
                  make('span','index','class::function*consolas*fun_name').
                  show(' method to load a view as follows:').
              tc('p').

              to('div', 'class::welcome-text');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('index method').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                              to('span','class::keyword').show('public').tc('span');
                              to('span','class::keyword').show(' function').tc('span');
                              to('span','class::function').show(' index').tc('span'); 
                              to('span').show('() {').tc('span').bl();
                                  tab(4).to('span','class::keyword').show('$this').tc('span');
                                  to('span').show('->').tc('span');
                                  to('span','class::function').show('view').tc('span');
                                  to('span').show('(').tc('span');
                                  to('span','class::string').show("'blog'").tc('span');
                                  to('span').show(');').tc('span').bl().
                              show('}');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                  show('Add a new method called ').
                  make('span','hello','class::consolas*function*fun_name').show(', which will be used to respond to action in ');
                  to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/form#blog.view').
                    show('blog.php ').
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                  show(' view').
              tc('p').
          
              to('div', 'class::welcome-text');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('hello method').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                              to('span','class::keyword').show('public').tc('span');
                              to('span','class::keyword').show(' function').tc('span');
                              to('span','class::function').show(' hello').tc('span'); 
                              to('span').show('() {').tc('span').bl();
                                  tab(4).make('span','set input rules','class::comment').bl();
                                  tab(4).to('span','class::keyword').show('$this').tc('span');
                                  to('span').show('->').tc('span');
                                  to('span','class::function').show('from').tc('span');
                                  to('span').show('->').tc('span');
                                  to('span','class::function').show('input').tc('span');
                                  to('span').show('(').tc('span');
                                  to('span','class::string').show("'text'").tc('span');
                                  to('span').show(');').tc('span').bl(2);
          
                                  tab(4).make('span','validate input form','class::comment').bl();
                                  tab(4).to('span','class::if').show('if').tc('span');
                                  to('span').show(' (').tc('span');
                                  to('span','class::keyword').show('$this').tc('span');
                                  to('span').show('->').tc('span');
                                  to('span','class::variable').show('form').tc('span');
                                  to('span').show('->').tc('span');
                                  to('span','class::function').show('validate').tc('span');
                                  to('span').show('())').tc('span').bl();
                                  tab(4).to('span').show('{').tc('span').bl();
                                      tab(8).to('span','class::comment').show('return true').tc('span').bl();
                                      tab(8).to('span').show('$value').tc('span');
                                      show(' = ').
                                      to('span','class::keyword').show('$this').tc('span');
                                      to('span').show('->').tc('span');
                                      to('span','class::function').show('input').tc('span');
                                      to('span').show('->').tc('span');
                                      to('span','class::function').show('post').tc('span');
                                      to('span').show('(').tc('span');
                                      to('span','class::string').show("'text'").tc('span');
                                      to('span').show(');').tc('span').bl();
          
                                      tab(8).to('span','class::function').show('echo').tc('span');
                                      to('span','class::string').show(' \'Input value is: \'').tc('span');
                                      to('span').show('.').tc('span');
                                      to('span','class::variable').show('$value;').tc('span').bl();
                                  tab(4).to('span').show('}').tc('span').bl();
                                  tab(4).to('span','class::else').show('else').tc('span').bl();
                                  tab(4).to('span').show('{').tc('span').bl();
                                      tab(8).to('span','class::comment').show('return false').tc('span').bl();
                                      tab(8).to('span','class::keyword').show('$this').tc('span');
                                      to('span').show('->').tc('span');
                                      to('span','class::function').show('view').tc('span');
                                      to('span').show('(').tc('span');
                                      to('span','class::string').show("'blog'").tc('span');
                                      to('span').show(');').tc('span').bl();
                              show('}');
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              to('p', 'class::welcome-text');
                show('That is all you need to know about Form Library.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/file');
                to('button','class::pn-button').
                  make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                  show(' Previous').
                tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/html-generator');
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