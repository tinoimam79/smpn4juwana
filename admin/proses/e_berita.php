<?php 
include "../koneksi/koneksi.php";
if (isset($_FILES['gambar']) && !empty( $_FILES["gambar"]["name"] )) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $status_publish = $_POST['status_publish'];
    $date_publish = $_POST['date_publish'];
    $time_publish = $_POST['time_publish'];
    $headline = $_POST['headline'];
    $text_berita = $_POST['text_berita'];

    $gambar = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "../img/berita/".$gambar;
      // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        header('location: https://smpn4juwana.com/admin/home/berita.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    $query = mysqli_query($con, "UPDATE berita set judul='$judul', kategori='$kategori', date_publish='$date_publish',  time_publish='$time_publish', status_publish='$status_publish', headline='$headline', text_berita='$text_berita', gambar='$gambar' WHERE id='$id'");
        header('location: https://smpn4juwana.com/admin/home/berita.php');
}else{
	include "../koneksi/koneksi.php";
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $status_publish = $_POST['status_publish'];
    $date_publish = $_POST['date_publish'];
    $time_publish = $_POST['time_publish'];
    $headline = $_POST['headline'];
    $text_berita = $_POST['text_berita'];

    $query = mysqli_query($con, "UPDATE berita set judul='$judul', kategori='$kategori', date_publish='$date_publish',  time_publish='$time_publish', status_publish='$status_publish', headline='$headline', text_berita='$text_berita' WHERE id='$id'");
    header('location: https://smpn4juwana.com/admin/home/berita.php');
}
?>