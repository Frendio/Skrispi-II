<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');

      title('User Manual | MadeLine CMV | Models');
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

          tag('img','class::manual-mi src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
          to('div', 'class::rsm-heading');
            to('div', 'class::manual-lfn').show('MadeLine').tc('div');
            to('div', 'class::manual-lfn*bot-manual-lfn').show('PHP Framewok').tc('div');
          tc('div');
        tc('div');

        to('section', 'class::wy-nav-content-wrap');

          to('div', 'class::wy-nav-content');

            to('div' ,'class::head-nav role::navigation');
              to('a', 'class::link*docs href::manual/english').show('Manual &nbsp;').tc('a').arrow();
              to('a', 'class::link*docs href::manual/english/madeline-cmv').show('&nbsp; MadeLine CMV &nbsp;').tc('a').arrow().show('&nbsp; Models');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');
            
              to('h1','class::h1').show('Models').tc('h1');
              to('p', 'class::welcome-text');
                show('Models are optionally available for those who want to use a more traditional cmv approach.');
              tc('p');
              
              to('ul', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/models#what-is-a-model');
                    show('What is a Model?');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/models#anatomy-of-a-model');
                    show('Anatomy of a Model');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/models#loading-a-model');
                    show('Loading a Model');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/models#connecting-to-your-database');
                    show('Connecting to your Database');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/models#set-result-set');
                    show('Set Query Result Set');
                  tc('a');
                tc('li');
              tc('ul');
              
              bl();
              
              to('h1','id::what-is-a-model').show('What is a Model').tc('h1');
              to('p', 'class::welcome-text');
                show('Models are PHP classes that are designed to work with information in your database.
                            For example, let’s say you use MadeLine to manage a blog.
                            You might have a model class that contains functions to insert, update, and
                            retrieve your blog data. Here is an example of what such a model class might look like:');
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
                  to('span','class::class').show(' Blog_Model').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span','class::class').show(' ML_Model').tc('span');
                  to('span').show(' {').tc('span').bl(2);
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' get_data').tc('span'); 
                    to('span').show('()').tc('span');
                    to('span').show(' {').tc('span').bl();  
                      to('a','class::link*docs href::manual/english/libraries/query-builder#get-data').tab(5).arrow().show(' GET DATA').tc('a').bl(); 
                    to('span').tab(4).show('}').tc('span').bl(2);  
                    
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' insert_data').tc('span'); 
                    to('span').show('()').tc('span');
                    to('span').show(' {').tc('span').bl();  
                      to('a','class::link*docs href::manual/english/libraries/query-builder#insert-data').tab(5).arrow().show(' INSERT DATA').tc('a').bl(); 
                    to('span').tab(4).show('}').tc('span').bl(2);  
                    
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' update_data').tc('span'); 
                    to('span').show('()').tc('span');
                    to('span').show(' {').tc('span').bl();  
                      to('a','class::link*docs href::manual/english/libraries/query-builder#update-data').tab(5).arrow().show(' UPDATE DATA').tc('a').bl(); 
                    to('span').tab(4).show('}').tc('span').bl(2);                             
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*bbc-notifier').show('NOTE!').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show('The methods in the above example use the Query Builder database methods.');
                tc('div');
              tc('div');
              
              bl();
              
              to('h1','id::anatomy-of-a-model').show('Anatomy of a Model').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Model classes are stored in your '.make('b,i','application/models/').' directory.
                        They can be nested within sub-directories "ONLY ONE LEVEL" if you want this type of organization.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('The basic prototype for a model class is this:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');        
                  to('span','class::keyword').show('class').tc('span');
                  to('span','class::class').show(' Blog_Model').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span','class::class').show(' ML_Model').tc('span');
                  to('span').show(' {').tc('span').bl(2);                
                  to('span').show('}').tc('span'); 
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Where '.MAKE('B','Model_name').' is the name of your class. Class names\'s first letter can be lower case or uppercase.
                      <br>Make sure your class extends the base Model class.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('The file name must match the class name WITHOUT'.make('b,i','" _model"').'.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Your file should be like this:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');                
                  to('span').show('application/models/blog.php').tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','id::loading-a-model').show('Loading a Model').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Your models will typically be loaded and called from within your ');
                to('a','class::link*docs href::manual/english/madeline-cmv/controllers').show('controller').tc('a');
                show('methods. To load a model you will use the following method:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');                
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('model').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'model_name'").tc('span');
                  to('span').show(');').tc('span').bl();
                tc('pre');
              tc('div');
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*bbc-notifier').show('NOTE!').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show('If your model is located in a sub-directory, you can still use the same as the top ^ example.');
                tc('div');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Once loaded, you will access your model methods using an object with the same name as your class:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');      
                  to('span','class::comment').show('/*').tc('span').bl();
                  to('span','class::comment').show(' * loading a model').tc('span').bl();
                  to('span','class::comment').show(' */').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('model').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'model_name'").tc('span');
                  to('span').show(');').tc('span').bl();

                  to('span','class::comment').show('/*').tc('span').bl();
                  to('span','class::comment').show(' * call model\'s method').tc('span').bl();
                  to('span','class::comment').show(' */').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('model_name').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('method').tc('span');
                  to('span').show('();').tc('span').bl();

                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Here is an example of a controller, that loads a model, then serves a view:');
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
                  to('span','class::class').show(' Blog').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span','class::class').show(' ML_Controller').tc('span');
                  to('span').show(' {').tc('span').bl(2);
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span');
                    to('span').show(' {').tc('span').bl();  
                      to('span','class::keyword').tab(8).show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('model').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'blog'").tc('span');
                      to('span').show(');').tc('span').bl(2);

                      to('span','class::variable').tab(8).show('$data').tc('span');
                      to('span').show('[').tc('span');
                      to('span','class::string').show("'result'").tc('span');
                      to('span').show(']').tc('span');
                      to('span').show(' = ').tc('span');
                      to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::variable').show('blog_model').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('blog_model_method').tc('span');
                      to('span').show('();').tc('span').bl(2);

                      to('span','class::keyword').tab(8).show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('view').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'blog'").tc('span');
                      to('span').show(', ').tc('span');
                      to('span','class::variable').show('$data').tc('span');
                      to('span').show(');').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl(2);                
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('To see your results, go to ');
                to('a','class::link*docs href::manual/english/libraries/query-builder#view-query-results').show('VIEW QUERY RESULTS.').tc('a');
              tc('p');

              bl();
              
              to('h1','id::connecting-to-your-database').show('Connecting to your Database').tc('h1');
              
              to('p', 'class::welcome-text');
                show('Your database is automatically connected.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Before loading a model, you have to set your database connection, otherwhise it will throw a database connection error.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('However, if you did not load any models, there will no be any thrown errors.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('To set your database connection, go to ');
                to('a','class::link*docs href::configuration/database').show('Database Configuration.').tc('a');
              tc('p');
              
              bl();
              
              to('h1','id::set-result-set').show('Set Query Result Set').tc('h1');
              
              to('p', 'class::welcome-text');
                show('To set your query result set, go to ');
                to('a','class::link*docs href::configuration/database').show('Database Configuration.').tc('a');
              tc('p');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Models.');
              tc('p');
              
              bl();
                
              to('a', 'class::link href::manual/english/madeline-cmv/controllers');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/madeline-cmv/views');
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