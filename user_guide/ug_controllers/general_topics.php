<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class general_topics extends ML_Controller {
        
        public function __construct() {
            
            parent::__construct();
            $this->my_library('user_guide','manual');                 
            
        }

        public function index() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri2 == 'english') {
                $this->view('english/general_topics/general_topics',$data);
            } else {
                $this->view('bahasa/general_topics',$data);
            }

        }

        public function madeline_uris() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/madeline_uris',$data);
                } else {
                    $this->view('bahasa/madeline_uris',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function using_madeline_libraries() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/using_madeline_libraries',$data);
                } else {
                    $this->view('bahasa/using_madeline_libraries',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function creating_libraries() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/creating_libraries',$data);
                } else {
                    $this->view('bahasa/creating_libraries',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function directory_path_constants() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/directory_path_constants',$data);
                } else {
                    $this->view('bahasa/directory_path_constants',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function madeline_constant() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/madeline_constant',$data);
                } else {
                    $this->view('bahasa/madeline_constant',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function using_madeline_error() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/using_madeline_error',$data);
                } else {
                    $this->view('bahasa/using_madeline_error',$data);
                }
            } else {
                $this->error('error');
            }

        }

        public function security() {

            if(!defined('uri5')) {
                $data['page']   = uri3;
                $data['url']    = uri;
                $data['manual'] = $this->user_guide; 
            
                if(uri2 == 'english') {
                    $this->view('english/general_topics/security',$data);
                } else {
                    $this->view('bahasa/security',$data);
                }
            } else {
                $this->error('error');
            }

        }

    }

?>
