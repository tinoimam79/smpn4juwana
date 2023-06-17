<?php include '../app/_header.php'; 

include "../controller/c_prestasi.php";
$p = new Prestasi;
$p->TampilSatuData($_GET['id']);
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
                            <h6 class="m-0 font-weight-bold text-gray">Edit Prestasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" action="../proses/e_prestasi.php">
                                        <input type="hidden" value="<?php print $_GET['id'] ?>" name="id" />
                                        <div class="form-group">
                                            <label for="">Nama Peraih</label>
                                            <input type="text" class="form-control"
                                                name="nama_peraih" value="<?php print $p->nama_peraih; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Prestasi</label>
                                            <input type="text" class="form-control"
                                                name="nama_prestasi" value="<?php print $p->nama_prestasi; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Juara</label>
                                            <input type="text" class="form-control"
                                                name="juara" value="<?php print $p->juara; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tahun</label>
                                            <input type="text" class="form-control"
                                                name="tahun" value="<?php print $p->tahun; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal</label>
                                            <input type="date" class="form-control"
                                                name="tanggal" value="<?php print $p->tanggal; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control"
                                                name="kategori" value="<?php print $p->kategori; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tingkat</label>
                                            <input type="text" class="form-control"
                                                name="tingkat" value="<?php print $p->tingkat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Publish</label>
                                            <select class="form-control form-control-line" name="status">
                                                <option value="<?php print $p->status; ?>">
                                                <?php 
                                                if( $p->status == 1 ){
                                                    print 'Aktif';
                                                }else{
                                                    print 'Tidak Aktif';
                                                }
                                                ?>
                                                <option value="1">Publish</option>
                                                <option value="0">Tidak Publish</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" id="text-berita" cols="50" rows="10"><?php print $p->keterangan; ?></textarea>
                                        </div>


                                        <button type="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
                                        Edit Data
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
</script>