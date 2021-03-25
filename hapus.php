<?php
    include('config.php');
    if(isset($_GET['id'])){
        mysqli_query($koneksi,"DELETE from tb_siswa where id='{$_GET['id']}'");

        echo
        "
        <script>
            alert ('Data Berhasil dihapus');
            window.location='index.php';
        </script>
        ";

    }
?>