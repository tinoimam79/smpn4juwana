<?php 
/**
 * 
 */
class Berita
{

	function TampilSemua()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from berita");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['judul'] = $d['judul'];
			$data[$i]['kategori'] = $d['kategori'];
			$data[$i]['date_publish'] = $d['date_publish'];
			$data[$i]['time_publish'] = $d['time_publish'];
			$data[$i]['status_publish'] = $d['status_publish'];
			$data[$i]['headline'] = $d['headline'];
			$data[$i]['text_berita'] = $d['text_berita'];
			$data[$i]['gambar'] = $d['gambar'];
			$i++;
		}
		return $data;
	}

	function InsertBerita($kode,$nama){
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "INSERT INTO berita (judul,kategori,date_publish,time_publish,status_publish,headline,text_berita,gambar)
			values('$judul','$kategori','$date_publish','$time_publish','$status_publish','$headline','$text_berita','$gambar')");
	}

	function HapusBerita($id)
	{
		include "../koneksi/koneksi.php";
		mysqli_query($con, "DELETE FROM berita WHERE id = '$id'");
	}

	function EditBerita($id,$judul,$kategori,$date_publish,$time_publish,$status_publish,$headline,$text_berita)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "UPDATE berita set judul='$judul', kategori='$kategori', date_publish='$date_publish',  time_publish='$time_publish', status_publish='$status_publish', headline='$headline', text_berita='$text_berita' WHERE id='$id'");
	}

	function TampilSatuData($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM berita WHERE id = '$id'");
		$g = mysqli_fetch_object($query);
		$this->id = $g->id;
		$this->judul = $g->judul;
		$this->kategori = $g->kategori;
		$this->date_publish = $g->date_publish;
		$this->time_publish = $g->time_publish;
		$this->status_publish = $g->status_publish;
		$this->headline = $g->headline;
		$this->text_berita = $g->text_berita;
		$this->gambar = $g->gambar;
	}

	function TampilAngka()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT max(id) as nilai FROM berita");
		$g = mysqli_fetch_object($query);
		$this->nilai = $g->nilai;
	}


	//bagian halaman utama
	function TampilSemuaWeb()
	{
		include "admin/koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from berita WHERE status_publish = 1 ORDER BY date_publish DESC");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['judul'] = $d['judul'];
			$data[$i]['kategori'] = $d['kategori'];
			$data[$i]['date_publish'] = $d['date_publish'];
			$data[$i]['time_publish'] = $d['time_publish'];
			$data[$i]['status_publish'] = $d['status_publish'];
			$data[$i]['headline'] = $d['headline'];
			$data[$i]['text_berita'] = $d['text_berita'];
			$data[$i]['gambar'] = $d['gambar'];
			$i++;
		}
		return $data;
	}

	function TampilHalamanDepan()
	{
		include "admin/koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from berita WHERE headline = 1 ORDER BY date_publish DESC");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['judul'] = $d['judul'];
			$data[$i]['kategori'] = $d['kategori'];
			$data[$i]['date_publish'] = $d['date_publish'];
			$data[$i]['time_publish'] = $d['time_publish'];
			$data[$i]['status_publish'] = $d['status_publish'];
			$data[$i]['headline'] = $d['headline'];
			$data[$i]['text_berita'] = $d['text_berita'];
			$data[$i]['gambar'] = $d['gambar'];
			$i++;
		}
		return $data;
	}

	function TampilSatuDataDetail($id)
	{
		include "admin/koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM berita WHERE id = '$id'");
		$g = mysqli_fetch_object($query);
		$this->id = $g->id;
		$this->judul = $g->judul;
		$this->kategori = $g->kategori;
		$this->date_publish = $g->date_publish;
		$this->time_publish = $g->time_publish;
		$this->status_publish = $g->status_publish;
		$this->headline = $g->headline;
		$this->text_berita = $g->text_berita;
		$this->gambar = $g->gambar;
	}
}
error_reporting(0);
?>