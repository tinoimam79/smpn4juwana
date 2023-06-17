<?php include '../app/_header.php'; 

include "../controller/c_staff.php";
$p = new Staff;
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
                    <h1 class="h3 mb-4 text-gray-800">Staff dan Guru</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Edit Staff dan Guru</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" enctype="multipart/form-data" action="../proses/e_staff.php">
                                        <input type="hidden" value="<?php print $_GET['id'] ?>" name="id" />
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control"
                                                name="nama" value="<?php print $p->nama; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jabatan</label>
                                            <input type="text" class="form-control"
                                                name="jabatan" value="<?php print $p->jabatan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" class="form-control" name="foto_staff">
                                            <br>
                                            <img src="../img/staff/<?php print $p->foto_staff; ?>" width="200" height="300"></td>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-line" name="status">
                                                <option value="<?php print $p->status; ?>">
                                                <?php 
                                                if( $p->status == 1 ){
                                                    print 'Aktif';
                                                }else{
                                                    print 'Tidak Aktif';
                                                }
                                                ?>
                                                </option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
											</select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block" value="Edit Data">
                                        Edit Data
                                        </button>
                                        <a href="../home/kelainan.php" class="btn btn-secondary btn-user btn-block">
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