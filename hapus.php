<?php 
//cek dahulu.jika tombol tambah di klik



    //include atau memasukan file koneksi ke databaSE
    include('konek.php');

    //jika tombol tambah benear di klik maka lanjut prosesnya
    $id=$_GET['id'];
   // $nim= $_POST['mhs_nim']; //memmbuat variabel $nim dan datanya dari inputan nim
    //$nama= $_POST['mhs_nama']; //membuat variable nama dan datanya dari inputan nama lengkap
    //$prod=$_POST['prodi'];

    //melakukan query dengarn perintah insert into untuk memasukan data ke database
    $del=mysqli_query($koneksi,"DELETE FROM player  WHERE noid='$id'") or die (mysqli_error($koneksi));

// jika query input sukses
 if ($del){
    echo 'data berhasil di dihapus';// pessan jika proses edit sukses
    echo '<a href="list.php"> Kembali</a>'; //membuat link untuk kembali ke halaman tambah

 }else{
    echo 'gagal mengedit data';//pesan jika proses edit gagal
    echo '<a href="edit.php?id='.$id.'">Kembali</a>';//membuat link untuk kekmabli ke halaman tambah
 }

 ?>