<?php 
session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
  if(tambahGtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil ditambahkan');
          window.location = 'gtk.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal ditambahkan');
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
      
      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
      
      <label for="job">Job</label>
      <input type="text" name="job" id="job" class="form-control">

      <label for="roles">Roles</label>
      <select name="roles" class="form-control">
        <option value="Kepsek">Kepsek</option>
        <option value="WalKep">WalKep</option>
        <option value="Guru">Guru</option>
      </select>

      <label for="foto">Foto</label>
      <input type="file" name="foto" id="foto" class="form-control">

      <button type="submit" name="kirim">Tambah</button>
    </form>
    </div>
</div>