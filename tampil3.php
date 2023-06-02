<?php
	include 'koneksi.php';

	$hasil = mysqli_query($cek, "SELECT * FROM tbl_mhs order by firstname ASC");
?>
<a href="form.php">Form</a>

<table cellpadding="10" border="0" cellspacing="0">
	<tr>
		<td>NIM</td>
		<td>Firstname</td>
		<td>Lastname</td>
		<td>Age</td>
		<td>Job Date</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php while($data=mysqli_fetch_assoc($hasil)): ?>
		<tr>
			<td><?= $data['nim']; ?></td>
			<td><?= $data['firstname']; ?></td>
			<td><?= $data['lastname']; ?></td>
			<td><?= $data['age']; ?></td>
			<td><?= $data['jobdate']; ?></td>
			<td>
				<a href="edit.php?nim=<?= $data['nim']; ?>">Edit</a>
			</td>
			<td>
				<a href="delete.php?nim=<?= $data['nim']; ?>">Hapus</a>
			</td>
		</tr>
	<?php endwhile ?>
</table>