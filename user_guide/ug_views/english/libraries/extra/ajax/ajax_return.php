<?php

    to('p', 'class::welcome-text');
        show('Ajax Return is used to get ajax response from the requested ');
        to('a','class::link*docs*fun_name*consolas href::manual/english/madeline-cmv/controllers').
            show('Controller ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
        bl().show('The function name is passed from the ');
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#ajax-caller-jquery').
            show('Ajax Caller ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
    tc('p');

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark');
            to('tr');
                to('th','class::ml-th').show('Function').tc('th');
                to('th','class::ml-th').show('Parameter').tc('th');
                to('th','class::ml-th').show('Description').tc('th');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ML').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('notifier').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS FOUR PARAMETERS').bl();
                    show('Parameter 1 = Message indicator').tc('span').bl();
                    show('Parameter 2 = Response from controller or any messages').tc('span').bl();
                    show('Parameter 3 = Timer (in MS)').bl();
                    show('Parameter 4 = Status (').tc('span');
                    to('span','class::suc').show('success').tc('span');
                    show(', ').tc('span');
                    to('span','class::failed').show('fail').tc('span');
                    show(', ').tc('span');
                    to('span','class::string').show('warning').tc('span');
                    show(')').tc('span');
                tc('td');
                to('td','class::gfc');
                    to('span').show('MadeLine custom alert used to display response from controller or any messages you want.').tc('span').bl();
                    to('span').show('The alert style is based on your system status.').tc('span').bl();
                    to('span').show('You can switch around development and live to see the difference.').tc('span').bl(2);
                    to('span').show('You have to put inside your ajax_return_function.').tc('span').bl();

                    to('span','class::class').show('ML').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('notifier').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::string').show("'Message indicator'").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(', ').tc('span');
                    to('span').show('3000').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("'").tc('span');
                    to('span','class::suc').show("success").tc('span');
                    to('span').show(' / ').tc('span');
                    to('span','class::failed').show("fail").tc('span');
                    to('span').show(' / ').tc('span');
                    to('span','class::string').show("warning'").tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');

            to('tr','class::bb');
                to('td','class::br*gfc');
                    to('span','class::class').show('ML').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('alert').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS ONE PARAMETER').bl();
                    show('Parameter = response from controller or any messages').tc('span').bl();
                tc('td');
                to('td','class::gfc');
                    to('span').show('**USED FOR DEBUGING & ERROR CHECKING**').tc('span').bl();
                    to('span').show('MadeLine custom alert used to display response in a form of ERROR.').tc('span').bl(2);
                    to('span').show('You have to put inside your ajax_return_function.').tc('span').bl();

                    to('span','class::class').show('ML').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('alert').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');

            to('tr');
                to('td','class::br*gfc');
                    to('span','class::class').show('ML').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('auto_notifier').tc('span');
                    to('span').show('();').tc('span');
                tc('td');
                to('td','class::br*gfc');
                    show('ACCEPTS ONE PARAMETER').bl();
                    show('Parameter = response from controller or any messages').tc('span').bl();
                tc('td');
                to('td','class::gfc');
                    to('span').show('**USED FOR UNDEFINED ERRORS**').tc('span').bl();
                    to('span').show('MadeLine custom alert used to display undefined ERROR from controller.').tc('span').bl(2);
                    to('span').show('You have to put inside your ajax_return_function.').tc('span').bl();

                    to('span','class::class').show('ML').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('auto_notifier').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(');').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
?>