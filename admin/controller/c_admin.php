<?php 
/**
 * 
 */
class Admin
{

	function TampilDataAdmin($id)
	{
		include '../koneksi/koneksi.php';
		$query = mysqli_query($con, "SELECT * FROM admin where id = '$id'");
		$p = mysqli_fetch_object($query);
		$this->id = $p->id;
		$this->nama = $p->nama;
		$this->username = $p->username;
		$this->password = $p->password;
		$this->email = $p->email;
		$this->level = $p->level;
	}

	function HapusData($id)
	{
		include "../koneksi/koneksi.php";
		mysqli_query($con, "DELETE FROM admin WHERE id = '$id'");
	}
	function TampilSemua()
	{
		include '../koneksi/koneksi.php';
		$query = mysqli_query($con, "SELECT * FROM admin");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['username'] = $d['username'];
			$data[$i]['password'] = $d['password'];
			$data[$i]['email'] = $d['email'];
			$data[$i]['level'] = $d['level'];
			$i++;
		}
		return $data;
	}

	function DokterSemua()
	{
		include '../koneksi/koneksi.php';
		$query = mysqli_query($con, "SELECT * FROM ds_dokter");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['tempat_kerja'] = $d['tempat_kerja'];
			$data[$i]['alamat'] = $d['alamat'];
			$data[$i]['kondisi'] = $d['kondisi'];
			$data[$i]['prestasi'] = $d['prestasi'];
			$data[$i]['foto'] = $d['foto'];
			$i++;
		}
		return $data;
	}

	//bagian halaman utama
	function TampilSemuaWeb()
	{
		include "koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from ds_dokter");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['tempat_kerja'] = $d['tempat_kerja'];
			$data[$i]['alamat'] = $d['alamat'];
			$data[$i]['kondisi'] = $d['kondisi'];
			$data[$i]['prestasi'] = $d['prestasi'];
			$data[$i]['foto'] = $d['foto'];
			$i++;
		}
		return $data;
	}

	function TambahDokter($nama, $tempat_kerja, $alamat, $kondisi, $prestasi, $foto)
	{
		include "../koneksi/koneksi.php";

		$query = mysqli_query($con,"INSERT INTO ds_dokter (nama, tempat_kerja, alamat, kondisi, prestasi, foto) VALUES ('$nama', '$tempat_kerja', '$alamat', '$kondisi', '$prestasi','$foto')");
	}

	function UbahDokter($nama, $tempat_kerja, $alamat, $kondisi, $prestasi, $filename)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "UPDATE ds_dokter set nama='$nama',username='$username',password='$password',email='$email',nohp='nohp' WHERE id_admin='$id_admin'");
	}

	function HapusDokter($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "DELETE FROM ds_dokter WHERE id = '$id'");
	}

	function Login($username, $password)
	{
		include '../koneksi/koneksi.php';
		$query = mysqli_query($con, "SELECT * FROM admin where username='$username' AND password='$password'");		
	}
}
error_reporting(0);
 ?>