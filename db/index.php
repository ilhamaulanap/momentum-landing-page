<?php session_start();
?>
<?php include 'progress.php' ?>
<?php
	// require_once "../controller/config.php";

	// if (!isset($_SESSION['user_name'])) {
	// 	header('Location: .index.php');
	// 	exit();
  // } 
  
  $msg = "";
    $r_email = "";
    
    ?>
    
<?php
include 'head.php'; 
?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>M</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Momentum</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="dist/img/default.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the asal_sekolah on small devices so only the image appears. -->
                <span class="hidden-xs"><?php if (isset($_SESSION['user_name'])) {
                  echo $_SESSION['user_name'];
                } 
                else {
                  echo "User";
                }?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="dist/img/default.jpg" class="img-circle" alt="User Image">

                  <p>
                    <?php if (isset($_SESSION['user_name'])) {
                      echo $_SESSION['user_name'];
                    } 
                    else {
                      echo "User";
                    }?>
                    <small>Member Sejak <?php if (isset($_SESSION['user_regdate'])){
                    echo $_SESSION['user_regdate'] ;
                    } 
                    else {
                      echo "tidak terdaftar";
                    }
                    ?>


                    </small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="setting.php" class="btn btn-default btn-flat"><i class="fas fa-tools"></i> Setting</a>
                  </div>
                  <div class="pull-right">
                    <a href="../logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fas fa-caret-down"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/default.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php if (isset($_SESSION['user_name'])) {
              echo $_SESSION['user_name'];
            } 
            else {
              echo "User";
            }?></p>
            <!-- Status -->
            <a href="#" class="disabled"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-book"></i> <span>Kuis Fisika</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="data-peserta-kf.php"><i class="fab fa-digital-ocean"></i> Pengisian Data Peserta</a></li>
              <li><a href="upload-berkas-kf.php"><i class="fab fa-digital-ocean"></i> Upload Berkas</a></li>
              <li><a href="cetak-kartu-kf.php"><i class="fab fa-digital-ocean"></i> Cetak Kartu Peserta</a></li>
              <li><a href="#"><i class="fab fa-digital-ocean"></i> <span>Ujian</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-soccer-ball-o"></i> <span>Himafi Cup</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="data-peserta-hc.php"><i class="fab fa-digital-ocean"></i> Pengisian Data Peserta</a></li>
              <li><a href="upload-berkas-hc.php"><i class="fab fa-digital-ocean"></i> Upload Berkas</a></li>
              <li><a href="cetak-kartu-hc.php"><i class="fab fa-digital-ocean"></i> Cetak Kartu Peserta</a></li>
            </ul>
          </li>

          <li><a href="cetak-sertifikat.php"><i class="fa fa-paperclip"></i> <span>Cetak Sertifikat</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-question"></i> <span>Bantuan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="faq.php"><i class="fab fa-digital-ocean"></i> FAQ</a></li>
              <li><a href="kontak-kami.php"><i class="fab fa-digital-ocean"></i> Kontak Kami</a></li>
            </ul>
          </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Selamat Datang
          <small><?php if (isset($_SESSION['user_name'])) {
            echo $_SESSION['user_name'];
          } 
          else {
            echo "User";
          }?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          <li>Himafi Cup 2019</li>
          <li class="active"><a href="upload-berkas-hc.php">Upload Berkas</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!-------------------------------------------------------------
        | asal sekolah, asal kota, nama peserta 1, no telp, id line,  |
        | nama peserta 2, no telp, id line, nama pembina, no telp,    |
        | email, tipe penyisihan                                      |
        --------------------------------------------------------------->
        <section class="content container-fluid">

          <!--------------------------
        | pilihan = 1 = KF || 2 = HC |
        -------------------------->
          <?php 
          include '../controller/conn.php';
          if(isset($_SESSION['user_id'])){
          $user_id = $_SESSION['user_id'];
          $stmt = $conn->prepare("SELECT * FROM pilihan WHERE user_id = $user_id");
          $stmt->execute();
          $result = $stmt->get_result();
          $user = $result->fetch_object();
          $sql_e = "SELECT * FROM pilihan WHERE user_id = '$user_id'";
          $res_e = mysqli_query($conn, $sql_e);
          if (mysqli_num_rows($res_e) > 0) {	                                  
          if($user->pilihan = 1){                               ?>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class=" small-box bg-green">
                <div class="inner">
                  <h3>Guidebook</h3>
                  <p>Kuis Fisika 2019</p>
                </div>
                <div class="icon">
                  <i class="ion ion-code-download"></i>
                </div>
                <a href="../db/dokumen/GuidebookKF2019.pdf" class="small-box-footer">Download <i class="fa fa-arrow-circle-down"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class=" small-box bg-blue">
                <div class="inner">
                  <h3>Kisi-Kisi</h3>
                  <p>Kuis Fisika 2019</p>
                </div>
                <div class="icon">
                  <i class="ion ion-code-download"></i>
                </div>
                <a href="../db/dokumen/SilabusKF2019.pdf" class="small-box-footer">Download <i class="fa fa-arrow-circle-down"></i></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <i class="fa fa-info"></i>

                  <h3 class="box-title">Pendaftaran Kuis Fisika</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Perhatian!</h4>
                    Silakan untuk melakukan pembayaran terlebih dahulu ke no rek BRI 6422-01-01-18-96-537 Atas nama Irana Susanti kalau tidak melakukan pembayaran maka data peserta tidak akan dihiraukan oleh panitia, harap konfirmasi kepada panitia setelah melakukan pembayaran (Cp:085708008392)
                  </div>

                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar"
                      aria-valuenow="<?php echo $progress_kf; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_kf; ?>%"><?php echo $progress_kf; ?>%</div>
                  </div>
                  <ul>
                    <li>Pengisian Data Peserta </i></li>
                    <li>Upload Berkas Yang diperlukan</li>
                    <li>Cetak Kartu Peserta</li>
                    <li>Pengecekan oleh Panitia</li>
                    <li>Ujian</li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>


          <?php          } elseif ($user->pilihan = 2){           ?>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class=" small-box bg-orange">
                <div class="inner">
                  <h3>Juknis</h3>
                  <p>HIMAFI Cup 2019</p>
                </div>
                <div class="icon">
                  <i class="ion ion-code-download"></i>
                </div>
                <a href="#" class="small-box-footer">Download <i class="fa fa-arrow-circle-down"></i></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <i class="fa fa-info"></i>

                  <h3 class="box-title">Progress Pendaftaran Himafi Cup</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Perhatian!</h4>
                    Silakan untuk mendaftarkan tim terbaik anda dengan mengikuti link dibawah ini.
                  </div>

                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar"
                      aria-valuenow="<?php echo $progress_hc; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_hc; ?>%"><?php echo $progress_hc; ?>%</div>
                  </div>
                  <ul>
                    <li>Pengisian Data Peserta <i class="fa fa-check"></i></li>
                    <li>Upload Berkas Yang diperlukan</li>
                    <li>Cetak Kartu Peserta</li>
                    <li>Pengecekan oleh Panitia</li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          <?php }                                                 ?>

          <?php    }else {                                                               ?>
          <div class="row text-center">
            <div class="col-md-5">
              <div class="box box-default">
                <div class="box-header with-border">
                  <i class="fa fa-warning"></i>

                  <h3 class="box-title">Pilih Lomba</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <div class=" small-box bg-maroon">
                    <div class="inner">
                      <h3>KF</h3>
                      <p>Kuis Fisika 2019</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-ios-book"></i>
                    </div>
                    <a href="pilih-kf.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                  <div class=" small-box bg-blue">
                    <div class="inner">
                      <h3>HC</h3>
                      <p>HIMAFI Cup 2019</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-ios-baseball"></i>
                    </div>
                    <a href="pilih-hc.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
                  </div>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          <?php         }    }                                                                   ?>





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Fisika Universitas Airlangga - Surabaya
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href=".index.php">Momentum.</a></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fas fa-tools"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Progress Pendaftaran</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Kuis Fisika
                <span class="pull-right-container">
                  <span class="label label-danger pull-right"><?php echo $progress_kf; ?>%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: <?php echo $progress_kf; ?>%"></div>
              </div>
            </a>
          </li>
        </ul>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Himafi Cup
                <span class="pull-right-container">
                  <span class="label label-danger pull-right"><?php echo $progress_hc; ?>%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: <?php echo $progress_hc; ?>%"></div>
              </div>
            </a>
          </li>
        </ul>
        <h3 class="control-sidebar-heading">Jadwal Pertandingan</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fas fa-running bg-red"></i></i>

              <div class="menu-info">
                <h6 class="control-sidebar-subheading">SMA 1 Surabaya VS<br> SMA 3 Surabaya</h6>

                <p>23 April 2019 jam 13.00</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Tetap Login
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Sesi Login anda akan kami save pada database untuk beberapa saat (experimental)
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- wrapper -->

  <?php include 'script.php' ?>
</body>

</html>