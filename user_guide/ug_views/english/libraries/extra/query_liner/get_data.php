<?php          

    to('p', 'class::welcome-text');
        to('b').
            to('i').
                show('When ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/query-builder#native-query').show('NATIVE QUERY').tc('a');
                show(' is used');
            tc('i').
        tc('b').bl().
        show('Set your query:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::variable').show('$sql').tc('span');
            to('span').show(' = ').tc('span');
            to('span','class::string').show("'SELECT *  FROM table_name WHERE column_name = \"value\"'").tc('span');
            to('span').show(';').tc('span');
        tc('pre');
    tc('div');   
            
    to('p', 'class::welcome-text');
        show('#1. Get one (1) row result:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::variable').show('$sql').tc('span');
            to('span').show(', ').tc('span');
            to('span','class::int').show("1").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');   
            
    to('p', 'class::welcome-text');
        show('#2. Get all rows:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::variable').show('$sql').tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('#3. Get number of rows,');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::variable').show('$sql').tc('span');
            to('span').show(', ').tc('span');
            to('span','class::char').show("'c'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');   
            
    to('p', 'class::welcome-text');
        show('#4. Preview your query:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::variable').show('$sql').tc('span');
            to('span').show(', ').tc('span');
            to('span','class::char').show("'show'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');   
    
    bl();
            
    to('p', 'class::welcome-text');
        to('b').
            to('i').
                show('When ');
                to('a','class::link*docs*consolas*fun_name').show('ML Query Liner').tc('a');
                show(' is used');
            tc('i').
        tc('b').bl().
        show('Set your query:');
    tc('p'); 
            
    to('p', 'class::welcome-text');
        show('#1. Get one (1) row result:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::int').show("1").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');   
            
    to('p', 'class::welcome-text');
        show('#2. Get all rows:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('();').tc('span');
        tc('pre');
    tc('div');
            
    to('p', 'class::welcome-text');
        show('#3. Get number of rows:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::char').show("'c'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');   
            
    to('p', 'class::welcome-text');
        show('#4. Preview your query:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('return').tc('span');
            to('span','class::keyword').tab().show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::char').show("'show'").tc('span');
            to('span').show(');').tc('span');
        tc('pre');
    tc('div');
            
    bl().  

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('#1. GET 1 ROW example').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('return').tc('span');
                    to('span','class::keyword').show(' $this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'table_name'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('where').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('and').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('or').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('get').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::int').show('1').tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('#2. GET ALL ROWS example').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('return').tc('span');
                    to('span','class::keyword').show(' $this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'table_name'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('where').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('and').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('or').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('get').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('#3. GET NUMBER OF ROWS example').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('return').tc('span');
                    to('span','class::keyword').show(' $this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'table_name'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('where').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('and').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('or').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('get').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'c'").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl().

    to('div', 'class::welcome-text id::open-tag');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th').show('#4. PREVIEW QUERY example').tc('td');
            tc('tr');

            to('tr','class::odd*bb');
                to('td','class::gfc').
                    to('span','class::keyword').show('return').tc('span');
                    to('span','class::keyword').show(' $this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('all').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'table_name'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('where').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('and').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(')').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('or').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::char').show("'column_name1::value1'").tc('span');
                    to('span').show(');').tc('span').bl();
                
                    to('span').tab(12).show('->').tc('span');
                    to('span','class::function').show('get').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'show'").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>