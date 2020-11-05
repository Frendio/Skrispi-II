<?php

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('Function Name').tc('td');
                to('th','class::ml-th').show('Parameter').tc('td');
                to('th','class::ml-th').show('Implementation').tc('td');
                to('th','class::ml-th').show('Produced Query').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::function').show('having').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    to('span','class::string*fun_name').show("'aggregate_function'").tc('span');
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('having').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'count_column_name > value'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('HAVING count_column_name > value').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('Full Query').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('select').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name, COUNT(column_name1) AS count_column_name1'").tc('span');
                    to('span').show(')').tc('span').bl();
        
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('from').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(')').tc('span').bl();
        
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('group_by').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(')').tc('span').bl();
        
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('having').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'count_column_name1 > value'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show('PRODUCES : SELECT column_name, COUNT(column_name1) AS count_column_name1 FROM table_name GROUP BY column_name HAVING count_column_name1 > value;').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>