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
                    make('span','between','class::function').
                    show('();').
                tc('th');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = value1').bl().
                    show('Parameter 2 = value2').
                tc('th');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','between','class::function').
                    make('span','(').
                    make('span',"'value1'",'class::string').
                    make('span',', ').
                    make('span',"'value2'",'class::string').
                    make('span',');').
                tc('th');
                to('td','class::gfc').
                    show('BETWEEN value1 AND value2').
                tc('th');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    make('span','where_between','class::function').
                    show('();').
                tc('th');
                to('td','class::gfc').
                    show('Accepts three (3) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = value2').bl().
                    show('Parameter 3 = value2').
                tc('th');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','where_between','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',', ').
                    make('span',"'value1'",'class::string').
                    make('span',', ').
                    make('span',"'value2'",'class::string').
                    make('span',');').
                tc('th');
                to('td','class::gfc').
                    show('WHERE column_name BETWEEN value1 AND value2').
                tc('th');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    make('span','and_between','class::function').
                    show('();').
                tc('th');
                to('td','class::gfc').
                    show('Accepts three (3) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = value2').bl().
                    show('Parameter 3 = value2').
                tc('th');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','and_between','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',', ').
                    make('span',"'value1'",'class::string').
                    make('span',', ').
                    make('span',"'value2'",'class::string').
                    make('span',');').
                tc('th');
                to('td','class::gfc').
                    show('AND column_name BETWEEN value1 AND value2').
                tc('th');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    make('span','or_between','class::function').
                    show('();').
                tc('th');
                to('td','class::gfc').
                    show('Accepts three (3) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = value2').bl().
                    show('Parameter 3 = value2').
                tc('th');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','or_between','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',', ').
                    make('span',"'value1'",'class::string').
                    make('span',', ').
                    make('span',"'value2'",'class::string').
                    make('span',');').
                tc('th');
                to('td','class::gfc').
                    show('OR column_name BETWEEN value1 AND value2').
                tc('th');
            tc('tr');
        tc('table');
    tc('div');

    to('p', 'class::welcome-text');
        show('Full query using ').
        make('span','WHERE','class::consolas*fun_name').
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('all').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'table_name'").tc('span');
            to('span').show(')').tc('span').bl();

            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('where').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name'").tc('span');
            to('span').show(')').tc('span');

            to('span').show('->').tc('span');
            to('span','class::function').show('between').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'value1'").tc('span');
            to('span').show(',').tc('span');
            to('span','class::string').show("'value2'").tc('span');
            to('span').show(');').tc('span').bl();

            tab(5).make('span','-- OR --','class::comment').bl().
            to('span').tab(5).show('->').tc('span');
            to('span','class::function').show('where_between').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name'").tc('span');
            to('span').show(',').tc('span');
            to('span','class::string').show("'value1'").tc('span');
            to('span').show(',').tc('span');
            to('span','class::string').show("'value2'").tc('span');
            to('span').show(');').tc('span').bl().
            to('span','class::comment').show('PRODUCES : SELECT * FROM table_name WHERE column_name BETWEEN value1 AND value2').tc('span').bl(2).
            show('You can use ').
            make('span','AND -> and_between()','class::consolas*fun_name').show(' & ').
            make('span','OR -> or_between()','class::consolas*fun_name').
        tc('pre');
    tc('div');
?>