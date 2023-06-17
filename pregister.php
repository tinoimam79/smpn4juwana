<?php
//menyertakan file program koneksi.php pada register
include "admin/koneksi/koneksi.php";
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak

    // menghilangkan backshlases
    $username = stripslashes($_POST['username']);
    //cara sederhana mengamankan dari sql injection
    $username = mysqli_real_escape_string($con, $username);
    $nama     = stripslashes($_POST['nama']);
    $nama     = mysqli_real_escape_string($con, $nama);
    $nohp     = stripslashes($_POST['nohp']);
    $nohp     = mysqli_real_escape_string($con, $nohp);

    $level     = stripslashes($_POST['level']);
    $level     = mysqli_real_escape_string($con, $level);

    $email    = stripslashes($_POST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $repass   = stripslashes($_POST['repassword']);
    $repass   = mysqli_real_escape_string($con, $repass);
    //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
    if(!empty(trim($nama)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($nohp)) && !empty(trim($level)) && !empty(trim($password)) && !empty(trim($repass))){
        //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
        if($password == $repass){
            //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
            if( cek_nama($nama,$con) == 0 ){
                //hashing password sebelum disimpan didatabase
                $pass  = password_hash($password, PASSWORD_DEFAULT);
                //insert data ke database
                $query = "INSERT INTO admin (nama, username, password, email, nohp, level ) VALUES ('$nama', '$username', '$password', '$email', '$nohp', '$level')";
                $result   = mysqli_query($con, $query);
                //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                if ($result) {
                    $_SESSION['username'] = $username;
                    
                    header('Location: login.php');
                    
                //jika gagal maka akan menampilkan pesan error
                } else {
                    $error =  'Daftar Akun Gagal !!';
                    echo '<script>alert("Daftar Akun Gagal !")</script>';
                    header('Location: register.php');
                }
            }else{
                    $error =  'Username sudah terdaftar !!';
                    echo '<script>alert("Username sudah terdaftar !")</script>';
                    header('Location: register.php');
            }
        }else{
            $validate = 'Password tidak sama !!';
            echo '<script>alert("Password tidak sama !")</script>';
            header('Location: register.php');
        }
            
    }else {
        $error =  'Data tidak boleh kosong !!';
        echo '<script>alert("Data tidak boleh kosong !")</script>';
        header('Location: register.php');
    }
//fungsi untuk mengecek username apakah sudah terdaftar atau belum
function cek_nama($username,$con){
    $nama = mysqli_real_escape_string($con, $username);
    $query = "SELECT * FROM admin WHERE username = '$nama'";
    if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
}
?>