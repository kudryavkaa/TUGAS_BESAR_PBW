<?php 
//cek dahulu.jika tombol tambah di klik

if(isset($_POST['Simpan'])){

	//include atau memasukan file koneksi ke databaSE
	include('konek.php');

	//jika tombol tambah benear di klik maka lanjut prosesnya
	$noid= $_POST['id'];
	$idplayer= $_POST['idplayer']; 
	$password= $_POST['password']; 
	$username= $_POST['username'];
	$email= $_POST['email'];

	//melakukan query dengarn perintah insert into untuk memasukan data ke database
	$update= mysqli_query($koneksi,"UPDATE player SET idplayer='$idplayer', password='$password', username='$username', email='$email' WHERE noid='$noid'") or die (mysqli_error($koneksi));


// jika query input sukses
 if ($update){
 	echo 'data berhasil di edit';// pessan jika proses tambah sukses
 	echo '<a href="list.php"> Kembali</a>'; //membuat link untuk kembali ke halaman tambah

 }else{
 	echo 'gagal mengedit data';//pesan jika proses tambah gagal
 	echo '<a href="edit.php">Kembali</a>';//membuat link untuk kekmabli ke halaman tambah
 }

}else {
	//jika tidak terdeteksi tombol tambah diklik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}


 ?>