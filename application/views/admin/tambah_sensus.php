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
											<span class="m-nav__link-text">Data sensus</span>									
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
											Tambah data sensus
										</h3>
									</div>
								</div>
							</div>

							<div class="m-portlet__body">
								<div class="tab-content">
									<div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                                        <form class="m-form m-form--label-align-right" id="tambahSensus">
                                            <div class="m-portlet__body  m-portlet__body--no-padding">
                                                <div class="row m-row--no-padding m-row--col-separator-xl">
                                                    <div class="col-xl-4">
                                                        <div class="m-widget1">
                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nama lengkap</label>
                                                                <input type="text" class="form-control m-input" name="nl" placeholder="nama lengkap">
                                                                <div class="m--font-danger ml_input_eh set_error" id="nl"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Tempat lahir</label>
                                                                <input type="text" class="form-control m-input" name="tpt_l" placeholder="tempat lahir">
                                                                <div class="m--font-danger ml_input_eh set_error" id="tpt_l"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Tanggal lahir</label>
                                                                <input type="date" class="form-control m-input" name="tgl_l">
                                                                <div class="m--font-danger ml_input_eh set_error" id="tgl_l"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Jenis kelamin</label>
                                                                <select class="form-control" name="jk">
                                                                    <option value="">--- Pilih jenis kelamin ---</option>
                                                                    <option value="Laki laki">Laki lakai</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                <div class="m--font-danger ml_input_eh set_error" id="jk"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Hubungan keluarga</label>
                                                                <input type="text" class="form-control m-input" name="hub_kel" placeholder="hubungan dalam keluarga">
                                                                <div class="m--font-danger ml_input_eh set_error" id="hub_kel"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Status pernikahan</label>
                                                                <select class="form-control" name="sp">
                                                                    <option value="">--- Pilih status pernikahan ---</option>
                                                                    <option value="Menikah">Menikah</option>
                                                                    <option value="Belum menikah">Belum menikah</option>
                                                                    <option value="Pernah menikah">Pernah menikah</option>
                                                                </select>
                                                                <div class="m--font-danger ml_input_eh set_error" id="sp"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Pekerjaan</label>
                                                                <input type="text" class="form-control m-input" name="kerja" placeholder="pekerjaan">
                                                                <div class="m--font-danger ml_input_eh set_error" id="kerja"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Keahlian</label>
                                                                <input type="text" class="form-control m-input" name="ahli" placeholder="keahlian">
                                                                <div class="m--font-danger ml_input_eh set_error" id="ahli"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nama keluarga</label>
                                                                <input type="text" class="form-control m-input" name="nk" placeholder="nama keluarga">
                                                                <div class="m--font-danger ml_input_eh set_error" id="nk"></div>
                                                            </div>
                                                            
                                                            <!-- <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">KPP terdaftar</label>
                                                                <select class="form-control m-select2" name="kppt" id="kpp" style="width:100%;">
                                                                    <option></option>
                                                                    <?php
                                                                    // foreach($this->data_kpp as $row)
                                                                    // {
                                                                    //     make('option', $row->tax_nama_kpp, 'value::'.str_replace(' ', '*', $row->tax_nama_kpp));
                                                                    // }
                                                                    ?>
                                                                </select>
                                                                <div class="m--font-danger ml_input_eh set_error" id="kppt"></div>
                                                            </div> -->
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="m-widget14">
                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Etnis</label>
                                                                <input type="text" class="form-control m-input" name="etnis" placeholder="etnis">
                                                                <div class="m--font-danger ml_input_eh set_error" id="etnis"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">penyakit</label>
                                                                <input type="text" class="form-control m-input" name="sakit" placeholder="penyakit">
                                                                <div class="m--font-danger ml_input_eh set_error" id="sakit"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Cacat</label>
                                                                <input type="text" class="form-control m-input" name="cacat" placeholder="cacat">
                                                                <div class="m--font-danger ml_input_eh set_error" id="cacat"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Golongan darah</label>
                                                                <input type="text" class="form-control m-input" name="gol_dara" placeholder="golongan darah">
                                                                <div class="m--font-danger ml_input_eh set_error" id="gol_darah"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Pendidikan terakhir</label>
                                                                <select class="form-control" name="pt">
                                                                    <option value="">--- Pilih pendidikan terakhir ---</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="SMP">SMP</option>
                                                                    <option value="SMA">SMA</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                                <div class="m--font-danger ml_input_eh set_error" id="pt"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nomor telpon</label>
                                                                <input type="text" class="form-control m-input" name="nt" placeholder="nomor telpon">
                                                                <div class="m--font-danger ml_input_eh set_error" id="nt"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Baptis</label>
                                                                <select class="form-control" name="baptis">
                                                                    <option value="">--- Pilih baptis ---</option>
                                                                    <option value="Sudah">Sudah</option>
                                                                    <option value="Belum">Belum</option>
                                                                </select>
                                                                <div class="m--font-danger ml_input_eh set_error" id="baptis"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nomor surat baptis</label>
                                                                <input type="text" class="form-control m-input" name="ns_baptis" placeholder="nomor surat baptis">
                                                                <div class="m--font-danger ml_input_eh set_error" id="ns_baptis"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Kolom</label>
                                                                <input type="text" class="form-control m-input" name="kolom" placeholder="kolom">
                                                                <div class="m--font-danger ml_input_eh set_error" id="kolom"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="m-widget14">
                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Tanggal baptis</label>
                                                                <input type="date" class="form-control m-input" name="tb">
                                                                <div class="m--font-danger ml_input_eh set_error" id="tb"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nama pendeta</label>
                                                                <input type="text" class="form-control m-input" name="np" placeholder="nama pendeta">
                                                                <div class="m--font-danger ml_input_eh set_error" id="np"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Gereja / jemaat</label>
                                                                <input type="text" class="form-control m-input" name="jemaat" placeholder="gereja">
                                                                <div class="m--font-danger ml_input_eh set_error" id="jemaat"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">SIDI</label>
                                                                <select class="form-control" name="sidi">
                                                                    <option value="">--- Pilih SIDI ---</option>
                                                                    <option value="Sudah">Sudah</option>
                                                                    <option value="Belum">Belum</option>
                                                                </select>
                                                                <div class="m--font-danger ml_input_eh set_error" id="sidi"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nomor surat SIDI</label>
                                                                <input type="text" class="form-control m-input" name="ns_sidi" placeholder="nomor surat sidi">
                                                                <div class="m--font-danger ml_input_eh set_error" id="ns_sidi"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Tanggal SIDI</label>
                                                                <input type="date" class="form-control m-input" name="tgl_sidi">
                                                                <div class="m--font-danger ml_input_eh set_error" id="tgl_sidi"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Nama pendeta</label>
                                                                <input type="text" class="form-control m-input" name="np_sidi" placeholder="nama pendeta sidi">
                                                                <div class="m--font-danger ml_input_eh set_error" id="np_sidi"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Gereja / jemaat</label>
                                                                <input type="text" class="form-control m-input" name="jemaat_sidi" placeholder="jemaat sidi">
                                                                <div class="m--font-danger ml_input_eh set_error" id="jemaat_sidi"></div>
                                                            </div>

                                                            <div class="form-group m-form__group">
                                                                <label for="exampleInputEmail1">Keterangan</label>
                                                                <textarea type="text" class="form-control m-input" name="ket" placeholder="keterangan"></textarea>
                                                                <div class="m--font-danger ml_input_eh set_error" id="ket"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions">
                                                    <div class="form-group m-form__group row">
                                                        <div class="col-xl-10 col-lg-12 ca-btn">
                                                            <button class="btn btn-success m-btn m-btn--air m-btn--custom">
                                                                <i class="fa fa-edit"></i> &nbsp;Tambah
                                                            </button>
                                                        </div>
                                                    </div>
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