<?php

    to('p', 'class::welcome-text');
        show('Ajax Caller is used to create new onclick, onchange, onsubmit and etc functions
                that will call associated function in ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#ajax-request').
            show('Ajax Request ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
        bl();
        show('To use ajax, we have to implement all types of required events. Below are the examples:').bl(2);

        make('span', '.class', 'class::consolas*fun_name').show(' is your class name from associated HTML Tag').bl();
        make('span','#id', 'class::consolas*fun_name').show(' is your id name from associated HTML Tag');
    tc('p');

    to('div', 'class::welcome-text id::regular-caller-style');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').show('Caller function JavaScript Default style').tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::2');
                    to('span').show('$(').tc('span');
                    to('span','class::keyword').show('document').tc('span');
                    to('span').show(').').tc('span');
                    to('span','class::function').show('on').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'submit'").tc('span');
                    to('span').show(',').tc('span');
                    to('span','class::string').show("'.class or #id'").tc('span');
                    to('span').show(',').tc('span');
                    to('span','class::keyword').show('function').tc('span');
                    to('span').show('() {').tc('span').bl();
                        to('span','class::function').tab(4).show('ajax_caller_function').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::keyword').show('this').tc('span');
                        to('span').show(');').tc('span').bl();
                    to('span').show('}').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
    bl();
    to('div', 'class::welcome-text id::madeline-caller-style');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').show('Caller function MadeLine style').tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::2');
                    to('span').show('$(').tc('span');
                    to('span','class::keyword').show('function').tc('span');
                    to('span').show('() {').tc('span').bl();
                        tab(4).to('span','class::variable').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('do').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'submit'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'.class or #id'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::function').show("ajax_caller_function").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'extra1 (optional)'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'extra2 (optional)'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'extra3 (optional)'").tc('span');
                        to('span').show(');').tc('span').bl();
                    to('span').show('});').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>