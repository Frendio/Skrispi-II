<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | MadeLine CMV | Views');
      responsive_meta();
      base_url();

      system_css('reset');
      system_css('font');
      bootstrap_icon();
      system_css('madeline');
      system_css('manual-ls');
      bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');
    tc('head');

    to('body', 'role::content');
      to('div', 'class::inner-body');
        INCLUDE USER_GUIDE_PATH.'ug_views/navigation/left-menu.php';

        to('div', 'class::mm-menu*show-mmm');
          tag('img', 'sbc::'.BASE_URL.'system_config/ML_Assets/icons/menu.png');
        tc('div');

        to('div', 'class::rsb-heading*hide');
          to('a', 'href::');
            tag('img','class::manual-mi src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
            to('div', 'class::rsm-heading');
              to('div', 'class::manual-lfn style::letter-spacing:1.7px').
                  to('span', 'style::color:#006d88').show('Made').tc('span').
                  to('span').show('Line').tc('span').
              tc('div');
              to('div', 'class::manual-lfn*bot-manual-lfn').show('PHP - Ajax Framewok').tc('div');
            tc('div');
          tc('a');
        tc('div');

        to('section', 'class::wy-nav-content-wrap');
          to('div', 'class::wy-nav-content');
            to('div' ,'class::head-nav role::navigation');
              to('a', 'class::link*docs href::manual/english').show('Manual &nbsp;').tc('a').arrow();
              to('a', 'class::link*docs href::manual/english/madeline-cmv').show('&nbsp; MadeLine CMV &nbsp;').tc('a').arrow().show('&nbsp; Views');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');            
              to('h1','class::h1').show('Views').tc('h1');
              to('p', 'class::welcome-text');
                show('A view is simply a web page, or a page fragment, like a header, footer, sidebar, and etc.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Views are never called directly, they must be loaded by a ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers').show('controller').tc('a');
                show(' Remember that in an CMV framework, the Controller acts as the traffic cop,
                        so it is responsible for fetching a particular view.
                        If you have not read the ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers').show('controller').tc('a');
                show(' page you should do so before continuing.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Using the example ');
                to('a','class::link*docs*consolas*fun_name href::manual/english/madeline-cmv/controllers#hello-world').to("span").show("controller").tc("span").tc('a');
                show(' you created in the controller page,
                        let’s add a view to it.');
              tc('p');
              
              bl();
              
              to('h2').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Creating a View').
              tc('h2');
              to('p', 'class::welcome-text');
                show('Using your text editor, create a file called blog.php, and put this in it :');
              tc('p');
              
              // to('div', 'class::notifier*gbc-notifier');
              //   to('div', 'class::head-notifier*bbc-notifier').show('NOTE!').tc('div');
              //   to('div', 'class::body-notifier*gbc-notifier');
              //     show('You do not need open/close html tag and doctype, MadeLine does the job for you.');
              //   tc('div');
              // tc('div');
              
              to('div', 'class::highlight');              
                to('pre');
                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("?").tc('span');
                  to('span','class::keyword').show("php").tc('span');

                  to('span','class::function').show(" DEFINED").tc('span');
                  to('span').show("(").tc('span');
                  to('span','class::string').show("'BASE_URL'").tc('span');
                  to('span').show(")").tc('span');
                  to('span').show(" OR ").tc('span');
                  to('span','class::exit').show(" EXIT").tc('span');
                  to('span').show(" (").tc('span');
                  to('span','class::function').show("header").tc('span');
                  to('span').show("(").tc('span');
                  to('span','class::string').show("'location: 403'").tc('span');
                  to('span').show("));").tc('span').bl(2);

                  to('span','class::keyword').show(" ?".">").tc('span').bl(2);

                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("head").tc('span');
                  to('span','class::keyword').show(">").tc('span').bl();
                    to('span','class::keyword').tab(4).show("<").tc('span');
                    to('span','class::keyword').show("title").tc('span');
                    to('span','class::keyword').show(">").tc('span');
                      to('span').show("My Blog").tc('span');
                    to('span','class::keyword').show("<").tc('span');
                    to('span','class::keyword').show("/title").tc('span');
                    to('span','class::keyword').show(">").tc('span').bl();
                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("/head").tc('span');
                  to('span','class::keyword').show(">").tc('span').bl(2);

                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("body").tc('span');
                  to('span','class::keyword').show(">").tc('span').bl();
                    to('span','class::keyword').tab(4).show("<").tc('span');
                    to('span','class::keyword').show("h1").tc('span');
                    to('span','class::keyword').show(">").tc('span');
                      to('span').show("Welcome to my blog!").tc('span');
                    to('span','class::keyword').show("<").tc('span');
                    to('span','class::keyword').show("/h1").tc('span');
                    to('span','class::keyword').show(">").tc('span').bl();
                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("/body").tc('span');
                  to('span','class::keyword').show(">").tc('span');
                  
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Then save the file in you '.make('span','application/views','class::consolas*fun_name',0).' directory as '.make('span','blog.php','class::consolas*fun_name',0));
              tc('p');
              
              bl();
              
              to('h2').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Loading a View').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('To load a particular view file you will use the following method :');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');    
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('view').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'blog'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Where blog is the name of your view file.').bl().
                show('Now, open the controller file you made earlier called Blog.php, and replace the echo statement with the view loading method :');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
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
                  
                  to('span','class::keyword').show('class').tc('span');
                  to('span','class::class').show(' Blog').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span','class::class').show(' ML_Controller').tc('span');
                  to('span').show(' {').tc('span').bl(2);
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span');
                    to('span').show(' {').tc('span').bl();     
                      to('span','class::keyword').tab(8).show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('view').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'blog'").tc('span');
                      to('span').show(');').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl(2);                 
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('To visit your site using the URL you did earlier you should see your new view. The URL was similar to this:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  show('MadeLine/blog','class::bc');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h2','id::class-constructor').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Storing Views within Sub-directories').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Your view files can also be stored within sub-directories, BUT only one level.
                        <br>If you prefer that type of organization. When doing so you do not need
                        to include the directory name when loading the view. Example:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('view').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'blog'").tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              to('h2','id::class-constructor').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Adding Dynamic Data to View').
              tc('h2');
              
              to('p', 'class::welcome-text');
                show('Data is passed from the controller to view by way of an array or an object
                        in the second parameter of the view loading method. Here is an example using an array:');
              tc('p');
              
              to('p', 'class::welcome-text');
                show(make('b,i','Example 1:'));
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::variable').show('$data').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'title'").tc('span');
                  to('span').show(']').tc('span');
                  to('span').tab(2).show(' = ').tc('span');
                  to('span','class::string').show("'My Title';").tc('span').bl();

                  to('span','class::variable').show('$data').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'heading'").tc('span');
                  to('span').show(']').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::string').show("'My Heading';").tc('span').bl();

                  to('span','class::variable').show('$data').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'message'").tc('span');
                  to('span').show(']').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::string').show("'My Message';").tc('span').bl(2);

                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('view').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'blog'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::variable').show('$data').tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show(make('b,i','Example 2:'));
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::variable').show('$data').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::keyword').show('array').tc('span');
                  to('span').show("(").tc('span');

                  to('span','class::string').show("'title'").tc('span');
                  to('span').tab(2).show(' => ').tc('span');
                  to('span','class::string').show("'My Title'").tc('span');
                  to('span').show(",").tc('span').bl();

                  to('span','class::string').tab(14).show("'heading'").tc('span');
                  to('span').show(' => ').tc('span');
                  to('span','class::string').show("'My Heading'").tc('span');
                  to('span').show(",").tc('span').bl();

                  to('span','class::string').tab(14).show("'message'").tc('span');
                  to('span').show(' => ').tc('span');
                  to('span','class::string').show("'My Message'").tc('span');
                  to('span').show(');').tc('span').bl(2);

                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('view').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'blog'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::variable').show('$data').tc('span');
                  to('span').show(');').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('And here’s an example using a class object:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  to('span','class::comment').show('1. load the class type (model,my_library or library)').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('library').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'library_name'").tc('span');
                  to('span').show(');').tc('span').bl(2);

                  to('span','class::comment').show('2. assign to a variable').tc('span').bl();
                  to('span','class::variable').show('$data').tc('span');
                  to('span').show('[').tc('span');
                  to('span','class::string').show("'library'").tc('span');
                  to('span').show(']').tc('span');
                  to('span').show(' = ').tc('span');
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('library_name').tc('span');
                  to('span').show(';').tc('span').bl(2);

                  to('span','class::comment').show('3. load the view file with ').to('span','class::consolas*fun_name','$data').tc('span').show(' variable').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::function').show('view').tc('span');
                  to('span').show('(').tc('span');
                  to('span','class::string').show("'blog'").tc('span');
                  to('span').show(', ').tc('span');
                  to('span','class::variable').show('$data').tc('span');
                  to('span').show(');').tc('span').bl(2);

                  to('span','class::comment').show('4. call the new object in your view as follows:').tc('span').bl();
                  to('span','class::keyword').show('$this').tc('span');
                  to('span').show('->').tc('span');
                  to('span','class::variable').show('library_name').tc('span');
                  to('span').show(';').tc('span').bl();
                  to('span','class::comment').show('-- OR --').tc('span').bl();
                  to('span','class::keyword').show('$library').tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Let’s try it with your controller file. Open it add this code:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
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
                  
                  to('span','class::keyword').show('class').tc('span');
                  to('span','class::class').show(' Blog').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span','class::class').show(' ML_Controller').tc('span');
                  to('span').show(' {').tc('span').bl(2);
                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span');
                    to('span').show(' {').tc('span').bl();   
                      to('span','class::variable').tab(8).show('$data').tc('span');
                      to('span').show('[').tc('span');
                      to('span','class::string').show("'title'").tc('span');
                      to('span').show(']').tc('span');
                      to('span').tab(2).show(' = ').tc('span');
                      to('span','class::string').show("'My Title';").tc('span').bl();
      
                      to('span','class::variable').tab(8).show('$data').tc('span');
                      to('span').show('[').tc('span');
                      to('span','class::string').show("'heading'").tc('span');
                      to('span').show(']').tc('span');
                      to('span').show(' = ').tc('span');
                      to('span','class::string').show("'My Heading';").tc('span').bl();
      
                      to('span','class::variable').tab(8).show('$data').tc('span');
                      to('span').show('[').tc('span');
                      to('span','class::string').show("'message'").tc('span');
                      to('span').show(']').tc('span');
                      to('span').show(' = ').tc('span');
                      to('span','class::string').show("'My Message';").tc('span').bl(2);
      
                      to('span','class::keyword').tab(8).show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('view').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'blog'").tc('span');
                      to('span').show(', ').tc('span');
                      to('span','class::variable').show('$data').tc('span');
                      to('span').show(');').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl(2);                 
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Now open your view file and change the text to variables that correspond to the array keys in your variable ').to('span','class::consolas*fun_name','$data').tc('span').show(' from your controller:');
              tc('p');
              
              to('div', 'class::highlight');              
                to('pre');
                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("head").tc('span');
                  to('span','class::keyword').show(">").tc('span').bl();
                    to('span','class::keyword').tab(4).show("<").tc('span');
                    to('span','class::keyword').show("title").tc('span');
                    to('span','class::keyword').show(">").tc('span');
                      to('span','class::keyword').show(" <").tc('span');
                      to('span','class::keyword').show("?").tc('span');
                      to('span','class::keyword').show("php").tc('span');
                      to('span','class::function').show(" echo").tc('span');
                      to('span','class::variable').show(' $title').tc('span');
                      to('span').show(';').tc('span');
                      to('span','class::keyword').show(" ?".">").tc('span');
                    to('span','class::keyword').show(" <").tc('span');
                    to('span','class::keyword').show("/title").tc('span');
                    to('span','class::keyword').show(">").tc('span').bl();
                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("/head").tc('span');
                  to('span','class::keyword').show(">").tc('span').bl(2);

                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("body").tc('span');
                  to('span','class::keyword').show(">").tc('span').bl();
                    to('span','class::keyword').tab(4).show("<").tc('span');
                    to('span','class::keyword').show("h1").tc('span');
                    to('span','class::keyword').show(">").tc('span');
                      to('span','class::keyword').show(" <").tc('span');
                      to('span','class::keyword').show("?").tc('span');
                      to('span','class::keyword').show("php").tc('span');
                      to('span','class::function').show(" echo").tc('span');
                      to('span','class::variable').show(' $heading').tc('span');
                      to('span').show(';').tc('span');
                      to('span','class::keyword').show(" ?".">").tc('span');
                    to('span','class::keyword').show(" <").tc('span');
                    to('span','class::keyword').show("/h1").tc('span');
                    to('span','class::keyword').show(">").tc('span').bl();

                    to('span','class::keyword').tab(4).show("<").tc('span');
                    to('span','class::keyword').show("p").tc('span');
                    to('span','class::keyword').show(">").tc('span');
                      to('span','class::keyword').show(" <").tc('span');
                      to('span','class::keyword').show("?").tc('span');
                      to('span','class::keyword').show("php").tc('span');
                      to('span','class::function').show(" echo").tc('span');
                      to('span','class::variable').show(' $message').tc('span');
                      to('span').show(';').tc('span');
                      to('span','class::keyword').show(" ?".">").tc('span');
                    to('span','class::keyword').show(" <").tc('span');
                    to('span','class::keyword').show("/p").tc('span');
                    to('span','class::keyword').show(">").tc('span').bl();
                  to('span','class::keyword').show("<").tc('span');
                  to('span','class::keyword').show("/body").tc('span');
                  to('span','class::keyword').show(">").tc('span');                
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');
              
              to('p', 'class::welcome-text');
                show('That is all you need to know about views.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/madeline-mvc/models');
                to('button','class::pn-button').
                    make('span','','class::glyphicon*glyphicon-circle-arrow-left style::font-size:13px').
                    show(' Previous').
                  tc('button');
              tc('a');
            
            ul();

            INCLUDE ML_CONFIG_PATH.'navigation/footer.php';
          tc('div');
        tc('section');
      tc('div');

      ajax();
      system_js('ajax_function');
      system_js('ajax_return');      
    tc('body');
  tc('html');
?>