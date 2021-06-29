<!DOCTYPE html>
<html lang="en">
<head>

            <meta charset="UTS-8">
            <title>belajar Cookie</title>
            </head>

<body>
    <?php
            session_start();
            $_SESSION["nama"] = "Muhammad Zaini";
            $_SESSION["alamat"] = "Jl.A.Yani Km 60 Desa Mataraman";

            echo"Variable sudah disimpan pada server <br>";

            if(!isset ($_SESSION['nama']) && ($_SESSION['alamat'])) {
                echo "Gagal Menyimpan session";
            }
            else{
                echo "<h1>" .$_SESSION["nama"]. "<br>" .$_SESSION["alamat"];
            }
    ?>
</body>
</html>