<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | Librares | Input Class');
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries ').tc('a').arrow().show('&nbsp; Input Class');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('Input').tc('h1');
              to('p', 'class::welcome-text');
                show('MadeLine provides input  Libraries used for ');
                make('span','GET','class::consolas*fun_name');
                show(', ');
                make('span','POST','class::consolas*fun_name');
                show(' and ');
                make('span','FILE','class::consolas*fun_name');
                show(' method input type.');
              tc('p');
              
              bl();
                  
              to('h2','id::post-method').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Post Method Input').
              tc('h2');

              to('p', 'class::welcome-text');
                show('To process and input with '.make('span','POST','class::consolas*fun_name',0).' method, follow the instruction bellow:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('This has been sanitized with mysqli_escaple_string').tc('span').bl();
                  make('span','Accepts tow (2) parameter:','class::comment').bl().
                  make('span','If you send a json data the second param should be "true", otherwise no parameter','class::comment').bl(2).

                  make('span','If json data type','class::comment').bl().
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('input').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('post').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::function').show("true").tc('span');
                  to('span').show(');').tc('span').bl(2);

                  make('span','Regular or form data type','class::comment').bl().
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('input').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('post').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::get-method').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Get Method Input').
              tc('h2');

              to('p', 'class::welcome-text');
                show('To process and input with '.make('span','GET','class::consolas*fun_name',0).' method, follow the instruction bellow:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('/* this has been sanitized with mysqli_escaple_string */').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('input').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('get').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'uri_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::file-input').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('File Input Type').
              tc('h2');

              to('p', 'class::welcome-text');
                show('To process and input '.make('span','FILE','class::consolas*fun_name',0).', follow the instruction bellow:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('/* this has been sanitized with mysqli_escaple_string */').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('input').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('file').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'input_file_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Input Class.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/html-generator');
                to('button','class::pn-button').
                  make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                  show(' Previous').
                tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/query-liner');
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
