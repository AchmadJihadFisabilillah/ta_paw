<!-- halaman untuk menampilkan daftar kebutuhan -->
<?php
    require_once '../database.php';
    require_once '../includes/header.php';
    require_once '../includes/navbarAdmin.php';
    $kebutuhan=kebutuhan();
?>
<div class="kebutuhan">
    <div>
    <h1>Daftar Kebutuhan</h1>
    <table>
        <tr>
            <th>Kode</th>
            <th>Kebutuhan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($kebutuhan as $data):?>
        <tr>
            <td><?php echo $data['ID_KEBUTUHAN']?></td>
            <td><?php echo $data['NAMA_KEBUTUHAN']?></td>
            <td>
                <a href="hapus_kebutuhan.php?ID_KEBUTUHAN=<?=$data['ID_KEBUTUHAN']?>">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<<<<<<< HEAD
    <a href="tambah_kebutuhan.php"><button>Tambah Kebutuhan</button></a>
    </div>
=======
    <a href="tambah_kebutuhan.php">Tambah Kebutuhan</a>
>>>>>>> 7e3e456c78ea83d38f1d37f80c88a4259aa52265
</div>