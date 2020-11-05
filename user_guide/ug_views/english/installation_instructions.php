<?php

  DEFINED('BASE_URL') OR exit(header('location: 303'));

  doctype();
  to('html', 'lang::en');
    to('head');
      title('User Manual | Installation Instructions');
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
              to('a', 'class::link*docs href::manual/english').show('Manual &nbsp;').tc('a').arrow().show('&nbsp; Installation Instructions');
            tc('div');
            ul();            
            to('div', 'id::content-holder');
              to('h1','class::h1').show('Requirements').tc('h1');
              to('ol', 'class::manual-li*dfc');
                to('li').show('PHP >= 7').tc('li');
                to('li').show('Enabled mod_rewrite ').
                  //make('b','(Required)').
                tc('li');
              tc('ol');
              bl();            
              to('h1','class::h1').show('Installation Instructions').tc('h1');
              to('ol', 'class::manual-li*dfc');
                to('li').show('Unzip the package.').tc('li');

                to('li').show('Upload/put the ').make('b',"MadeLine folder").show(' into your server.').tc('li');

                to('li').
                  show('To set a database connection,');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs href::configuration/database').show(' Click Here').tc('a').show('.');
                  }
                  else
                  {
                    show('go to Database Configuration.');
                  }
                tc('li');
                
                to('li');
                  show('To change your default controller and method,');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs href::configuration/route').show(' Click Here').tc('a').show('.');
                  }
                  else
                  {
                    show('go to Route Configuration.');
                  }
                tc('li');
                
                to('li');
                  show('To add your API Key,');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs href::configuration/route').show(' Click Here').tc('a').show('.');
                  }
                  else
                  {
                    show('go to Route Configuration.');
                  }
                tc('li');
                
                to('li');
                  show('To change your system status,');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs href::configuration/route').show(' Click Here').tc('a').show('.');
                  }
                  else
                  {
                    show('go to Route Configuration.');
                  }
                tc('li');
                
                to('li');
                  show('To have more security, you can change your "application & system" direcitory name');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs href::configuration/directory').show(' By Clicking Here').tc('a').show('.');
                  }
                  else
                  {
                    show('to go to Directory Configuration.');
                  }
                tc('li');
                
                to('li');
                  show('To see other configurations,');
                  if(STATUS === 'development' && $this->get->user_ip() == $this->get->local_ip() || 
                  STATUS === 'live' && last_ori_uri === CONF_API)
                  {
                    to('a','class::link*docs href::configuration').show(' Click Here').tc('a').show('.');
                  }
                  else
                  {
                    show('go to Configuration.');
                  }
                tc('li');                
                to('li').show('You are set!').tc('li');                
                to('li').show('STAY TUNED & HAPPY EXPLORE :)').tc('li');
              tc('ol');
              bl().
              to('h1','class::h1').show('Fetching API from your application').tc('h1');
              to('ol', 'class::manual-li*dfc');
                to('li').
                  show('
                    When fetching an API, you have to set your API Key and your URL should at look like the following:
                    <br>'.BASE_URL.'your_api_key/your_controller/your_method
                  ').
                tc('li');
              tc('ol');
              bl();          
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
?>
