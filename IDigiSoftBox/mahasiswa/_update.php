<?php
include "../koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$kode = $_POST["kode"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$email = $_POST["email"];

$qry = "UPDATE mahasiswa SET nama_mhs = '$nama', kode = '$kode', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_hp = '$no_hp', email = '$email' WHERE nim = '$nim'";
$exec = $db->query($qry);
if ($exec) {
  echo "
  <script>
    alert('data berhasil di edit')
    window.location = '../mahasiswa/index.php';
  </script>";
} else {
  echo "
  <script>
    alert('data gagal di edit')
    window.location = '../mahasiswa/edit.php?nim=$nim';
  </script>";
}