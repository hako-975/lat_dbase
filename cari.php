<?php 
include 'koneksi.php';

$cari1 = $_POST['firstname'];
$cari2 = $_POST['lastname'];
$hasil = mysqli_query($cek, "SELECT * FROM tbl_mhs WHERE firstname LIKE '%$cari1%' OR lastname LIKE '%$cari2%' order by firstname asc");

echo "ID First Name Last Name Age <br>";
while ($data=mysqli_fetch_assoc($hasil)) {
	echo "$data[nim] $data[firstname] $data[lastname] $data[age]<br>";
}