<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

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
            
              to('h1','class::h1').show('File (Upload Class)').tc('h1');
                
              to('p', 'class::welcome-text');
                show('MadeLine provides File library for you to use when uploading a File.');
              tc('p');
              
              bl();
            
              to('h2','id::file-configuration').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Load File Library').
              tc('h2');
                
              to('p', 'class::welcome-text');
                show('Before setting up File configuration, you need to load the File library.');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show("library").tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'file'").tc('span');
                    to('span').show(');').tc('span');
                  tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::file-configuration').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Upload File Configuration').
              tc('h2');

              to('p', 'class::welcome-text');
                  show('Before using File library, you have to first set the following items.');
              tc('p');
              
              to('p', 'class::welcome-text');
                  show('To set your input_name from your form in your view ').make('b','(Required)').
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(1).show(' = ').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('To set your destination directory path ').make('b','(Required)');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'path'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(7).show(' = ').tc('span');
                  to('span','class::string').show("'upload/your_directory or public/images/your_directory or your_own_directory'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');

              to('p', 'class::welcome-text');
                  make('b', 'Used only for uploading multiple files (Optional) *').
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'index'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(6).show(' = ').tc('span');
                  to('span','class::string').show("'loop variable'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('If you want to delete a file ').make('b','(Optional)');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'delete_file'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::string').show("'file_name'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('If you want to resize your file (OPTIONAL "image files only"),');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'resize'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(5).show(' = ').tc('span');
                  to('span','class::string').show("'0 - 100'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('If you want to set maximum size (Optional),');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'max_size'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(3).show(' = ').tc('span');
                  to('span','class::string').show("'2097152 = 2 mb'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('If you want to set maximum height size (OPTIONAL "image files only"),');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'max_height'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(1).show(' = ').tc('span');
                  to('span','class::string').show("'in pixel'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                  show('If you want to set maximum width size (OPTIONAL "image files only"),');
              tc('p');
              
              to('div', 'class::highlight');
                  to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'max_width'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').tab(2).show(' = ').tc('span');
                  to('span','class::string').show("'in pixel'").tc('span');
                  to('span').show(';').tc('span');
                  tc('pre');
              tc('div');        
              
              bl();
            
              to('h2','id::load-configuration').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Upload Single File').
              tc('h2');

              to('p', 'class::welcome-text');
                  show('After setting up the ').make('span','File','class::consolas*fun_name').show(' configuration, you need to execute it with ').
                  make('span','upload','class::consolas*fun_name').
                  show(' function.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show(';').tc('span').bl().

                  to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'path'").tc('span');
                  to('span').show('] ').tc('span');
                  tab(6).to('span').show(' = ').tc('span');
                  to('span','class::string').show("'upload_directory_path'").tc('span');
                  to('span').show(';').tc('span').bl(2).

                  to('span','class::comment').show('/*').tc('span').bl();
                  to('span','class::comment').show(' * accepts tow parameters').tc('span').bl();
                  to('span','class::comment').show(' *').tc('span').bl();
                  to('span','class::comment').show(' * parameter 1    = $configuration ').tc('span').bl();
                  to('span','class::comment').show(' * parameter 2    = new_file_name OR optional ').tc('span').bl();
                  to('span','class::comment').show(' * rand or random = will generate a random file name ').tc('span').bl();
                  to('span','class::comment').show(' */').tc('span').bl(2);

                  to('span','class::if').show('if').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('file').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('upload').tc('span');
                  to('span','class::function').show('(').tc('span');
                  to('span').show('$config').tc('span');
                  to('span').show('))').tc('span').bl();
                  to('span').show('{').tc('span').bl();

                      to('span','class::comment').tab(4).show('return true').tc('span').bl().
                      tab(4).to('span').show('$file_name = ').tc('span');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('file').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('name').tc('span');
                      to('span').show('();').tc('span').bl().

                  to('span').show('}').tc('span').bl().
                  to('span','class::else').show('else').tc('span').bl();
                  to('span').show('{').tc('span').bl();

                      to('span','class::comment').tab(4).show('return false').tc('span').bl();

                  to('span').show('}').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::load-configuration').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Upload Multiple Files').
              tc('h2');

              to('p', 'class::welcome-text');
                  show('After setting up the ').make('span','File','class::consolas*fun_name').show(' configuration, you need to execute it with ').
                  make('span','upload','class::consolas*fun_name').
                  show(' function.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span').show('$count_files = ').tc('span').
                  to('span','class::function').show('count').tc('span').
                  to('span').show('(').tc('span').
                  to('span','class::keyword').show('$this').tc('span').
                  to('span').show('->input->').tc('span').
                  to('span','class::function').show('file').tc('span').
                  to('span').show('(\'').tc('span').
                  to('span','class::string').show('input_name').tc('span').
                  to('span').show('\'));').tc('span').bl().
                  
                  to('span','class::if').show('for').tc('span').
                  to('span').show('($i = ').tc('span').
                  to('span','class::int').show('0').tc('span').
                  to('span').show('; $i < $count_files; $i++)').bl().
                  to('span').show('{').tc('span').bl().

                  tab(4).to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show('] ').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::string').show("'input_name'").tc('span');
                  to('span').show(';').tc('span').bl().

                  tab(4).to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'path'").tc('span');
                  to('span').show('] ').tc('span');
                  tab(6).to('span').show(' = ').tc('span');
                  to('span','class::string').show("'upload_directory_path'").tc('span');
                  to('span').show(';').tc('span').bl().

                  tab(4).to('span','class::variable').show('$config').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'index'").tc('span');
                  to('span').show('] ').tc('span');
                  tab(5).to('span').show(' = ').tc('span');
                  to('span').show('$i').tc('span');
                  to('span').show(';').tc('span').bl(2).

                  tab(4).to('span','class::comment').show('/*').tc('span').bl();
                  tab(4).to('span','class::comment').show(' * accepts tow parameters').tc('span').bl();
                  tab(4).to('span','class::comment').show(' *').tc('span').bl();
                  tab(4).to('span','class::comment').show(' * parameter 1    = $configuration ').tc('span').bl();
                  tab(4).to('span','class::comment').show(' * parameter 2    = new_file_name OR optional ').tc('span').bl();
                  tab(4).to('span','class::comment').show(' * rand or random = will generate a random file name ').tc('span').bl();
                  tab(4).to('span','class::comment').show(' */').tc('span').bl(2);

                  tab(4).to('span','class::if').show('if').tc('span');
                  to('span').show(' (').tc('span');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('file').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('upload').tc('span');
                  to('span','class::function').show('(').tc('span');
                  to('span').show('$config').tc('span');
                  to('span').show('))').tc('span').bl();
                  tab(4).to('span').show('{').tc('span').bl();

                    tab(8).to('span','class::comment').show('return true').tc('span').bl().
                    tab(8).to('span').show('$file_name = ').tc('span');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::variable').show('file').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('name').tc('span');
                    to('span').show('();').tc('span').bl().

                  tab(4).to('span').show('}').tc('span').bl().
                  tab(4).to('span','class::else').show('else').tc('span').bl();
                  tab(4).to('span').show('{').tc('span').bl();

                    tab(8).to('span','class::comment').show('return false').tc('span').bl();

                  tab(4).to('span').show('}').tc('span').bl().
                  to('span').show('}').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::validating-form-check').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Getting New File Name').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To get the new file name,');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('file').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('name').tc('span');
                  to('span').show('();').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::file-configuration').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Delete File Configuration').
              tc('h2');
            
              to('p', 'class::welcome-text');
                show('To delete a file, you need to include path to the file');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('file').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('delete').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'file_path'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');

              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about File Library.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/cookies');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/form');
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