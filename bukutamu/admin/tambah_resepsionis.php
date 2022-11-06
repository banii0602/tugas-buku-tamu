<?php 
session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
  if(tambahResepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil ditambahkan');
          window.location = 'resepsionis.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal ditambahkan');
          window.location = 'resepsionis.php';
        </script>
    ";
  }
}


?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Tambah Data resepsionis</h3>

    <form action="" method="POST">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control">

      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
      
      <label for="kelas">Kelas</label>
      <input type="text" name="kelas" id="kelas" class="form-control">

      <label for="password">Password</label>
      <input type="Password" name="password" id="password" class="form-control">
      
      <label for="roles">Roles</label>
      <select name="roles" class="form-control">
        <option value="Admin">Admin</option>
        <option value="Resepsionis">Resepsionis</option>
      </select>
      <button type="submit" name="kirim">Tambah</button>
    </form>
    </div>
</div>