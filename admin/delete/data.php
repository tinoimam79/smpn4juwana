<?php  
include "../controller/c_admin.php";

$hapus = new Admin;

$id = $_GET['id'];
if (!empty($id)) {
	$hapus->HapusData($id);
	header('location: ../home/data-p.php');
} else {
	header('location: ../home/data-p.php');
}
?>