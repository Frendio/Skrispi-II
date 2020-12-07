<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<?php base_url(); ?>
		<meta charset="utf-8">
		<link rel="icon shortcut" type="" href="img/logo/logo.png" style="width: 50px;">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<?php
		title('Bukit Moria | Beranda');
			css('css/bootstrap.min');
			css('css/main');
			css('fonts/mdi/css/materialdesignicons.min');
			css('fonts/font-awesome/css/font-awesome');
			css('fonts/linericon/style');
			css('fonts/flaticon');
			css('css/animate');
			css('fonts/flaticon');
			css('css/baguetteBox.min');
			css('new');
			bar_icon();
		?>
		
		<marquee bgcolor="yellow">  - Syalommm.
		
		
		- Seputar Jemaat Bukit Moria Winangun : ---------------------------------------. 
		</marquee>
		<title>GEREJA | GMIM BUKIT MORIA WINANGUN</title>
	</head>


	<body>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="beranda" ><img src="<?php echo IMAGES_PATH; ?>logo/logo.png"  width=55 height="50" alt=""> GMIM</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
						<a class="nav-link" href="beranda">Beranda<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="beranda/tentang_kami">Tentang Kami</a>
						</li>

						<!-- <li class="nav-item">
						<a class="nav-link" href="info_jemaat.html">Informasi Jemaat</a>
						</li>
						
						<li class="nav-item">
						<a class="nav-link" href="jadwal_ibadah.html">Jadwal Ibadah</a>
						</li> -->
						<li class="nav-item">
						<a class="nav-link" href="upload/warta_jemaat/<?php echo $this->download_wj->file; ?>">Download <?php echo $this->download_wj->file; ?> </a>
						</li>
					</ul>
				</div>
			</div>			
		</nav>

		<div id="sliderHome" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#sliderHome" data-slide-to="0" class="active"></li>
				<li data-target="#sliderHome" data-slide-to="1"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active" style="background-image:url(<?php echo IMAGES_PATH; ?>slider/3.jpeg);">
					<div class="slider_item text-center">
						<div class="text">
						
							<div class="subheading">
							<span>BUKIT MORIA WINANGUN</span>
							</div>
							<h1 class="mb-4"> MENJABARKAN TRILOGI PEMBANGUNAN JEMAAT<span></span>  :</h1>
							<p>Tema Bulanan :

							"Mememelihara Keutuhan Ciptaan"
							
							
				
							</p>
							<p><a href="beranda/tentang_kami" class="btn btn-primary btn-outline-primary py-2 px-4">Tentang Kami</a> <a href="beranda/#jadwal" class="btn btn-primary btn-outline-primary py-2 px-4">Jadwal Ibadah</a></p>
						</div>
					</div>
				</div>

				<div class="carousel-item" style="background-image:url(<?php echo IMAGES_PATH; ?>slider/2.jpeg);">
					<div class="slider_item text-center">
						<div class="text">
							<div class="subheading">
							<span>Bukit Moria Winangun</span>
							</div>
							<h1 class="mb-4">MENJABARKAN TRILOGI PEMBANGUNAN JEMAAT<span></span> </h1>
							<p>
							Tema Bulanan :

							"Mememelihara Keutuhan Ciptaan"
							</p>
							<p><a href="beranda/tentang_kami" class="btn btn-primary btn-outline-primary py-2 px-4">Tentang Kami</a> <a href="beranda/#jadwal" class="btn btn-primary btn-outline-primary py-2 px-4">Jadwal Ibadah</a></p>
						</div>
					</div>
				</div>			
			</div>			
		</div>

		<div class="welcome">
			<div class="row">
				<div class="col-md-6">
				<div class="welcome_img">
					<img src="<?php echo IMAGES_PATH; ?>slider/1.jpeg" class="img-fluid" alt="">
				</div>
				</div>
				<div class="col-md-6">
				<div class="welcome_konten justify-content-end align-items-center">
					<h4 class="heading"> Khotbah Minggu ini : <span>“<?php echo $renungan->judul; ?>”


					<?php echo $renungan->ayat; ?></span>  </h4>
					<div class="welcome_text">
					<p>
						<?php echo $renungan->ringkasan; ?>
					</p>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="berita_home">
			<div class="container">
			<div class="home_heading text-center">
				<span class="subheading">Informasi Jemaat</span>
				<h2>Selamat Ulang Tahun</h2>
				<p>Bukit Moria Winangun</p>
			</div>

			<div class="bh_konten">
				<div class="row">
					<div class="col-md-12">
						<div class="bh_item">
							<table border="2" style="width:100%;">
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Tanggal lahir</th>
								</tr>

								<?php
									$no = 0;
									foreach($birthday as $row)
									{
										$no++;
										$nama_ulta	= $row->nama_anggota;
										$birthday	= $row->tanggal_lahir;

										?>

										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo set_data($nama_ulta); ?></td>
											<td><?php echo set_data($birthday); ?></td>
										</tr>

								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="berita_home">
			<div class="container">
			<div class="home_heading text-center">
				<span class="subheading">Informasi Jemaat</span>
				<h2>Jemaat Sakit & Meninggal</h2>
				<p>Bukit Moria Winangun</p>
			</div>

			<div class="bh_konten">
				<div class="row">
					<div class="col-md-12">
						<div class="bh_item">
							<table border="2" style="width:100%;">
								<tr>
									<th>No</th>
									<th>Nama anggota jemaat</th>
									<th>Sakit / meninggal</th>
									<th>Keterangan</th>
								</tr>

								<?php
									$no = 0;
									foreach($SM_minggu as $row)
									{
										$no++;
										$nama_anggota	= $row->nama_anggota;
										$jenis_status	= $row->jenis_status;
										$keterangan		= $row->keterangan;

										?>

										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo set_data($nama_anggota); ?></td>
											<td><?php echo set_data($jenis_status); ?></td>
											<td><?php echo set_data($keterangan); ?></td>
										</tr>

								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		<section class="ftco-intro img" id="events-section" style="background-image: url(<?php echo IMAGES_PATH; ?>slider/3.jpeg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light ftco-event" id="jadwal">
			<div class="container-fluid px-4 ftco-to-top">
				<div class="row justify-content-center pb-5">
				<div class="col-md-12 home_heading text-center ftco-animate">
					<span class="subheading"></span>
					<h2 id="jadwal" class="mb-5">Jadwal Ibadah & Pelayanan</h2>
				</div>
				</div>
				<p class="mb-0"><a href="" class=""></a></p>

				<div class="row">
					<?php
						foreach($jadwal_ibadah as $row)
						{
							$id_jadwal		= $row->id_jadwal;
							$tanggal		= $row->tanggal;
							$waktu_m		= $row->waktu_mulai;
							$waktu_s		= $row->waktu_selesai;
							$khotbah		= $row->khotbah;
							$tipe_ibadah	= $row->tipe_ibadah;
							$tempat_ibadah	= $row->tempat_ibadah;
							$catatan		= $row->catatan;

							$link	= strtolower($tipe_ibadah);
							$link	= str_replace(' ', '-', $link);

							?>

							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="event-wrap d-flex ftco-animate">
									<div class="img" style="background-image: url(<?php echo IMAGES_PATH; ?>event/event-1.jpg);"></div>
									<div class="text p-4 d-flex align-items-center">
										<div>
											<span class="time"><?php echo set_data($waktu_m.' - '.$waktu_s); ?></span>
											<h4><a href="jadwal/<?php echo str_replace(' ', '-', $tipe_ibadah); ?>"><?php echo set_data($tipe_ibadah); ?></a></h4>
											<?php if(strtolower($tipe_ibadah) !== 'ibadah kolom') { ?>
												<div class="meta">
													<p><span class="icon-user mr-1"></span> Khotbah: <a><?php echo set_data($khotbah); ?></a></p>
													<p><span class="icon-location"></span> Location : <?php echo set_data($tempat_ibadah); ?></p>
													<p class="mb-0"><?php echo set_data($catatan); ?></a></p>
												</div>
											<?php } else { ?>
												<div class="meta">
													<p><span class="icon-user mr-1"></span><a href="jadwal/<?php echo str_replace(' ', '-', $tipe_ibadah); ?>">(Lihat daftar ibadah kolom)</a></p>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
				</div>
			</div>
		</section>




		<div class="pendeta_home">
			<div class="container">
				<div class="home_heading text-center">
					<span class="subheading">---------------</span>
					<h2>Daftar Kegiatan Jemaat</h2>
					<p></p>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="bh_item">
							<table border="2" style="width:100%;">
								<tr>
									<th>No</th>
									<th>Jenis kegiatan</th>
									<th>Tempat kegiatan</th>
									<th>Tanggal kegiatan</th>
									<th>Waktu kegiatan</th>
								</tr>

								<?php
									$no = 0;
									foreach($kegiatan as $row)
									{
										$no++;
										$jenis_kegiatan		= $row->jenis_kegiatan;
										$tempat_kegiatan	= $row->tempat_kegiatan;
										$tanggal_kegiatan	= $row->tanggal_kegiatan;
										$waktu_kegiatan		= $row->waktu_kegiatan;

										?>

										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo set_data($jenis_kegiatan); ?></td>
											<td><?php echo set_data($tempat_kegiatan); ?></td>
											<td><?php echo set_data($tanggal_kegiatan); ?></td>
											<td><?php echo set_data($waktu_kegiatan); ?></td>
										</tr>

								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="about_home text-center" style="background-image: url(<?php echo IMAGES_PATH; ?>banner/bg_4.jpg);">
			<div class="ah_konten">
			<div class="ah_heading">
				<h2>GMIM Bukit Moria</h2>
				<i>Tentang Kami</i>
			</div>

			<div class="ah_item">
				<p>
				The Christian Evangelical Church in Minahasa (Gereja Masehi Injii di Minahasa) is a Protestant, Calvinist and Reformed church in Indonesia. It was founded in North Sulawesi on 30 September 1934.
Christianity was introduced to Minahasa by Johann Friedrich Riedel and Johann Gottlieb Schwarz. They were educated in the Netherlands and were sent by the Netherlands Missionary Society. By the 1880s the Christian population grew to 80,000. In 1876 it became part of the colonial state church the Protestant Church in Indonesia. The first synod was in 1934, at which it adopted its current name. Sister church relations were established with the Reformed Church in the Netherlands, Lutheran World Federation, Presbyterian Church in Korea, Reformed Church in America, and Uniting Church in Australia.
Membership of the church is 850,000 in 839 parishes.
The Christian Evangelical Church in Minahasa is a member of World Communion of Reformed Churches.
				</p>

				<a class="" href=""></a>

			</div>
			</div>
		</div>
			

		<!-- <div class="video_home">
			<div class="container">
			<div class="home_heading text-center">
				<span class="subheading">Video</span>
				<h2>Renungan Singkat</h2>
			</div>

			<div class="vh_konten mt-5">
				<iframe width="100%" height="400" src="https://www.youtube.com/embed/sIaT8Jl2zpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			</div>
		</div> -->



		<footer class="ftco-footer ftco-bg-dark ftco-section mt-3">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2 logo"><span>GMIM</span>BUKIT MORIA WINANGUN </h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="mdi mdi-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="mdi mdi-instagram"></span></a></li>
							<a class="nav-link" href="http://www.unklab.ac.id/" ><img src="icon.png"  width="30" height="30" alt=""> FIK Unklab</a> 


						</ul>
						</div>
						
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2"></h2>
						<ul class="list-unstyled">
							<li><a href="beranda" class="py-1 d-block"><span class=""></span></a></li>
							<li><a href="beranda/tentang_kami" class="py-1 d-block"><span class=""></span></a></li>
							<li><a href="info_jemaat.html" class="py-1 d-block"><span class=""></span</a></li>
							<li><a href="jadwal_ibadah.html" class="py-1 d-block"><span class=""></span></a></li>

							
						</ul>
						
						</div>
						
					</div>
				
				
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Agenda Ibadah</h2>
						<div class="opening-hours">
							<p><span class="mb-3"></span></p>
							<p>Sunday Service: <span class="mb-3">8:30 am to 11:30 am</span></p>
							<p> <span class="mb-3">8:30 am to 11:30 am</span></p>
						</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	

	


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<?php
			js('bm/jquery-3.4.1.slim.min');
			js('bm/popper.min');
			js('bm/bootstrap.min');
			js('bm/baguetteBox.min');
		?>
		<script> baguetteBox.run('.tz-gallery'); </script>

		<script>
			// When the user scrolls down 20px from the top of the document, slide down the navbar
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
					$('body').addClass("fixed-nav");
				} else {
					$('body').removeClass("fixed-nav");
				}
			}
		</script>   
	</body>
</html>