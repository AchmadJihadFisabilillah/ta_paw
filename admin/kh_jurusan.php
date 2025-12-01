<?php
    require_once 'cekLoginAdmin.php';
    require_once '../database.php';
    require_once '../includes/header.php';
    require_once '../includes/navbarAdmin.php';
    $id_jurusan=$_GET['ID_JURUSAN'];
    
    $stmnt=$pdo->prepare("SELECT NAMA_JURUSAN FROM jurusan WHERE ID_JURUSAN = :ID_JURUSAN");
    $stmnt->execute([
      ':ID_JURUSAN'=>$id_jurusan
    ]);
    $jurusan=$stmnt->fetch();

// pengecekan jika ada siswa yang terdaftar di jurusan maka tidak bisa di hapus jurusannya

    $stmnt2=$pdo->prepare("SELECT ID_PENDAFTARAN FROM pendaftaran WHERE ID_JURUSAN = :ID_JURUSAN");
    $stmnt2->execute([
      ':ID_JURUSAN'=>$id_jurusan
    ]);
    
    $jumlah=$stmnt2->rowCount();
    if ($jumlah > 0):
?>
<div class="kh_kebutuhan">
  <div>
    <th>
      <h1>Ada Siswa yang mendaftar di jurusan ini ?</h1>
    </th>
    <table>
      <tr>
          <td><?= $jurusan["NAMA_JURUSAN"] ?></td>
          <td class="khk_gap">
            <a href="jurusan.php" class="khk_tidak">
              Kembali
            </a>
          </td>
      </tr>
    </table>
  </div>
</div>

<?php else: ?>

<div class="kh_kebutuhan">
  <div>
    <th>
      <h1>Apakah Anda Yakin Untuk Menghapus Jurusan Ini?</h1>
    </th>
    <table>
      <tr>
          <td><?= $jurusan["NAMA_JURUSAN"] ?></td>
          <td class="khk_gap">
            <a href="hapus_jurusan.php?ID_JURUSAN=<?=$id_jurusan?>" class="khk_hapus">
              Hapus
            </a>
            <a href="jurusan.php" class="khk_tidak">
              Tidak
            </a>
          </td>
      </tr>
    </table>
  </div>
</div>
<?php endif ?>