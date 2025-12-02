<?php
    require_once 'cekLoginAdmin.php';
    require_once '../database.php';
    require_once '../includes/header.php';
    require_once '../includes/navbarAdmin.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['keluar'])){
            session_destroy();
            header("Location:../index.php");
            exit();
        }else{
            header("Location:index.php");
            exit();
        }
    }
?>
<div class="kl_A">
    <div>
        <h2>Apakah Anda Yakin Mau Keluar Dari Akun Ini</h2>
        <div class="kl_gap">
            <form method="POST">
                <button class="ya_kl_a" name="keluar">Ya Laogut</button>
                <button class="tdk_kl_a" name="tidak">Tidak</button>
            </form>
        </div>
    </div>
</div>