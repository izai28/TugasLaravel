<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Barang
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-item">

                <div class="form-gruop">
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" class="form-control col-md-9" placeholder="Masukan Nama Barang">
                </div>

                <div class="form-gruop">
                    <label for="hargabeli">Harga Beli</label>
                    <input type="number" name="hargabeli" class="form-control col-md-9" placeholder="Masukan Harga Beli">
                </div>

                <div class="form-gruop">
                    <label for="stok">stok</label>
                    <input type="text" name="stok" class="form-control col-md-9" placeholder="Masukan Stok">
                </div>

                <div class="form-gruop">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control col-md-9" placeholder="Masukan Image">
                </div>

                <div class="form-gruop">
                    <label for="jenis">Jenis</label>
                    <input type="text" name="jenis" class="form-control col-md-9" placeholder="Masukan Jenis">
                </div>

                <div class="form-gruop">
                    <label for="diskon">Diskon</label>
                    <input type="text" name="diskon" class="form-control col-md-9" placeholder="Masukan Diskon">
                </div>

                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                <button type="reset" class="btn btn-danger" name="batal">BATAL</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $namabarang       = $_POST['namabarang'];
            $hargabeli       = $_POST['hargabeli'];
            $stok     = $_POST['stok'];
            $image       = $_POST['image'];
            $jenis    = $_POST['jenis'];
            $diskon    = $_POST['diskon'];

            mysqli_query($koneksi, "INSERT INTO tb_barang VALUES('',
                '$namabarang', '$hargabeli', '$stok', '$image', '$jenis', '$diskon' 
            )") or die(mysqli_error($koneksi));

            echo "<div align='center' ><h5> Silahkan, Tunggu Data Sedang Disimpan... </div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tb_barang/databarang.php'>";
        }