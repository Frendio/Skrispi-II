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
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item m-nav__item--home">
										<a href="admin/sakit-meninggal" class="m-nav__link">
											<span class="m-nav__link-text">Daftar sakit meninggal</span>									
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="m-content">
						<div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<span class="m-portlet__head-icon">
											<i class="fa fa-plus"></i>
										</span>
										<h3 class="m-portlet__head-text">
											Ubah sakit meninggal
										</h3>
									</div>
								</div>
							</div>

							<div class="m-portlet__body">
								<div class="tab-content">
									<div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
										<form class="m-form m-form--fit m-form--label-align-right" id="ubahSakitMeninggal">	
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Nama anggota</label>
												<div class="col-xl-10 col-lg-10">
													<select class="form-control m-select2" name="nama" id="anggota" style="width:100%;">
														<option></option>
                                                        <?php foreach($anggota_jemaat as $row) { ?>
                                                            <option value="<?php echo $row->nama_anggota; ?>" <?php selected($sm->nama_anggota, $row->nama_anggota) ?>><?php echo $row->nama_anggota; ?></option>
                                                        <?php } ?>
													</select>
													<div class="m--font-danger ml_input_eh set_error" id="nama"></div>
												</div>
											</div>
															
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Tipe user</label>
												<div class="col-xl-10 col-lg-10">
                                                    <select class="form-control" name="tipe" style="width:100%;">
                                                        <option value="" <?php selected($sm->jenis_status, ''); ?>>--- Sakit / meninggal ---</option>
                                                        <option value="Sakit" <?php selected($sm->jenis_status, 'Sakit'); ?>>Sakit</option>
                                                        <option value="Meninggal" <?php selected($sm->jenis_status, 'Meninggal'); ?>>Meninggal</option>
													</select>
													<div class="m--font-danger ml_input_eh set_error" id="tipe"></div>
												</div>
											</div>
															
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Keterangan</label>
												<div class="col-xl-10 col-lg-10">
													<input class="form-control m-input" type="text" autocomplete="off" name="keterangan" placeholder="keterangan" value="<?php echo $sm->keterangan; ?>">
													<input type="hidden" name="id" value="<?php echo $sm->id_saj; ?>">
													<div class="m--font-danger ml_input_eh set_error" id="keterangan"></div>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<div class="col-xl-2 col-lg-2"></div>
												<div class="col-xl-10 col-lg-10 ca-btn">
													<button class="btn btn-success m-btn m-btn--air m-btn--custom">
														<i class="fa fa-plus"></i> &nbsp;Ubah
													</button>
												</div>
											</div>
										</form>
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
			js('vendors/fullcalendar/fullcalendar.bundle');
			js('demo/select2');
			js('demo/toastr');
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