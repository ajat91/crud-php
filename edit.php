<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include ("config.php");
        $data=mysqli_query($koneksi,"select * from tb_siswa where id='{$_GET['id']}'");
        $siswa_data=mysqli_fetch_object($data);
    ?>
    <form method="POST" action="edit.php">
        <table border="0" width="50%" align="center">
            <input type="hidden" name="id" value="<?php echo $siswa_data->id?>">
            <tr>
                <td>Nis</td>
                <td><input type="text" name="nis" value="<?php echo $siswa_data->nis?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $siswa_data->nama?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $siswa_data->kelas?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $siswa_data->alamat?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="submit">Edit Data</button></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST['submit'])){
            $nis=$_POST['nis'];
            $nama=$_POST['nama'];
            $kelas=$_POST['kelas'];
            $alamat=$_POST['alamat'];
            $id=$_POST['id'];

            mysqli_query($koneksi,"update tb_siswa set nis='{$nis}',nama='{$nama}',kelas='{$kelas}',alamat='{$alamat}' where id='{$id}'");
            
            echo '
            <script>
                alert("Data Berhasil Disimpan");
                window.location="index.php";
            </script>
		';

        }
    ?>
</body>
</html>