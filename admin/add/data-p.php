<?php include '../app/_header.php'; 

include "../koneksi/koneksi.php";
if (isset($_POST['submit'])) {
    $nama           = mysqli_real_escape_string($con, $_POST['nama']);
    $username       = mysqli_real_escape_string($con, $_POST['username']);
    $email          = mysqli_real_escape_string($con, $_POST['email']);
    $password       = mysqli_real_escape_string($con, ($_POST['password']));
    $repassword     = mysqli_real_escape_string($con, ($_POST['repassword']));
    $level          = mysqli_real_escape_string($con, $_POST['level']);
 
    if ($password == $repassword) {
        $sql = "SELECT * FROM admin WHERE email='$email'";
        $result1 = mysqli_query($con, $sql);
        var_dump($result1);
        if (!$result1->num_rows > 0) {
            $sql2 = "INSERT INTO admin (nama, username, password, email, level) VALUES ('$nama', '$username', '$password', '$email', '$level')" or die(mysqli_error($con));
            $result = mysqli_query($con, $sql2);

            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
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
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
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
                            <h6 class="m-0 font-weight-bold text-gray">Tambah Data Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <div class="p-10">
                                    <form method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="nama" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                name="repassword" placeholder="Re-enter password">
                                        </div>

                                        <input type="hidden" name="level" value="admin">
                                        <button type="submit" class="btn btn-success btn-user btn-block" name="submit">
                                        Tambah Data
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