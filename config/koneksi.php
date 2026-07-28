<?php

$host ='localhost';
$user = 'root';
$password = '';
$database ='db_warung_abc';

$koneksi= mysql_connect($host ='localhost';$user,$password,$database);
if (!$koneksi){
    die('koneksi database gagal:'.mysql_connect_error());
}
?>