<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class Configurations extends ML_Controller {
        
        public function __construct() {
            
            parent::__construct();
            $this->my_library('user_guide','manual');                 
            
        }

        public function index() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/madeline_configuration',$data);
                } else {
                    $this->view('bahasa/madeline_configuration',$data);
                }
            } else {
                $this->error('error');
            }

        }
    }

?>
