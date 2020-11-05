<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class Libraries extends ML_Controller {
        
        public function __construct() {
            
            parent::__construct();
            $this->my_library('user_guide','manual');                 
            
        }

        public function index() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/libraries',$data);
                } else {
                    $this->view('bahasa/libraries',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function ajax() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/ajax',$data);
                } else {
                    $this->view('bahasa/ajax',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function cookies() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/cookies',$data);
                } else {
                    $this->view('bahasa/cookies',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function form() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/form',$data);
                } else {
                    $this->view('bahasa/form',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function html_generator() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/html_generator',$data);
                } else {
                    $this->view('bahasa/html_generator',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function input() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/input',$data);
                } else {
                    $this->view('bahasa/input',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function query_liner() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/query_liner',$data);
                } else {
                    $this->view('bahasa/query_liner',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function pagination() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/pagination',$data);
                } else {
                    $this->view('bahasa/pagination',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function session() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/session',$data);
                } else {
                    $this->view('bahasa/session',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }

        public function file() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/file',$data);
                } else {
                    $this->view('bahasa/file',$data);
                }
            } else {
                $this->error('error', '404');
            }
        }

        public function xsrf() {

            $data['page']   = uri3;
            $data['url']    = uri;
            $data['manual'] = $this->user_guide; 
            
            if(uri1 == 'manual') {
                if(uri2 == 'english') {
                    $this->view('english/libraries/xsrf',$data);
                } else {
                    $this->view('bahasa/xsrf',$data);
                }
            } else {
                $this->error('error', '404');
            }

        }
    }
?>
