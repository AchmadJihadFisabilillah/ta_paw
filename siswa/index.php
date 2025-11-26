<?php
session_start();

// BUAT CEK LOGIN DI SINI SAJA
if (!isset($_SESSION['isSiswa']) || $_SESSION['isSiswa'] !== true) {
    require_once '../cekLogin.inc';
    exit();
}
require_once "../includes/header.php";
require_once "../includes/navbarSiswa.php";
require_once '../homePage.php';
require_once '../includes/footer.php';
if(!isset($_SESSION['isSiswa']) || $_SESSION['isSiswa']!=true){
    require_once '../cekLogin.inc';
    exit();
}
?>