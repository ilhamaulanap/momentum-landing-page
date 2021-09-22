<?php session_start();
?>
<?php 
<?php session_start();
?>
<?php 
include '../controller/conn.php';
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $conn->query( "INSERT INTO pilihan (user_id,pilihan,pembayaran) 
    Values ($user_id,'2','0')");
    header("location: ./index.php");
}
else{
    header("location: ../login.php");
}


?>
?>