<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Tambah_sm extends ML_Controller
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

            $this->form->input('tipe:Sakit / meninggal harus dipilih.,
                                nama:Anggota harus dipilih.');
            
            if($this->form->validate())
            {
                $tipe       = $this->input->post('tipe');
                $anggota    = $this->input->post('nama');
                $keterangan = $this->input->post('keterangan');
                $keterangan = !empty($keterangan) ? $keterangan : 'null';

                # insert new data kpp
                $this->model->data('nama_anggota', $anggota)
                            ->data('keterangan', $keterangan)
                            ->data('jenis_status', $tipe)
                            ->insert('sakit_meninggal');
                
                $this->model->close_conn();
                exit('1|Berhasil tambahkan sakit / meninggal.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
