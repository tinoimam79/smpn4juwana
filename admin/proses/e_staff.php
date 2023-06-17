<?php 

include "../koneksi/koneksi.php";

if (isset($_FILES['foto_staff']) && !empty( $_FILES["foto_staff"]["name"] )) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

    $foto_staff = $_FILES["foto_staff"]["name"];
    $tempname = $_FILES["foto_staff"]["tmp_name"];
    $folder = "../img/staff/".$foto_staff;
      // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        header('location: https://smpn4juwana.com/admin/home/staff.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    $query = mysqli_query($con, "UPDATE staff set nama='$nama', jabatan='$jabatan',status='$status',foto_staff='$foto_staff' WHERE id='$id'");
	
        header('location: https://smpn4juwana.com/admin/home/staff.php');
}else{

include '../controller/c_staff.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

    $update = new Staff;
    $update->EditStaff($id, $nama, $jabatan, $status);

        header('location: https://smpn4juwana.com/admin/home/staff.php');
}

?>