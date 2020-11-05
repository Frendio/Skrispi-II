<?php

    to('p', 'class::welcome-text');
        show('To use ajax, there will be five (5) files used in this example, which are as follows:').bl();
    tc('p');

    to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::caller.js').show('1. Create ajax_caller.js').tc('p');

    to('p', 'class::welcome-text').
        make('span',"'blog'",'class::string*consolas*fun_name').show(' is ').make('span','blog.php','class::consolas*fun_name').show(' controller file that will be created later').bl();
        make('span',"'#myid'",'class::string*consolas*fun_name').show(' is ').make('span','id name','class::consolas*fun_name').show(' that will be defined in a view ');
        to('a','class::link*docs*fun_name href::manual/english/libraries/ajax-libraries#ajax-view').
          show('View ').
          to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
    tc('p').

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th').
                    show('Example [onsubmit] using ').
                    to('a','class::link*docs*fun_name1*consolas href::manual/english/libraries/ajax-libraries#madeline-caller-style').
                      show('MadeLine caller function ').
                      to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                    tc('a');
                tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc');
                    to('span').show('$(').tc('span');
                    to('span','class::keyword').show('function').tc('span');
                    to('span').show('() {').tc('span').bl();
                        tab(4).to('span','class::variable').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('do').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'submit'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'#myid'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::function').show("my_ajax_caller_function").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'blog'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'hello'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'world'").tc('span');
                        to('span').show(');').tc('span').bl();
                        tab(4).make('span','You can add more caller functions here','class::comment').bl();
                    to('span').show('});').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
              
    to('p', 'class::welcome-text');
      show('Save inside your ').make('span', 'public/js', 'class::consolas*fun_name').show(' directory as ').make('span','ajax_caller.js','class::fun_name*consolas');
    tc('p');

    bl().

    to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::request.js').show('2. Create ajax_request.js').tc('p');

    to('p', 'class::welcome-text').
        show('Keep in mind that there will be five (5) generated parameters passed from ').make('span','ajax_caller.js','class::consolas*fun_name').show(', which are as follows:').bl().
        make('span','my_ajax_caller_function','class::function*consolas*fun_name').show(' function name is ').make('span',"my_ajax_caller_function",'class::function*fun_name*consolas').show(' ,').bl();
        make('span','element','class::consolas*fun_name').show(' parameter 1 is ').make('span',"'#myid'",'class::string*fun_name*consolas').show(' ,').bl();
        make('span','array_data','class::consolas*fun_name').show(' parameter 2 is ').make('span',"'generated array variable'",'class::consolas*fun_name').show(' ,').bl();
        make('span','request','class::consolas*fun_name').show(' parameter 3 is ').make('span',"'blog'",'class::string*fun_name*consolas').show(' ,').bl();
        make('span','method','class::consolas*fun_name').show(' parameter 4 is ').make('span',"'hello'",'class::string*fun_name*consolas').show(' and').bl();
        make('span','data','class::consolas*fun_name').show(' parameter 5 is ').make('span',"'world'",'class::string*fun_name*consolas').show(' passed from ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#caller.js').
          show('ajax_caller.js ').
          to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
    tc('p').

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('td','class::gfc colspan::2');
                    to('span','class::keyword').show('function ').tc('span');
                    to('span','class::function').show('my_ajax_caller_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('element').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('request').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('method').tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show('data').tc('span');
                    to('span').show(') {').tc('span').bl();
                        
                    tab(4).to('span','class::keyword').show('var ').tc('span');
                    to('span','class::variable').show('controller').tc('span');
                    to('span').show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("controller").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show('request').tc('span');
                    to('span').show(');').tc('span').bl();
                    
                    tab(4).to('span','class::keyword').show('var ').tc('span');
                    to('span','class::variable').show('method').tc('span');
                    tab(4).to('span').show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("method").tc('span');
                    to('span').show('(method);').tc('span').bl();
                    
                    tab(4).to('span','class::keyword').show('var ').tc('span');
                    to('span','class::variable').show('data').tc('span');
                    tab(6).to('span').show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("data").tc('span');
                    to('span').show("(").tc('span');
                    show("data");
                    to('span').show(');').tc('span').bl(2);

                    tab(4).make('span','If the method is the same as ajax default method set in Your Route Configuration,','class::comment').bl();
                    tab(4).to('span','class::keyword').show('var ').tc('span');
                    to('span','class::variable').show('ajax_data').tc('span');
                    tab().to('span').show(" = ").tc('span');
                    to('span','class::class').show("ajax").tc('span');
                    to('span').show(".").tc('span');
                    to('span','class::function').show("ajax_data").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show("controller").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::string').show("''").tc('span');
                    to('span').show(', ').tc('span');
                    to('span','class::variable').show("data").tc('span');
                    to('span').show(');').tc('span').bl();

                    tab(4).make('span','Otherwise,','class::comment').bl();
                    tab(4).to('span','class::keyword').show('var ').tc('span');
                    to('span','class::variable').show('ajax_data').tc('span');
                    tab().to('span').show(" = ").tc('span');
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
                    
                    tab(4).to('span','class::variable').show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'element'").tc('span');
                    to('span').show(']').tc('span');
                    tab().to('span').show(" = ").tc('span');
                    to('span','class::variable').show("element").tc('span');
                    to('span').show(';').tc('span').bl();
                    
                    tab(4).to('span','class::variable').show('array_data').tc('span');
                    to('span').show('[').tc('span');
                    to('span','class::string').show("'data'").tc('span');
                    to('span').show(']').tc('span');
                    tab(4).to('span').show(" = ").tc('span');
                    to('span','class::variable').show("ajax_data").tc('span');
                    to('span').show(';').tc('span').bl(2);

                    tab(4).to('span','class::class').show('ajax').tc('span');
                    to('span').show('.').tc('span');
                    to('span','class::function').show('request').tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::variable').show('array_data').tc('span');
                    to('span').show(", ").tc('span');
                    to('span','class::string').show("'my_ajax_return_function'").tc('span');
                    to('span').show(');').tc('span').bl();
                    to('span').show('}').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
              
    to('p', 'class::welcome-text');
      show('Save inside your ').make('span', 'public/js directory', 'class::consolas*fun_name').show(' as ').make('span', 'ajax_request.js', 'class::consolas*fun_name');
    tc('p');

    bl();

    to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px;').show('3. Create ajax_return.js').tc('p');

    to('p', 'class::welcome-text').
        show('Keep in mind that there will be five (4) generated parameters passed from ajax_request, which are (response, extra1, extra2, extra3).').bl().
        show('However, based on our ajax_request.js, we only passed our new function name. Therefore, the parameter will only be one which is ').
        make('span', 'response', 'class::fun_name').bl().
        make('span','my_ajax_return_function','class::function*consolas*fun_name').show(' function name is ').make('span',"'my_ajax_return_function'",'class::string*fun_name*consolas').show(',').bl();
        make('span','response','class::consolas*fun_name').show(' parameter is ').make('span',"reponse",'class::function*fun_name*consolas').show(' sent from the requested controller through ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#request.js').
          show('ajax_request.js ').
          to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
    tc('p').

    to('p', 'class::welcome-text').
        show('You can choose one of the following three return types:');
    tc('p').

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::3').show('1. Ajax Return Example using ML.notifier()').tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::3');
                    make('span',"'Beautiful'",'class::string*fun_name*consolas').show(' is ').make('span',"'Message indicator'",'class::fun_name').show(',').bl();
                    make('span',"300",'class::fun_name').show(' is ').make('span',"Timer for 300 ms",'class::fun_name').show(' &').bl();
                    make('span',"'success'",'class::string*fun_name').show(' is ').make('span',"'Status'",'class::fun_name').bl();
                    to('span','class::keyword').show('function').tc('span');
                    to('span','class::function').show(' my_ajax_return_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(') {').tc('span').bl();
                        tab(4).to('span','class::class').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('notifier').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'Beautiful'").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::variable').show('response').tc('span');
                        to('span').show(', ').tc('span');
                        to('span').show('3000').tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'success'").tc('span');
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
                to('th','class::ml-th colspan::3').show('2. Ajax Return Example using ML.alert()').tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::3');
                    to('span','class::keyword').show('function').tc('span');
                    to('span','class::function').show(' my_ajax_return_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(') {').tc('span').bl();
                        tab(4).to('span','class::class').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('alert').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::variable').show('response').tc('span');
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
                to('th','class::ml-th colspan::3').show('3. Ajax Return Example using ML.auto_notifier()').tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::3');
                    to('span','class::keyword').show('function').tc('span');
                    to('span','class::function').show(' my_ajax_return_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(') {').tc('span').bl();
                        tab(4).to('span','class::class').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('auto_notifier').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::variable').show('response').tc('span');
                        to('span').show(');').tc('span').bl();
                    to('span').show('}').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
              
    to('p', 'class::welcome-text');
      show('Save inside your ').make('span', 'public/js directory','class::consolas*fun_name').show(' as ').make('span', 'ajax_return.js','class::consolas*fun_name');
    tc('p');
    
    to('p', 'class::welcome-text id::update-return');
        make('span','=/=/=/=/=/=/=/=/=/=/=/=','style::color:red;').bl().
        show('If you want to show a returned error message, you need to do a little update to the ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#update-controller').
            show('blog.php ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').show(' controller & ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#update-view').
            show('blog.php ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').show(' view as well.').
    tc('p');

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::3').show('Show error message').tc('th');
            tc('tr');

            to('tr');
                to('td','class::gfc colspan::3');
                    to('span','class::keyword').show('function').tc('span');
                    to('span','class::function').show(' my_ajax_return_function').tc('span');
                    to('span').show('(').tc('span');
                    to('span','class::variable').show('response').tc('span');
                    to('span').show(') {').tc('span').bl();
                        tab(4).to('span','class::comment').show('clear existing error').tc('span').bl();
                        tab(4).to('span','class::class').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('clear_error').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'error_message'").tc('span');
                        to('span').show(');').tc('span').bl(2);

                        tab(4).to('span','class::comment').show('handle the error').tc('span').bl();
                        tab(4).to('span','class::class').show('ML').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::function').show('input_handler').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::variable').show("response").tc('span');
                        to('span').show(', ').tc('span');
                        to('span','class::string').show("'error_message'").tc('span');
                        to('span').show(');').tc('span').bl();
                    to('span').show('}').tc('span');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
    
    to('p', 'class::welcome-text');
      show('Update the file by saving it.');
    tc('p');

    bl();

    to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::controller.php').
    show('4. Create blog.php (Controller)').tc('p');
              
    to('p', 'class::welcome-text');
        show('You are now set with all the js files. ');
        show('You can now create a controller to respond to ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#request.js').
            show('Ajax request ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').
        show(' called ').
        make('span','"blog.php"','class::consolas*fun_name').bl().
        show('For this example, we will use and modify ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/madeline-cmv/controllers#hello-world').
            show('Blog controller ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').
    tc('p');

    to('p', 'class::welcome-text').
        show('Change ').
        make('span','index','class::function*consolas*fun_name').
        show(' method to load a view as follows:').
    tc('p').

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th*br id::ajax-function-jquery').show('index method').tc('th');
            tc('tr');

            to('tr','class::bb*bt');
                to('td','class::gfc');
                    to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('() {').tc('span').bl();
                        tab(4).to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('view').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'blog'").tc('span');
                        to('span').show(');').tc('span').bl().
                    show('}');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');

    to('p', 'class::welcome-text').
        show('Add a new method called ').
        make('span','hello','class::consolas*function*fun_name').show(', which will be used to respond to ');
        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#request.js').
          show('ajax_request.js ').
          to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a');
    tc('p').

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr','class::bb*bt');
                to('th','class::ml-th*br id::ajax-function-jquery').show('hello method').tc('th');
            tc('tr');

            to('tr','class::bb*bt');
                to('td','class::gfc');
                    to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' hello').tc('span'); 
                    to('span').show('() {').tc('span').bl();
                        tab(4).make('span','only ajax request is allowed','class::comment').bl();
                        tab(4).to('span','class::function').show("DEFINED").tc('span');
                        to('span').show("(").tc('span');
                        to('span','class::string').show("'AJAX'").tc('span');
                        to('span').show(")").tc('span');
                        to('span').show(" OR").tc('span');
                        to('span','class::exit').show(" EXIT").tc('span');
                        to('span').show(" (").tc('span');
                        to('span','class::function').show("header").tc('span');
                        to('span').show("(").tc('span');
                        to('span','class::string').show("'location: 403'").tc('span');
                        to('span').show("));").tc('span').bl(2);

                        tab(4).make('span','get and create variable for data being sent from ajax_request.js','class::comment').bl();
                        tab(4).make('span',"data",'class::function*fun_name').show(' : ');
                        make('span',"'world'",'class::string*fun_name').make('span'," is sent from ",'class::comment');
                        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#request.js').
                          show('ajax_request.js ').
                          to('span','class::glyphicon*glyphicon-link style::font-size:10px').tc();
                        tc('a').bl();
                        tab(4).show('$data = ').tc('span');
                        to('span','class::function').show('data').tc('span');
                        to('span').show(';').tc('span').bl(2);

                        tab(4).make('span','load form library','class::comment').bl();
                        tab(4).to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('library').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'form'").tc('span');
                        to('span').show(');').tc('span').bl(2);

                        tab(4).make('span','set input rules','class::comment').bl();
                        tab(4).make('span',"'text'",'class::string*fun_name').make('span',' is an input name defined in ','class::comment');
                        to('a','class::link*docs*consolas*fun_name href::manual/english/libraries/ajax-libraries#view.php').
                          show('blog.php (View) ').
                          to('span','class::glyphicon*glyphicon-link style::font-size:10px').tc();
                        tc('a').bl();

                        tab(4).make('span',"'Text is required!'",'class::string*fun_name').make('span',' is an input returned message if it has no values ','class::comment').bl();

                        tab(4).to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('from').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('input').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'text:Text is required!'").tc('span');
                        to('span').show(');').tc('span').bl(2);

                        tab(4).make('span','validate input form','class::comment').bl();
                        tab(4).to('span','class::if').show('if').tc('span');
                        to('span').show(' (').tc('span');
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('form').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('validate').tc('span');
                        to('span').show('())').tc('span').bl();
                        tab(4).to('span').show('{').tc('span').bl();
                            tab(8).to('span','class::comment').show('return true').tc('span').bl();
                            tab(8).to('span').show('$value').tc('span');
                            show(' = ').
                            to('span','class::keyword').show('$this').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('input').tc('span');
                            to('span').show('->').tc('span');
                            to('span','class::function').show('post').tc('span');
                            to('span').show('(').tc('span');
                            to('span','class::string').show("'text'").tc('span');
                            to('span').show(');').tc('span').bl();

                            tab(8).to('span','class::function').show('echo').tc('span');
                            to('span','class::string').show(' \'Input value is: \'').tc('span');
                            to('span').show('.').tc('span');
                            to('span','class::variable').show('$value;').tc('span').bl(); 

                            tab(8).to('span','class::function').show('echo').tc('span');
                            show(' bl() .').to('span','class::string').show(' \'Data sent from ajax_request.js is: \'').tc('span');
                            to('span').show('.').tc('span');
                            to('span','class::variable').show('$data').tc('span'); 
                            to('span').show(';').tc('span').bl();
                        tab(4).to('span').show('}').tc('span').bl();
                        tab(4).to('span','class::else').show('else').tc('span').bl();
                        tab(4).to('span').show('{').tc('span').bl();
                            tab(8).to('span','class::comment').show('return false').tc('span').bl();

                            tab(8).to('span','class::function').show('echo').tc('span');
                            to('span','class::string').show(' \'Data sent from ajax_request.js is: \'').tc('span');
                            to('span').show('.').tc('span');
                            to('span','class::variable').show('$data').tc('span'); 
                            to('span').show(';').tc('span').bl();
                        tab(4).to('span').show('}').tc('span').bl();
                    show('}');
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
              
    to('p', 'class::welcome-text');
      show('Save inside your ').make('span', 'application/controllers', 'class::consolas*fun_name').show(' directory as ').make('span', 'blog.php', 'class::consolas*fun_name');
    tc('p');
    
    to('p', 'class::welcome-text id::update-controller');
        make('span','=/=/=/=/=/=/=/=/=/=/=/=','style::color:red;').bl().
        show('If you want to show a returned error message, echo the required input name that is empty in side a form validation.').bl().
        show('To accomplish this, we need to do a little change to it.').bl();
    tc('p');

    to('p', 'class::welcome-text');
        show('You need to do a little update to ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#update-return').
            show('ajx_return.js ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').show(' js file & ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#update-view').
            show('blog.php ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').show(' view as well.').
    tc('p');

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').
                  show('Updated form validation');
                tc('th');
            tc('tr');            

            to('tr');
                to('td','class::gfc colspan::2');
                    to('span','class::if').show('if').tc('span');
                    to('span').show(' (').tc('span');
                    to('span','class::keyword').show('$this').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::variable').show('form').tc('span');
                    to('span').show('->').tc('span');
                    to('span','class::function').show('validate').tc('span');
                    to('span').show('())').tc('span').bl();
                    to('span').show('{').tc('span').bl();
                        tab(4).to('span','class::comment').show('return true').tc('span').bl();
                        tab(4).to('span').show('$value').tc('span');
                        show(' = ').
                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('input').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('post').tc('span');
                        to('span').show('(').tc('span');
                        to('span','class::string').show("'text'").tc('span');
                        to('span').show(');').tc('span').bl();

                        tab(4).to('span','class::function').show('echo').tc('span');
                        to('span','class::string').show(' \'Input value is: \'').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::variable').show('$value;').tc('span').bl(); 

                        tab(4).to('span','class::function').show('echo').tc('span');
                        show(' bl() .').to('span','class::string').show(' \'Data sent from ajax_request.js is: \'').tc('span');
                        to('span').show('.').tc('span');
                        to('span','class::variable').show('$data').tc('span'); 
                        to('span').show(';').tc('span').bl();
                    to('span').show('}').tc('span').bl();
                    to('span','class::else').show('else').tc('span').bl();
                    to('span').show('{').tc('span').bl();
                        tab(4).to('span','class::comment').show('return false').tc('span').bl();

                        tab(4).to('span','class::function').show('echo ').tc('span');

                        to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('form').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('empty').tc('span');
                        to('span').show('();').tc('span').bl();
                    to('span').show('}').tc('span').bl();
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
              
    to('p', 'class::welcome-text');
        show('Update the file by saving it.');
    tc('p');

    bl();

    to('p', 'class::welcome-text*consolas style::font-weight:600;color:#2089a3;font-size:16px; id::view.php').show('5. Create blog.php (View)').tc('p');
              
    to('p', 'class::welcome-text');
      show('You are now set with all the js files and controller file.').bl();
      show('You can now create a view and import all three (3) js files inside head tag from within your ').make('span', 'blog.php', 'class::consolas*fun_name').show(' view file.');
    tc('p');

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').
                  show('blog.php (View) ');
                  to('a','class::link*docs*fun_name1 href::manual/english/libraries/html-generator').
                    show('HTML Generator ').
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('th');
            tc('tr');            

            to('tr');
              to('td','class::gfc colspan::2');
                to('span','class::keyword').show("<").tc('span');
                to('span','class::keyword').show("?").tc('span');
                to('span','class::keyword').show("php").tc('span').bl(2);

                to('span','class::function').show("DEFINED").tc('span');
                to('span').show("(").tc('span');
                to('span','class::string').show("'BASE_URL'").tc('span');
                to('span').show(")").tc('span');
                to('span').show(" OR").tc('span');
                to('span','class::exit').show(" EXIT").tc('span');
                to('span').show(" (").tc('span');
                to('span','class::function').show("header").tc('span');
                to('span').show("(").tc('span');
                to('span','class::string').show("'location: 403'").tc('span');
                to('span').show("));").tc('span').bl(2);

                to('span','class::function').show("doctype").tc('span');  
                to('span').show("();").tc('span').bl();

                to('span','class::function').show("to").tc('span');  
                to('span').show("(").tc('span'); 
                to('span','class::string').show("'html'").tc('span');
                to('span').show(");").tc('span').bl();

                tab(4).to('span','class::function').show("to").tc('span');  
                to('span').show("(").tc('span'); 
                to('span','class::string').show("'head'").tc('span');
                to('span').show(");").tc('span').bl();
                    tab(8).to('span','class::function').show("title").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'Ajax Experimentation'").tc('span');
                    to('span').show(");").tc('span').bl();

                    tab(8).to('span','class::function').show("base_url").tc('span');  
                    to('span').show("();").tc('span').bl(2);

                    tab(8).make('span','load ','class::comment').make('span', 'ajax();','class::fun_name').make('span',' before any of your js files. ','class::comment').bl();
                    tab(8).to('span','class::function').show("ajax").tc('span');  
                    to('span').show("();").tc('span').bl(2);

                    tab(8).make('span','load your js files. ','class::comment').bl();
                    tab(8).to('span','class::function').show("js").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'ajax_caller, ajax_request, ajax_return'").tc('span');
                    to('span').show(");").tc('span').bl(2);

                    tab(8).make('span','load ML notifier css files. ','class::comment').bl();
                    tab(8).to('span','class::function').show("ml_alert").tc('span');  
                    to('span').show("();").tc('span').bl();
                tab(4).to('span','class::function').show("tc").tc('span');  
                to('span').show("(").tc('span'); 
                to('span','class::string').show("'head'").tc('span');
                to('span').show(");").tc('span').bl(2);

                tab(4).to('span','class::function').show("to").tc('span');  
                to('span').show("(").tc('span'); 
                to('span','class::string').show("'body'").tc('span');
                to('span').show(");").tc('span').bl();
                    tab(8).make('span', 'If using multipart/form-data, you can put ','class::comment').make('span',"'fmp'",'class::string*fun_name').make('span',' instaed of ','class::comment').make('span',"'form'",'class::string*fun_name').make('span',' in your to(); function.','class::comment').bl();
                    tab(8).to('span','class::function').show("to").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'form'").tc('span');   
                    to('span').show(",").tc('span'); 
                    to('span','class::string').show("'class::myclass*mc id::myid'").tc('span'); 
                    to('span').show(");").tc('span').bl();

                    tab(12).to('span','class::function').show("tag").tc('span'); 
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'input', 'type::text name::text'").tc('span'); 
                    to('span').show(");").tc('span').bl();

                    tab(12).to('span','class::function').show("tag").tc('span'); 
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'input', 'type::submit value::Submit'").tc('span'); 
                    to('span').show(");").tc('span').bl();

                    tab(8).to('span','class::function').show("tc").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'form'").tc('span');   
                    to('span').show(");").tc('span').bl();
                tab(4).to('span','class::function').show("tc").tc('span');  
                to('span').show("(").tc('span'); 
                to('span','class::string').show("'body'").tc('span');
                to('span').show(");").tc('span').bl();

                to('span','class::function').show("tc").tc('span');  
                to('span').show("(").tc('span'); 
                to('span','class::string').show("'html'").tc('span');   
                to('span').show(");").tc('span').bl(2);
                to('span','class::keyword').show("?".">").tc('span');
              tc('td');
            tc('tr');
        tc('table');
    tc('div');
    
    to('p', 'class::welcome-text');
      show('Save inside your ').make('span', 'application/views','class::consolas*fun_name').show(' directory as ').to('span','class::consolas*fun_name','blog.php').tc('span');
    tc('p');
              
    to('p', 'class::welcome-text');
        show('Try running it, if the js does not work, try clearing the cache and cookies and try again.').bl();
        show('It should work and return ').make('span', '"Hallo world"','class::consolas*fun_name').show(' trough choosen MadeLine alert.');
    tc('p');

    bl();
    
    to('p', 'class::welcome-text id::update-view');
        make('span','=/=/=/=/=/=/=/=/=/=/=/=','style::color:red;').bl().
        show('If you want to show a returned error message, use error handler.').
        show(' To accomplish this, we need to add a DIV tag under input text in a form.').bl();
        show('Keep in mind that a new DIV tag has to have an id that is the same as the name of the input text. The new form should look as follows:');
    tc('p');

    to('p', 'class::welcome-text');
        show('You need to do a little update to ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#update-return').
            show('ajx_return.js ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').show(' js file & ').
        to('a','class::link*docs*fun_name*consolas href::manual/english/libraries/ajax-libraries#update-controller').
            show('blog.php ').
            to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
        tc('a').show(' controller as well.').
    tc('p');

    to('div', 'class::welcome-text');
        to('table', 'class::mc-const-table*dark*code_table');
            to('tr');
                to('th','class::ml-th colspan::2').
                  show('blog.php (View) ');
                  to('a','class::link*docs*fun_name1 href::manual/english/libraries/html-generator').
                    show('HTML Generator ').
                    to('span','class::glyphicon*glyphicon-link style::font-size:12px').tc();
                  tc('a');
                tc('th');
            tc('tr');            

            to('tr');
                to('td','class::gfc colspan::2');
                    to('span','class::function').show("to").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'form'").tc('span');   
                    to('span').show(",").tc('span'); 
                    to('span','class::string').show("'class::myclass*mc id::myid'").tc('span'); 
                    to('span').show(");").tc('span').bl();

                    tab(4).to('span','class::function').show("tag").tc('span'); 
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'input', 'type::text name::text'").tc('span'); 
                    to('span').show(");").tc('span').bl();

                    tab(4).to('span','class::function').show("to").tc('span'); 
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'div', 'id::text'").tc('span'); 
                    to('span').show(").").tc('span');
                    to('span','class::function').show("tc").tc('span');
                    to('span').show("(").tc('span');
                    to('span','class::string').show("'div'").tc('span').
                    to('span').show(");").tc('span').bl(); 

                    tab(4).to('span','class::function').show("tag").tc('span'); 
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'input', 'type::submit value::Submit'").tc('span'); 
                    to('span').show(");").tc('span').bl();

                    to('span','class::function').show("tc").tc('span');  
                    to('span').show("(").tc('span'); 
                    to('span','class::string').show("'form'").tc('span');   
                    to('span').show(");").tc('span').bl(); 
                tc('td');
            tc('tr');
        tc('table');
    tc('div');
    
    to('p', 'class::welcome-text');
      show('Update the file by saving it.');
    tc('p');
              
    to('p', 'class::welcome-text');
        show('Try running it, if the js does not work, try clearing the cache and cookies and try again.').bl();
        show('It should work and return the error message to your new DIV tag element');
    tc('p');
?>