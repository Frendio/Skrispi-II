<?php
            
    to('p', 'class::welcome-text');
        show('Solution #1');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/* column_name = "value" */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name::value'").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/* column_name = value */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name::value'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'at'").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/* column_name != "value" */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name::value'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'!='").tc('span');
            to('span').show(');').tc('span').bl(2);

            to('span','class::comment').show('/* column_name != value */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name::value'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'!='").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'at'").tc('span');
            to('span').show(');').tc('span').bl();
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('Solution #2');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/* column_name = "value" */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'value'").tc('span');
            to('span').show(');').tc('span').bl(2);
        
            to('span','class::comment').show('/* column_name = value */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'value'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'at'").tc('span');
            to('span').show(');').tc('span').bl(2);
        
            to('span','class::comment').show('/* column_name != "value" */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'value'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'!='").tc('span');
            to('span').show(');').tc('span').bl(2);
        
            to('span','class::comment').show('/* column_name != "value" */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name !='").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'value'").tc('span');
            to('span').show(');').tc('span').bl(2);
        
            to('span','class::comment').show('/* column_name != value */').tc('span').bl();
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('set').tc('span');
            to('span').show('(').tc('span');
            to('span','class::string').show("'column_name !='").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'value'").tc('span');
            to('span').show(", ").tc('span');
            to('span','class::string').show("'at'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('Solution #3');
    tc('p');

    to('div', 'class::highlight');
        to('pre');
            to('span','class::comment').show('/*').tc('span').bl();
            to('span','class::comment').show(' * column_name = "value"').tc('span').bl();
            to('span','class::comment').show(' */').tc('span').bl();

            to('span','class::variable').show('$data').tc('span');
            to('span').show('[').tc('span');
            to('span','class::string').show("'column_name'").tc('span');
            to('span').show('] = ').tc('span');
            to('span','class::string').show("'value'").tc('span');
            to('span').show(';').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('If you want to udpate based on condition, you can set your condition based on any conditions in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#madeline-sql-statment-functions').show('MADELINE SQL STATEMENT FUNCTIONS').tc('a');
    tc('p');

?>