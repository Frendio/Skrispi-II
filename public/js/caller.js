$(function(){
    ML.do('submit', '#tambahSensus', tambah_data, 'ajax/tambah-sensus', 'admin');
    ML.do('submit', '#ubahSensus', tambah_data, 'ajax/ubah-sensus', 'admin');
    
    ML.do('submit', '#tambahJadwal', tambah_data, 'ajax/tambah-jadwal', 'admin/jadwal-ibadah');
    ML.do('submit', '#ubahJadwal', tambah_data, 'ajax/ubah-jadwal', 'admin/jadwal-ibadah');
    
    ML.do('submit', '#tambahUser', tambah_data, 'ajax/tambah-user', 'admin/user');
    ML.do('submit', '#ubahUser', tambah_data, 'ajax/ubah-user', 'admin/user');
    
    ML.do('submit', '#tambahSakitMeninggal', tambah_data, 'ajax/tambah-sm', 'admin/sakit-meninggal');
    ML.do('submit', '#ubahSakitMeninggal', tambah_data, 'ajax/ubah-sm', 'admin/sakit-meninggal');
    
    ML.do('submit', '#tambahKegiatan', tambah_data, 'ajax/tambah-kegiatan', 'admin/kegiatan');
    ML.do('submit', '#ubahKegiatan', tambah_data, 'ajax/ubah-kegiatan', 'admin/kegiatan');

    ML.do('submit', '#tambahWartaJemaat', tambah_data, 'ajax/tambah-wj', 'admin/warta-jemaat');
    
    ML.do('submit', '#tambahRenungan', tambah_data, 'ajax/tambah-renungan', 'admin/renungan');
    ML.do('submit', '#ubahRenungan', tambah_data, 'ajax/ubah-renungan', 'admin/renungan');
});