<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class manual extends ML_Controller {
        
        public function __construct() {
            
            parent::__construct();
            $this->my_library('user_guide','manual');                 
            
        }

        public function english() {
                
            $this->controller(uri2,'manual');
            
            if (defined('uri3')) {
                if (method_exists($this->english, uri3)) {           
                    $this->english->{uri3}();                            
                } else {                         
                    $this->error('error', '404');                            
                }
            } else {
                $this->english->index();     
            }

        }

        public function bahasa() {
                
            $this->controller(uri2,'manual');
            
            if (defined('uri3')) {
                if (method_exists($this->bahasa, uri3)) {           
                    $this->bahasa->{uri3}();                            
                } else {                          
                    $this->error('error', '404');                          
                }
            } else {
                $this->bahasa->index();     
            }

        }

        public function developer_profile() {

            $data['page']   = uri2;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            $this->view('developer_profile',$data);

        }

    }

?>
