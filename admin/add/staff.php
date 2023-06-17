<?php include '../app/_header.php'; 

include "../controller/c_staff.php";
$pt = new Staff;
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
                    <h1 class="h3 mb-4 text-gray-800">Staff dan Guru</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Tambah Staff dan Guru</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" enctype="multipart/form-data" action="../proses/t_staff.php">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control"
                                                name="nama" placeholder="Nama Staff/Guru">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jabatan</label>
                                            <input type="text" class="form-control"
                                                name="jabatan" placeholder="Jabatan">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" class="form-control" name="foto_staff">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-line" name="status">
                                                <option value="">----- Pilih Status -----</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
											</select>
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