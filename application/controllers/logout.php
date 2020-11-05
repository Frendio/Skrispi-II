<?php

    DEFINED('BASE_URL') OR exit(header('location:403'));
    
    class Logout extends ML_Controller
    {
        public function index()
        {
            # load session library
            $this->library('session');

            // if(defined('uri2') && $this->session->xsrf_data() == uri2)
            // {
            //     $this->session->logout('un_auth, ul_auth','login');
            // }
            // else
            // {
            //     $this->user_error('Your session has expired - Please press back, refresh the page and try again!');
            // }
            $this->session->logout('un_auth, ul_auth', 'login');
        }
    }