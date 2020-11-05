<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | Librares | Query Builder');
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
              to('a', 'class::link*docs href::manual/english/libraries').show('&nbsp; Libraries &nbsp;').tc('a').arrow().show('&nbsp; ML Query Liner');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('ML Query Liner').tc('h1');              
              to('p', 'class::welcome-text');
                show('MadeLine provides its own query builder.').bl().
                show('You don\'t need to load this library because it is loaded on system start.').bl().
                show('Before proceeding to ').
                make('span','RETRIEVE','class::fun_name*consolas').show(', ').
                make('span','INSERT','class::fun_name*consolas').show(', ').
                make('span','UPDATE','class::fun_name*consolas').show(' & ').
                make('span','DELETE','class::fun_name*consolas').
                show(' you have to read trough MadeLine SQL Statement Function to learn how to construct your query.');
              tc('p');

              bl().
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*bbc-notifier').show('REMEMBER!').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show('If inside a model file, use ').
                  make('span','$this->function_name()','class::keyword*fun_name').show(' otherwise,').bl().
                  show('Use ').make('span','$this->model->function_name()','class::keyword*fun_name');
                tc('div');
              tc('div');
              
              to('p', 'class::welcome-text id::madeline-sql-statment-functions');
                make('b,i','#1. MadeLine SQL Statement Functions');
              tc('p');
              to('ul', 'class::manual-li*ffn');    
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#avg-count-distinct-max-min-sum');
                    show('AS, AVG, COUNT, DISTINCT, MAX, MIN & SUM');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#between');
                    show('BETWEEN');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#from');
                    show('FROM');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#group-by');
                    show('GROUP BY');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#having');
                    show('HAVING');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#in-not-in');
                    show('IN & NOT IN');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#is-null-not-null');
                    show('IS NULL & IS NOT NULL');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#join-left-join');
                    show('JOIN & LEFT JOIN');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#like');
                    show('LIKE');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#order-by');
                    show('ORDER BY');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#round');
                    show('ROUND');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#select');
                    show('SELECT');
                  tc('a');
                tc('li');

                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#where-and-or');
                    show('WHERE, AND & OR');
                  tc('a');
                tc('li');
              tc('ul');

              ul();

              to('ul', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#native-query');
                    show('NATIVE QUERY');
                  tc('a');
                tc('li');
              tc('ul');

              ul();

              to('p', 'class::welcome-text');
                make('b,i','#2. MadeLine Get Data Functions');
              tc('p');
              to('ul', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#get-data');
                    show('RETRIEVE DATA');
                  tc('a');
                tc('li');
              tc('ul');

              to('p', 'class::welcome-text');
                make('b,i','#3. MadeLine Set & Insert Data Functions');
              tc('p');
              to('ul', 'class::manual-li*ffn');             
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#set-insert-data');
                    show('SET INSERT DATA');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#insert-data');
                    show('INSERT DATA');
                  tc('a');
                tc('li');
              tc('ul');

              to('p', 'class::welcome-text');
                make('b,i','#4. MadeLine Set & Update Data Functions');
              tc('p');
              to('ul', 'class::manual-li*ffn');                   
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#set-update-data');
                    show('SET UPDATE DATA');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#update-data');
                    show('UPDATE DATA');
                  tc('a');
                tc('li');
              tc('ul');

              to('p', 'class::welcome-text');
                make('b,i','#5. MadeLine Delete Data Function');
              tc('p');
              to('ul', 'class::manual-li*ffn');                
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#delete-data');
                    show('DELETE DATA');
                  tc('a');
                tc('li');
              tc('ul');

              to('p', 'class::welcome-text');
                make('b,i','#6. MadeLine View Result Function');
              tc('p');

              to('ul', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/libraries/query-liner#view-query-results');
                    show('VIEW QUERY RESULTS');
                  tc('a');
                tc('li');
              tc('ul');
              
              bl();
              
              bl();
            
              to('h2','id::avg-count-distinct-max-min-sum').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('AS, AVG, COUNT, DISTINCT, MAX, MIN, & SUM').
              tc('h2');

              to('p', 'class::welcome-text');
                make('span','AS','class::consolas*fun_name').show(', ').
                make('span','AVG','class::consolas*fun_name').show(', ').
                make('span','COUNT','class::consolas*fun_name').show(', ').
                make('span','DISTINCT','class::consolas*fun_name').show(', ').
                make('span','MAX','class::consolas*fun_name').show(', ').
                make('span','MIN','class::consolas*fun_name').show(' & ').
                make('span','SUM','class::consolas*fun_name').
                show(' statements are used 
                      to get alias, average, sum, maximung, or minimum value based on the inserted column_name.').bl();
                      
                show('MadeLine Query Liner automatically assigns the ').
                make('span','AS','class::consolas*fun_name').show(' Statmen to ').
                make('span','AS','class::consolas*fun_name').show(', ').
                make('span','AVG','class::consolas*fun_name').show(', ').
                make('span','COUNT','class::consolas*fun_name').show(', ').
                make('span','DISTINCT','class::consolas*fun_name').show(', ').
                make('span','MAX','class::consolas*fun_name').show(', ').
                make('span','MIN','class::consolas*fun_name').show(' or ').
                make('span','SUM','class::consolas*fun_name').bl(2);
                make('span','AS','class::consolas*fun_name').
                show(' Statment is based on the ').make('span','select_type','class::consolas*fun_name').show(' and ').make('span','column_name.','class::consolas*fun_name').bl();
                show('when calling the result, you can check the below table in Produced Query coloumn:').bl();
              tc('p'); 
              REQUIRE 'extra/query_liner/all_as.php';
              
              bl();
            
              to('h2','id::between').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('BETWEEN').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span','BETWEEN','class::consolas*fun_name').
                show(' statement is used to compare value of a ').
                make('span',"'column_name'",'class::consolas*fun_name*string').
                show(' using ');
                make('span',"'value1'",'class::consolas*fun_name*string').
                show(' and ');
                make('span',"'value2'",'class::consolas*fun_name*string').
              tc('p');
              REQUIRE 'extra/query_liner/between.php';
              
              bl();
            
              to('h2','id::from').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('FROM').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span','FROM','class::consolas*fun_name').show(' is used to set which table to get the data from.').bl().
                show('Accepts 1 parameter : ').make('span',"'table_name'",'class::consolas*fun_name*string').
              tc('p');            
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('FROM table_name').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('from').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'table_name'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              bl();
            
              to('h2','id::group-by').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('GROUP BY').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span','GROUP BY','class::consolas*fun_name').
                show(' statment is used to group the result set based on specific ').
                make('span','column_name','class::consolas*fun_name').
              tc('p');
              REQUIRE 'extra/query_liner/group_by.php';
              
              bl();
            
              to('h2','id::having').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('HAVING').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span',"HAVING",'class::consolas*fun_name').
                show(' statement is similar to ').
                make('span',"WHERE",'class::consolas*fun_name*string').
                show(', but this one is only used for aggregate function.').
              tc('p');
              REQUIRE 'extra/query_liner/having.php';
              
              bl();
            
              to('h2','id::in-not-in').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('IN & NOT IN').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span','IN','class::consolas*fun_name').show(' and ').
                make('span','NOT IN','class::consolas*fun_name').show(' statements are used to fetch data according to ').
                make('span','WHERE','class::consolas*fun_name').show(', ').
                make('span','AND','class::consolas*fun_name').show(' or ').
                make('span','OR','class::consolas*fun_name').show(' condition(s) nestedly').
              tc('p');
              REQUIRE 'extra/query_liner/in_not_in_select.php';
              
              bl();
            
              to('h2','id::is-null-not-null').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('IS NULL & IS NOT NULL').
              tc('h2');
              
              to('p', 'class::welcome-text').tc('p');
              REQUIRE 'extra/query_liner/null_not_null.php';
              
              bl();
            
              to('h2','id::join-left-join').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('JOIN & LEFT JOIN').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Accepts three (3) parameters').bl().
                show('Parameter 1 : ').
                make('span',"'table_name2'",'class::string*consolas*fun_name').bl().
                show('Parameter 2 : ').
                make('span',"'table_name1.column_name'",'class::string*consolas*fun_name').show(' OR ').
                make('span',"'table_name1.column_name=table_name2.column_name'",'class::string*consolas*fun_name').bl().
                show('Parameter 3 : ').
                make('span',"'table_name2.column_name'",'class::string*consolas*fun_name').show(' OR optional').
              tc('p');
              REQUIRE 'extra/query_liner/join_left_join.php';
              
              bl();
            
              to('h2','id::like').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('LIKE').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('LIKE statement is mainly used for searching. <br>Check the following example.');
              tc('p');
              REQUIRE 'extra/query_liner/like.php';
              
              bl();
            
              to('h2','id::order-by').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('ORDER BY').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span',"ORDER BY",'class::consolas*fun_name').show(' statement is used to order the result set based on specific column_name(s).');
              tc('p');
              REQUIRE 'extra/query_liner/order_by.php';
              
              bl();
            
              to('h2','id::round').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('ROUND').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span',"ROUND",'class::consolas*fun_name').show(' is used to round a decimal value of a column_name.');
              tc('p');
              REQUIRE 'extra/query_liner/round.php';
              
              bl();
            
              to('h2','id::select').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('SELECT').
              tc('h2');
              
              to('p', 'class::welcome-text');
                make('span',"SELECT",'class::consolas*fun_name').show(' statement is used choose coloumn_names from database.');
              tc('p');
              REQUIRE 'extra/query_liner/select.php';
              
              bl();
            
              to('h2','id::where-and-or').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('WHERE, AND, & OR').
              tc('h2');
              
              to('p', 'class::welcome-text id::where-condition');
                make('span',"WHERE",'class::consolas*fun_name').show(', ').
                make('span',"AND",'class::consolas*fun_name').show(' & ').
                make('span',"OR",'class::consolas*fun_name').
                show(' statments are conditions in SQL used to get data based on specific condition(s).<br>');
                show('"condition" represents where, and, or.');
              tc('p');     
              to('p', 'class::welcome-text id::where-condition');
                show('Option #1');
              tc('p');            
              to('div', 'class::highlight');
                to('pre');
                  REQUIRE 'extra/query_liner/wao1.php';
                tc('pre');
              tc('div');  
              to('p', 'class::welcome-text id::where-condition');
                show('Option #2');
              tc('p'); 
              to('div', 'class::highlight');
                to('pre');
                  REQUIRE 'extra/query_liner/wao2.php';
                tc('pre');
              tc('div');

              bl().ul().bl();
            
              to('h2','id::native-query').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('NATIVE QUERY').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Native query is where you write you query as ONE (1) string.');
                show('If you want, check the following example.');
              tc('p'); 
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::variable').show('$sql').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::string').show("'SELECT *  FROM table_name + conditions'").tc('span');
                  to('span').show(';').tc('span');
                tc('pre');
              tc('div');
              
              bl().ul().bl();
            
              to('h2','id::get-data').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('RETRIEVE DATA').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Retrieve data is where we will get the result of a Query.');
              tc('p'); 
              
              to('p', 'class::welcome-text');
                show('To make it easier for you, MadeLine Query Liner provides some comands in getting your data from your database. For example,').bl();
                show('#1. You can get only one row,').bl();
                show('#2. You can get all rows,').bl();
                show('#3. You can get number of rows,').bl();
                show('#4. You can preview your query before processing it.');
              tc('p');            
              
              to('p', 'class::welcome-text'); 
                show('To see how to use them, check the following codes!');
              tc('p');   
              
              REQUIRE 'extra/query_liner/get_data.php';     
                          
              bl();
            
              to('h2','id::set-insert-data').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('SET INSERT DATA').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where we will set our data (column_name & value).').bl();
                show('To set data MadeLine has created function as follows:');
              tc('p');
              
              REQUIRE 'extra/query_liner/set_insert_data.php';
              
              bl();
            
              to('h2','id::insert-data').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('INSERT DATA').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where we will preview our query and or process our insert. ');
                show('Insert data based on solutions in ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-liner#set-insert-data').show('Set Isert Data').tc('a').bl().
                show('To preview your query in your model,');
              tc('p');
              
              REQUIRE 'extra/query_liner/insert_data.php';
              
              bl();
            
              to('h2','id::set-update-data').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('SET UPDATE DATA').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where we will set our data (column_name & value).').bl();
                show('To set data MadeLine has created function as follows:');
              tc('p');
              
              REQUIRE 'extra/query_liner/set_update_data.php';
              
              bl();
            
              to('h2','id::update-data').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('UPDATE DATA').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where we will preview our query and or process our insert. ');
                show('Insert data based on solutions in ');
                to('a','class::link*docs href::manual/english/libraries/query-liner#set-update-data').show('Set Update Data').tc('a');
              tc('p');
              
              REQUIRE 'extra/query_liner/update_data.php';
              
              bl();
            
              to('h2','id::delete-data').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('DELETE DATA').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('This part is where we will preview our query and or process our delete. To perform a delete, check the following example:');
              tc('p');
              
              REQUIRE 'extra/query_liner/delete_data.php';

              bl().ul().bl();
            
              to('h2','id::view-query-results').
                make('span', '', 'class::glyphicon*glyphicon-console*ccode').
                show('VIEW QUERY RESULTS').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Viewing query results will be based on type of results (one row, all rows and total rows).').bl().
                show('To view your query result, check the following examples.');
              tc('p'); 
              
              REQUIRE 'extra/query_liner/view_query_results.php';
              
              bl(2);
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about Query Builder Class.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/libraries/input');
                to('button','class::pn-button').
                  make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                  show(' Previous').
                tc('button');
              tc('a');
              
              to('a', 'class::link href::manual/english/libraries/pagination');
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
