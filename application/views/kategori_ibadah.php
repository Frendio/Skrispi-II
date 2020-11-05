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
		
		<marquee bgcolor="yellow">  - HUT ke-58 P/KB GMIM, 13 Oktober 2020 :
		Tema : Pria/Kaum Bapa adalah Mitra Kerja Allah. -     Lomba bertempat di Gereja.       -         Berkumpul Jam 15:00
		Yohanes 4 : 31 - 38</marquee>
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
						<a class="nav-link" href="tentang_kami.html">Tentang Kami</a>
						</li>

						<!-- <li class="nav-item">
						<a class="nav-link" href="info_jemaat.html">Informasi Jemaat</a>
						</li>
						
						<li class="nav-item">
						<a class="nav-link" href="jadwal_ibadah.html">Jadwal Ibadah</a>
						</li> -->
						<li class="nav-item">
						<a class="nav-link" href="upload/warta_jemaat/<?php echo $this->download_wj->file; ?>">Download Warta Jemaat </a>
						</li>
					</ul>
				</div>
			</div>			
		</nav>
        
		<div class="berita_home">
			<div class="container">
			<div class="home_heading text-center">
				<span class="subheading">Informasi Jemaat</span>
				<h2>Jadwal <?php echo uri2; ?></h2>
				<p>Bukit Moria Winangun</p>
			</div>

			<div class="bh_konten">
				<div class="row">
					<div class="col-md-12">
						<div class="bh_item">
							<table border="2" style="width:100%;">
								<tr>
									<th>No</th>
									<th>Nama pembicara</th>
									<th>Tanggal</th>
									<th>Jam</th>
									<th>Tempat</th>
									<th>Keterangan</th>
								</tr>

								<?php
									$no = 0;
									foreach($kategori as $row)
									{
										$no++;
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
											<td><?php echo set_data($tempat_ibadah); ?></td>
											<td><?php echo set_data($catatan); ?></td>
										</tr>

								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		
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
							<li><a href="tentang_kami.html" class="py-1 d-block"><span class=""></span></a></li>
							<li><a href="info_jemaat.html" class="py-1 d-block"><span class=""></span</a></li>
							<li><a href="jadwal_ibadah.html" class="py-1 d-block"><span class=""></span></a></li>

							
						</ul>
						
						</div>
						
					</div>
				
				
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Agenda Ibadah</h2>
						<div class="opening-hours">
							<p>Saturday Prayer Meeting: <span class="mb-3">10:00 am to 11:30 am</span></p>
							<p>Sunday Service: <span class="mb-3">8:30 am to 11:30 am</span></p>
							<p>Monday Service: <span class="mb-3">8:30 am to 11:30 am</span></p>
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