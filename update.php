<?php 
	include 'koneksi.php';
	$update = "UPDATE tbl_mhs SET firstname = '$_POST[firstname]', lastname = '$_POST[lastname]', age = '$_POST[age]', jobdate = '$_POST[jobdate]' WHERE nim = '$_POST[nim]'";
	$hasil = mysqli_query($cek, $update);

	if ($hasil) {
		echo "Data Mahasiswa berhasil di update<br>";
		echo "<a href='tampil3.php'>List</a>";
	} else {
		echo "Data Gagal di Update!";
	}

 ?>