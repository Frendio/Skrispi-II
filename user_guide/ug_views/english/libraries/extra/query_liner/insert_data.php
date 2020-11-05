<?php

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 1 - 2" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-insert-data').show('SET INSERT DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('insert').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 4" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-insert-data').show('SET INSERT DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('insert').tc('span');
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
        show('To process your insert in your model,');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 1 - 3" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-insert-data').show('SET INSERT DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('insert').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * BASED ON "Solution 4" IN ').tc('span');
            to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-insert-data').show('SET INSERT DATA').tc('a').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('insert').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::variable').show('$data').tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('Let\'s try making one insert with its data and show the query based on "Solution 1 - 3." in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-insert-data').show('SET INSERT DATA').tc('a');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('data').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name1::value1'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('data').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name2 = value2'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('data').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name3'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'value3'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('insert').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span').bl().
            to('span','class::comment').show('PRODUCES : INSERT INTO `table_name` (`column_name1`, `column_name1`, `column_name1`) VALUES ("value1","value2","value3")').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('Let\'s try making one insert with its data and show the query based on "Solution 4" in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#set-insert-data').show('SET INSERT DATA').tc('a');
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
            to('span').show(';').tc('span').bl();

            to('span','class::variable').show('$data').tc('span');
            to('span').show('[').tc('span');
            to('span','class::string').show("'column_name3'").tc('span');
            to('span').show('] = ').tc('span');
            to('span','class::string').show("'value3'").tc('span');
            to('span').show(';').tc('span').bl(2);

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('insert').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::variable').show('$data').tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span').bl().
            to('span','class::comment').show('PRODUCES : INSERT INTO `table_name` (`column_name1`, `column_name1`, `column_name1`) VALUES ("value1","value2","value3")').tc('span');
        tc('pre');
    tc('div');
    
?>