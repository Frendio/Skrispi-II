<?php

    DEFINED('BASE_URL') OR exit(header('location:403'));

    class login extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            # load session library
            $this->library('session, form');
        }

        public function index()
        {
            # check if login
            $this->session->login_check('un_auth', strtolower($this->session->get('un_auth')));

            # load login view
            $this->view('login');
        }

        public function check()
        {
            # check if ajax or default is requested
            DEFINED('AJAXPATH') OR exit(header('location:403'));

            # set rule for stu_id & password inputs
            $this->form->input('username, password');
            
            # validate the inputs
            if($this->form->validate())
            {
                # load admin_model view
                $this->model('admin');

                # create variables
                $username   = $this->input->post('username');
                $password   = sha1($this->input->post('password'));

                # check if user exists
                $rows       = $this->admin_model->cek_login($username, $password);
                if($rows > 0)
                {
                    $row    = $this->admin_model->cek_login($username, $password, 1);

                    # set user session
                    $this->session->set('un_auth', $username);
                    $this->session->set('ul_auth', $row->tipe_user);
                    $this->session->set('ufn_auth', $row->nama_user);
                    echo 'success';
                    exit();
                }
                else
                {
                    # return fail to ajax request
                    echo 'fail';
                    exit();
                }
            }
            else
            {
                echo 'empty';
            }
        }
    }
