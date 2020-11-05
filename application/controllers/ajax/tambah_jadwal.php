<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Tambah_jadwal extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            # load session library
            $this->library('session, form');

            # check if login
            $this->session->access_check('un_auth', 'login', true);

            # load model
            $this->model('admin');
        }

        public function index()
        {

            $this->form->input('khotbah:Nama pengkhotbah harus dipilih.,
                                tanggal:Tanggal ibadah harus dipilih.,
                                waktu_m:Waktu mulai ibadah harus dipilih.,
                                waktu_s:Waktu selesai ibadah harus dipilih.,
                                tempat:Tempat ibadah harus diisi.');
            
            if($this->form->validate())
            {
                $khotbah    = uc_all($this->input->post('khotbah'));
                $tanggal    = $this->input->post('tanggal');
                $waktu_m    = $this->input->post('waktu_m');
                $waktu_s    = $this->input->post('waktu_s');
                $ibadah     = $this->input->post('ibadah');
                $tempat     = $this->input->post('tempat');
                $catatan    = $this->input->post('catatan');

                $result = $this->admin_model->jadwal_ibadah();
                foreach($result as $row)
                {
                    if($khotbah === $row->khotbah && $tanggal === $row->tanggal && $waktu_m === $row->waktu_mulai && $waktu_s === $row->waktu_selesai)
                    {
                        exit('Pembicara "'.$khotbah.'" suda terjadwal!');
                    }
                }

                # insert new data kpp
                $this->model->data('tanggal', $tanggal)
                            ->data('waktu_mulai', $waktu_m)
                            ->data('waktu_selesai', $waktu_s)
                            ->data('khotbah', $khotbah)
                            ->data('tipe_ibadah', $ibadah)
                            ->data('tempat_ibadah', $tempat)
                            ->data('catatan', $catatan)
                            ->insert('jadwal_ibadah');
                
                $this->model->close_conn();
                exit('1|Berhasil tambahkan jadwal ibadah.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
