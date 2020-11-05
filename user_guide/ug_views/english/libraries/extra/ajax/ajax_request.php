<?php

    to('p', 'class::welcome-text');
        show('Ajax Caller is used to create new function passed from ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#ajax-caller').
            show('Ajax Caller ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
        bl().show('To respond to ').make('span', 'ajax_caller_function()', 'class::consolas*fun_name').make('span', ' we need to create that requested function.').
    tc('p');

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark');
            to('tr');
                to('th','class::ml-th*br').show('Function').tc('th');
                to('th','class::ml-th*br').show('Parameter').tc('th');
                to('th','class::ml-th').show('Description').tc('th');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('data').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS ONE PARAMETER').bl();
                    show('Parameter : data (OPTIONAL)').bl();
                tc('td');
                to('td','class::gfc');
                    show('You can send any data for you to use in your controller.').bl();
                    show('If you have more than one items to pass, you need to seprate them with ').make('span', "|",'class::consolas*fun_name').show(' or ').make('span',"::",'class::consolas*fun_name').bl();
                    show('For example:').bl();
                    to('span','class::keyword').show('var').tc('span');
                    to('span','class::variable').show(' data').tc('span');
                    to('span').tab(6).show(' = ').tc('span');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('data').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'data1|data2'").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('controller').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS ONE PARAMETER').bl();
                    show('Parameter : controller name (REQUIRED)').bl();
                tc('td');
                to('td','class::gfc');
                    show('Used to set controller name before sending a request to ajax').bl();
                    show('For example:').bl();
                    to('span','class::keyword').show('var').tc('span');
                    to('span','class::variable').show(' controller').tc('span');
                    to('span').show(' = ').tc('span');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('controller').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'controller_name'").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('method').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS ONE PARAMETER').bl();
                    show('Parameter : method name (REQUIRED)').bl();
                tc('td');
                to('td','class::gfc');
                    show('Used to set method name before sending a request to ajax').bl();
                    show('For example:').bl();
                    to('span','class::keyword').show('var').tc('span');
                    to('span','class::variable').show(' method').tc('span');
                    to('span').tab(4).show(' = ').tc('span');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('method').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'method_name'").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('ajax_data').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS THREE PARAMETERS').bl();
                    show('Parameter 1 : controller (REQUIRED)').bl();
                    show('Parameter 2 : method (DEPENDS)').bl();
                    show('Parameter 3 : data (OPTIONAL)');
                tc('td');
                to('td','class::gfc');
                    show('Used to wrap data, controller and method as one packet before sending a request to ajax').bl();
                    show('For example:').bl();
                    to('span','class::keyword').show('var').tc('span');
                    to('span','class::variable').show(' ajax_data').tc('span');
                    to('span').tab().show(' = ').tc('span');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('ajax_data').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show("controller").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("method").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("data").tc('span');
                    to('span').show(');').tc('span').bl(2);

                    show('If the method is the same as ajax default method set in route configuration').bl();
                    to('span','class::keyword').show('var').tc('span');
                    to('span','class::variable').show(' ajax_data').tc('span');
                    to('span').tab().show(' = ').tc('span');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('ajax_data').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show("controller").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("''").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("data").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('request').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS FIVE PARAMETERS').bl();
                    show('Parameter 1 : array_data (REQUIRED)').bl();
                    show('Parameter 2 : action (REQUIRED)').bl();
                    show('Parameter 3 : extra1 (OPTIONAL)').bl();
                    show('Parameter 4 : extra2 (OPTIONAL)').bl();
                    show('Parameter 5 : extra3 (OPTIONAL)');
                tc('td');
                to('td','class::gfc');
                    show('Used to send a request to ajax').bl();

                    show('IF YOU SENT ').make('span','this','class::consolas*fun_name').show(' FROM YOUR Ajax Caller function').bl();
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'element'").tc('span');
                    to('span').show(']');
                    to('span').tab().show('= ');
                    to('span','class::variable').show('element').tc('span');
                    to('span').show(';');    
                    to('span').show(' (REQUIRED FOR SUBMIT TYPE)').tc('span').bl();
    
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'data'").tc('span');
                    to('span').show(']');
                    to('span').tab(4).show('= ');
                    to('span','class::variable').show('ajax_data').tc('span');
                    to('span').show(';');    
                    to('span').show(' (OPTIONAL)').tc('span').bl(2);
    
                    show('Action is a new function that will be used to get response from ajax in Ajax Return file.').bl();
                    show('For example: ajax_return_function.').bl();

                    to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('request').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'ajax_return_function'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'extra1'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'extra2'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'extra3'").tc('span');
                    to('span').show(');').tc('span');                    
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
    
    to('p', 'class::welcome-text');
        show('Implementation based on JavaScript and MadeLine caller style.');
    tc('p');

    to('div', 'class::welcome-text id::request-function');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').
                    show('Ajax request based on ').
                    to('a','class::link*docs*fun_name1 href::manual/english/libraries/ajax-libraries#regular-caller-style').
                        show('JavaScript caller style ').
                        to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                    tc('a').
                tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::2');
                    to('span','class::comment').show('if ').make('span',"this",'class::consolas*fun_name').show(' is sent form Ajax Caller Function').bl();
                    to('span','class::keyword').show('function ').tc('span');
                    to('span','class::function').show('ajax_caller_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('element').tc('span');
                    to('span').show(') {').tc('span').bl();
                        
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('controller').tc('span');
                    to('span').show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("controller").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'controller_name'").tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('method').tc('span');
                    to('span').tab(4).show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("method").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'method_name'").tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('data').tc('span');
                    to('span').tab(6).show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("data").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'data'").tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('ajax_data').tc('span');
                    to('span').tab().show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("ajax_data").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show("controller").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("method").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("data").tc('span');
                    to('span').show(');').tc('span').bl(2);
                    
                    to('span','class::variable').tab(4).show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'element'").tc('span');
                    to('span').show(']').tc('span');
                    to('span').tab().show(" = ").tc('span');
                    to('span','class::variable').show("element").tc('span');
                    to('span').show(';').tc('span').bl();
                    
                    to('span','class::variable').tab(4).show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'data'").tc('span');
                    to('span').show(']').tc('span');
                    to('span').tab(4).show(" = ").tc('span');
                    to('span','class::variable').show("ajax_data").tc('span');
                    to('span').show(';').tc('span').bl(2);

                    to('span','class::class').tab(4).show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('request').tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show(", ").tc('span');
                    to('span','class::string').show("'ajax_return_function'").tc('span');
                    to('span').show(');').tc('span').bl();
                    to('span').show('}').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    bl();

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').
                    show('Ajax request example based on ').
                    to('a','class::link*docs*fun_name1 href::manual/english/libraries/ajax-libraries#madeline-caller-style').
                        show('MadeLine caller style ').
                        to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                    tc('a').
                tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::2');
                    to('span','class::comment').show('Five (5) parameters are passed from MadeLine caller').bl();
                    to('span','class::keyword').show('function ').tc('span');
                    to('span','class::function').show('ajax_caller_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('element').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('controller').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('extra1').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('extra2').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('extra3').tc('span');
                    to('span').show(') {').tc('span').bl();
                        
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('controller').tc('span');
                    to('span').show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("controller").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show('controller').tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('method').tc('span');
                    to('span').tab(4).show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("method").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'method_name'").tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('data').tc('span');
                    to('span').tab(6).show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("data").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'data'").tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    to('span','class::keyword').tab(4).show('var ').tc('span');
                    to('span','class::variable').show('ajax_data').tc('span');
                    to('span').tab().show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("ajax_data").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show("controller").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("method").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("data").tc('span');
                    to('span').show(');').tc('span').bl(2);
                    
                    to('span','class::variable').tab(4).show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'element'").tc('span');
                    to('span').show(']').tc('span');
                    to('span').tab().show(" = ").tc('span');
                    to('span','class::variable').show("element").tc('span');
                    to('span').show(';').tc('span').bl();
                    
                    to('span','class::variable').tab(4).show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'data'").tc('span');
                    to('span').show(']').tc('span');
                    to('span').tab(4).show(" = ").tc('span');
                    to('span','class::variable').show("ajax_data").tc('span');
                    to('span').show(';').tc('span').bl(2);

                    to('span','class::class').tab(4).show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('request').tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show(", ").tc('span');
                    to('span','class::string').show("'ajax_return_function'").tc('span');
                    to('span').show(');').tc('span').bl();
                    to('span').show('}').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>