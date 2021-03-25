<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa dumbways</title>
</head>
<body>
    <table align="center" width="80%" border="1">
        <tr>
            <th>Nis</th><th>Nama</th><th>Kelas</th><th>Alamat</th><th>Aksi</th>
        </tr>
        <?php
           
            include ("config.php");
            $result= mysqli_query ($koneksi,"select * from tb_siswa");
            while ($siswa_data=mysqli_fetch_object($result)){
                echo   
                "<tr>
                    <td>".$siswa_data->nis."</td>
                    <td>".$siswa_data->nama."</td>
                    <td>".$siswa_data->kelas."</td>
                    <td>".$siswa_data->alamat."</td>
                    <td>
                        <button><a href='edit.php?id=".$siswa_data->id."'>Edit</a></button>
                        <button><a href='hapus.php?id=".$siswa_data->id."'onclick='myFunction ()'>Hapus</a></button>
                        <script>
                            function myFunction() {
                            var r = confirm('OK to delete?');
                            if (r == false) {
                            return false;
                            } 

                            }
                        </script>
                    </td>
                    
                </tr>
                ";
            };
        ?>    
        <td><button><a href='add_siswa.php'>Tambah Siswa Baru</a></button></td>
    </table>
    <br><br>
    
</body>
</html>
