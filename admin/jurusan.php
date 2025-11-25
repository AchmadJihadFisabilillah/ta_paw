<!-- halaman untuk menampilkan daftar jurusan -->
<?php
    require_once '../database.php';
    require_once '../includes/header.php';
    require_once '../includes/navbarAdmin.php';
    $jurusan=jurusan();
?>
<div class="jurusan">
    <div>
    <h1>Daftar Jurusan</h1>
    <table>
        <tr>
            <th>Kode</th>
            <th>Nama Jurusan</th>
            <th>Kouta</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($jurusan as $data):?>
        <tr>
            <td><?= $data['ID_JURUSAN'] ?></td>
            <td><?= $data['NAMA_JURUSAN'] ?></td>
            <td><?= $data['KUOTA_JURUSAN'] ?></td>
            <td>
                <a href="edit_jurusan.php?ID_JURUSAN=<?=$data['ID_JURUSAN']?>&KUOTA_JURUSAN=<?=$data['KUOTA_JURUSAN']?>">
                    Edit
                </a>
                <a href="hapus_jurusan.php?ID_JURUSAN=<?=$data['ID_JURUSAN']?>">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<<<<<<< HEAD
    <a href="tambah_jurusan.php"><button>Tambah Jurusan</button></a>
    </div>
=======
    <a href="tambah_jurusan.php">Tambah Jurusan</a>
>>>>>>> 7e3e456c78ea83d38f1d37f80c88a4259aa52265
</div>