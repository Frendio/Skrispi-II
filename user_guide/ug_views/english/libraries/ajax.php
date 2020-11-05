<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html', 'lang::en');
    to('head');
      title('User Manual | Librares | Ajax Caller');
      responsive_meta();
      base_url();
      system_css('reset');
      system_css('font');
      bootstrap_icon();
      system_css('madeline');
      system_css('ML_notifier');
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp;  Libraries &nbsp;').tc('a').arrow().show('&nbsp; Ajax');
            tc('div');
            ul();          
            to('div', 'id::content-holder');          
              to('h1','class::h1').show('Ajax').tc('h1');            
              to('p', 'class::welcome-text');
                show('Ajax is a modern web technology used by most of web developers today.').bl();
                show('MadeLine ajax will be explained in three different files and actions. However, you can write the functions and puth in one file
                      anyway you want.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('The three functions are as follows:').bl();
                make('span', 'ajax_caller.js','class::consolas*fun_name').show(', ').
                make('span', 'ajax_request.js','class::consolas*fun_name').show(' & ').
                make('span', 'ajax_return.js.','class::consolas*fun_name');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Page Contents:');
              tc('p');
              
              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/ajax#ajax-caller');
                    show('Ajax Caller ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/ajax#ajax-request');
                    show('Ajax Request ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/ajax#ajax-return');
                    show('Ajax Return ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/ajax#simple-example');
                    show('Simple Example ');
                    make('span','','class::glyphicon*glyphicon-link style::font-size:13px').
                  tc('a');
                tc('li');
              tc('ol');
              
              bl();
            
              to('h2','id::ajax-caller').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Ajax Caller').
              tc('h2');
              REQUIRE 'extra/ajax/ajax_caller.php';

              bl();

              to('h2','id::ajax-request').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Ajax Request').
              tc('h2');
              REQUIRE 'extra/ajax/ajax_request.php';

              bl();
              
              to('h2','id::ajax-return').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Ajax Return').
              tc('h2');
              REQUIRE 'extra/ajax/ajax_return.php';

              bl();
              
              to('h2','id::simple-example').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Simple Example').
              tc('h2');
              REQUIRE 'extra/ajax/ajax_example.php';

              bl(2);            
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');            
              to('p', 'class::welcome-text');
                show('That is all you need to know about Ajax Libraries.');
              tc('p');            
              bl();            
              to('a', 'class::link href::manual/english/libraries/cookies');
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
