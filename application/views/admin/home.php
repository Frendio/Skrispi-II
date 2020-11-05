<?php
	DEFINED('BASE_URL') OR exit(header('location:403'));

    doctype().
    to('html').
	to('head');
		base_url();
		title('SII');
		tag('meta', 'charset::utf-8');
		responsive_meta();
		
		css('vendors/fullcalendar/fullcalendar.bundle');
		css('vendors/vendors.bundle');
		css('demo/style.bundle');
		css('demo/datatables.bundle');
		css('overide');

		bar_icon();
	tc('head');
?>

	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<?php $this->view('content/header'); ?>
			<!-- END: Header -->		
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Aside Menu -->
				<?php $this->view('content/left_menu'); ?>
				<!-- END: Aside Menu -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>											
											
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								<div class="m-portlet m-portlet--mobile">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Daftar anggota jemaat
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div>
											<table class="table m-table m-table--head-bg-success" id="m_table_1">
												<thead>
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
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
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
															<td>
																<a href="admin/delete-sensus/<?php echo $id_AJ; ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill">
																	<i class="m-menu__link-icon flaticon-delete-1"></i>
																</a>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		
		<?php
			ajax();
			web_js('https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont');
			js('vendors/vendors.bundle');
			js('demo/scripts.bundle');
			js('demo/basic');
			js('demo/toastr');
			js('demo/datatables.bundle');
			js('demo/scrollable');
		?>

		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
	</body>
</html>