<?php

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*code_table');
            to('tr','class::bb');
                to('th','class::ml-th').show('Function Name').tc('td');
                to('th','class::ml-th').show('Parameter').tc('td');
                to('th','class::ml-th').show('Implementation').tc('td');
                to('th','class::ml-th').show('Produced Query').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::function').show('like').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    to('span').show('Accepts two (2) parameters').tc('span').bl().
                    show('Parameter 1 : keyword').bl().
                    show('Parameter 2 : optional OR location of % (l or r)').
                tc('td');
                to('td','class::gfc').
                    to('span','class::comment').show('Without parameter 2').tc('span').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl(2);

                    to('span','class::comment').show('With parameter 2').tc('span').bl().
                    to('span','class::comment').show('Option #1').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'l'").tc('span');
                    to('span').show(');').tc('span').bl().

                    to('span','class::comment').show('Option #2').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'r'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    to('span','class::comment').show('Without parameter 2').tc('span').bl().
                    show('LIKE "%keyword%"').bl(2).

                    to('span','class::comment').show('With parameter 2').tc('span').bl().
                    to('span','class::comment').show('Option #1').tc('span').bl().
                    show('LIKE "%keyword"').bl().
                    
                    to('span','class::comment').show('Option #2').tc('span').bl().
                    show('LIKE "keyword%"').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    to('span','class::function').show('where_like').tc('span');
                    to('span').show('();').tc('span').bl().
                    to('span','class::function').show('and_like').tc('span');
                    to('span').show('();').tc('span').bl().
                    to('span','class::function').show('or_like').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::gfc').
                    to('span').show('Accepts three (3) parameters').tc('span').bl().
                    show('Parameter 1 : column_name').bl().
                    show('Parameter 2 : keyword').bl().
                    show('Parameter 3 : optional OR location of % (l or r)').
                tc('td');
                to('td','class::gfc').
                    to('span','class::comment').show('Without parameter 3').tc('span').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('where_like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl(2);

                    to('span','class::comment').show('With parameter 3').tc('span').bl().
                    to('span','class::comment').show('Option #1').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('where_like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'l'").tc('span');
                    to('span').show(');').tc('span').bl().

                    to('span','class::comment').show('Option #2').tc('span').bl();
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('where_like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'r'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
                to('td','class::gfc').
                    to('span','class::comment').show('Without parameter 3').tc('span').bl().
                    show('WHERE column_name LIKE "%keyword%"').bl(2).

                    to('span','class::comment').show('With parameter 3').tc('span').bl().
                    to('span','class::comment').show('Option #1').tc('span').bl().
                    show('WHERE column_name LIKE "%keyword"').bl().
                    
                    to('span','class::comment').show('Option #2').tc('span').bl().
                    show('WHERE column_name LIKE "keyword%"').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().
    
    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('LIKE example').tc('td');
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
                    to('span').show(')').tc('span');
                
                    to('span').show('->').tc('span');
                    to('span','class::function').show('like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span','class::comment').tab(5).show("-- OR --").tc('span').bl();
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('where_like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl(2);
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('and').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(')').tc('span');
                
                    to('span').show('->').tc('span');
                    to('span','class::function').show('like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span','class::comment').tab(5).show("-- OR --").tc('span').bl();
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('and_like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl(2);
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('or').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(')').tc('span');
                
                    to('span').show('->').tc('span');
                    to('span','class::function').show('like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span','class::comment').tab(5).show("-- OR --").tc('span').bl();
                
                    to('span').tab(5).show('->').tc('span');
                    to('span','class::function').show('or_like').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'keyword'").tc('span');
                    to('span').show(');').tc('span').bl(2).
                    to('span','class::comment').show(' PRODUCES : SELECT * FROM table_name WHERE column_name LIKE "%keyword%" AND column_name LIKE "%keyword%" OR column_name LIKE "%keyword%"').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>