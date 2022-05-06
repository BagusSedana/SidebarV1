<?php
include "../koneksi.php";

$kode = $_GET["kode"];

$qry = "DELETE FROM jurusan WHERE kode = '$kode'";
$exec = $db->query($qry);
if ($exec) {
  echo "
  <script>
    alert('data berhasil di delete')
    window.location = '../jurusan/edit-data.php';
  </script>";
} else {
  echo "
  <script>
    alert('data gagal di delete')
    window.location = '../jurusan/edit-data.php?kode=$kode';
  </script>";
}