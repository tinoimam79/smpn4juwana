<?php 
include '../app/_header.php'; 
include '../controller/c_admin.php'; 

$g = new Admin;
$data = $g->TampilSemua();
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
                    <h1 class="h3 mb-4 text-gray-800">Tabel Data Pengguna</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Data Pengguna</h6>
                        </div>

                        <div class="card-body">
                                <a href="../add/data-p.php" class="btn btn-success btn-icon-split">  
                                    <span class="text">Tambah Data</span>
                                </a>    
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                    if (!isset($data)) {
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <?php
                                    } else {
                                        $i=0;
                                    foreach($data as $d){
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php print $i; ?></td>
                                            <td><?php print $d['nama']; ?></td>
                                            <td><?php print $d['username']; ?></td>
                                            <td><?php print $d['email']; ?></td>
                                            <td><?php print $d['level']; ?></td>
                                            <td>
                                                <a href="../edit/data-p.php?id=<?php print $d['id']; ?>" class="btn btn-primary mb-2">  
                                                    <i class="fa fa-pencil-alt"></i>
                                                    Edit Data
                                                </a><br>
                                                <a onclick="if (! confirm('Apakah anda yakin akan menghapus data pengguna dari daftar ?')) { return false; }" href="../delete/data.php?id=<?php print $d['id']; ?>" class="btn btn-danger ">  
                                                    <i class="fa fa-times"></i>
                                                    Hapus Data
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }} ?>
                                    </tbody>
                                </table>
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