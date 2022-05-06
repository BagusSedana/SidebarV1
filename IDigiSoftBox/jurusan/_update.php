<?php
include "../koneksi.php";

$kode = $_POST["kode"];
$nama = $_POST["nama"];


$qry = "UPDATE jurusan SET nama = '$nama' WHERE kode = '$kode'";
$exec = $db->query($qry);
if ($exec) {
  echo "
  <script>
    alert('data berhasil di edit')
    window.location = '../jurusan/index.php';
  </script>";
} else {
  echo "
  <script>
    alert('data gagal di edit')
    window.location = '../jurusan/edit.php?kode=$kode';
  </script>";
}