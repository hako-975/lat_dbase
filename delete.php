<?php 
	include 'koneksi.php';

	$nim = $_GET['nim'];

	$perintah = "DELETE FROM tbl_mhs WHERE nim = '$nim'";
	$hasil = mysqli_query($cek, $perintah); 

	if ($hasil) {
		echo "berhasil dihapus";
		echo "<a href='tampil3.php'>Back</a>";
	} else {
		echo 'gagal dihapus';
	}
 ?>