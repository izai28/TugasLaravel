<?php
    include "koneksi.php";
    $id = $_GET['idbarang'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE idbarang='$id'");
    $data = mysqli_fetch_array($ambilData);
?> 

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
                Edit Data Barang
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-item">

                <div class="form-gruop">
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" value="<?php echo $data['namabarang'] ?>" class="form-control col-md-9" placeholder="Masukan Nama Barang">
                </div>

                <div class="form-gruop">
                    <label for="hargabeli">Harga Beli</label>
                    <input type="number" name="hargabeli" value="<?php echo $data['hargabeli'] ?>" class="form-control col-md-9" placeholder="Masukan Harga Beli">
                </div>

                <div class="form-gruop">
                    <label for="stok">Stok</label>
                    <input type="text" name="stok" value="<?php echo $data['stok'] ?>" class="form-control col-md-9" placeholder="Masukan Stok">
                </div>

                <div class="form-gruop">
                    <label for="image">Image</label>
                    <input type="text" name="image" value="<?php echo $data['image'] ?>" class="form-control col-md-9" placeholder="Masukan Image">
                </div>

                <div class="form-gruop">
                    <label for="jenis">Jenis</label>
                    <input type="text" name="jenis" value="<?php echo $data['jenis'] ?>" class="form-control col-md-9" placeholder="Masukan Jenis">
                </div>

                <div class="form-gruop">
                    <label for="diskon">Diskon</label>
                    <input type="number" name="diskon" value="<?php echo $data['diskon'] ?>" class="form-control col-md-9" placeholder="Masukan Diskon">
                </div>

                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                <button type="reset" class="btn btn-danger" name="batal">BATAL</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
        if(isset($_POST['simpan']))
        {
            $namabarang       = $_POST['namabarang'];
            $hargabeli       = $_POST['hargabeli'];
            $stok     = $_POST['stok'];
            $image       = $_POST['image'];
            $jenis    = $_POST['jenis'];
            $diskon    = $_POST['diskon'];

            mysqli_query($koneksi, "UPDATE tb_barang 
            SET namabarang='$namabarang', hargabeli='$hargabeli', stok='$stok', image='$image', jenis='$jenis', diskon='$diskon'
            WHERE idbarang='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center' ><h5> Silahkan, Tunggu Data Sedang DiUpdate... </div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tb_barang/databarang.php'>";


        }

?>