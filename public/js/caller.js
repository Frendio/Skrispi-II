$(function(){
    ML.do('submit', '#tambahSensus', tambah_data, 'ajax/tambah-sensus', 'admin', '#tambahSensus');
    ML.do('submit', '#ubahSensus', tambah_data, 'ajax/ubah-sensus', 'admin', '#ubahSensus');
    
    ML.do('submit', '#tambahJadwal', tambah_data, 'ajax/tambah-jadwal', 'admin/jadwal-ibadah', '#tambahJadwal');
    ML.do('submit', '#ubahJadwal', tambah_data, 'ajax/ubah-jadwal', 'admin/jadwal-ibadah', '#ubahJadwal');
    
    ML.do('submit', '#tambahUser', tambah_data, 'ajax/tambah-user', 'admin/user', '#tambahUser');
    ML.do('submit', '#ubahUser', tambah_data, 'ajax/ubah-user', 'admin/user', '#ubahUser');
    
    ML.do('submit', '#tambahSakitMeninggal', tambah_data, 'ajax/tambah-sm', 'admin/sakit-meninggal', '#tambahSakitMeninggal');
    ML.do('submit', '#ubahSakitMeninggal', tambah_data, 'ajax/ubah-sm', 'admin/sakit-meninggal', '#ubahSakitMeninggal');
    
    ML.do('submit', '#tambahKegiatan', tambah_data, 'ajax/tambah-kegiatan', 'admin/kegiatan', '#tambahKegiatan');
    ML.do('submit', '#ubahKegiatan', tambah_data, 'ajax/ubah-kegiatan', 'admin/kegiatan', '#ubahKegiatan');

    ML.do('submit', '#tambahWartaJemaat', tambah_data, 'ajax/tambah-wj', 'admin/warta-jemaat', '#tambahWartaJemaat');
});