<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class English extends ML_Controller {
        
        public function __construct() {
            
            parent::__construct();
            $this->my_library('user_guide','manual');                 
            
        }

        public function index() {

            $data['page']   = 'manual';
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 

            if(uri1 == 'manual') {
                $this->view('english/manual',$data);
            } else { 
                $this->error('error', '404');   
            }

        }

        public function welcome_to_madeline_framework() {

            $data['page']   = 'welcome_to_madeline_framework';
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 

            if(uri1 == 'manual') {
                $this->view('english/welcome_to_madeline_framework',$data);
            } else { 
                $this->error('error', '404');   
            }

        }

        public function installation_instructions() {

            $data['page']   = 'installation_instructions';
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 

            if(uri1 == 'manual') {
                $this->view('english/installation_instructions',$data);
            } else { 
                $this->error('error', '404');   
            }

        }

        public function libraries() {
            
            if(uri1 == 'manual') {
                $this->controller('libraries','manual');

                if(!defined('uri4')) {
                    $this->libraries->index();
                } else {  
                    if (method_exists($this->libraries, uri4)) {           
                        $this->libraries->{uri4}();                            
                    } else {                          
                        $this->error('error', '404');                           
                    }
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function general_topics() {
            
            if(uri1 == 'manual') {                
                $this->controller('general_topics','manual');
                
                if (defined('uri4')) {
                    if (method_exists($this->general_topics, uri4)) {           
                        $this->general_topics->{uri4}();                            
                    } else {                           
                        $this->error('error', '404');                          
                    }
                } else {
                    $this->general_topics->index();     
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function configurations() {
            
            if(uri1 == 'manual') {                
                $this->controller('configurations','manual');
                
                if (defined('uri4')) {
                    if (method_exists($this->configurations, uri4)) {           
                        $this->configurations->{uri4}();                            
                    } else {                           
                        $this->error('error', '404');                          
                    }
                } else {
                    $this->configurations->index();     
                }
            } else {
                $this->error('error', '404');
            }
        }

        public function madeline_cmv() {
            
            if(uri1 == 'manual') {                
                $this->controller('madeline_cmv','manual');
                
                if (defined('uri4')) {
                    if (method_exists($this->madeline_cmv, uri4)) {           
                        $this->madeline_cmv->{uri4}();                            
                    } else {                           
                        $this->error('error', '404');                          
                    }
                } else {
                    $this->madeline_cmv->index();
                }
            } else {
                $this->error('error', '404');
            }
        }
    }
?>