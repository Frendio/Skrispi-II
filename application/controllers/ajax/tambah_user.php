<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Tambah_user extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            # load session library
            $this->library('session, form');

            # check if login
            $this->session->access_check('un_auth', 'login', true);

            # verify user level access
            // $this->session->user_level('Admin', $this->session->ul_auth, '404', true);

            # load model
            $this->model('admin');
        }

        public function index()
        {

            $this->form->input('user:User harus dipilih.,
                                tipe:Tipe harus dipilih.,
                                username:Username harus dipiisi.');
            
            if($this->form->validate())
            {
                $user       = uc_all($this->input->post('user'));
                $tipe       = $this->input->post('tipe');
                $username   = $this->input->post('username');
                $password   = sha1($username);

                # insert new data kpp
                $this->model->data('username', $username)
                            ->data('password', $password)
                            ->data('nama_user', $user)
                            ->data('tipe_user', $tipe)
                            ->insert('user');
                
                $this->model->close_conn();
                exit('1|Berhasil tambahkan user.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
