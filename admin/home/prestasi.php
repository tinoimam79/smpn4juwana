<?php 
include '../app/_header.php'; 
include '../controller/c_prestasi.php'; 

$k = new Prestasi;
$data = $k->TampilSemua();
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
                    <h1 class="h3 mb-4 text-gray-800">Tabel Prestasi</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Data Prestasi</h6>
                        </div>

                        <div class="card-body">
                            <div class="my-2">
                                <a href="../add/prestasi.php" class="btn btn-success btn-icon-split">  
                                    <span class="text">Tambah Data</span>
                                </a>    
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Peraih</th>
                                            <th>Nama Prestasi</th>
                                            <th>Juara</th>
                                            <th>Tahun</th>
                                            <th>Tanggal</th>
                                            <th>Kategori</th>
                                            <th>Prestasi</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
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
                                            <td><?php print $d['nama_peraih']; ?></td>
                                            <td><?php print $d['nama_prestasi']; ?></td>
                                            <td><?php print $d['juara']; ?></td>
                                            <td><?php print $d['tahun']; ?></td>
                                            <td><?php print $d['tanggal']; ?></td>
                                            <td><?php print $d['kategori']; ?></td>
                                            <td><?php print $d['tingkat']; ?></td>
                                            <td><?php print $d['keterangan']; ?></td>
                                            <td>
                                                <?php 
                                                if( $d['status'] == 1 ){
                                                    print 'Publish';
                                                }else{
                                                    print 'Tidak Publish';
                                                }
                                                ?></td>
                                            <td>
                                                <a href="../edit/prestasi.php?id=<?php print $d['id']; ?>" class="btn btn-primary mb-2">  
                                                    <i class="fa fa-pencil-alt"></i>
                                                    Edit Data
                                                </a><br>
                                                <a onclick="if (! confirm('Apakah anda yakin akan menghapus prestasi dari daftar ?')) { return false; }" href="../delete/prestasi.php?id=<?php print $d['id']; ?>" class="btn btn-danger ">  
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