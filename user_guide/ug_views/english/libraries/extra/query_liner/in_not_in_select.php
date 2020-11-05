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
                    to('span','class::function').show('close').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts no parameters').bl().
                    show('Used to close an IN SELECT statement').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('close').tc('span');
                    to('span').show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show(')').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('in_select').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name1'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('in_select').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(')->').tc('span');
                    to('span','class::function').show('close').tc('span');
                    to('span').show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('IN (SELECT coloumn_name1)').
                tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::function').show('not_in_select').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name1'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('not_in_select').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(')->').tc('span');
                    to('span','class::function').show('close').tc('span');
                    to('span').show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('IN (SELECT coloumn_name1)').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').make('span','in_select()','class::consolas*fun_name1').show(' example:').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name1'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('where').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(8).show('->').tc('span');
                    to('span','class::function').show('in_select').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(8).show('->').tc('span');
                    to('span','class::function').show('from').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(8).show('->').tc('span');
                    to('span','class::function').show('close').tc('span');
                    to('span').show('();').tc('span').bl().
                    to('span','class::comment').show('PRODUCES : SELECT * FROM table_name1 WHERE column_name1 IN (SELECT column_name1 FROM table_name2)').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    // to('div', 'class::highlight');
    //     to('pre');

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').make('span','not_in_select()','class::consolas*fun_name1').show(' example:').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').                    
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name1'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('where').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(8).show('->').tc('span');
                    to('span','class::function').show('not_in_select').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(8).show('->').tc('span');
                    to('span','class::function').show('from').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name2'").tc('span');
                    to('span').show(')').tc('span').bl();

                    to('span').tab(8).show('->').tc('span');
                    to('span','class::function').show('close').tc('span');
                    to('span').show('();').tc('span').bl().
                    to('span','class::comment').show('PRODUCES : SELECT * FROM table_name1 WHERE column_name1 NOT IN (SELECT column_name1 FROM table_name2)').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

?>