<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Ubah_kegiatan extends ML_Controller
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

            $this->form->input('tipe:Jenis kegiatan harus dipilih.,
                                tempat:Tempat kegiatan harus diisi.,
                                tanggal:Tanggal kegiatan harus diisi.,
                                waktu:Waktu kegiatan harus dipilih.');
            
            if($this->form->validate())
            {
                $id         = $this->input->post('id');
                $tipe       = $this->input->post('tipe');
                $tempat     = $this->input->post('tempat');
                $tanggal    = $this->input->post('tanggal');
                $waktu      = $this->input->post('waktu');

                $otipe      = $this->input->post('otipe');
                $otempat    = $this->input->post('otempat');
                $otanggal   = $this->input->post('otanggal');
                $owaktu     = $this->input->post('owaktu');

                if($otipe !== $tipe || $otempat !== $tempat || $otanggal !== $tanggal || $owaktu !== $waktu)
                {
                    $result = $this->admin_model->kegiatan();
                    foreach($result as $row)
                    {
                        if($tipe === $row->jenis_kegiatan && $tempat === $row->tempat_kegiatan && $tanggal === $row->tanggal_kegiatan && $waktu === $row->waktu_kegiatan)
                        {
                            exit('Kegiatan "'.$tipe.'" suda ada!');
                        }
                    }
                }

                # insert new data kpp
                $this->model->set('tanggal_kegiatan', $tanggal)
                            ->set('waktu_kegiatan', $waktu)
                            ->set('jenis_kegiatan', $tipe)
                            ->set('tempat_kegiatan', $tempat)
                            ->where('id_kegiatan', $id)
                            ->update('kegiatan');
                
                $this->model->close_conn();
                exit('1|Berhasil ubah kegiatan.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
