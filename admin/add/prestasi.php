<?php include '../app/_header.php'; 

include "../controller/c_prestasi.php";
$pt = new Prestasi;
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
                    <h1 class="h3 mb-4 text-gray-800">Prestasi</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Tambah Prestasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" action="../proses/t_prestasi.php">
                                        <div class="form-group">
                                            <label for="">Nama Peraih</label>
                                            <input type="text" class="form-control"
                                                name="nama_peraih" placeholder="Nama Peraih">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Prestasi</label>
                                            <input type="text" class="form-control"
                                                name="nama_prestasi" placeholder="Nama Prestasi">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Juara</label>
                                            <input type="text" class="form-control"
                                                name="juara" placeholder="Juara">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tahun</label>
                                            <input type="text" class="form-control"
                                                name="tahun" placeholder="2xxx">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal</label>
                                            <input type="date" class="form-control"
                                                name="tanggal">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control"
                                                name="kategori" placeholder="Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tingkat</label>
                                            <input type="text" class="form-control"
                                                name="tingkat" placeholder="Tingkat">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Publish</label>
                                            <select class="form-control form-control-line" name="status">
                                                <option value="">----- Pilih Status -----</option>
                                                <option value="1">Publish</option>
                                                <option value="0">Tidak Publish</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" id="text-berita" cols="50" rows="10"></textarea>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
                                        Tambah Data
                                        </button>
                                        <a href="../home/prestasi.php" class="btn btn-secondary btn-user btn-block">
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
</script><script src="../ckeditor/ckeditor.js"></script>

<script>
    var content = document.getElementById("text-berita");
    CKEDITOR.replace(content,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>