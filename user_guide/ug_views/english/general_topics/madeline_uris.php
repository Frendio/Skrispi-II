<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | General Topics | Madeline URIs');
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
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; Madeline URIs');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('MadeLine URIs').tc('h1');
              to('p', 'class::welcome-text');
                show('By default, URLs in MadeLine are designed to be search-engine and human friendly.
                      <br>Therefor, MadeLine uses an ').make('span','default-array-based','class::fun_name*consolas').show(' and ').make('span','loop-counter-based','class::fun_name*consolas').show(' approaches you can use anywhere around this framework. <br>It is made out of a constant called ');
                to('span','class::fun_name*consolas').show('uri').tc('span');
              tc('p');

              to('p', 'class::welcome-text');
                show('Take a look at the following URL example:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span').show('MadeLine/blog/go/12').tc('span');
                tc('pre');
              tc('div');

              bl();
              
              to('ol', 'class::manual-li*dfc');
                to('li').show('The first array represents the controller class that should be invoked.').tc('li');
                to('li').show('The second array represents the class function, or method, that should be called.').tc('li');
                to('li').show('The third, and any additional segments, represent the ID and any variables that will be passed to the controller.').tc('li');
              tc('ol');              

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table*dark*code_table');
                    to('tr');
                        to('th','class::ml-th colspan::2').
                          show('default-array-based');
                        tc('th');
                    tc('tr');            

                    to('tr');
                      to('td','class::gfc colspan::2');
                        to('span','class::keyword').show("<").tc('span');
                        to('span','class::keyword').show("?").tc('span');
                        to('span','class::keyword').show("php").tc('span').bl(2);
                        
                        to('span','class::keyword').show('class').tc('span');
                        show(' Blog');
                        to('span','class::keyword').show(' extends').tc('span');
                        show(' ML_Controller').bl();
                        show('{').tc('span').bl();
                          to('span','class::keyword').space(4).show('public').tc('span');
                          to('span','class::keyword').show(' function').tc('span');
                          to('span','class::function').show(' index').tc('span'); 
                          to('span').show('()').tc('span').bl();
                          tab(4).to('span').show('{').tc('span').bl();              
                            to('span','class::function').tab(8).show('echo').tc('span');
                            to('span','class::variable').show(' uri').tc('span');
                            to('span').show('[0];').tc('span');
                            to('span','class::comment').show(' // prints blog').tc('span').bl();

                            to('span','class::function').tab(8).show('echo').tc('span');
                            to('span','class::variable').show(' uri').tc('span');
                            to('span').show('[1];').tc('span');
                            to('span','class::comment').show(' // prints go').tc('span').bl();

                            to('span','class::function').tab(8).show('echo').tc('span');
                            to('span','class::variable').show(' uri').tc('span');
                            to('span').show('[2];').tc('span');
                            to('span','class::comment').show(' // prints 12').tc('span').bl();                  
                          to('span').tab(4).show('} ').tc('span').bl();
                        to('span').show('} ').tc('span').bl(2);
                        
                        to('span','class::keyword').show("?".">").tc('span');
                        tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table*dark*code_table');
                    to('tr');
                        to('th','class::ml-th colspan::2').
                          show('loop-counter-based');
                        tc('th');
                    tc('tr');            

                    to('tr');
                      to('td','class::gfc colspan::2');
                        to('span','class::keyword').show("<").tc('span');
                        to('span','class::keyword').show("?").tc('span');
                        to('span','class::keyword').show("php").tc('span').bl(2);
                        
                        to('span','class::keyword').show('class').tc('span');
                        show(' Blog');
                        to('span','class::keyword').show(' extends').tc('span');
                        show(' ML_Controller').bl();
                        show('{').tc('span').bl();
                          to('span','class::keyword').space(4).show('public').tc('span');
                          to('span','class::keyword').show(' function').tc('span');
                          to('span','class::function').show(' index').tc('span'); 
                          to('span').show('()').tc('span').bl();
                          tab(4).to('span').show('{').tc('span').bl();              
                            to('span','class::function').tab(8).show('echo').tc('span');
                            to('span','class::variable').show(' uri1;').tc('span');
                            to('span','class::comment').show(' // prints blog').tc('span').bl();

                            to('span','class::function').tab(8).show('echo').tc('span');
                            to('span','class::variable').show(' uri2;').tc('span');
                            to('span','class::comment').show(' // prints go').tc('span').bl();

                            to('span','class::function').tab(8).show('echo').tc('span');
                            to('span','class::variable').show(' uri3;').tc('span');
                            to('span','class::comment').show(' // prints 12').tc('span').bl();                  
                          to('span').tab(4).show('} ').tc('span').bl();
                        to('span').show('} ').tc('span').bl(2);
                        
                        to('span','class::keyword').show("?".">").tc('span');
                        tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table*dark*code_table');
                    to('tr');
                        to('th','class::ml-th colspan::2').
                          show('URI Constant');
                        tc('th');
                        to('th','class::ml-th colspan::2').
                          show('Description');
                        tc('th');
                    tc('tr');

                    to('tr','class::bb');
                      to('td','class::gfc colspan::2');
                        to('span','class::keyword').show("last_uri").tc('span');
                      tc('td');
                      to('td','class::gfc colspan::2');
                        show('Used to get last uri: '.last_uri);
                      tc('td');
                    tc('tr');

                    to('tr');
                      to('td','class::gfc colspan::2');
                        to('span','class::keyword').show("uris").tc('span');
                      tc('td');
                      to('td','class::gfc colspan::2');
                        show('Used to get number of uris: '.uris);
                      tc('td');
                    tc('tr');
                  tc('table');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about MadeLine URIs.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/general-topics/using-madeline-libraries');
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