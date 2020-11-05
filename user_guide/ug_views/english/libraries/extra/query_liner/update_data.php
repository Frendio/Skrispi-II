<?php
            
    to('p', 'class::welcome-text');
        show('To preview your query in your model,');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 1 & 2" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-update-data').show('SET UPDATE DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('update').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 3" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-update-data').show('SET UPDATE DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('update').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::variable').show('$data').tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('To process your update in your model,');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 1 & 2" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-update-data').show('SET UPDATE DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('update').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 3" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-update-data').show('SET UPDATE DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('update').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::variable').show('$data').tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('Let\'s try making one update with its data and show the query based on "Solution 1 & 2" in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-update-data').show('SET UPDATE DATA').tc('a').bl();
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name1::value1'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name2 = value2'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('where').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name3'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'value3'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('update').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span').bl().
            to('span','class::comment').show('PRODUCES : UPDATE `table_name` SET column_name1 = "value1, column_name2 = "value2" WHERE column_name3 = "value3"').tc('span').
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('Let\'s try making one update with its data and show the query based on "Solution 3" in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-update-data').show('SET UPDATE DATA').tc('a').bl();
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::variable').show('$data').tc('span');
            to('span').show('[').tc('span');
            to('span','class::string').show("'column_name1'").tc('span');
            to('span').show('] = ').tc('span');
            to('span','class::string').show("'value1'").tc('span');
            to('span').show(';').tc('span').bl();

            to('span','class::variable').show('$data').tc('span');
            to('span').show('[').tc('span');
            to('span','class::string').show("'column_name2'").tc('span');
            to('span').show('] = ').tc('span');
            to('span','class::string').show("'value2'").tc('span');
            to('span').show(';').tc('span').bl(2);

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('where').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name3'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'value3'").tc('span');
            to('span').show(');').tc('span').bl();
            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('update').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::variable').show('$data').tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span').bl().
            to('span','class::comment').show('PRODUCES : UPDATE `table_name` SET column_name1 = "value1, column_name2 = "value2" WHERE column_name3 = "value3"').tc('span').
        tc('pre');
    tc('div');
    
?>