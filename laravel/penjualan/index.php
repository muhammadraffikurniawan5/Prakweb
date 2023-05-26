<?php
include_once 'dbkoneksi.php';

include_once('Models/Produk.php');
include_once('navbar.php');
include_once('sidebar.php');

// lakukan request halaman di menu url dengan membuka terlebih
// dahulu file index.php
$hal = $_REQUEST['hal'];
// jika ada request dari url browser berupa HAL
// tampilkan halaman sesuai request
if(!empty($hal)) {
    include_once $hal . '.php';
    // include_once 'produk.php';
}else{
// jika tidak ada request hal dari url browser
// tampilkan halaman home
include_once('home.php');
}

include_once('footer.php');
?>