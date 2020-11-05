<?php

    DEFINED('BASE_URL') OR exit(header('location:403'));

    class Sinode extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            # load library
            $this->library('session, form');

            # load my library
            $this->my_library('left_menu');

            # check if login
            $this->session->access_check('un_auth', 'login');

            # verify user level access
            $this->session->user_level('Sinode', $this->session->ul_auth, '404');

            # load model
            $this->model('admin');
        }

        public function index()
        {
            $data['sensus'] = $this->admin_model->sensus();
            $this->view('admin/home', $data);
        }

        public function export()
        {
            $data['sensus'] = $this->admin_model->sensus();
            $this->view('export_sensus', $data);
        }
    }