<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Tambah_kegiatan extends ML_Controller
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
            // set aturan main
            $this->form->input('tipe:Jenis kegiatan harus dipilih.,
                                tempat:Tempat kegiatan harus diisi.,
                                tanggal:Tanggal kegiatan harus diisi.,
                                waktu:Waktu kegiatan harus dipilih.');
            
            // validasi
            if($this->form->validate())
            {
                $tipe       = $this->input->post('tipe');
                $tempat     = $this->input->post('tempat');
                $tanggal    = $this->input->post('tanggal');
                $waktu      = $this->input->post('waktu');

                // cek kalo kegiatan so ada
                $result = $this->admin_model->kegiatan();
                foreach($result as $row)
                {
                    if($tipe === $row->jenis_kegiatan && $tempat === $row->tempat_kegiatan && $tanggal === $row->tanggal_kegiatan && $waktu === $row->waktu_kegiatan)
                    {
                        exit('Kegiatan "'.$tipe.'" suda ada!');
                    }
                }

                # insert new data
                $this->model->data('tanggal_kegiatan', $tanggal)
                            ->data('waktu_kegiatan', $waktu)
                            ->data('jenis_kegiatan', $tipe)
                            ->data('tempat_kegiatan', $tempat)
                            ->insert('kegiatan');
                
                $this->model->close_conn();
                exit('1|Berhasil tambahkan kegiatan.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
