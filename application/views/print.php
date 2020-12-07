<!doctype html>
<html lang="en">
	<head>
		<?php base_url(); ?>
        <title>Print jadwal ibadah kolom</title>
	</head>

	<body>
        <table border="2" style="width:100%;">
            <tr>
                <th>No</th>
                <th>Nama pembicara</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Kolom</th>
                <th>Tempat</th>
                <th>Keterangan</th>
            </tr>

            <?php
                $no = 0;
                foreach($kategori as $row)
                {
                    $no++;
                    $kolom			= $row->kolom ?? '';
                    
                    $row			= $this->admin_model->satu_jadwal_kategori($kolom);
                    $khotbah	    = $row->khotbah;
                    $tanggal	    = $row->tanggal;
                    $waktu_mulai	= $row->waktu_mulai;
                    $waktu_selesai	= $row->waktu_selesai;
                    $tempat_ibadah	= $row->tempat_ibadah;
                    $catatan	    = $row->catatan;

                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo set_data($khotbah); ?></td>
                        <td><?php echo set_data($tanggal); ?></td>
                        <td><?php echo set_data($waktu_mulai.' - '.$waktu_selesai); ?></td>
                        <td><?php echo set_data($kolom); ?></td>
                        <td><?php echo set_data($tempat_ibadah); ?></td>
                        <td><?php echo set_data($catatan); ?></td>
                    </tr>

            <?php } ?>
        </table>
	</body>
</html>