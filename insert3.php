<?php
include 'koneksi.php'; 
$sql = "INSERT INTO tbl_mhs (firstname, lastname, age, jobdate) 
VALUES 
('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]', '$_POST[jobdate]')";
$simpan = mysqli_query($cek, $sql) or die ("tidak berhasil");

echo "1 record added <br>";
echo "<a href='tampil3.php'>Tampilkan</a>";

?>