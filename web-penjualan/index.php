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
                Input Data Customer
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-item">

                <div class="form-gruop">
                    <label for="nama">Nama Customer</label>
                    <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukan Nama"
                </div>

                <div class="form-gruop">
                    <label for="telp">Telepon</label>
                    <input type="number" name="telp" class="form-control col-md-9" placeholder="Masukan Telepon"
                </div>

                <div class="form-gruop">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukan Alamat"
                </div>

                <div class="form-gruop">
                    <label for="kota">Kota</label>
                    <input type="text" name="kota" class="form-control col-md-9" placeholder="Masukan Kota"
                </div>

                <div class="form-gruop">
                    <label for="nama">Kodepos</label>
                    <input type="number" name="kodepos" class="form-control col-md-9" placeholder="Masukan Kodepos"
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
            $nama       = $_POST['nama'];
            $telp       = $_POST['telp'];
            $alamat     = $_POST['alamat'];
            $kota       = $_POST['kota'];
            $kodepos    = $_POST['kodepos'];

            mysqli_query($koneksi, "INSERT INTO customer VALUES('',
                '$nama', '$telp', '$alamat', '$kota', '$kodepos' 
            )") or die(mysqli_error($koneksi));

            echo "<div align='center' ><h5> Silahkan, Tunggu Data Sedang Disimpan... </div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-penjualan/data_customer.php'>";
        }