<?php  
include "../controller/c_staff.php";

$hapus = new Staff;

$id = $_GET['id'];
if (!empty($id)) {
	$hapus->HapusStaff($id);
	header('location: ../home/staff.php');
} else {
	header('location: ../home/staff.php');
}
?>