<?php

    DEFINED('BASE_URL') OR exit(header('location:403'));

    class Beranda extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->model('admin');
            
            $this->download_wj  = $this->admin_model->download_warta_jemaat();
        }

        public function index()
        {
            # tanggal skarang
            $row    = $this->admin_model->currentTime();
            $CD     = $row->date_time;
            $date   = explode(' ', $CD)[0];

            # cek minggu
            $row    = $this->admin_model->get_week($date);
            $minggu = $row->week;
            
            # daftar ulta
            $data['birthday']       = $this->admin_model->ulta_anggota($minggu);
            # daftar jadwal
            $data['jadwal_ibadah']  = $this->admin_model->group_jadwal_ibadah();
            # semua kegiatan
            $data['kegiatan']       = $this->admin_model->semua_kegiatan($minggu);
            # sakit meninggal
            $data['SM_minggu']      = $this->admin_model->sakit_meninggal_minggu($minggu);
            # renungan
            $data['renungan']       = $this->admin_model->home_renungan();

            # load login view
            $this->view('beranda', $data);
        }

        public function tentang_kami()
        {
            $this->view('tentang_kami');
        }
    }
