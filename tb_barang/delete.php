<?php
    include "koneksi.php";
    $id = $_GET['idbarang'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE idbarang='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/tb_barang/databarang.php'>";  
?> 
