<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | General Topics | Creating Libraries');
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
              to('a', 'class::link*docs href::manual/english/english').show('Manual &nbsp;').tc('a').arrow();
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; Creating Libraries');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');
              to('h2').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Creating Libraries').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('When we use the term “Libraries” we are normally refering to the classes
                        that are located in the libraries directory and described in the Class Reference of this user guide.
                        However, we will instead describe how you can create your own
                        libraries within your ').make('span','application/my_libraries','class::consolas*fun_name').show(' directory in order to maintain separation
                        between your local resources and the global framework resources.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('As an added bonus, MadeLine permits your libraries to extend native classes if
                        you simply need to add some functionality to an existing library.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('In summaray:');
              tc('p');
              
              to('ol', 'class::manual-li*dfc');
                to('li').show('You can create entirely new libraries.').tc('li');
                to('li').show('You can extend native libraries.').tc('li');
              tc('ol');
              
              bl();
            
              to('h2').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('The Class File').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('My library classes are stored in your '.make('span','application/my_library/','class::consolas*fun_name',0).' directory.
                        They can be nested within sub-directories '.make('span','"ONLY ONE LEVEL"','class::consolas*fun_name',0).' if you want this type of organization.').bl();
                show('Classes should have this basic prototype:');
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
                  to('span','class::class').show(' Some_Class').tc('span').bl();
                  to('span').show('{').tc('span').bl();
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' some_method').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).to('span').show('{').tc('span').bl(2); 
                    to('span').tab(4).show('}').tc('span').bl();        
                  to('span').show('}').tc('span').bl(2); 
                    
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Then save the file in you '.make('span','application/my_library/','class::consolas*fun_name',0).' as '.make('span','some_class.php','class::consolas*fun_name',0));
              tc('p');
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*bbc-notifier').show('NOTE!').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show('We are using the name Some_Class purely as an example.');
                tc('div');
              tc('div');
              
              bl();
            
              to('h2').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Using Your Class').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('From within any of your ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/general-topics/controllers').show('controller').tc('a');
                show(' methods you can initialize your class using the following standard:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('If you only have ').
                make('b','one level sub-directory','class::consolas*fun_name').
                show(', you can call as follows:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('my_library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'some_class'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');

              bl().
              
              to('p', 'class::welcome-text');
                show('If you only have ').
                make('b','more than one level sub-directories','class::consolas*fun_name').
                show(', you have to puth the file path');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('my_library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'some_directory/some_class'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Where '.make('span',"'some_class'",'class::string*consolas*fun_name',0).' is the file name, without the '.make('span','“.php”','class::consolas*fun_name',0).' file extension.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Once loaded you can access your class using the lower case version:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('some_class').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('some_method').tc('span');
                  to('span').show('();').tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Creating Libraries.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/general-topics/using-madeline-libraries');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/general-topics/directory-path-constants');
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