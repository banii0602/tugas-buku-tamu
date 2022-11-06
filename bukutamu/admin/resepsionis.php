<?php 
session_start();
require 'functions.php';


$resepsionis = query("SELECT * FROM resepsionis");

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h3>Resepsionis</h3>
    <a href="tambah_resepsionis.php" class="tambah">Tambah Data</a>
    <table>
      <tr>
        <th>No.</th>
        <th>Username</th>
        <th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Roles</th>
        <th>Aksi</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach($resepsionis as $data) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $data["username"]; ?></td>
        <td><?= $data["nama_lengkap"]; ?></td>
        <td><?= $data["kelas"]; ?></td>
        <td><?= $data["roles"]; ?></td>
        <td>
          <a href="edit_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>" class="edit">Edit</a>
          <a href="hapus_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </table>
</div>