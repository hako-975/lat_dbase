<?php 
$cek = mysqli_connect("localhost", "admin", "admin", "lat_dbase") or die("database tidak berhasil terkoneksi");

if ($cek) {
	// echo "Database berhasil terkoneksi";
}
else {
	echo "database tidak berhasil terkoneksi";
}

?>
