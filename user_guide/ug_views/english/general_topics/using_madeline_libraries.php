<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');

      title('User Manual | General Topics | Using Madeline Libraries');
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
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; Using Madeline Libraries');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');
            
              to('h1').show('Using MadeLine Libraries').tc('h1');
              
              to('p', 'class::welcome-text');
                show('All of the available libraries are located in your ').make('span','system/libraries/','class::fun_name*consolas').show(' directory. In most cases, to use one of these classes involves initializing it within a ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/general-topics/controllers').show('controller').tc('a');
                show(' using the following initialization method:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'library_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Where ‘library_name’ is the name of the class you want to invoke. For example, to load the ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/form-check').show('Form Library').tc('a');
                show(' you would do this:');
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
            
              to('h2').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Creating Your Own Libraries').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Please read the section of the user guide that discusses how to ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/general-topics/creating-libraries').show('create your own libraries').tc('a');
              tc('p');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Using MadeLine Libraries.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/general-topics/madeline-uris');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/general-topics/creating-libraries');
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