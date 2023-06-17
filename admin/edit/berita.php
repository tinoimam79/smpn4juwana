<?php include '../app/_header.php'; 

include "../controller/c_berita.php";
$p = new Berita;
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
                    <h1 class="h3 mb-4 text-gray-800">Berita</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Edit Berita</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" enctype="multipart/form-data" action="../proses/e_berita.php">
                                        <input type="hidden" value="<?php print $_GET['id'] ?>" name="id" />
                                        <div class="form-group">
                                            <label for="">Judul</label>
                                            <input type="text" class="form-control"
                                                name="judul" value="<?php print $p->judul; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <select class="form-control form-control-line" name="kategori">
                                                <option value="<?php print $p->kategori; ?>">
                                                    <?php print $p->kategori; ?>
                                                </option>
                                                <option value="Prestasi">Prestasi</option>
                                                <option value="Lingkungan">Lingkungan</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status Publish</label>
                                            <select class="form-control form-control-line" name="status_publish">
                                                <option value="<?php print $p->status_publish; ?>">
                                                <?php 
                                                if( $p->status_publish == 1 ){
                                                    print 'Publish';
                                                }else{
                                                    print 'Tidak Publish';
                                                }
                                                ?>
                                                </option>
                                                <option value="1">Publish</option>
                                                <option value="0">Tidak Publish</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Publish</label>
                                            <input type="date" class="form-control" name="date_publish" value="<?php print $p->date_publish; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu Publish</label>
                                            <input type="time" class="form-control" name="time_publish" value="<?php print $p->time_publish; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status Headline</label>
                                            <select class="form-control form-control-line" name="headline">  
                                                <option value="<?php print $p->headline; ?>"> 
                                                <?php 
                                                if( $p->headline == 1 ){
                                                    print 'Headline';
                                                }else{
                                                    print 'Tidak Headline';
                                                }
                                                ?>
                                                </option>
                                                <option value="1">Headline</option>
                                                <option value="0">Tidak Headline</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gambar</label>
                                            <input type="file" class="form-control"
                                                name="gambar">
                                            <br>
                                            <img src="../img/berita/<?php print $p->gambar; ?>" width="200" height="300"></td>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control" name="text_berita" id="text-berita" cols="50" rows="10"><?php print $p->text_berita; ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block" value="Edit Data">
                                        Edit Data
                                        </button>
                                        <a href="../home/berita.php" class="btn btn-secondary btn-user btn-block">
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