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
										<a href="admin" class="m-nav__link">
											<span class="m-nav__link-text">Daftar jadwal ibadah</span>									
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
											Tambah jadwal ibadah
										</h3>
									</div>
								</div>
							</div>

							<div class="m-portlet__body">
								<div class="tab-content">
									<div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
										<form class="m-form m-form--fit m-form--label-align-right" id="tambahJadwal">	
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Nama pembicara</label>
												<div class="col-xl-10 col-lg-10">
													<select class="form-control m-select2" name="khotbah" id="anggota" style="width:100%;">
														<option></option>
														<?php
															foreach($anggota_jemaat as $row)
															{
																make('option', $row->nama_anggota, 'value::'.str_replace(' ', '*', $row->nama_anggota));
															}
														?>
													</select>
													<div class="m--font-danger ml_input_eh set_error" id="khotbah"></div>
												</div>
											</div>
															
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Tanggal</label>
												<div class="col-xl-10 col-lg-10">
													<input class="form-control m-input" type="date" autocomplete="off" name="tanggal" placeholder="kode KPP">
													<div class="m--font-danger ml_input_eh set_error" id="tanggal"></div>
												</div>
											</div>
															
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Waktu mulai</label>
												<div class="col-xl-10 col-lg-10">
													<input class="form-control m-input" type="time" autocomplete="off" name="waktu_m" placeholder="kode KPP">
													<div class="m--font-danger ml_input_eh set_error" id="waktu_m"></div>
												</div>
											</div>
															
											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Waktu selesai</label>
												<div class="col-xl-10 col-lg-10">
													<input class="form-control m-input" type="time" autocomplete="off" name="waktu_s" placeholder="waktu ibadah">
													<div class="m--font-danger ml_input_eh set_error" id="waktu_s"></div>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Tipe ibadah</label>
												<div class="col-xl-10 col-lg-10">													
													<select class="form-control" name="ibadah" style="width:100%;">
                                                        <option value="">--- Pilih jenis ibadah ---</option>
                                                        <option value="Ibadah Gereja">Ibadah Gereja</option>
                                                        <option value="Ibadah Lansia">Ibadah Lansia</option>
                                                        <option value="Ibadah Kaum Bapa">Ibadah Kaum Bapa</option>
                                                        <option value="Ibadah Kaum Ibu">Ibadah Kaum Ibu</option>
                                                        <option value="Ibadah Pemuda dan Remaja">Ibadah Pemuda & Remaja</option>
                                                        <option value="Anak Sekolah Minggu">Ibadah Anak Sekolah Minggu</option>
                                                        <option value="Ibadah Kolom">Ibadah Kolom</option>
													</select>
													<div class="m--font-danger ml_input_eh set_error" id="ibadah"></div>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Kolom (Hanya untuk ibada kolom)</label>
												<div class="col-xl-10 col-lg-10">
													<input class="form-control m-input" type="number" autocomplete="off" name="kolom" placeholder="kolom">
													<div class="m--font-danger ml_input_eh set_error" id="kolom"></div>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Tempat ibadah</label>
												<div class="col-xl-10 col-lg-10">
													<input class="form-control m-input" type="text" autocomplete="off" name="tempat" placeholder="tempat ibadah">
													<div class="m--font-danger ml_input_eh set_error" id="tempat"></div>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<label class="col-xl-2 col-lg-2 col-form-label">Catatan</label>
												<div class="col-xl-10 col-lg-10">
													<textarea class="form-control m-input" type="text" autocomplete="off" name="catatan" placeholder="catatan"></textarea>
													<div class="m--font-danger ml_input_eh set_error" id="catatan"></div>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<div class="col-xl-2 col-lg-2"></div>
												<div class="col-xl-10 col-lg-10 ca-btn">
													<button class="btn btn-success m-btn m-btn--air m-btn--custom">
														<i class="fa fa-plus"></i> &nbsp;Buat jadwal
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