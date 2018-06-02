<?php 
//cek dahulu.jika tombol tambah di klik

if(isset($_POST['Tambah'])){

	//include atau memasukan file koneksi ke databaSE
	include('konek.php');

	//jika tombol tambah benear di klik maka lanjut prosesnya
	$idplayer= $_POST['idplayer']; //memmbuat variabel $nim dan datanya dari inputan nim
	$password= $_POST['password']; //membuat variable nama dan datanya dari inputan nama lengkap
	$username= $_POST['username'];
	$email= $_POST['email'];
	//melakukan query dengarn perintah insert into untuk memasukan data ke database
	$input=mysqli_query($koneksi,"INSERT INTO player VALUES (NULL, '$idplayer','$password','$username','$email')") or die (mysqli_error($koneksi));

// jika query input sukses
 if ($input){
 	echo 'data berhasil di tambahkan';// pessan jika proses tambah sukses
 	echo '<a href="list.php"> Kembali</a>'; //membuat link untuk kembali ke halaman tambah

 }else{
 	echo 'gagal menambahkan data';//pesan jika proses tambah gagal
 	echo '<a href="form-tambah.php">Kembali</a>';//membuat link untuk kekmabli ke halaman tambah
 }

}else {
	//jika tidak terdeteksi tombol tambah diklik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}


 ?>