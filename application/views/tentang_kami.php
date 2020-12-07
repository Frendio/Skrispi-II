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
		
		<marquee bgcolor="yellow">  - Telah Meninggal Dunia :-------------------------------umur 25 tahun.
		
		
		- Jemaat Mengalami Sakit : ---------------------------------------. 
		</marquee>
		<title>GEREJA | GMIM BUKIT MORIA WINANGUN</title>
	</head>


	<body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.html"> <img src="<?php echo IMAGES_PATH; ?>logo/logo.png" alt="image" height ="50" width="55"></i> GMIM<span></span></a>
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
  </nav>


  <div  class="page_cover parallax-window" data-parallax="scroll" style="background-image: url(<?php echo IMAGES_PATH; ?>banner/bg_4.jpg);">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="page_cover_content">
                    <h3>
                       Tentang Kami
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="beranda">Beranda</a>   |  </li>
                <li><span>Tentang</span></li>
            </ul>
        </div>
    </div>
</div>
        
        <div class="berita_home">
          <div class="container">
            <div class="home_heading text-center">
              <h2 class="subheading" style="font-size:20px;">Tentang Kami</h2>
            </div>
      
            <div class="bh_konten">
              <div class="row">
                <div class="col-md-12">
                  <div class="bh_item">
                    <h4 style="line-height:50px;">
                    Gereja Masehi Injili di Minahasa (GMIM) "Bukit Moria" Winangun, yang berada di Kelurahan Winangun Dua adalah salah satu jemaat GMIM yang berdiri tanggal 27 Mei 1984, yang merupakan pemekaran dari GMIM "Sion" Winangun di Kelurahan Winangun Satu.
Puji syukur kepada Tuhan Yesus Kristus sebagai Kepala Gereja, yang telah menuntun dan memberkati kehidupan jemaat sehingga saat ini telah berkembang menjadi 17 kolom dan senantiasa dimampukan untuk membangun PERSEKUTUAN, KESAKSIAN & PELAYANAN.
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<div class="page">
    <!-- <div class="container">
      <div class="page_konten">
        <div class="about">
          <div class="row">
            <div class="col-md-5">
              <div class="about_img">
                <img src="img/banner/about.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-md-7">
              <div class="about_konten">
                <h2 class="heading">GMIM <span>Bukit Moria</span> Winangun</h2>
                <p class="text-justify">
                #
                </p>

                <p class="text-justify">
                 #
                </p>

                <p class="text-justify">
                 #
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
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