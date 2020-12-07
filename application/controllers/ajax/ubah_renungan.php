<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Ubah_renungan extends ML_Controller
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

            $this->form->input('jr:Judul renungan harus diisi.,
                                ar:Ayat renungan harus diisi.,
                                ringkasan:Ringkasan harus diisi.,
                                tr:Tanggal harus dipilih.');
            
            if($this->form->validate())
            {
                $id             = $this->input->post('id');
                $judul_renungan = $this->input->post('jr');
                $ayat_renungan  = $this->input->post('ar');
                $tgl_renungan   = $this->input->post('tr');
                $ringkasan      = $this->input->post('ringkasan');

                # insert new data kpp
                $this->model->set('judul', $judul_renungan)
                            ->set('ayat', $ayat_renungan)
                            ->set('ringkasan', $ringkasan)
                            ->set('tanggal', $tgl_renungan)
                            ->where('id_renungan', $id)
                            ->update('renungan');
                
                $this->model->close_conn();
                exit('1|Berhasil ubah renungan.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
