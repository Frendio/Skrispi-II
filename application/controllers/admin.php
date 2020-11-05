<?php

    DEFINED('BASE_URL') OR exit(header('location:403'));

    class Admin extends ML_Controller
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
            $this->session->user_level('Admin', $this->session->ul_auth, '404');

            # load model
            $this->model('admin');
        }

        public function index()
        {
            $data['sensus'] = $this->admin_model->sensus();
            $this->view('admin/home', $data);
        }

        public function jadwal_ibadah()
        {
            $data['jadwal_ibadah'] = $this->admin_model->jadwal_ibadah();
            $this->view('admin/jadwal_ibadah', $data);
        }

        public function user()
        {
            $data['users'] = $this->admin_model->users();
            $this->view('admin/user', $data);
        }

        public function sakit_meninggal()
        {
            $data['sakit_meninggal'] = $this->admin_model->sakit_meninggal();
            $this->view('admin/daftar_sakit_meninggal', $data);
        }

        public function kegiatan()
        {
            $data['kegiatan'] = $this->admin_model->kegiatan();
            $this->view('admin/daftar_kegiatan', $data);
        }

        public function warta_jemaat()
        {
            $data['warta_jemaat'] = $this->admin_model->warta_jemaat();
            $this->view('admin/daftar_warta_jemaat', $data);
        }

        public function tambah_sensus()
        {
            $this->view('admin/tambah_sensus');
        }

        public function ubah_sensus()
        {
            $data['aj'] = $this->admin_model->satu_anggota_jemaat(uri3);
            $this->view('admin/ubah_sensus', $data);
        }

        public function tambah_jadwal()
        {
            $data['anggota_jemaat'] = $this->admin_model->anggota_jemaat();
            $this->view('admin/tambah_jadwal', $data);
        }

        public function ubah_jadwal()
        {
            $data['anggota_jemaat'] = $this->admin_model->anggota_jemaat();
            $data['jadwal']         = $this->admin_model->satu_jadwal(uri3);
            $this->view('admin/ubah_jadwal', $data);
        }

        public function tambah_user()
        {
            $data['anggota_jemaat'] = $this->admin_model->non_user();
            $this->view('admin/tambah_user', $data);
        }

        public function tambah_kegiatan()
        {
            $this->view('admin/tambah_kegiatan');
        }

        public function ubah_kegiatan()
        {
            $data['kegiatan'] = $this->admin_model->satu_kegiatan(uri3);
            $this->view('admin/ubah_kegiatan', $data);
        }

        public function tambah_sakit_meninggal()
        {
            $data['anggota_jemaat'] = $this->admin_model->anggota_jemaat();
            $this->view('admin/tambah_sakit_meninggal', $data);
        }

        public function ubah_sakit_meninggal()
        {
            $data['anggota_jemaat'] = $this->admin_model->anggota_jemaat(uri3);
            $data['sm']             = $this->admin_model->satu_sakit_meninggal(uri3);
            $this->view('admin/ubah_sakit_meninggal', $data);
        }

        public function tambah_warta_jemaat()
        {
            $this->view('admin/tambah_warta_jemaat');
        }

        public function delete_sensus()
        {
            $this->model->where('id_anggota_jemaat', uri3)
                        ->delete('anggota_jemaat');

            $this->model->close_conn();
            header("location: ".BASE_URL.'admin');
        }

        public function delete_jadwal()
        {
            $this->model->where('id_jadwal', uri3)
                        ->delete('jadwal_ibadah');

            $this->model->close_conn();
            header("location: ".BASE_URL.'admin/jadwal-ibdah');
        }

        public function delete_user()
        {
            $this->model->where('user_id', uri3)
                        ->delete('user');

            $this->model->close_conn();
            header("location: ".BASE_URL.'admin/user');
        }

        public function delete_sakit_meninggal()
        {
            $this->model->where('id_saj', uri3)
                        ->delete('sakit_meninggal');

            $this->model->close_conn();
            header("location: ".BASE_URL.'admin/sakit-meninggal');
        }

        public function delete_kegiatan()
        {
            $this->model->where('id_kegiatan', uri3)
                        ->delete('kegiatan');

            $this->model->close_conn();
            header("location: ".BASE_URL.'admin/kegiatan');
        }

        public function delete_warta_jemaat()
        {
            # load library file
            $this->library('file');

            $row    = $this->admin_model->satu_warta_jemaat(uri3);
            $file   = $row->file;

            # hapus file dari foler warta jemaat
            $this->file->delete('upload/warta_jemaat/'.$file);

            # hapus warta jemaat dari db
            $this->model->where('id_wj', uri3)
                        ->delete('warta_jemaat');

            $this->model->close_conn();
            header("location: ".BASE_URL.'admin/warta-jemaat');
        }
    }
