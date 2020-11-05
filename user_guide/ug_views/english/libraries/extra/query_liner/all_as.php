<?php

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('Function Name').tc('td');
                to('th','class::ml-th').show('Parameter').tc('td');
                to('th','class::ml-th').show('Implementation').tc('td');
                to('th','class::ml-th').show('Produced Query').tc('td');
            tc('tr');

            // to('tr','class::bb*bt');
            //     to('th','class::ml-th colspan::4').show('AS, AVG, COUNT, DISTINCT, MAX, MIN or SUM').tc('td');
            // tc('tr');
            to('tr','class::odd');
                to('td','class::gfc').
                    make('span','select_as','class::function').
                    show('()').bl().
                    make('span','as','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_as','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','as','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_as','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','as','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT column_name AS "as_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT column_name AS "alias"').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    make('span','select_avg','class::function').
                    show('()').bl().
                    make('span','avg','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_avg','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','avg','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_avg','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','avg','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT AVG(column_name) AS "avg_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT AVG(column_name) AS "alias"').
                tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    make('span','select_count','class::function').
                    show('()').bl().
                    make('span','count','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_count','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','count','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_count','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','count','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT COUNT(column_name) AS "count_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT COUNT(column_name) AS "alias"').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    make('span','select_distinct','class::function').
                    show('()').bl().
                    make('span','distinct','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_distinct','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','distinct','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_distinct','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','distinct','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT DISTINCT(column_name) AS "distinct_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT DISTINCT(column_name) AS "alias"').
                tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    make('span','select_max','class::function').
                    show('()').bl().
                    make('span','max','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_max','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','max','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_max','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','max','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT MAX(column_name) AS "max_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT MAX(column_name) AS "alias"').
                tc('td');
            tc('tr');

            to('tr','class::nodd');
                to('td','class::gfc').
                    make('span','select_min','class::function').
                    show('()').bl().
                    make('span','min','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_min','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','min','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_min','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','min','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT MIN(column_name) AS "min_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT MIN(column_name) AS "alias"').
                tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    make('span','select_sum','class::function').
                    show('()').bl().
                    make('span','sum','class::function').
                    show('()').
                tc('td');
                to('td','class::gfc').
                    show('Accepts two (2) parameters:').bl().
                    show('Parameter 1 = column_name').bl().
                    show('Parameter 2 = alias (Optional)').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_sum','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','sum','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',');').bl(2).

                    make('span','with alias','class::comment').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','select_sum','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').bl().

                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    make('span','sum','class::function').
                    make('span','(').
                    make('span',"'column_name'",'class::string').
                    make('span',',').
                    make('span',"'alias'",'class::string').
                    make('span',');').
                tc('td');
                to('td','class::gfc').
                    make('span','without alias','class::comment').bl().
                    show('SELECT SUM(column_name) AS "sum_column_name"').bl(2).

                    make('span','with alias','class::comment').bl().
                    show('SELECT SUM(column_name) AS "alias"').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('p', 'class::welcome-text');
        show('Let\'s try a full query, that produces:').bl().
        make('span','SELECT column_name1 AS alias FROM table_name','class::consolas').
    tc('p');

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('Full query example').tc('td');
            tc('tr');

            to('tr','class::odd');
                to('td','class::gfc').
                    to('span','class::comment').show('Option #1.').tc('span').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('as').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'alias'").tc('span');
                    to('span').show(')').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('from').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(');').tc('span').bl(2);
                    
                    to('span','class::comment').show('Option #2').tc('span').bl().
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('select_as').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'column_name1'").tc('span');
                    to('span').show(',').tc('span');
                    to('span','class::string').show("'alias'").tc('span');
                    to('span').show(')').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('from').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'table_name'").tc('span');
                    to('span').show(');').tc('span').
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    // echo $this->model->as('column_name1', 'alias')->avg('column_name2', 'alias2')->from('table_name')->get('show');
?>