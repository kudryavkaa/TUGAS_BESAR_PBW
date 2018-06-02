 <?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $name = "ujian";

 $koneksi = mysqli_connect($host, $user, $pass) or die("koneksi gagal");
 mysqli_select_db($koneksi, $name) or die("tidak ada database yang dipilih");
 ?>
