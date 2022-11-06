<?php 
session_start();
require 'functions.php';

$gtk = query("SELECT * FROM gtk");

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h3>Data GTK</h3>
    <a href="tambah_gtk.php" class="tambah">Tambah Data</a>
    <table>
      <tr>
        <th>No.</th>
        <th>Nama Lengkap</th>
        <th>Job</th>
        <th>Roles</th>
        <th>Foto</th>
        <th>Akso</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach($gtk as $data) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $data["nama_lengkap"]; ?></td>
        <td><?= $data["job"]; ?></td>
        <td><?= $data["roles"]; ?></td>
        <td><img src="../foto/<?= $data["foto"]; ?>" alt="" width="80px"></td>
        <td>
          <a href="edit_gtk.php?id=<?= $data["id_gtk"]; ?>" class="edit">Edit</a>
          <a href="hapus_gtk.php?id=<?= $data["id_gtk"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </table>
</div>