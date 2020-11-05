<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html').
    to('head');

      title('User Manual | Librares | File Class');
      responsive_meta();
      base_url().

      system_css('reset');
      system_css('font');
      bootstrap_icon().
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries &nbsp;').tc('a').arrow().show('&nbsp; File Class');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');
            
              to('h1','class::h1').show('Pagination').tc('h1');
                
              to('p', 'class::welcome-text');
                show('MadeLine provides Pagination library for you to use when facing rows of data to be displayed.');
              tc('p');

              bl().
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Load Pagination Library').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To use pagination, you have to firstly load the library.');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("library").tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'pagination'").tc('span');
                    to('span').show(');').tc('span');
                  tc('pre');
              tc('div');

              bl().
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Pagination Data Setup').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Before using session library, you have to first load the library.').bl().
                show('To load session library, you have to include the following code in your ');
                to('span','class::consolas*fun_name').show('controller').tc('span');
              tc('p');

              to('p', 'class::welcome-text');
                  show('Set your ');
                  make('span','base_url','class::consolas*fun_name').
                  show(' for your page (REQUIRED)');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::variable').show('$config').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'base_url'").tc('span');
                    to('span').show('] ').tc('span');
                    to('span').tab(2).show(' = ').tc('span');
                    to('span','class::string').show("'http://MadeLine/page'").tc('span');
                    to('span').show(';').tc('span');
                  tc('pre');
              tc('div');

              to('p', 'class::welcome-text');
                  show('Set your ');
                  make('span','per_page','class::consolas*fun_name').
                  show(', is how many rows of data to be displayed on every page (REQUIRED)');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::variable').show('$config').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'per_page'").tc('span');
                    to('span').show('] ').tc('span');
                    to('span').tab(2).show(' = ').tc('span');
                    to('span','class::int').show("10").tc('span');
                    to('span').show(';').tc('span');
                  tc('pre');
              tc('div');

              to('p', 'class::welcome-text');
                  show('Set your ');
                  make('span','total_rows','class::consolas*fun_name').
                  show(', the total number of rows (REQUIRED)').bl().
                  show('You will have to do a query to get the number of rows.');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::variable').show('$config').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'total_rows'").tc('span');
                    to('span').show('] ').tc('span');
                    to('span').show(' = ').tc('span');
                    to('span','class::int').show("50").tc('span');
                    to('span').show(';').tc('span');
                  tc('pre');
              tc('div');

              bl().
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Initialize Pagination').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('After setting up the pagination, you will have to initialize the process.');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->pagination').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("set").tc('span');
                    to('span').show('(').tc('span');
                    show('$config');
                    to('span').show(');').tc('span');
                  tc('pre');
              tc('div');

              bl().
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Initialize Pagination in View').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('After initializing the process in your controller, you will have to initialize it in your view as well to have the links displayed.').bl().
                show('This will have to be placed at bottom of your data table.');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::variable').show('pagination').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("links").tc('span');
                    to('span').show('();').tc('span');
                  tc('pre');
              tc('div');

              bl().
            
              to('h2','id::loading-session-library').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Simple Example').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('#1. You need to create a controller file and put the following lines of codes in your method that will be invoked as a page.');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("library").tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'pagination'").tc('span');
                    to('span').show(');').tc('span').bl(2).

                    to('span','class::variable').show('$config').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'base_url'").tc('span');
                    to('span').show('] ').tc('span');
                    to('span').tab(2).show(' = ').tc('span');
                    to('span','class::string').show("'http://MadeLine/page'").tc('span');
                    to('span').show(';').tc('span').bl().

                    to('span','class::variable').show('$config').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'per_page'").tc('span');
                    to('span').show('] ').tc('span');
                    to('span').tab(2).show(' = ').tc('span');
                    to('span','class::int').show("10").tc('span');
                    to('span').show(';').tc('span').bl().

                    to('span','class::variable').show('$config').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'total_rows'").tc('span');
                    to('span').show('] ').tc('span');
                    to('span').show(' = ').tc('span');
                    to('span','class::int').show("50").tc('span');
                    to('span').show(';').tc('span').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->pagination').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("set").tc('span');
                    to('span').show('(').tc('span');
                    show('$config');
                    to('span').show(');').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('#2. You need to create a view file and put the following line of codes after your data table.').bl().
                show('Keep in minde you can place the paging anywhere, but it will always be in the moddle.').
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::variable').show('pagination').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("links").tc('span');
                    to('span').show('();').tc('span');
                  tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Pagination Library.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/query-liner');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/session');
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