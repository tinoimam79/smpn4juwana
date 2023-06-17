<?php 
/**
 * 
 */
class Prestasi
{

	function TampilSemua()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from prestasi");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama_peraih'] = $d['nama_peraih'];
			$data[$i]['nama_prestasi'] = $d['nama_prestasi'];
			$data[$i]['juara'] = $d['juara'];
			$data[$i]['tahun'] = $d['tahun'];
			$data[$i]['tanggal'] = $d['tanggal'];
			$data[$i]['kategori'] = $d['kategori'];
			$data[$i]['tingkat'] = $d['tingkat'];
			$data[$i]['keterangan'] = $d['keterangan'];
			$data[$i]['status'] = $d['status'];
			$i++;
		}
		return $data;
	}

	function InsertPrestasi($nama_peraih, $nama_prestasi, $juara, $tahun, $tanggal, $kategori,  $tingkat, $keterangan, $status){
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "INSERT INTO prestasi (nama_peraih, nama_prestasi,juara, tahun, tanggal, kategori, tingkat, keterangan, status)
			values('$nama_peraih','$nama_prestasi','$juara', '$tahun', '$tanggal', '$kategori', '$tingkat', '$keterangan', '$status')");
	}

	function HapusPrestasi($id)
	{
		include "../koneksi/koneksi.php";
		mysqli_query($con, "DELETE FROM prestasi WHERE id = '$id'");
	}

	function EditPrestasi($id, $nama_peraih, $nama_prestasi, $juara, $tahun, $tanggal, $kategori, $tingkat, $keterangan, $status)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "UPDATE prestasi set nama_peraih='$nama_peraih',nama_prestasi='$nama_prestasi', juara='$juara', tahun='$tahun', tanggal='$tanggal', kategori='$kategori', tingkat='$tingkat', keterangan='$keterangan', status='$status' WHERE id='$id'");
	}

	function TampilSatuData($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM prestasi WHERE id = '$id'");
		$g = mysqli_fetch_object($query);
		$this->id = $g->id;
		$this->nama_peraih = $g->nama_peraih;
		$this->nama_prestasi = $g->nama_prestasi;
		$this->juara = $g->juara;
		$this->tahun = $g->tahun;
		$this->tanggal = $g->tanggal;
		$this->kategori = $g->kategori;
		$this->tingkat = $g->tingkat;
		$this->keterangan = $g->keterangan;
		$this->status = $g->status;
	}

	function TampilAngka()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT max(id) as nilai FROM gejala");
		$g = mysqli_fetch_object($query);
		$this->nilai = $g->nilai;
	}


	//bagian halaman utama
	function TampilSemuaWeb()
	{
		include "admin/koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from prestasi WHERE status = 1 ORDER BY tanggal DESC LIMIT 3 ");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama_peraih'] = $d['nama_peraih'];
			$data[$i]['nama_prestasi'] = $d['nama_prestasi'];
			$data[$i]['juara'] = $d['juara'];
			$data[$i]['tahun'] = $d['tahun'];
			$data[$i]['tanggal'] = $d['tanggal'];
			$data[$i]['kategori'] = $d['kategori'];
			$data[$i]['tingkat'] = $d['tingkat'];
			$data[$i]['keterangan'] = $d['keterangan'];
			$data[$i]['status'] = $d['status'];
			$i++;
		}
		return $data;
	}

		//bagian halaman utama
	function TampilSemuaList()
	{
		include "admin/koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from prestasi WHERE status = 1 ORDER BY tanggal DESC ");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['nama_peraih'] = $d['nama_peraih'];
			$data[$i]['nama_prestasi'] = $d['nama_prestasi'];
			$data[$i]['juara'] = $d['juara'];
			$data[$i]['tahun'] = $d['tahun'];
			$data[$i]['tanggal'] = $d['tanggal'];
			$data[$i]['kategori'] = $d['kategori'];
			$data[$i]['tingkat'] = $d['tingkat'];
			$data[$i]['keterangan'] = $d['keterangan'];
			$data[$i]['status'] = $d['status'];
			$i++;
		}
		return $data;
	}
}
error_reporting(0);
?>