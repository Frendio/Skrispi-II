<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype().
  to('html').
    to('head').
      title('User Manual | Librares | HTML Generator').
      responsive_meta().
      base_url().

      system_css('reset').
      system_css('font').
      bootstrap_icon().
      system_css('madeline').
      system_css('manual-ls').
      bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png').
    tc('head');

    to('body', 'role::content').
      to('div', 'class::inner-body');
        INCLUDE USER_GUIDE_PATH.'ug_views/navigation/left-menu.php';

        to('div', 'class::mm-menu*show-mmm').
          tag('img', 'src::'.BASE_URL.'system_config/ML_Assets/icons/menu.png').
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

        to('section', 'class::wy-nav-content-wrap').
          to('div', 'class::wy-nav-content').
            to('div' ,'class::head-nav role::navigation').
              to('a', 'class::link*docs href::manual/english').show('Manual &nbsp;').tc('a').arrow().
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries &nbsp;').tc('a').arrow().show('&nbsp; HTML Generator').
            tc('div');

            ul();
            
            to('div', 'id::content-holder').
              to('h1','class::h1').show('HTML Generator').tc('h1').
              to('p', 'class::welcome-text').
                show('MadeLine provides a library that transforms PHP scripts into HTML tags.').bl().
                show('There are two different types of HTML tags and one is only for HTML code.').
              tc('p');
              
              bl();
            
              to('h2','id::generator-syntax').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('PHP-HTML Generator Sytax').
              tc('h2');
              to('p', 'class::welcome-text').tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('doctype HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts no parameters').tc('span').bl();
                            to('span','class::function').show("doctype").tc('span');  
                            to('span').show("();").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('Accepts one (1) parameter.')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('title HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Aaccepts one (1) parameter = Page Title').tc('span').bl();
                            to('span','class::function').show("title").tc('span');  
                            to('span').show("(").tc('span').
                            to('span','class::string').show("'Page Title'").tc('span').
                            to('span').show(");").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Base URL HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts no parameters').tc('span').bl();
                            to('span','class::function').show("base_url").tc('span');  
                            to('span').show("();").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Responsive meta HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts no parameters').tc('span').bl();

                            to('span','class::function').show("responsive_meta").tc('span');  
                            to('span').show("();").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('Accepts one (1) parameter, but optional')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Bar icon HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts one (1) parameter = icon file path').tc('span').bl();

                            to('span','class::function').show("bar_icon").tc('span');  
                            to('span').show("(").tc('span').
                            to('span','class::string').show("'icon_path'").tc('span').
                            to('span').show(");").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('To load your Auto Load CSS Files set in route configuration, you need to include this function from within your HTHML head tag.')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Auto load CSS files').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts no parameters').tc('span').bl();
                            to('span','class::function').show("load_css").tc('span');  
                            to('span').show("();").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('To load specific CSS file, you need to include this function from within your HTHML head tag.').bl().
                show('Without .css extension')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Load CSS files').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts one parameter = css file path').tc('span').bl(2);

                            make('span','Your CSS files have to be in style directory provided by Madeline.','class::comment').bl().
                            to('span','class::function').show("css").tc('span');  
                            to('span').show("(").tc('span').
                            to('span','class::string').show("'css_file'").tc('span');  
                            to('span').show(");").tc('span').bl(2).

                            make('span','You can load multiple css files.','class::comment').bl().
                            to('span','class::function').show("css").tc('span');  
                            to('span').show("(").tc('span').
                            to('span','class::string').show("'css_file1, css_file2'").tc('span');  
                            to('span').show(");").tc('span').bl(2).

                            make('span','If Your CSS files are not in the style directory provided by Madeline.','class::comment').bl().
                            to('span','class::function').show("web_css").tc('span');  
                            to('span').show("(").tc('span').
                            to('span').show("BASE_URL.").tc('span');
                            to('span','class::string').show("'css_file_path'").tc('span');  
                            to('span').show(");").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('To load specific JS file, you need to include this function from within your HTHML head tag.').bl().
                show('Without .js extension')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Load JS files').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts one parameter = js file path').tc('span').bl(2);
                            make('span','Your JS files have to be in style directory provided by Madeline.','class::comment').bl().
                            to('span','class::function').show("js").tc('span');  
                            to('span').show("(").tc('span').
                            to('span','class::string').show("'js_file'").tc('span');  
                            to('span').show(");").tc('span').bl(2).

                            make('span','You can load multiple js files.','class::comment').bl().
                            to('span','class::function').show("js").tc('span');  
                            to('span').show("(").tc('span').
                            to('span','class::string').show("'js_file1, js_file2'").tc('span');  
                            to('span').show(");").tc('span').bl(2).

                            make('span','If Your JS files are not in the style directory provided by Madeline.','class::comment').bl().
                            to('span','class::function').show("web_js").tc('span');  
                            to('span').show("(").tc('span').
                            to('span').show("BASE_URL.").tc('span');
                            to('span','class::string').show("'js_file_path'").tc('span');  
                            to('span').show(");").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl();

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Open HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::comment').show('/*').tc('span').bl();
                            to('span','class::comment').show(' * accepts four (4) parameters').tc('span').bl();
                            to('span','class::comment').show(' *').tc('span').bl();
                            to('span','class::comment').show(' * parameter 1: HTML tag').tc('span').bl();
                            to('span','class::comment').show(' * parameter 2: HTML attributes (Optional)').tc('span').bl();
                            to('span','class::comment').show(' * parameter 3: data (Optional)').tc('span').bl();
                            to('span','class::comment').show(' * parameter 4: optional (1 = echo) or (no param = return) ').tc('span').bl();
                            to('span','class::comment').show(' *').tc('span').bl();
                            to('span','class::comment').show(' */').tc('span').bl(2);

                            to('span','class::function').show("to").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'div'").tc('span').
                            to('span').show(", ").tc('span'); 
                            to('span','class::string').show("'class::myClass'").tc('span').
                            show(');').bl(2).
                            to('span','class::comment').show('Equals to:').tc('span').bl().
                            to('span','class::keyword', '<').tc('span').
                            to('span','class::keyword', 'div ').tc('span').
                            to('span','class::function', 'class').tc('span').
                            to('span','', '=').tc('span').
                            to('span','class::string', '"myClass"').tc('span').
                            // to('span','class::keyword', 'div class="myClass"').tc('span').
                            to('span','class::keyword', '>').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl().

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Close HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::comment').show('Accepts one (1) parameter = HTML tag').tc('span').bl();
                            to('span','class::function').show("tc").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'div'").tc('span').
                            show(');').bl(2).
                            to('span','class::comment').show('Equals to:').tc('span').bl().
                            to('span','class::keyword', '<').tc('span').
                            to('span','class::keyword', '/').tc('span').
                            to('span','class::keyword', 'div').tc('span').
                            to('span','class::keyword', '>').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl().

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Single HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('/*').tc('span').bl();
                            to('span','class::comment').show(' * accepts two (2) parameters').tc('span').bl();
                            to('span','class::comment').show(' *').tc('span').bl();
                            to('span','class::comment').show(' * parameter 1: HTML tag').tc('span').bl();
                            to('span','class::comment').show(' * parameter 2: HTML attributes (Optional)').tc('span').bl();
                            to('span','class::comment').show(' *').tc('span').bl();
                            to('span','class::comment').show(' */').tc('span').bl(2);

                            to('span','class::comment').show('mostly used for meta, img & others').tc('span').bl().
                            to('span','class::function').show("tag").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'HTML_Tag'").tc('span'); 
                            to('span').show(");").tc('span').bl(2).
                            to('span','class::comment').show('Equals to:').tc('span').bl().
                            to('span','class::keyword', '<').tc('span').
                            to('span','class::keyword', 'HTML_Tag').tc('span').
                            to('span','class::keyword', '/>').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl().

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Modified HTML tag').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::string*consolas*fun_name').show("'fmp'").tc('span').
                            to('span','class::comment').show(' Used for ').tc('span').
                            to('span','class::consolas*fun_name').show('multipart/form-data').tc('span').
                            to('span','class::comment').show(' form').tc('span').bl().
                            to('span','class::function').show("to").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'fmp'").tc('span'); 
                            to('span').show(");").tc('span').bl();
                            to('span','class::comment').show('Equals to:').tc('span').bl().
                            to('span','class::keyword', '<').tc('span').
                            to('span','class::keyword', 'form ').tc('span').
                            to('span','class::function', ' enctype').tc('span').
                            to('span','', '=').tc('span').
                            to('span','class::string', "'multipart/form-data'").tc('span').
                            to('span','class::keyword', '>').tc('span').bl(2).

                            to('span','class::comment').show('Close with ').tc('span').bl().
                            to('span','class::function').show("tc").tc('span');  
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'form'").tc('span'); 
                            to('span').show(");").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl().

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Multiple HTML tags').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('/*').tc('span').bl();
                            to('span','class::comment').show(' * accepts four (4) parameters').tc('span').bl();
                            to('span','class::comment').show(' *').tc('span').bl();
                            to('span','class::comment').show(' * parameter 1, HTML tag (can be more than one HTML tags)').tc('span').bl();
                            to('span','class::comment').show(' * parameter 2, text or messages to show').tc('span').bl();
                            to('span','class::comment').show(' * parameter 3, class name or id name (optional)').tc('span').bl();
                            to('span','class::comment').show(' * parameter 4, optional (1 = echo) or (no param = return) ').tc('span').bl();
                            to('span','class::comment').show(' *').tc('span').bl();
                            to('span','class::comment').show(' * bellow example uses more than one HTML tags, shows "Hello World" message, assigns all tags with class name "maker"').tc('span').bl();
                            to('span','class::comment').show(' */').tc('span').bl();
                            to('span','class::function').show("make").tc('span');
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'b,i,u'").tc('span'); 
                            to('span').show(", ").tc('span'); 
                            to('span','class::string').show("'Hello World'").tc('span'); 
                            to('span').show(", ").tc('span');  
                            to('span','class::string').show("'class::maker'").tc('span');  
                            to('span').show(");").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();
            
              to('h2','id::ajax-syntax').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Ajax Sytax').
              tc('h2');

              to('p', 'class::welcome-text').
                show('To use ajax, you need to include this function within your HTML head tag.').bl().
                show('This will load your Auto Load JS Files set in route configuration as well.')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Ajax library').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts no parameters').tc('span').bl();
                            to('span','class::function').show("ajax").tc('span');  
                            to('span').show("();").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('To use ML Notifier (alert) in ajax, you need to include this function within your HTML head tag.')
              .tc('p');
              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Ajax library').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc').
                            to('span','class::comment').show('Accepts no parameters').tc('span').bl();
                            to('span','class::function').show("ml_alert").tc('span');  
                            to('span').show("();").tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl().

              to('h2','id::codes').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('PHP Codes').
              tc('h2');
              to('p', 'class::welcome-text').tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Show or echo').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::comment').show('Accepts one parameter = text or anything to be displayed').tc('span').bl();
                            to('span','class::function').show("show").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("'text'").tc('span').
                            show(');').bl(2).
                            to('span','class::comment').show('Equals to:').tc('span').bl().
                            to('span','class::function', 'echo').tc('span').
                            to('span','class::string', " 'text'").tc('span').
                            to('span','', ';').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              bl().

              to('h2','id::html-code').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('HTML Codes').
              tc('h2');

              to('p', 'class::welcome-text').
                show('space() function accepts one (1) parameter, but it is optional.').
              tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Space').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::comment').show('Accepts one parameter = number of spaces (Optional)').tc('span').bl();
                            to('span','class::function').show("space").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'nbsp;').tc('span').bl(2).

                            to('span','class::function').show("space").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::int').show("2").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'nbsp;').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'nbsp;').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('tab() function accepts one (1) parameter, but it is optional.').
              tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Space').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::comment').show('Accepts one parameter = number of tabs (Optional)').tc('span').bl();
                            to('span','class::function').show("tab").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'emsp;').tc('span').bl(2).

                            to('span','class::function').show("tab").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::int').show("2").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'emsp;').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'emsp;').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Arrow &raquo;').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::function').show("arrow").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'raquo;').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Bullet &bull;').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::function').show("bullet").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '&').tc('span').
                            to('span','class::function', 'bull;').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('bl() function accepts one (1) parameter, but it is optional.').
              tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Break line').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::comment').show('Accepts one parameter = number of br (Optional)').tc('span').bl();
                            to('span','class::function').show("bl").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '<').tc('span').
                            to('span','class::function', 'br>').tc('span').bl(2).

                            to('span','class::function').show("bl").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::int').show("2").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '<').tc('span').
                            to('span','class::function', 'br>').
                            to('span','class::function', '<').tc('span').
                            to('span','class::function', 'br>').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');

              to('p', 'class::welcome-text').
                show('ul() function accepts one (1) parameter, but it is optional.').
              tc('p');

              to('div', 'class::welcome-text id::open-tag');
                  to('table', 'class::mc-const-table*dark*code_table');
                      to('tr','class::bb*bt');
                          to('th','class::ml-th*br id::ajax-function-jquery').show('Under line').tc('th');
                      tc('tr');
          
                      to('tr','class::bb*bt');
                          to('td','class::gfc');
                            to('span','class::function').show("ul").tc('span').
                            to('span').show("(").tc('span'); 
                            to('span','class::string').show("").tc('span').
                            show(');').bl().
                            to('span','class::comment').show('Equals to: ').tc('span').
                            to('span','class::function', '<').tc('span').
                            to('span','class::function', 'hr>').tc('span').
                          tc('td');
                      tc('tr');
                  tc('table');
              tc('div');
              
              bl();
            
              to('h2','id::html-attributes').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Adding HTML Attributes').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To add attributes, follow the instructions bellow.').bl().
                show('Modified Attributes');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('Used for ajax').tc('span').bl();
                  to('span','class::comment').show('If you use ajax, chose one of the following syntaxes, otherwhise don\'t include any of them.').tc('span').bl(2);
                  to('span','class::string').show("'ajax::yes'").tc('span').bl(); 
                  to('span','class::string').show("'ajax::true'").tc('span').bl(); 
                  to('span','class::string').show("'ajax::1'").tc('span'); 
                tc('pre');
              tc('div');

              bl().
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*rbc-notifier').show('IMPORTAN!').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show('ajax attribute is only used in form HTML tag');
                tc('div');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Modified Operator');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('Used to separate spaces (values of same attribute)').tc('span').bl();
                  to('span','class::string').show("'*'").tc('span').bl(2); 

                  to('span','class::comment').show('Used for "=" operator').tc('span').bl();
                  to('span','class::string').show("'::'").tc('span').bl(2);

                  to('span','class::comment').show('For example: ').tc('span').bl();
                  to('span','class::comment').show('class::class1*class2').tc('span').bl();
                  to('span','class::comment').show('equals to class="class1 class2"').tc('span').bl();
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');              
              to('p', 'class::welcome-text');
                show('That is all you need to know about HTML Generator.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/form');
                to('button','class::pn-button').
                  make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                  show(' Previous').
                tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/input');
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
