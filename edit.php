<?php 
	include 'koneksi.php';

	$nim = $_GET['nim'];
	$perintah = "SELECT * FROM tbl_mhs WHERE nim = '$nim'";
	$hasil = mysqli_query($cek, $perintah);

	$row = mysqli_fetch_array($hasil);
?>
<html>
<head>
	<title>Edit Mahasiswa</title>
</head>
<body>
	<h1>FORM UPDATE DATA</h1>
	<a href="tampil3.php">Tampil</a>
	<form action="update.php" method="post">
		<input type="hidden" name="nim" value="<?= $row[0]; ?>">
		<label for="firstname">Firstname</label>
		<input type="text" name="firstname" id="firstname" value="<?= $row[1]; ?>">
		<br>
		<label for="lastname">Lastname</label>
		<input type="text" name="lastname" id="lastname" value="<?= $row[2]; ?>">
		<br>
		<label for="age">Age</label>
		<input type="number" name="age" id="age" value="<?= $row[3]; ?>">
		<br>
		<label for="jobdate">Job Date</label>
		<input type="date" name="jobdate" id="jobdate" value="<?= $row[4]; ?>">
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>