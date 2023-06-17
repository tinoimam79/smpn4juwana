<?php include '../app/_header.php'; 

include "../controller/c_berita.php";
$pt = new Berita;
$pt->TampilAngka();
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                    include '../app/_topnav.php'; 
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Berita</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Tambah Berita</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" enctype="multipart/form-data" action="../proses/t_berita.php">
                                        <div class="form-group">
                                            <label for="">Judul</label>
                                            <input type="text" class="form-control"
                                                name="judul" placeholder="Judul Berita">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <select class="form-control form-control-line" name="kategori">
                                                <option value="">-----Pilih Kategori-----</option>
                                                <option value="Prestasi">Prestasi</option>
                                                <option value="Lingkungan">Lingkungan</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status Publish</label>
                                            <select class="form-control form-control-line" name="status_publish">
                                                <option value="">----- Pilih Status -----</option>
                                                <option value="1">Publish</option>
                                                <option value="0">Tidak Publish</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Publish</label>
                                            <input type="date" class="form-control" name="date_publish">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu Publish</label>
                                            <input type="time" class="form-control" name="time_publish">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status Headline</label>
                                            <select class="form-control form-control-line" name="headline">
                                                <option value="">----- Pilih Status Headline -----</option>
                                                <option value="1">Headline</option>
                                                <option value="0">Tidak Headline</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gambar</label>
                                            <input type="file" class="form-control"
                                                name="gambar">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control" name="text_berita" id="text-berita" cols="50" rows="10"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
                                        Tambah Data
                                        </button>
                                        <a href="../home/staff.php" class="btn btn-secondary btn-user btn-block">
                                            Kembali
                                        </a>
                                            
                                    </form>
                                    
                                </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
    include '../app/_footer.php'; 
?>
<script src="../ckeditor/ckeditor.js"></script>

<script>
    var content = document.getElementById("text-berita");
    CKEDITOR.replace(content,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>