<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>
	<h1>FORM INPUT DATA</h1>
	<a href="tampil3.php">Tampil</a>
	<form action="insert3.php" method="post">
		<label for="firstname">Firstname</label>
		<input type="text" name="firstname" id="firstname">
		<br>
		<label for="lastname">Lastname</label>
		<input type="text" name="lastname" id="lastname">
		<br>
		<label for="age">Age</label>
		<input type="number" name="age" id="age">
		<br>
		<label for="jobdate">Job Date</label>
		<input type="date" name="jobdate" id="jobdate">
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>