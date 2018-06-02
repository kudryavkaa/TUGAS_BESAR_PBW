<?php include("konek.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Player</title>
</head>

<body>
    <header>
        <h3>Data Player yang Terdaftar</h3>
    </header>

         <a href="index.php">Beranda</a>   &nbsp; | &nbsp;
        <a href="form-tambah.php">[+] Tambah Baru</a> 
        <br>
        <br>
    

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>noid</th>
            <th>idplayer</th>
            <th>password</th>
            <th>username</th>
            <th>email</th>
          
        </tr>
    </thead>
    <tbody>

        <?php
        
        include('konek.php');
        
        $query = mysqli_query($koneksi, "SELECT * FROM player ORDER BY noid ASC") or die(mysqli_error($koneksi));
        
        //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
        if(mysqli_num_rows($query) == 0){    //ini artinya jika data hasil query di atas kosong
            
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            
        }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
            
            
            $no = 1;
            while($data = mysqli_fetch_assoc($query)){   

            //perulangan while dg membuat variabel $data yang akan mengambil data di database
                
            //menampilkan row dengan data di database
            
                echo '<tr>';
                    echo '<td>'.$no.'</td>';    //menampilkan nomor urut
                    
                    echo '<td>'.$data['idplayer'].'</td>';
                    echo '<td>'.$data['password'].'</td>';  //menampilkan data nama lengkap dari database
                    echo '<td>'.$data['username'].'</td>';
                    echo '<td>'.$data['email'].'</td>';
                    echo '<td><a href="edit.php?id='.$data['noid'].'">Edit</a>  <a href="hapus.php?id='.$data['noid'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';  
                    //menampilkan link edit dimana tiap link terdapat GET id -> ?id=mahasiswa_id
                echo '</tr>';
                
                $no++;  //menambah jumlah nomor urut setiap row
                
            }
            
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>