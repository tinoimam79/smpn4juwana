<?php
include "../koneksi/koneksi.php";

if (isset($_POST['submit'])) {
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

    $query = mysqli_query($con, "INSERT INTO staff (nama, jabatan, status, foto_staff) VALUES ('$nama', '$jabatan', '$status', '$foto_staff')");
    header('location: https://smpn4juwana.com/admin/home/staff.php');
    exit();
}else{
    header('location: https://smpn4juwana.com/admin/home/staff.php');
    exit();
}

?>