

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Player</title>
</head>

<body>
    <header>
        <h3>Tambah Data Player</h3>
    </header>

   <form action="prosestambah.php" method="POST">
    <fieldset>
        <table cellpadding="3" cellspacing="0">
            
            <tr>
                <td>
                    id player
                </td>
                <td>:</td>
                <td><input type="text" name="idplayer" size="30" required=""></td>
            </tr>
            <tr>
                <tr>
                <td>
                    password
                </td>
                <td>:</td>
                <td><input type="password" name="password" size="30" required=""></td>
            </tr>
            <tr>
            <td>
                    username
                </td>
                <td>:</td>
                <td><input type="text" name="username" size="20" required=""></td>
            </tr>
            <tr>
                <td>
                    email
                </td>
                <td>:</td>
                <td><input type="text" name="email" required=""></td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>:</td>
                <td><input type="submit" name="Tambah" value="Tambah"></td>
            </tr>
        </table>
    </fieldset>
    </form>
 <p> 
       
         <a href="index.php">Beranda</a>   &nbsp;
      
    </p>
    </body>

   
</html>