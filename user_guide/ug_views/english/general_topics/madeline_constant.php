<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');

      title('User Manual | General Topics | MadeLine Constants');
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
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; MadeLine Constants');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('MadeLine Constants').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Madeline provides a list of constants that are used and will probably be used by everyone. ');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Below are all the constants');
              tc('p');

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table');
                  to('tr','class::bb*bt');
                    to('th','class::ml-th*br').show('Constant Name').tc('th');
                    to('th','class::ml-th').show('Constant Description').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('HTTP').tc('td');
                    to('td').show('HTTP is a constant used to get your application host.
                                  For example, your current application is hosted via ('.HTTP.').').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('DR').tc('td');
                    to('td').show('DR is a constant used to get your application document root. For example, 
                                  your document root is ('.DR.').').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('CD').tc('td');
                    to('td').show('CD is a constant used to get your application current directory.
                                  For example, your current directory is ('.CD.').').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('BASE_URL').tc('td');
                    to('td').show('BASE_URL is a constant used to get your application base path in a form of URL address; 
                                  For example, your current page is ('.BASE_URL.').').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('AJAX').tc('td');
                    to('td').show('AJAX is a constant used to verify access to ajax class or method.').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('MADELINE').tc('td');
                    to('td').show('MADELINE is a constant used to get your application base directory. 
                                  For example, your current based directory is ('.MADELINE.').').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('uris').tc('td');
                    to('td').show('uris is a constant used to get your total URI segments. 
                                  For example, you currently have ('.uris.') URI segments in your URL.').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('uri').tc('td');
                    to('td').show('uri is a constant used to get your URI segments in a form of array. 
                                  For example, your first URI segment is '.make('span','uri[0]','class::consolas*fun_name',0).' OR '.make('span','uri1','class::consolas*fun_name',0).' = ('.str_replace('_','-',uri[0]).').').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('last_uri').tc('td');
                    to('td').show('last_uri is a constant used to get your last URI. 
                                  For example, your last URI sement is ('.str_replace('_','-',last_uri).').').tc('th');
                  tc('tr');
                tc('table');
              tc('div');
              
              bl(2);
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Directory Path Constant.');
              tc('p');
              
              bl();
                
              to('a', 'class::link href::manual/english/general-topics/directory-path-constants');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/general-topics/using-madeline-error');
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