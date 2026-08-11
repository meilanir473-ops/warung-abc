<?php
session_start();
include 'includes/cek_session.php';
include 'config/koneksi.php';

$nama = mysqli_real_escape_string($koneksi,$_POST['nama_pelanggan']);
$hp = mysqli_real_escape_string($koneksi,$_POST['no_hp']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);

$sql = "INSERT INTO tbl_pelanggan (nama_pelanggan,no_hp,alamat)";
$sql .=" VALUES ('$nama','$hp','$alamat')";

if (mysql_query($koneksi,$sql)) {
    $id_user = $_SESSION['id_user'];
    $waktu = date('Y-m-d H:i:s');
    $
}