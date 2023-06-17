<?php  
include "../controller/c_berita.php";

$hapus = new Berita;

$id = $_GET['id'];
if (!empty($id)) {
	$hapus->HapusBerita($id);
	header('location: ../home/berita.php');
} else {
	header('location: ../home/berita.php');
}
?>