<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html', 'lang::en');
    to('head');
      title('User Manual | Welcome to MadeLine Framework');
      responsive_meta();
      base_url();

      system_css('reset');
      system_css('font');
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
              to('a', 'class::link*docs href::manual/english').show('Manual &nbsp;').tc('a').arrow().show('&nbsp; Welcome To MadeLine Framewok');
            tc('div');
            ul();            
            to('div', 'id::content-holder');          
              to('h1', 'class::h1').show('Welcome To MadeLine Framework').tc('h1');
              to('p', 'class::welcome-text');
                show('MadeLine Framework is a University final project, purposely designed
                      for people who love AJAX technology. MadeLine is a Basic PHP-Ajax Web Application Development Framework for 
                      people who build web sites using PHP and AJAX technology. The goal is to help Computer 
                      Science Students in developing a simple Web Site much 
                      faster than writing the whole code from scratch, 
                      by providing basic set of libraries for commonly needed tasks, 
                      as well as an HTML Generator to help students write HTML code using 
                      PHP Functions that will be transformed into associated HTML tags. 
                      MadeLine creates your own line of creatively when developing your own website.');
              tc('p');
              bl();
              to('h1', 'class::h1').show('Who is MadeLine Framework For?').tc('h1');
              to('p', 'class::welcome-text');
                show('MadeLine Framework is right for you if :');
              tc('p');
              to('ol', 'class::manual-li*dfc');
                to('li').show('You want a framework that requires nearly zero configuration with ').make('b',"Grahical User Interface Configuration.").tc('li');
                // to('li').show('You want a framework that does not need you to set your ').make('b',"base URL.").tc('li');
                to('li').show('You want a framework that does not need a library to get ').make('b',"URI segment(s).").tc('li');
                to('li').show('You want a framework that transforms ').make('b',"PHP code into HTML <tag>.").tc('li');
                to('li').show('You want a framework that implements ').make('b',"AJAX Technology.").tc('li');
                // to('li').show('You need clear, thorough ').make('b',"documentation.").tc('li');
              tc('ol');          
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
