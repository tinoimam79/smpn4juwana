<?php
//menyertakan file program koneksi.php pada register
//inisialisasi session

 
include "admin/koneksi/koneksi.php";

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
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

            var_dump($result or die (mysqli_error($con)));
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                $email = "";
                header('location: login.php');
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cat Disease | Register</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img src="assets/images/bg.jpg" alt="" width="505px" height="475px" class="justify-content-center relative  bg-no-repeat bg-cover bg-center mx-auto">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat akun baru!</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nama" class="form-control form-control-user" 
                                            placeholder="Nama">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="username" class="form-control form-control-user"
                                            placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            placeholder="Email">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="repassword" class="form-control form-control-user" 
                                            placeholder="Re-enter Password">
                                    </div>
                                    <input type="hidden" name="level" value="admin">
                                </div>
                                <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                    Daftar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.php"
                                    >Kembali ke web!</a
                                ><br>             
                                <a class="small" href="login.php">Sudah Punya Akun! Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>