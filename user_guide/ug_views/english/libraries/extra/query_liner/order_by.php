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
                    to('span','class::function').show('order_by').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 : ').to('span','class::string').show("'coloumn_name'").tc('span').
                    show(' OR ').to('span','class::string').show("'coloumn_name type'").tc('span').bl().
                    show('Parameter 2 : type : asc, desc & rand (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','Without parameter 2','class::comment').bl().
                    make('span','Option #1','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('order_by').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'rand'").tc('span');
                    to('span').show(');').tc('span').bl().

                    make('span','Option #2','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('order_by').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'coloumn_name asc'").tc('span');
                    to('span').show(');').tc('span').bl().

                    make('span','Option #3','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('order_by').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'coloumn_name'").tc('span');
                    to('span').show(');').tc('span').bl(2).

                    make('span','With parameter 2','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('order_by').tc('span');
                    to('span').show('(').tc('span').
                    to('span','class::string').show("'coloumn_name'").tc('span');
                    to('span').show(', ').tc('span').
                    to('span','class::string').show("'asc'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    make('span','Without parameter 2','class::comment').bl().
                    make('span','Option #1','class::comment').bl().
                    show('ORDER BY RAND()').bl().
                    make('span','Option #2','class::comment').bl().
                    show('ORDER BY column_name ASC').bl().
                    make('span','Option #3','class::comment').bl().
                    show('ORDER BY column_name').bl(2).

                    make('span','With parameter 2','class::comment').bl().
                    show('ORDER BY column_name ASC').bl(2).
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('ORDER BY example').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(')').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('order_by').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name desc'").tc('span');
                    to('span').show(');').tc('span').bl();
                    to('span','class::comment').show('PRODUCES : SELECT * FROM table_name ORDER BY column_name DESC').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>