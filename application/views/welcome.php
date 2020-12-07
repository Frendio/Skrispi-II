<?php
	DEFINED('BASE_URL') OR exit(header('location:403'));
	doctype();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Joie Patsy Manajang">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bukit Moria Winangun</title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Questrial&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Abel&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo+Narrow&family=Comfortaa&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

		<?php bar_icon(); ?>

		<style type="text/css">
			::selection {
			background: rgb(60,60,60);
			color: white;
			}
			* {
				margin: 0px;
				padding: 0px;
				color: #333;
				font-family: Helvetica, sans-serif;
				outline: none;
				-webkit-tap-highlight-color: rgba(0,0,0,0);
				-webkit-tap-highlight-color: transparent;
			}
			body {
				background : fixed;
			}		
			.wrapper {
				position: relative;
				position: fixed;
				top: 0px;
				left: 0px;
				overflow: hidden;
				width: 100vw;
				height: 100vh;
				background: linear-gradient(#1a001adb, #e6d1bd), url('img/slider/2.jpeg');
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}		
			.wrapper #logogmim {
				width: 100px;
				margin-bottom: 50px;
			}
			.wrapper #logogmim img {
				width: 120%;
				height: 115%;
			}
			.wrapper div:nth-child(2)  {
				color: white;
				font-family: Questrial;
				font-size: 20px;
				margin-bottom: 6px;
			}
			.wrapper div:nth-child(3)  {
				color: white;
				font-size: 50px;
				font-family: Anton;
				letter-spacing: 6px
			}
			.wrapper #explore {
				margin-top: 10px;
				color: white;
				width: 135px;
				text-align: center;
				padding: 12px 0px;
				text-decoration: none;
				border-bottom: 1px solid white;
				transition: all 290ms ease;
				border-radius: 5px;
			}
			.wrapper #explore:hover {
				color: #f4ab60;
				border-color: #888;
			}
			.wrapper #masuk {
				margin-top: 60px;
				color: #f4ab60;
				font-size: 12px;
				padding-bottom: 4px;
				border-bottom: 1px solid silver;
				text-transform: uppercase;
				letter-spacing: 2px;
				text-decoration: none; 
				transition: all 290ms ease;
			}
			.wrapper #masuk:hover {
				color: white;
				border-color: #f4ab60;
			}
			.wrapper #links {
				margin-top: 60px;
				display: flex;
			}
			.wrapper #links a {
				background: white;
				width: 32px;			
				height: 32px;
				display: flex;
				text-decoration: none;
				justify-content: center;
				align-items: center;
				margin: 0px 6px;
				border-radius: 100%;
				transition: all 290ms ease;
			}
			.wrapper #links a i {
				color: #333;
				font-size: 18px;
				transition: all 290ms ease;
			}
			.wrapper #links a:hover {
				background: none;
			}
			.wrapper #links a:hover i {
				color: #f4ab60;
			}
			@media (max-width: 850px){
				.wrapper div:nth-child(2)  {
					font-size: 18px;
				}
				.wrapper div:nth-child(3)  {
					font-size: 29px;
				}
			}
			@media (max-width: 400px){
				.wrapper div:nth-child(2)  {
					font-size: 18px;
				}
				.wrapper div:nth-child(3)  {
					font-size: 21px;
					letter-spacing: 4px;
				}
				.wrapper #explore {
					padding: 10px 0px;
					width: 120px;
					font-size: 13px;
					letter-spacing: 2px;
				}
				.wrapper #logogmim {
					width: 80px;
					height: 35px;
				}
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<a href="" id="logogmim">
				<img src="<?php echo IMAGES_PATH.'logo/logo.png'; ?>">
			</a>
			<div>Selamat Datang </div>
			<div>Website Jemaat Bukit Moria Winangun</div>
			<a id="explore" href="<?php echo BASE_URL.'beranda'; ?>">Telusuri</a>
			<a id="masuk" href="<?php echo BASE_URL.'admin'; ?>">Masuk Sebagai Admin</a>
			<div id="links">
				<div>Kunjungi Kami </div>
				<a href="https://www.youtube.com/channel/UCMcv6gOJj4tL2pg9uOiVTOw" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<a href="https://web.facebook.com/groups/350495401673" target="_blank"><i class="fa fa-facebook"></i></a>
				<!-- <a href=""><i class="fa fa-instagram"></i></a> -->
			</div>
		</div>
	</body>
</html>