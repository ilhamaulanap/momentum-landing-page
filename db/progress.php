<?php
$progress_kf = 0;
$progress_hc = 0;
if (isset($_SESSION['user_id'])) {
$user_id = $_SESSION['user_id'];
 include '../controller/conn.php';
 $sql_e = "SELECT * FROM data_user WHERE user_id = '$user_id'";
 $res_e = mysqli_query($conn, $sql_e);
 if (mysqli_num_rows($res_e) > 0) {
  $progress_kf = $progress_kf + 0; 	}
}
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
     include '../controller/conn.php';
     $sql_e = "SELECT * FROM data_user WHERE user_id = '$user_id'";
     $res_e = mysqli_query($conn, $sql_e);
     if (mysqli_num_rows($res_e) > 0) {
      $progress_hc = $progress_hc + 0; 	}
    }
?>