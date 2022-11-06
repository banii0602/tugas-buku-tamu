<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
  if(editGtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil diubah');
          window.location = 'gtk.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal diubah');
          window.location = 'gtk.php';
        </script>
    ";
  }
}


?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Tambah Data</h3>

    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>">
      
      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"]; ?>">
      
      <label for="job">Job</label>
      <input type="text" name="job" id="job" class="form-control" value="<?= $gtk["job"]; ?>"> 

      <label for="roles">Roles</label>
      <select name="roles" class="form-control" value="<?= $gtk["roles"]; ?>">
        <option value="Kepsek">Kepsek</option>
        <option value="WalKep">WalKep</option>
        <option value="Guru">Guru</option>
      </select>

      <label for="foto">foto</label>
      <input type="file" name="foto" id="foto" class="form-control" value="<?= $gtk["foto"]; ?>">

      <button type="submit" name="kirim">Edit</button>
    </form>
    </div>
</div>