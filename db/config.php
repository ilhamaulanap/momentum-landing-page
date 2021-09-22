<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

//melakukan koneksi ke database
$conn = new mysqli("sql222.main-hosting.eu", "u592694108_momen", "HIMAFIua123", "u592694108_momen");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
?>