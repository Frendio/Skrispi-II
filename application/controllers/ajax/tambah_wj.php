<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Tambah_wj extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            # load session library
            $this->library('session, form, file');

            # check if login
            $this->session->access_check('un_auth', 'login', true);

            # verify user level access
            // $this->session->user_level('Admin', $this->session->ul_auth, '404', true);

            # load model
            $this->model('admin');
        }

        public function index()
        {
            if($this->input->file('pdf_file') !== '')
            {
                $this->form->input('tanggal:Tanggal harus dipilih.');
                
                if($this->form->validate())
                {
                    $tanggal    = $this->input->post('tanggal');
                    $keterangan = $this->input->post('ket');
                    $keterangan = !empty($keterangan) ? $keterangan : 'null';

                    $config['input_name']   = 'pdf_file';
                    $config['path']         = "upload/warta_jemaat";
                    $config['type']         = 'pdf';
                    $config['max_size']     = 52428800;
        
                    # upload file
                    $this->file->upload($config);
                    $filename   = $this->file->name();

                    # insert new data kpp
                    $this->model->data('file', $filename)
                                ->data('tanggal', $tanggal)
                                ->data('keterangan', $keterangan)
                                ->insert('warta_jemaat');
                    
                    $this->model->close_conn();
                    exit('1|Berhasil tambahkan warta jemaat.');
                }
                else
                {
                    exit('0|'.$this->form->empty());
                }
            }
            else
            {
                exit('0|pdf_file::Harus memilih file dulu!');
            }
        }
    }
