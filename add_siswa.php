<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
</head>
<body>
    <form action="add_siswa.php" method="POST">
        <table align="center">
            <tr>
                <td>Nis</td>
                <td><input type="text" name="nis" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tambah Siswa"></td>
            </tr>
            <?php
                include('config.php');
                if (isset($_POST['submit'])){
                    $nis=$_POST["nis"];
                    $nama=$_POST["nama"];
                    $kelas=$_POST["kelas"];
                    $alamat=$_POST["alamat"];
                    
                    mysqli_query($koneksi,"insert into tb_siswa (nis,nama,kelas,alamat) VALUES ('$nis','$nama','$kelas','$alamat')" );
                
                    echo "
                    <tr>
                        <td></td>
                        <td>Siswa berhasil ditambahkan <a href='index.php'>Daftar Siswa</a></td>                    
                    </tr>
                    
                    
                    ";

                };
            ?>
        </table>
    </form>
    
</body>
</html>