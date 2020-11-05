<?php

    DEFINED('AJAX') OR exit(header('location:403'));

    class Ubah_sensus extends ML_Controller
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

            $this->form->input('nl:Nama lengkap harus diisi.,
                                jk:Jenis kelamin harus dipilih.');
            
            if($this->form->validate())
            {
                $id_AJ          = $this->input->post('id');
                $nama_lengkap   = uc_all($this->input->post('nl'));
                $jenis_kelamin  = $this->input->post('jk');
                
                $tempat_lahir   = uc_all($this->input->post('tpt_l'));
                $tempat_lahir   = !empty($tempat_lahir) ? $tempat_lahir : 'null';
                $tanggal_lahir  = uc_all($this->input->post('tgl_l'));
                $tanggal_lahir  = !empty($tanggal_lahir) ? $tanggal_lahir : 'null';
                $hub_kel        = uc_all($this->input->post('hub_kel'));
                $hub_kel        = !empty($hub_kel) ? $hub_kel : 'null';
                $status_nikah   = uc_all($this->input->post('sp'));
                $status_nikah   = !empty($status_nikah) ? $status_nikah : 'null';
                $pekerjaan      = uc_all($this->input->post('kerja'));
                $pekerjaan      = !empty($pekerjaan) ? $pekerjaan : 'null';
                $keahlian       = uc_all($this->input->post('ahli'));
                $keahlian       = !empty($keahlian) ? $keahlian : 'null';
                $etnis          = uc_all($this->input->post('etnis'));
                $etnis          = !empty($etnis) ? $etnis : 'null';
                $penyakit       = uc_all($this->input->post('sakit'));
                $penyakit       = !empty($penyakit) ? $penyakit : 'null';
                $cacat          = uc_all($this->input->post('cacat'));
                $cacat          = !empty($cacat) ? $cacat : 'null';
                $gol_dara       = uc_all($this->input->post('gol_dara'));
                $gol_dara       = !empty($gol_dara) ? $gol_dara : 'null';
                $ped_terakhir   = uc_all($this->input->post('pt'));
                $ped_terakhir   = !empty($ped_terakhir) ? $ped_terakhir : 'null';
                $nomor_telpon   = uc_all($this->input->post('nt'));
                $nomor_telpon   = !empty($nomor_telpon) ? $nomor_telpon : 'null';
                $baptis         = uc_all($this->input->post('baptis'));
                $baptis         = !empty($baptis) ? $baptis : 'null';
                $ons_baptis     = uc_all($this->input->post('ons_baptis'));
                $ns_baptis      = uc_all($this->input->post('ns_baptis'));
                $ns_baptis      = !empty($ns_baptis) ? $ns_baptis : 'null';
                $tgl_baptis     = uc_all($this->input->post('tb'));
                $tgl_baptis     = !empty($tgl_baptis) ? $tgl_baptis : 'null';
                $NP_baptpis     = uc_all($this->input->post('np'));
                $NP_baptpis     = !empty($NP_baptpis) ? $NP_baptpis : 'null';
                $jemaat_baptis  = uc_all($this->input->post('jemaat'));
                $jemaat_baptis  = !empty($jemaat_baptis) ? $jemaat_baptis : 'null';
                $sidi           = uc_all($this->input->post('sidi'));
                $sidi           = !empty($sidi) ? $sidi : 'null';
                $ons_sidi       = uc_all($this->input->post('ons_sidi'));
                $ns_sidi        = uc_all($this->input->post('ns_sidi'));
                $ns_sidi        = !empty($ns_sidi) ? $ns_sidi : 'null';
                $tgl_sidi       = uc_all($this->input->post('tgl_sidi'));
                $tgl_sidi       = !empty($tgl_sidi) ? $tgl_sidi : 'null';
                $NP_sidi        = uc_all($this->input->post('np_sidi'));
                $NP_sidi        = !empty($NP_sidi) ? $NP_sidi : 'null';
                $jemaat_sidi    = uc_all($this->input->post('jemaat_sidi'));
                $jemaat_sidi    = !empty($jemaat_sidi) ? $jemaat_sidi : 'null';
                $keterangan     = uc_all($this->input->post('ket'));
                $keterangan     = !empty($keterangan) ? $keterangan : 'null';
                $keluarga       = uc_all($this->input->post('nk'));
                $keluarga       = !empty($keluarga) ? $keluarga : 'null';
                $kolom          = uc_all($this->input->post('kolom'));
                $kolom          = !empty($kolom) ? $kolom : 'null';

                $result = $this->admin_model->anggota_jemaat();
                # cek kalo nomor baptis so ada
                if(!empty($ns_baptis) && $ns_baptis !== $ons_baptis)
                {
                    foreach($result as $row)
                    {
                        if(strtolower($ns_baptis) === strtolower($row->no_surat_baptis))
                        {
                            exit('Nomor surat baptis "'.$ns_baptis.'" suda ada!');
                        }
                    }
                }

                # cek kalo nomor sidi so ada
                if(!empty($ns_sidi) && $ns_sidi !== $ons_sidi)
                {
                    foreach($result as $row)
                    {
                        if(strtolower($ns_sidi) === strtolower($row->no_surat_sidi))
                        {
                            exit('Nomor surat sidi "'.$ns_sidi.'" suda ada!');
                        }
                    }
                }

                # insert new data kpp
                $this->model->set('nama_anggota', $nama_lengkap)
                            ->set('tempat_lahir', $tempat_lahir)
                            ->set('tanggal_lahir', $tanggal_lahir)
                            ->set('jenis_kelamin', $jenis_kelamin)
                            ->set('hub_keluarga', $hub_kel)
                            ->set('status_nikah', $status_nikah)
                            ->set('pekerjaan', $pekerjaan)
                            ->set('keahlian', $keahlian)
                            ->set('etnis', $etnis)
                            ->set('penyakit', $penyakit)
                            ->set('cacat', $cacat)
                            ->set('go_darah', $gol_dara)
                            ->set('pend_terakhir', $ped_terakhir)
                            ->set('no_telfon', $nomor_telpon)
                            ->set('baptis', $baptis)
                            ->set('no_surat_baptis', $ns_baptis)
                            ->set('tanggal_baptis', $tgl_baptis)
                            ->set('nama_pendeta_baptis', $NP_baptpis)
                            ->set('jemaat_baptis', $jemaat_baptis)
                            ->set('sidi', $sidi)
                            ->set('no_surat_sidi', $ns_sidi)
                            ->set('tanggal_sidi', $tgl_sidi)
                            ->set('nama_pendeta_sidi', $NP_sidi)
                            ->set('jemaat_sidi', $jemaat_sidi)
                            ->set('keterangan', $keterangan)
                            ->set('nama_keluarga', $keluarga)
                            ->set('nama_kolom', $kolom)
                            ->where('id_anggota_jemaat', $id_AJ)
                            ->update('anggota_jemaat');
                
                $this->model->close_conn();
                exit('1|Berhasil ubah anggota jemaat.');
            }
            else
            {
                exit('0|'.$this->form->empty());
            }
        }
    }
