<?php

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('Function Name').tc('td');
                to('th','class::ml-th').show('Parameter').tc('td');
                to('th','class::ml-th').show('Implementation').tc('td');
                to('th','class::ml-th').show('Produced Query').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::function').show('all').tc('span');
                    to('span').show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    to('span','class::string').show("'table_name'").tc('span').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('SELECT * FROM table_name').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('select').tc('span');
                    to('span').show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    to('span','class::string').show("'column_name'").tc('span').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('select').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('SELECT column_name').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th').show('SELECT example').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('select').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1, column_name2'").tc('span');
                    to('span').show(')').tc('span').
                    to('span').show('->').tc('span');
                    to('span','class::function').show('from').tc('span').
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show('PRODUCES : SELECT column_name1, column_name2 FROM table_name').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>