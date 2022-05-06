<?php
include "../koneksi.php";

$kode = $_POST["kode"];
$nama = $_POST["nama"];

$qry = "INSERT INTO jurusan(kode, nama) VALUES ('$kode', '$nama')";
$exec = $db->query($qry);
if ($exec) {
  echo "
  <script>
    alert('data berhasil disimpan')
    window.location = '../jurusan/edit-data.php';
  </script>";
} else {
  echo "
  <script>
    alert('data gagal disimpan')
    window.location = '../jurusan/edit-data.php?kode=$kode';
  </script>";
}