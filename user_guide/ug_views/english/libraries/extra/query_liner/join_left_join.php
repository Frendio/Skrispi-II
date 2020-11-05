<?php

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*code_table');
            to('tr','class::bb');
                to('th','class::ml-th').show('Function Name').tc('td');
                to('th','class::ml-th').show('Implementation').tc('td');
                to('th','class::ml-th').show('Produced Query').tc('td');
            tc('tr');

            to('tr','class::bb');
                to('td','class::gfc colspan::4').
                    make('span','JOIN','class::consolas*fun_name').show(' statement is used to combined rows of two tables if the condition is true.').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('join').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    to('span','class::comment').show('Without parameter 3').tc('span').bl().
                    to('span','class::comment').show('Option #1').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name::table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').bl();

                    to('span','class::comment').show('Option #2').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name=table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').bl(2);

                    to('span','class::comment').show('With parameter 3').tc('span').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('JOIN table_name2 ON table_name1.column_name = table_name2.column_name').
                tc('td');
            tc('tr');

            to('tr','class::bb*bt');
                to('td','class::gfc colspan::4').
                    make('span','LEFT JOIN','class::consolas*fun_name').show(' statement is used to combined rows of two tables even if the condition is not true.').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('left_join').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    to('span','class::comment').show('Without parameter 3').tc('span').bl().
                    to('span','class::comment').show('Option #1').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('left_join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name::table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').bl();

                    to('span','class::comment').show('Option #2').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('left_join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name=table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').bl(2);

                    to('span','class::comment').show('With parameter 3').tc('span').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('left_join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('LEFT JOIN table_name2 ON table_name1.column_name = table_name2.column_name').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().
    
    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('JOIN example').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name::table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show(' PRODUCES : SELECT * FROM table_name1 JOIN table_name2 ON table_name1.column_name = table_name2.column_name').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().
    
    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('LEFT JOIN example').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('left_join').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'table_name1.column_name::table_name2.column_name'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show(' PRODUCES : SELECT * FROM table_name1 LEFT JOIN table_name2 ON table_name1.column_name = table_name2.column_name').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>