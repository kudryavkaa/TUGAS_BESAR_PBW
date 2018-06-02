<!DOCTYPE html>
<html>
<head>
	<title>Data Player</title>
</head>
<body>
	<h2>Edit Data Player</h2>
  <a href="list.php">Beranda</a>   &nbsp; | &nbsp;
        <a href="form-tambah.php">[+] Tambah Baru</a> 
        <br>
        <br>
<?php

include('konek.php');
$id= $_GET['id'];
$show = mysqli_query($koneksi,"SELECT * FROM player WHERE noid='$id'");

if(mysqli_num_rows($show)== 0) {

	echo '<script>window.history.back()</script>';

}
else
{
	$data= mysqli_fetch_assoc($show);

}
?>

<form action="edit-proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">

<table cellpadding="3" cellspacing="0">
	 <tr>
                <td>
                    id player
                </td>
                <td>:</td>
                <td><input type="text" name="idplayer" value="<?php echo $data['idplayer']; ?>" required=""></td>
            </tr>
            <tr>
                <tr>
                <td>
                    password
                </td>
                <td>:</td>
                <td><input type="password" name="password" value="<?php echo $data['password']; ?>" required=""></td>
            </tr>
            <tr>
            <td>
                    username
                </td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo $data['username']; ?>" required=""></td>
            </tr>
            <tr>
                <td>
                    email
                </td>
                <td>:</td>
                <td><input type="text" name="email" value="<?php echo $data['email']; ?>" required=""></td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>:</td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
            </tr>
			</table>
</form>




</body>
</html>


