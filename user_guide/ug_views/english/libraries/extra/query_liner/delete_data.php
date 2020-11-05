<?php
            
    to('p', 'class::welcome-text');
        show('To preview our query, check the folowing example:');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('delete').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('To process our delete, check the folowing example:');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('delete').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('If you want to delete based on condition, you can set your condition based on any conditions in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#madeline-sql-statment-functions').show('MADELINE SQL STATEMENT FUNCTIONS').tc('a');
    tc('p');
            
    to('p', 'class::welcome-text');
        show('Let\'s try making one delete with its data and show the query.');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * PRODUCES : DELETE FROM `table_name` WHERE column_name3 = "value3"').tc('span').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('where').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name3'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'value3'").tc('span');
            to('span').show(');').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('delete').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(', ').tc('span');
            to('span','class::string').show("'show'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');

?>