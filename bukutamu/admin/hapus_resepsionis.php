<?php

require "functions.php";

$id = $_GET["id"];

if(hapusResepsionis($id) > 0){
  echo "
        <script type='text/javascript'>
          alert('Data berhasil dihapus');
          window.location = 'resepsionis.php';
        </script>
    ";
}else{
  echo "
        <script type='text/javascript'>
          alert('Data gagal dihapus');
          window.location = 'resepsionis.php';
        </script>
    ";
}

?>