<?php
include "../koneksi/koneksi.php";

if (isset($_POST['submit'])) {
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

    $query = mysqli_query($con, "INSERT INTO berita (judul, kategori, date_publish, time_publish, status_publish, headline, text_berita, gambar) 
    VALUES ('$judul', '$kategori', '$date_publish', '$time_publish', '$status_publish', '$headline', '$text_berita', '$gambar')");

    header('location: https://smpn4juwana.com/admin/home/berita.php');
}else{
    header('location: https://smpn4juwana.com/admin/home/berita.php');
}

?>