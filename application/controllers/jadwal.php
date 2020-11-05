<?php

    DEFINED('BASE_URL') OR exit(header('location:403'));

    class Jadwal extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->model('admin');

            $this->download_wj  = $this->admin_model->download_warta_jemaat();
        }

        public function index()
        {
            if(defined('uri2'))
            {
                $data['kategori']   = $this->admin_model->jadwal_kategori(uri2);
                $this->view('kategori_ibadah', $data);
            }
            else
            {
                $this->error();
            }
        }
    }
