<?php

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('Function Name').tc('td');
                to('th','class::ml-th').show('Parameter').tc('td');
                to('th','class::ml-th').show('Implementation').tc('td');
                to('th','class::ml-th').show('Produced Query').tc('td');
            tc('tr');

            to('tr','class::bb*bt');
                to('td','class::gfc colspan::4').
                    make('span','IS NULL','class::consolas*fun_name').show(' statment is used to check if the specified column_name IS NULL.').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts no parameters').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('null').tc('span');
                    show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('IS NULL').
                tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::function').show('where_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('where_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('WHERE column_name IS NULL').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('and_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('and_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('AND column_name IS NULL').
                tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::function').show('or_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('or_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('OR column_name IS NULL').
                tc('td');
            tc('tr');

            to('tr','class::bb*bt*nodd');
                to('td','class::gfc colspan::4').
                    make('span','IS NOT NULL','class::consolas*fun_name1').show(' statment is used to check if the specified column_name IS NOT NULL.').
                tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::function').show('not_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts no parameters').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('not_null').tc('span');
                    show('();').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('IS NOT NULL').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('where_not_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('where_not_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('WHERE column_name IS NOT NULL').
                tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::function').show('and_not_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('and_not_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('AND column_name IS NOT NULL').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('or_not_null').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    show('Accepts one (1) parameter:').bl().
                    make('span',"'column_name'",'class::fun_name*string').
                tc('td');
                to('td','class::gfc').
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('or_not_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    show('OR column_name IS NOT NULL').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('IS NULL example').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
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
                    to('span').show(')').tc('span').
                    to('span').show('->').tc('span');
                    to('span','class::function').show('null').tc('span');
                    to('span').show('();').tc('span').bl();
        
                    to('span','class::comment').tab(5).show('-- OR --').tc('span').bl();
        
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('where_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show(' PRODUCES : SELECT * FROM table_name WHERE column_name IS NULL').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().
    
    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('IS NOT NULL example').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
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
                    to('span').show(')').tc('span').
                    to('span').show('->').tc('span');
                    to('span','class::function').show('not_null').tc('span');
                    to('span').show('();').tc('span').bl();
        
                    to('span','class::comment').tab(5).show('-- OR --').tc('span').bl();
        
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('where_not_null').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(');').tc('span').bl().
                    to('span','class::comment').show(' PRODUCES : SELECT * FROM table_name WHERE column_name IS NOT NULL').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>