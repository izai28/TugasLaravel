<?php include "koneksi.php" ?>

    <div class="row">
         <div class="col-md-12">
         <h2> Data Barang</h2>
         <form action="" method="get">
         <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Masukkan Nama..." name="search">
         <div class="input-group-append">
         <button class="btn btn-primary" type="submit" value="Cari" id="button-search">Cari</button>
        </div>
        </div>
        </form>
        </div>
        </div>

        <div class = "card-body">

            <div class="table-repsonsive">
            <table bgcolor="blue" class="table table-sm table-boardered table-hover m-0">
                <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Image</th>
                <th>Jenis</th>
                <th>Diskon</th>
                </tr>

            <?php include "koneksi.php";
             if (isset($_GET['search'])) {
                $keyword = $_GET['search'];
                $result = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE idbarang LIKE '%".$keyword."%' OR hargabeli LIKE '%".$keyword."%'");
            }else 
                $result = mysqli_query($koneksi, "SELECT * FROM tb_barang ORDER BY idbarang ASC");

                $no = 1;
                while($data = mysqli_fetch_array($result))
            {
            
                ?>

                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['namabarang']; ?></td>
                <td> <?php echo $data['hargabeli']; ?></td>
                <td> <?php echo $data['stok']; ?></td>
                <td> <?php echo $data['image']; ?></td>
                <td> <?php echo $data['jenis']; ?></td>
                <td> <?php echo $data['diskon']; ?></td>

                </td>

        </tr>
            <?php } ?>
            </table>
        </div>
    </div>

        </div>
    </body>
</html>