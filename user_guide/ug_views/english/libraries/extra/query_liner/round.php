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
                    to('span','class::function').show('round').tc('span');
                    to('span').show('();').tc('span').bl().
                    to('span','class::function').show('select_round').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameter:').bl().
                    show('Parameter 1 : ').
                    to('span','class::string').show("'column_name'").tc('span').bl().
                    show('Paraemter 2 : ').
                    make('span','integer_value','class::int').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('round').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span').
                    to('span','class::int').show("1").tc('span');
                    to('span').show(');').tc('span').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('select_round').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span').
                    to('span','class::int').show("1").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('SELECT ROUND(column_name 1) AS "round_column_name"').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('ROUND example').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('select_round').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::int').show("1").tc('span');
                    to('span').show(')').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('from').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show('PRODUCES : SELECT ROUND(column_name, 1) AS "round_column_name" FROM table_name').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>