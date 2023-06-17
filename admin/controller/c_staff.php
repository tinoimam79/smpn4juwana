<?php 
/**
 * 
 */
class Staff
{

	function TampilSemua()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from staff");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['jabatan'] = $d['jabatan'];
			$data[$i]['status'] = $d['status'];
			$data[$i]['foto_staff'] = $d['foto_staff'];
			$i++;
		}
		return $data;
	}

	function InsertStaff($kode,$nama){
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "INSERT INTO staff (nama,jabatan,status,foto_staff)
			values('$nama','$jabatan','$status','$foto_staff')");
	}

	function HapusStaff($id)
	{
		include "../koneksi/koneksi.php";
		mysqli_query($con, "DELETE FROM staff WHERE id = '$id'");
	}

	function EditStaff($id,$nama,$jabatan,$status)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "UPDATE staff set nama='$nama', jabatan='$jabatan', status='$status' WHERE id='$id'");
	}

	function TampilSatuData($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM staff WHERE id = '$id'");
		$g = mysqli_fetch_object($query);
		$this->id = $g->id;
		$this->nama = $g->nama;
		$this->jabatan = $g->jabatan;
		$this->status = $g->status;
		$this->foto_staff = $g->foto_staff;
	}

	function TampilAngka()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT max(id) as nilai FROM staff");
		$g = mysqli_fetch_object($query);
		$this->nilai = $g->nilai;
	}


	//bagian halaman utama
	function TampilSemuaWeb()
	{
		include "admin/koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from staff WHERE status = 1");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama'] = $d['nama'];
			$data[$i]['jabatan'] = $d['jabatan'];
			$data[$i]['status'] = $d['status'];
			$data[$i]['foto_staff'] = $d['foto_staff'];
			$i++;
		}
		return $data;
	}
}
error_reporting(0);
?>