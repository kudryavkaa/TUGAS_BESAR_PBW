<!DOCTYPE html>
<html>
<head>
<title>
	Data Player
</title>
</head>

<body>
	<h2> simple CRUD</h2>
	<p> <a href="editdb.php"> Berdanda</a> / <a href="form-tambah.php">tambah data </a></p>

	<h3> data mahasiswa</h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
``		</tr>

		<?php
		include('konekdbguru.php');
		$query = mysqli_query("SELECT * FROM guru ORDER BY idguru DESC")  or die(mysql_error());

		if(mysqli_num_rows($query) == 0) {

				echo '<tr><td colspan="6">Tidak ada data!</td></tr>
		}
		else
			$no = 1;
			while($data = mysqli_fetch_assoc($query)) {
				echo'<tr>';
					echo'<td>' .$no. '</td>';
					echo'<td>' .$data['idguru']. '</td>';
					echo'<td>' .$data['idguru']. '</td>';
					echo'<td>' .$data['idguru'].  '</td>';
			}





</body>