<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');

      title('User Manual | General Topics | Directory Path Constants');
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
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; Directory Path Constants');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');
            
              to('h1','class::h1').show('Directory Path Constants').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Madeline provides a library that generates constatns for all the directoies within TWO (2) LEVELS
                        in MadeLine Directory.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('If you do create and or delete any sub directories, you must open '.make('span','Constant.php','class::consolas*fun_name',0).' file in your:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span').show("system/core/Constant.php").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Then delete everything in the file and save the file.');
              tc('p');
              
              bl();
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*bbc-notifier').show('NOTE!').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show("Don't wory, the Constant.php file will be filled up with new constants on page reload.");
                tc('div');
              tc('div');
              
              // to('p', 'class::welcome-text');
              //   show('To see how the constans are generated, check Constant Generator Library');
              // tc('p');
              
              // to('div', 'class::highlight');
              //   to('pre');
              //     to('span').show("system/core/Constant_Generator.php").tc('span');
              //   tc('pre');
              // tc('div');
              
              to('p', 'class::welcome-text');
                show('Bellow are the default generated constants for MadeLine directories:');
              tc('p');

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table');
                  to('tr','class::bb*bt');
                    to('th','class::ml-th*br').show('Nama Directory').tc('th');
                    to('th','class::ml-th*br').show('Nama Constant').tc('th');
                    to('th','class::ml-th').show('Path').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('application').tc('td');
                    to('td','class::br').show('APPLICATION_PATH').tc('td');
                    to('td').show(APPLICATION_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('controllers').tc('td');
                    to('td','class::br').show('CONTROLLERS_PATH').tc('td');
                    to('td').show(CONTROLLERS_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('models').tc('td');
                    to('td','class::br').show('MODELS_PATH').tc('td');
                    to('td').show(MODELS_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('my_libraries').tc('td');
                    to('td','class::br').show('MY_LIBRARIES_PATH').tc('td');
                    to('td').show(MY_LIBRARIES_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('views').tc('td');
                    to('td','class::br').show('VIEWS_PATH').tc('td');
                    to('td').show(VIEWS_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('public').tc('td');
                    to('td','class::br').show('PUBLIC_PATH').tc('td');
                    to('td').show(PUBLIC_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('images').tc('td');
                    to('td','class::br').show('IMAGES_PATH').tc('td');
                    to('td').show(IMAGES_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('js').tc('td');
                    to('td','class::br').show('JS_PATH').tc('td');
                    to('td').show(JS_PATH).tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('style').tc('td');
                    to('td','class::br').show('STYLE_PATH').tc('td');
                    to('td').show(STYLE_PATH).tc('th');
                  tc('tr');
                tc('table');
              tc('div');
              
              bl(2);
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Directory Path Constant.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/general-topics/creating-libraries');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/general-topics/madeline-constant');
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

?>
