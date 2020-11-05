<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html');
    to('head');
      title('User Manual | MadeLine CMV | Controllers');
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
          tag('img', 'src::'.BASE_URL.'system_config/ML_Assets/icons/menu.png');
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
              to('a', 'class::link*docs href::manual/english/madeline-cmv').show('&nbsp; MadeLine CMV &nbsp;').tc('a').arrow().show('&nbsp; Controller');
            tc('div');

            ul();
            
            to('div', 'id::content-holder');          
              to('h1','class::h1').show('Controller').tc('h1');
              to('p', 'class::welcome-text');
                show('Controller is the heart of your application, as it determines how HTTP requests should be handled.');
              tc('p');
              
              to('ol', 'class::manual-li*ffn');
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#what-is-a-controller');
                    show('What is a Controller');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#hello-world');
                    show('Take a look at : Hello World');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#methods');
                    show('Methods');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#set-default-controller');
                    show('Set a Default Controller');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#load-up-a-controller');
                    show('Load Controller inside a Controller');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#manage-controllers');
                    show('Manage Controllers into Sub Directories');
                  tc('a');
                tc('li');
                
                to('li');
                  to('a', 'class::link*docs href::manual/english/madeline-cmv/controllers#class-constructor');
                    show('Class Constructor');
                  tc('a');
                tc('li');
              tc('ol');
              
              bl();
              
              to('h2','id::what-is-a-controller').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('What is a Controller').
              tc('h2');
              to('p', 'class::welcome-text');
                show('A Controller is simply a class file that is named in a way that can be associated with a ');
                to('span','class::fun_name*consolas').show('uri').tc('span').bl().
                show('Take this ');
                to('span','class::fun_name*consolas').show('uri').tc('span');
                show(' as an example :');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  show('MadeLine/blog');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('In the above example, MadeLine would attempt to find a controller named Blog.php and load it.').bl().
                show('The controller will be loaded if a controller’s name matches the first segment of a ');
                to('span','class::fun_name*consolas').show('uri').tc('span');
              tc('p');
              
              bl();
              
              to('h2','id::hello-world').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Take a look at : Hello World').
              tc('h2');         
              
              to('p', 'class::welcome-text');
                show('Let’s create a simple controller so you can see it in action.
                      Using your text editor, create a file calledblog.php, and put the following code in it:').bl();
                show('For a controller\'s class name, you can save can make all ');
                make('span','"lowercase"','class::fun_name*consolas');
                show(' or first latter is ');
                make('span','"uppercase"','class::fun_name*consolas');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('For example:').bl();
                show('The following controller class name is ');
                make('span','Blog','class::fun_name*consolas');
                show(', but it works with ');
                make('span','blog','class::fun_name*consolas');
                show(' as well.');
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
                  to('span','class::variable').show(' Blog').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span','class::variable').show(' ML_Controller').tc('span').bl();
                  show('{').bl();
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').tc('span').bl();             
                      to('span','class::function').tab(8).show('echo').tc('span');
                      to('span','class::string').show(' \'Hello World\'').tc('span');
                      to('span').show(';').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl();                 
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Then save the file into your application/controllers directory as ');
                make('span','blog.php','class::consolas*fun_name');
              tc('p');
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*rbc-notifier').
                make('span','','class::glyphicon*glyphicon-info-sign style::font-size:14px').show(' Important').tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                  show('Save the file in lower case latter like the top example ').
                  make('span','blog.php','class::consolas*fun_name1').bl();
                  show('Always make sure your controller extends the parent controller ');
                  make('span','ML_Controller','class::consolas*fun_name1');
                  show(' class so that it can inherit all its methods.');
                tc('div');
              tc('div');
              
              bl();
              
              to('h2','id::methods').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Methods').
              tc('h2');            
              to('p', 'class::welcome-text');
                show('In the above example the method name is index().
                        The “index” method is always loaded by default (if default method in ');
                if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || STATUS === 'live' && last_ori_uri === CONF_API)
                {
                  to('a', 'class::link*docs href::configuration/route').show('Route Configuration ').tc('a');
                }
                else
                {
                  show('Route Configuration ');
                }
                show('is set to "index") if the second segment of the uri is empty.
                        Another way to show your “Hello World” message would be this:');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  show('MadeLine/blog/index');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('The second segment of the uri determines which method in the controller gets called.').bl().
                show('Let’s try adding a new method to the controller called ');
                make('span','hello','class::consolas*fun_name');
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
                  to('span').show(' Blog').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  to('span').show(' ML_Controller').tc('span').bl();
                  show('{').bl();
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').tc('span').bl();             
                      to('span','class::function').tab(8).show('echo').tc('span');
                      to('span','class::string').show(' \'Hello World\'').tc('span');
                      to('span').show(';').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl(2);  
                    
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' hello').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').tc('span').bl();             
                      to('span','class::function').tab(8).show('echo').tc('span');
                      to('span','class::string').show(' \'Hello\'').tc('span');
                      to('span').show(';').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl();                 
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Now load the following URL to see the hello method :');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  show('MadeLine/blog/hello','class::bc');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('You should see your new message.');
              tc('p');
              
              bl();
              
              to('h2','id::set-default-controller').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Setting Up a Default Controller').
              tc('h2');    
              to('p', 'class::welcome-text');
                show('MadeLine can be told to load a default controller when a uri is not present,
                        as will be the case when only your site root URL is requested. To specify a default controller,
                        go to ');
                if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || STATUS === 'live' && last_ori_uri === CONF_API)
                {
                  to('a', 'class::link*docs href::configuration/route').show('Route Configuration ').tc('a');
                }
                else
                {
                  show('Route Configuration ');
                }
              tc('p');
              
              bl();
              
              to('h2','id::load-up-a-controller').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Load Controller inside a Controller').
              tc('h2');    
              to('p', 'class::welcome-text');
                show('To help you with the use of long URLs, MadeLine gives the ability to load a controller
                        inside of another controller.').bl().
                show('Check bellow example :');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  show('MadeLine/blog/hello/word','class::bc');
                tc('pre');
              tc('div');

              to('p', 'class::welcome-text');
                show('Where:');
              tc('p');
              
              to('ol', 'class::manual-li*dfc');
                to('li').make('span','blog','class::fun_name').show(' is a controller = ').make('span','uri1','class::fun_name').tc('li');
                to('li').make('span','hello','class::fun_name').show(' is a method in blog controller and can be a controller as well = ').make('span','uri2','class::fun_name').tc('li');
                to('li').make('span','world','class::fun_name').show(' is method in hello controller = ').make('span','uri3','class::fun_name').tc('li');
              tc('ol');
              
              to('p', 'class::welcome-text');
                show('To achieve the above HTTP Request, look at the following example:').bl().
                show(make('b,i','Controller : blog.php'));
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
                  show(' Blog');
                  to('span','class::keyword').show(' extends').tc('span');
                  show(' ML_Controller').bl();
                  show('{').bl();
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').tc('span').bl();             
                      tab(8).to('span','class::function').show('echo').tc('span');
                      to('span','class::string').show(' \'Blog Index\'').tc('span');
                      to('span').show(';').tc('span').bl();
                      tab(4).to('span').show('}').tc('span').bl(2);  
                    
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' hello').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).to('span').show('{').tc('span').bl();             
                      tab(8).to('span','class::keyword').show('$this').tc('span');
                      to('span').show('->').tc('span');
                      to('span','class::function').show('controller').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::string').show("'hello'").tc('span');
                      to('span').show(');').tc('span').bl(2);

                      tab(8).to('span','class::if').show('if').tc('span');
                      to('span').show(' (').tc('span');
                      to('span','class::function').show('empty').tc('span');
                      to('span').show('(').tc('span');
                      to('span','class::variable').show('uri3))').tc('span').bl();
                      tab(8).to('span').show('{').tc('span').bl();
                        tab(12).to('span','class::comment').show('// load method "index" if you have "index" method in hello controller. ').tc('span').
                        to('span','class::comment').show('Otherwhise, else condition fits your needs').tc('span').bl();

                        tab(12).to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('hello').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('index').tc('span');
                        to('span').show('();').tc('span').bl();
                      tab(8).to('span').show('}').tc('span').bl();
                      tab(8).to('span','class::else').show('else').tc('span').bl();
                      tab(8).to('span').show('{').tc('span').bl();
                        tab(12).to('span','class::comment').show('// if you specify the method name').tc('span').bl();

                        tab(12).to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('hello').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::function').show('world').tc('span');
                        to('span').show('();').tc('span').bl(2);

                        tab(12).to('span','class::comment').show('// if the method name is based on uri segment. ').tc('span').
                        to('span','class::comment').show('in this case uri segment uri3 = "world", is your method name').tc('span').bl();

                        tab(12).to('span','class::keyword').show('$this').tc('span');
                        to('span').show('->').tc('span');
                        to('span','class::variable').show('hello').tc('span');
                        to('span').show('->{').tc('span');
                        to('span','class::variable').show('uri3}();').tc('span').bl();

                        tab(8).to('span').show('}').tc('span').bl();
                      tab(4).to('span').show('}').tc('span').bl();                 
                  to('span').show('}').tc('span').bl(2); 
                  
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Check ').
                to('a', 'class::link*docs*fun_name*consolas href::manual/english/general-topics/madeline-uris').
                  show('MadeLine URIs ').
                  to('span','class::glyphicon*glyphicon-link style::font-size:13px').tc();
                tc('a');
                show(' to see how to get uri segments. <br>For example: ').
                to('span', 'class::fun_name*consolas','uri3').bl().
              tc('p');
              
              to('p', 'class::welcome-text');
                show(make('b,i','Controller : hello.php'));
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
                  show(' Hello').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  show(' ML_Controller').tc('span').bl();
                  show('{').bl();
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' index').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').bl();             
                      tab(8).to('span','class::function').show('echo').tc('span');
                      to('span','class::string').show(' \'Hello Index\'').tc('span');
                      to('span').show(';').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl(2);      

                    to('span','class::keyword').space(4).show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' world').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').bl();             
                      to('span','class::function').tab(8).show('echo').tc('span');
                      to('span','class::string').show(' \'Hello world\'').tc('span');
                      to('span').show(';').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl();                  
                to('span').show('}').tc('span').bl(2); 
                
                to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('Try the following URL and you should see "Hello world" should be printed.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');
                  show('MadeLine/blog/hello/world','class::bc');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h2','id::manage-controllers').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Manage Controllers into Sub Directories').
              tc('h2');    
              to('p', 'class::welcome-text');
                show('If you are building a large application you might want to hierarchically
                        organize or structure your controllers into sub-directories. 
                        <br>MadeLine permits you to do this, <b class="consolas fun_name">but only one level sub directory</b>.
                        <br>If you have more than <b class="consolas fun_name">one level sub directory</b>, you need to include its directory path when calling the controller.');
              tc('p');
              
              to('p', 'class::welcome-text');
                show('Simply create sub-directories under the main '.make('span','application/controllers','class::consolas*fun_name',0).' and place your controller files within them.');
              tc('p');
              
              to('div', 'class::notifier*gbc-notifier');
                to('div', 'class::head-notifier*bbc-notifier').
                  make('span','','class::glyphicon*glyphicon-info-sign style::font-size:14px').
                  show(' Note').
                tc('div');
                to('div', 'class::body-notifier*gbc-notifier');
                show('There is no change in calling your controller from different sub directories, 
                      unless you have more than one level sub directories in your controllers directory, 
                      then you can add the directory path');
                tc('div');
              tc('div');
              
              bl();
              
              to('h2','id::class-constructor').
                make('span','','class::glyphicon*glyphicon-console*ccode').
                show('Class Constructor').
              tc('h2');
              to('p', 'class::welcome-text');
                show('If you intend to use a constructor in any of your controllers, you <b>Have To</b> place the following line of code in it.');
              tc('p');
              
              to('div', 'class::highlight');
                to('pre');      
                  to('span','class::keyword').show('parent').tc('span');
                  to('span').show('::').tc('span');
                  to('span','class::function').show('__construct').tc('span');
                  to('span').show('();').tc('span').bl();
                tc('pre');
              tc('div');
              
              to('p', 'class::welcome-text');
                show('The reason this line is necessary because your local constructor will be
                        overriding the one in the parent controller class so we need to manually call it.');
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
                  show(' Blog').tc('span');
                  to('span','class::keyword').show(' extends').tc('span');
                  show(' ML_Controller').tc('span').bl();
                  show('{').bl();
                    tab(4).to('span','class::keyword').show('public').tc('span');
                    to('span','class::keyword').show(' function').tc('span');
                    to('span','class::function').show(' __construct').tc('span'); 
                    to('span').show('()').tc('span').bl();
                    tab(4).show('{').bl();             
                      to('span','class::keyword').tab(8).show('parent').tc('span');
                      to('span').show('::').tc('span');
                      to('span','class::function').show('__construct').tc('span');
                      to('span').show('();').tc('span').bl();
                    to('span').tab(4).show('}').tc('span').bl();          
                  to('span').show('}').tc('span').bl(2); 
                    
                  to('span','class::keyword').show("?".">").tc('span');
                tc('pre');
              tc('div');
              
              bl();
              
              to('h1','class::h1-footer').show("Thats's it!").tc('h1');            
              to('p', 'class::welcome-text');
                show('That is all you need to know about controllers.');
              tc('p');
              
              bl();
              
              to('a', 'class::link href::manual/english/madeline-cmv/models');
                to('button','class::pn-button').
                  show('Next ').
                  make('span','','class::glyphicon*glyphicon-circle-arrow-right style::font-size:13px').
                tc('button');
              tc('a'); 
            
            tc('div');          
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