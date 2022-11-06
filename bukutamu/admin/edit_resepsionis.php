<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$resepsionis = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(isset($_POST["kirim"])){
  if(editResepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil diubah');
          window.location = 'resepsionis.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal diubah');
          window.location = 'resepsionis.php';
        </script>
    ";
  }
}


?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Tambah Data</h3>

    <form action="" method="POST">
      <input type="hidden" name="id_resepsionis" value="<?= $resepsionis["id_resepsionis"]; ?>">
      
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control" value="<?= $resepsionis["username"]; ?>">

      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $resepsionis["nama_lengkap"]; ?>">

      <label for="kelas">Kelas</label>
      <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $resepsionis["kelas"]; ?>">
      
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" value="<?= $resepsionis["password"]; ?>">

      <label for="roles">Roles</label>
      <select name="roles" class="form-control" value="<?= $resepsionis["roles"]; ?>">
        <option value="Admin">Admin</option>
        <option value="Resepsionis">Resepsionis</option>
      </select>
      <button type="submit" name="kirim">Edit</button>
    </form>
    </div>
</div>