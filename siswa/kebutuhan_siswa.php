<?php
    require_once '../database.php';
    require_once '../includes/header.php';
    require_once '../includes/navbarSiswa.php';
    $kebutuhan=kebutuhan();
?>
<div class="kebutuhan_siswa">
    <div>
    <h1>Daftar Kebutuhan SMA Bakti Wiyata</h1>
    <table>
        <tr>
            <th>Kode</th>
            <th>Kebutuhan</th>
        </tr>
        <?php foreach($kebutuhan as $data):?>
        <tr>
            <td><?php echo $data['ID_KEBUTUHAN']?></td>
            <td><?php echo $data['NAMA_KEBUTUHAN']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</div>