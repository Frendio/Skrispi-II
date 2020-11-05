<?php
	DEFINED('BASE_URL') OR exit(header('location:403'));

	to('head');
		title('Export Excel');
	tc('head');
?>
	<body>
		<?php 
			header("Content-type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=Sensus Jemaat Bukitmoria.xls");

            $row	= $this->admin_model->currentTime();
            $CD     = $row->date_time;
		?>

		<table>
			<thead>
				<tr>
					<th colspan="27">
						<h2>Data Sensus Jemaat Bukit Moria</h2>
					</th>
				</tr>
				<tr>
					<th colspan="27">
						<h2><?php echo date("l d F, Y", strtotime($CD)); ?></h2>
					</th>
				</tr>
				<tr>
					<th colspan="27"></th>
				</tr>
				<tr>
                    <th>No</th>
                    <th>Nama anggota jemaat</th>
                    <th>Keluarga</th>
                    <th>Kolom</th>
                    <th>Jenis kelamin</th>
                    <th>Tempat/tanggal lahir</th>
                    <th>Hubungan keluarga</th>
                    <th>Status pernikahan</th>
                    <th>Pekerjaan</th>
                    <th>Keahlian</th>
                    <th>Etnis</th>
                    <th>Penyakit</th>
                    <th>Cacat</th>
                    <th>Golongan darah</th>
                    <th>Pendidikan terakhir</th>
                    <th>Nomor telpon</th>
                    <th>Baptis</th>
                    <th>Nomor surat baptis</th>
                    <th>Tanggal baptis</th>
                    <th>Nama pendeta baptis</th>
                    <th>Gereja baptis</th>
                    <th>SIDI</th>
                    <th>Nomor surat SIDI</th>
                    <th>Tanggal SIDI</th>
                    <th>Nama pendeta SIDI</th>
                    <th>Jemaat SIDI</th>
                    <th>Keterangan</th>
				</tr>
			</thead>
			<tbody id="user">
                <?php
                $no     = 0;
                foreach($sensus as $row)
                {
                    $no++;
                    $id_AJ					= $row->id_anggota_jemaat;
                    $anggota				= $row->nama_anggota;
                    $keluarga				= $row->nama_keluarga;
                    $kolom					= $row->nama_kolom;
                    $jenis_kelamin			= $row->jenis_kelamin;
                    $tempat_lahir			= $row->tempat_lahir;
                    $tanggal_lahir			= $row->tanggal_lahir;
                    $hub_keluarga			= $row->hub_keluarga;
                    $status_nikah			= $row->status_nikah;
                    $pekerjaan				= $row->pekerjaan;
                    $keahlian				= $row->keahlian;
                    $etnis					= $row->etnis;
                    $penyakit				= $row->penyakit;
                    $cacat					= $row->cacat;
                    $go_darah				= $row->go_darah;
                    $pend_terakhir			= $row->pend_terakhir;
                    $no_telfon				= $row->no_telfon;
                    $baptis					= $row->baptis;
                    $no_surat_baptis		= $row->no_surat_baptis;
                    $tanggal_baptis			= $row->tanggal_baptis;
                    $nama_pendeta_baptis	= $row->nama_pendeta_baptis;
                    $jemaat_baptis			= $row->jemaat_baptis;
                    $sidi					= $row->sidi;
                    $no_surat_sidi			= $row->no_surat_sidi;
                    $tanggal_sidi			= $row->tanggal_sidi;
                    $nama_pendeta_sidi		= $row->nama_pendeta_sidi;
                    $jemaat_sidi			= $row->jemaat_sidi;
                    $keterangan				= $row->keterangan;
                    
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                            <a href="admin/ubah-sensus/<?php echo $id_AJ; ?>" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="Lihat">
                                <?php echo set_data($anggota); ?>
                            </a>
                        </td>
                        <td><?php echo $keluarga; ?></td>
                        <td><?php echo $kolom; ?></td>
                        <td><?php echo $jenis_kelamin; ?></td>
                        <td><?php echo $tempat_lahir.' / '.$tanggal_lahir; ?></td>
                        <td><?php echo $hub_keluarga; ?></td>
                        <td><?php echo $status_nikah; ?></td>
                        <td><?php echo $pekerjaan; ?></td>
                        <td><?php echo $keahlian; ?></td>
                        <td><?php echo $etnis; ?></td>
                        <td><?php echo $penyakit; ?></td>
                        <td><?php echo $cacat; ?></td>
                        <td><?php echo $go_darah; ?></td>
                        <td><?php echo $pend_terakhir; ?></td>
                        <td><?php echo $no_telfon; ?></td>
                        <td><?php echo $baptis; ?></td>
                        <td><?php echo $no_surat_baptis; ?></td>
                        <td><?php echo $tanggal_baptis; ?></td>
                        <td><?php echo $nama_pendeta_baptis; ?></td>
                        <td><?php echo $jemaat_baptis; ?></td>
                        <td><?php echo $sidi; ?></td>
                        <td><?php echo $no_surat_sidi; ?></td>
                        <td><?php echo $tanggal_sidi; ?></td>
                        <td><?php echo $nama_pendeta_sidi; ?></td>
                        <td><?php echo $jemaat_sidi; ?></td>
                        <td><?php echo $keterangan; ?></td>
                    </tr>
                <?php } ?>
			</tbody>
			
		</table>
	</body>