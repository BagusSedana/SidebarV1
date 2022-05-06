<?php
include "../koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$kode_jurusan = $_POST["kode_jurusan"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$email = $_POST["email"];

$qry = "INSERT INTO mahasiswa(nim, nama_mhs, kode_jurusan, jenis_kelamin, alamat, no_hp, email) VALUES ('$nim', '$nama', '$kode_jurusan', '$jenis_kelamin', '$alamat', '$no_hp', '$email')";
$exec = $db->query($qry);
if ($exec) {
  echo "
  <script>
    alert('data berhasil disimpan')
    window.location = '../mahasiswa/edit-data.php';
  </script>";
} else {
  echo "
  <script>
    alert('data gagal disimpan')
    window.location = '../mahasiswa/edit-data.php?nim=$nim';
  </script>";
}