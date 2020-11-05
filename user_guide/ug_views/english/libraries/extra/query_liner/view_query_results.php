<?php

    to('p', 'class::welcome-text');
        show('#1. In your controller:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::variable').show('$data').tc('span');
            to('span').show('[').tc('span');
            to('span','class::string').show("'result'").tc('span');
            to('span').show(']').tc('span');
            to('span').show(' = ').tc('span');
            to('span','class::keyword').show('$this').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('blog_model').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('blog_model_method').tc('span');
            to('span').show('();').tc('span');
        tc('pre');
    tc('div');  
                 
    to('p', 'class::welcome-text');
        show('#2. In your view, you can call as follows:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::variable').show('$result').tc('span');
        tc('pre');
    tc('div');   

    to('p', 'class::welcome-text');
        show('#3. To get one (1) row:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('echo ').tc('span');
            to('span','class::variable').show('$result').tc('span');
            to('span').show('->').tc('span');
            to('span','class::function').show('column_name').tc('span');
            to('span').show(';').tc('span');
        tc('pre');
    tc('div'); 
            
    to('p', 'class::welcome-text');
    show('#4. To get all rows:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::loop').show('foreach').tc('span');
            to('span').show('(').tc('span');
            to('span','class::variable').show('$result').tc('span');
            to('span').show(' as ').tc('span');
            to('span','class::variable').show('$row').tc('span');
            to('span').show(')').tc('span').bl();
            to('span').show('{').tc('span').bl();
                to('span','class::keyword').tab(4).show('echo ').tc('span');
                to('span','class::variable').show('$row').tc('span');
                to('span').show('->').tc('span');
                to('span','class::function').show('column_name').tc('span');
                to('span').show(';').tc('span').bl();
            to('span').show('}').tc('span');
        tc('pre');
    tc('div');

    to('p', 'class::welcome-text');
        show('#5. If you puth ');
        make('span',"'c'",'class::string*fun_name*consolas').
        show(' in your ');
        make('span',"get()",'class::fun_name*consolas').
        show(' function, look at the following code:');
    tc('p'); 

    to('div', 'class::highlight');
        to('pre');
            to('span','class::keyword').show('echo ').tc('span');
            to('span','class::variable').show('$result').tc('span');
            to('span').show(';').tc('span');
        tc('pre');
    tc('div'); 
?>