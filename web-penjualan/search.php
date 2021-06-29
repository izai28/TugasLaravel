<?php include "koneksi.php" ?>

    <div class="row">
         <div class="col-md-12">
         <h2> Data Customer</h2>
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
            <table bgcolor="orange" class="table table-sm table-boardered table-hover m-0">
                <tr>
                <th>Id Customer</th>
                <th>Nama Customer</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Kode</th>
                </tr>

            <?php include "koneksi.php";
             if (isset($_GET['search'])) {
                $keyword = $_GET['search'];
                $result = mysqli_query($koneksi, "SELECT * FROM customer WHERE nama LIKE '%".$keyword."%' OR alamat LIKE '%".$keyword."%'");
            }else 
                $result = mysqli_query($koneksi, "SELECT * FROM customer ORDER BY nama ASC");

                $no = 1;
                while($data = mysqli_fetch_array($result))
            {
            
                ?>

                <td><?php echo $no++; ?> </td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['telp']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['kota']; ?></td>
                <td><?php echo $data['kodepos']; ?></td>

                </td>

        </tr>
            <?php } ?>
            </table>
        </div>
    </div>

        </div>
    </body>
</html>