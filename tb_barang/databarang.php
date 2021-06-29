<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Barang
        </div>
        <div class="card-body">
            <a href="index.php" class="btn btn-primary">Tambah Data</a>
            <a href="search.php" class="btn btn-primary">Cari</a>
            <table class="table table-borderedd">
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Image</th>
                    <th>Jenis</th>
                    <th>Diskon</th>
                </tr>
                <?php 
                    include "koneksi.php";
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                    while($data=mysqli_fetch_array($tampil))
                    {
                ?>
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?php echo $data['namabarang'] ?> </td>
                    <td> <?php echo $data['hargabeli'] ?> </td>
                    <td> <?php echo $data['stok'] ?> </td>
                    <td> <img src="barang/<?php echo $data['image']; ?>"width="100px" height="100px"> </td>
                    <td> <?php echo $data['jenis'] ?> </td>
                    <td> <?php echo $data['diskon'] ?> </td>
                    <td> 
                            <a href="editbarang.php?idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>

                <?php } ?>

            </table>
        </div>
    </div>
</body>
</html>