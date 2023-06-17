<?php  
include "../controller/c_prestasi.php";

$hapus = new Prestasi;

$id = $_GET['id'];
if (!empty($id)) {
	$hapus->HapusPrestasi($id);
	header('location: ../home/prestasi.php');
} else {
	header('location: ../home/prestasi.php');
}
?>