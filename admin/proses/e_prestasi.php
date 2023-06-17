<?php 
include '../controller/c_prestasi.php';
$id = $_POST['id'];

$nama_peraih = $_POST['nama_peraih'];
$nama_prestasi = $_POST['nama_prestasi'];
$juara = $_POST['juara'];
$tahun = $_POST['tahun'];
$tanggal = $_POST['tanggal'];
$kategori = $_POST['kategori'];
$tingkat = $_POST['tingkat'];
$keterangan = $_POST['keterangan'];
$status = $_POST['status'];

$update = new Prestasi;
$update->EditPrestasi($id,$nama_peraih, $nama_prestasi, $juara, $tahun, $tanggal, $kategori, $tingkat, $keterangan, $status);

header('location: ../home/prestasi.php');
?>