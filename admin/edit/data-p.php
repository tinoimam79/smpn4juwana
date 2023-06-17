<?php include '../app/_header.php'; 

include "../koneksi/koneksi.php";
include "../controller/c_admin.php";
$p = new Admin;
$p->TampilDataAdmin($_GET['id']);

if (isset($_POST['submit'])) {
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $level          = $_POST['level'];

    $sql = "UPDATE admin SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Selamat, Edit berhasil!')</script>";
        $nama = "";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
        $email = "";
        header('location: ../home/data-p.php');
    } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
}
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
                    <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user" action="">
                                        <input type="hidden" value="<?php print $p->id ?>" name="id" />                                        
                                        <input type="hidden" name="level" value="admin">
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="nama" value="<?php print $p->nama; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="username" value="<?php print $p->username; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                name="email" value="<?php print $p->email; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                name="password" value="<?php print $p->password; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                name="repassword" value="<?php print $p->password; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-success btn-user btn-block" name="submit">
                                        Edit Data
                                        </button>
                                        <a href="../home/data-p.php" class="btn btn-secondary btn-user btn-block">
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