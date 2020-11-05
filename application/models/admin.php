<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class Admin_model extends ML_Model
    {
        public function cek_login($username, $pass, $type = 'c')
        {
            return $this->all('user')
                        ->where('username', $username)
                        ->and('password', $pass)
                        ->get($type);
        }

        public function sensus()
        {
            return $this->all('anggota_jemaat')
                        ->order_by('nama_kolom, nama_keluarga, nama_anggota')
                        ->get();
        }
        
        public function anggota_jemaat()
        {
            return $this->all('anggota_jemaat')->get();
        }
        
        public function non_user()
        {
            return $this->all('anggota_jemaat')
                        ->where('nama_anggota')
                            ->not_in_select('nama_user')
                            ->from('user')->close()
                        ->get();
        }
        
        public function users()
        {
            return $this->all('user')->get();
        }
        
        public function jadwal_ibadah()
        {
            return $this->all('jadwal_ibadah')
                        ->order_by('tipe_ibadah')
                        ->get();
        }
        
        public function group_jadwal_ibadah()
        {
            return $this->all('jadwal_ibadah')
                        ->group_by('tipe_ibadah')
                        ->order_by('tipe_ibadah', 'desc')
                        ->get();
        }
        
        public function satu_anggota_jemaat($id)
        {
            return $this->all('anggota_jemaat')
                        ->where('id_anggota_jemaat', $id)
                        ->get(1);
        }

        public function satu_jadwal($id)
        {
            return $this->all('jadwal_ibadah')
                        ->where('id_jadwal', $id)
                        ->get(1);
        }

        public function sakit_meninggal()
        {
            return $this->all('sakit_meninggal')->get();
        }

        public function satu_sakit_meninggal($id)
        {
            return $this->all('sakit_meninggal')
                        ->where('id_saj', $id)
                        ->get(1);
        }

        public function kegiatan()
        {
            return $this->all('kegiatan')->get();
        }

        public function warta_jemaat()
        {
            return $this->all('warta_jemaat')->get();
        }

        public function download_warta_jemaat()
        {
            return $this->all('warta_jemaat')
                        ->order_by('id_wj', 'desc')
                        ->limit(1)
                        ->get(1);
        }

        public function satu_warta_jemaat($id)
        {
            return $this->all('warta_jemaat')
                        ->where('id_wj', $id)
                        ->get(1);
        }

        public function satu_kegiatan($id)
        {
            return $this->all('kegiatan')
                        ->where('id_kegiatan', $id)
                        ->get(1);
        }

        public function jadwal_kategori($jenis)
        {
            return $this->all('jadwal_ibadah')
                        ->where_like('tipe_ibadah', $jenis)
                        ->get();
        }

        public function ulta_anggota($week)
        {
            return $this->all('anggota_jemaat')
                        ->where('WEEK(tanggal_lahir)', $week)
                        ->get();
        }

        public function get_week($date)
        {
            return $this->select('WEEK("'.$date.'") as week')
                        ->get(1);
        }

        public function currentTime($type = 1)
        {
            return $this->select("CURRENT_TIMESTAMP() AS date_time")->get($type);
        }
    }