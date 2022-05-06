<?php
include "../koneksi.php";

$nim = $_GET["nim"];

$qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
$exec = $db->query($qry);
if ($exec) {
  echo "
  <script>
    alert('data berhasil di delete')
    window.location = '../mahasiswa/edit-data.php';
  </script>";
} else {
  echo "
  <script>
    alert('data gagal di delete')
    window.location = '../mahasiswa/edit-data.php?nim=$nim';
  </script>";
}