<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  to('html');
    to('head');

      title('User Manual | General Topics | Configuration');
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
              to('a', 'class::link*docs href::manual/english/general-topics').show('&nbsp; General Topics &nbsp;').tc('a').arrow().show('&nbsp; MadeLine Configuration');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('MadeLine Configuration').tc('h1');              
              to('p', 'class::welcome-text');
                show('Madeline provides the configuration in Graphical User Interface (GUI). ');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('There are three configuration, which are as follows: ');
              tc('p');

              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/configurations#database');
                    show('Database Configuration');
                  tc('a');
                tc('li');

                to('li');
                  to('a', 'class::link*docs href::manual/english/configurations#directory');
                    show('Directory Configuration');
                  tc('a');
                tc('li');

                to('li');
                  to('a', 'class::link*docs href::manual/english/configurations#route');
                    show('Route Configuration');
                  tc('a');
                tc('li');
              tc('ol');
              
              bl();
              
              to('h2','id::database').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Database Configuration').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where you will configure your database connection in ');
                if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                STATUS === 'live' && last_ori_uri === CONF_API)
                {
                  to('a','class::link*docs*fun_name*consolas href::configuration/database').show(' Database Configuration ').tc('a');
                }
                else
                {
                  show('Database Configuration.');
                }
              tc('p');

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table');
                
                  to('tr','class::bb*bt');
                    to('th','class::ml-th*br').show('Attribute Nama').tc('th');
                    to('th','class::ml-th').show('Description').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('Host').tc('td');
                    to('td').show('Database host name').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('User').tc('td');
                    to('td').show('Database username.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('Password').tc('td');
                    to('td').show('Databse password.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                    to('td','class::br').show('Dbname').tc('td');
                    to('td').show('Databse name.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('Result Set (fetch_type)').tc('td');
                    to('td').show('Result set type.').tc('td');
                  tc('tr');
                tc('table');
              tc('div');
              
              bl();
              
              to('h2','id::directory').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Directory Configuration').
              tc('h2');
              
              to('p', 'class::welcome-text');
                  show('This part is where you will configure your directory name for more secured. 
                          You can change your system and application directory names in ');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs*fun_name*consolas href::configuration/directory').show(' Directory Configuration ').tc('a');
                  }
                  else
                  {
                    show('Directory Configuration.');
                  }
              tc('p');
              
              to('p', 'class::welcome-text');
                  make('b','* If you are using linux, you can change both system & application directory name.');
              tc('p');

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table');
                
                  to('tr','class::bb*bt');
                    to('th','class::ml-th*br').show('Attribute Nama').tc('th');
                    to('th','class::ml-th').show('Description').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                    to('td','class::br').show('Application Directory').tc('td');
                    to('td').show('Your application directory name and you can change to any names you want').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('System Directory').tc('td');
                      to('td').show('Your system directory name and you can change to any names you want').tc('td');
                  tc('tr');
                tc('table');
              tc('div');

              bl().
              
              to('p', 'class::welcome-text');
                  make('b','* If you are using windows, you can only change the application directory name.').bl();
                  show('To change system directory name, look at the following steps:');
              tc('p');

              to('ol', 'class::manual-li*dfc');
                to('li');
                  show('Go to ').make('i', SYSTEM_CONFIG_PATH, 'class::ffn').show(' and open ').make('i', 'directory_configuration.php', 'class::ffn').show(' file.');
                tc('li');

                to('li');
                  show('Change the value of ').make('i', '$directory[\'system\']', 'class::ffn').show(' to any name you want.');
                tc('li');

                to('li');
                  show('Go to ').make('i', CORE_PATH, 'class::ffn').show(', open ').make('i', 'Constant.php', 'class::ffn').show(' file, delete everything inside the file and save the file.');
                tc('li');

                to('li');
                  show('You can now change your system directory name based on ').make('i', 'step #2', 'class::ffn').show(' and your are set.');
                tc('li');
              tc('ol');
              
              bl();
              
              to('h2','id::route').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('Route Configuration').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where you will configure your route in ');
                if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                STATUS === 'live' && last_ori_uri === CONF_API)
                {
                  to('a','class::link*docs*fun_name*consolas href::configuration/route').show(' Route Configuration ').tc('a');
                }
                else
                {
                  show('Route Configuration.');
                }
              tc('p');

              to('div', 'class::welcome-text');
                to('table', 'class::mc-const-table');
                
                  to('tr','class::bb*bt');
                      to('th','class::ml-th*br').show('Attribute Nama').tc('th');
                      to('th','class::ml-th').show('Description').tc('th');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('Default Controller').tc('td');
                      to('td').show('Your default controller that will be loaded when there is not URIs but your root.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                      to('td','class::br').show('Default Method').tc('td');
                      to('td').show('Your default method that will be invoked if the controller exists.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('Ajax default method').tc('td');
                      to('td').show('Your default method for ajax request that will be invoked if the controller exists.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                      to('td','class::br').show('System Status').tc('td');
                      to('td');
                          show('Your current system status. 
                              Development is where only you can access through localhost and 
                              Live is where everyone can access it.');
                      tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('Right configuration').tc('td');
                      to('td').show('Your right site menu. You can show or hide it (refresh the page for change).').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                      to('td','class::br').show('404, 403 and menu bar logo').tc('td');
                      to('td').show('Your 404, 403, and menu bar logo. If you lieve it empty, MadeLine logo will be used.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('Custom 404 Error').tc('td');
                      to('td').show('Your custom 404 error page. If you lieve it empty, MadeLine 404 error will be used.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                      to('td','class::br').show('Custom 403 Error').tc('td');
                      to('td').show('Your custom 403 error page. If you lieve it empty, MadeLine 403 error will be used.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                      to('td','class::br').show('AutoLoad js files (optional)').tc('td');
                      to('td').show('Is if you want to autoload your js files.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('AutoLoad css files (optional)').tc('td');
                      to('td').show('Is if you want to autoload your css files.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*nodd');
                      to('td','class::br').show('ApiLine API Key').tc('td');
                      to('td').show('Your API key for any API requests.').tc('td');
                  tc('tr');

                  to('tr','class::bb*bt*odd');
                      to('td','class::br').show('Configuration API Key').tc('td');
                      to('td').
                        show('
                          Your API key will be used to access any configurations privately.
                          <br>If you set the API, you have to put the API key at the end of your URL.
                          <br>For example: '.BASE_URL.'configuration/your_configuration_api_key.
                        ').
                      tc('td');
                  tc('tr');
                tc('table');
              tc('div');
              
              bl(2);
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Configuration.');
              tc('p');            
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