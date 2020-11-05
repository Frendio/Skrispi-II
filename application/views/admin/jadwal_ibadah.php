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
													Daftar jadwal ibadah
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
														<th>Pembicara</th>
														<th>Tanggal</th>
														<th>Waktu</th>
														<th>Tempat</th>
														<th>Jenis ibadah</th>
														<th>Catatan</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no     = 0;
													foreach($jadwal_ibadah as $row)
													{
														$no++;
														$id_jadwal  = $row->id_jadwal;
														$pembicara  = $row->khotbah;
														$tanggal    = $row->tanggal;
														$waktu_m	= $row->waktu_selesai;
														$waktu_s	= $row->waktu_mulai;
														$tempat     = $row->tempat_ibadah;
														$ibadah     = $row->tipe_ibadah;
														$catatan    = $row->catatan;
														
														?>
														<tr>
															<td><?php echo $no; ?></td>
															<td>
																<a href="admin/ubah-jadwal/<?php echo $id_jadwal; ?>" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="Lihat">
																	<?php echo set_data($pembicara); ?>
																</a>
															</td>
															<td><?php echo set_data($tanggal); ?></td>
															<td><?php echo set_data($waktu_m .' - '. $waktu_s); ?></td>
															<td><?php echo set_data($tempat); ?></td>
															<td><?php echo set_data($ibadah); ?></td>
															<td><?php echo set_data($catatan); ?></td>
															<td>
																<a href="admin/delete-jadwal/<?php echo $id_jadwal; ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill">
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