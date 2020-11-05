<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class Madeline_Cmv extends ML_Controller {
        
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
                    $this->view('english/mvc/madeline_mvc',$data);
                } else {
                    $this->view('bahasa/madeline_mvc',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function controllers() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/mvc/controllers',$data);
                } else {
                    $this->view('bahasa/controllers',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function models() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/mvc/models',$data);
                } else {
                    $this->view('bahasa/models',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function views() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/mvc/views',$data);
                } else {
                    $this->view('bahasa/views',$data);
                }
            } else {
                $this->error('error');
            }

        }
    }

?>
