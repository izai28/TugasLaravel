<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar Cookie</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["nama"])) {
            echo " Isi dari cookie 'nama' adalahh : ".$_COOKIE['nama'];
        }else{
            setcookie("nama", "Zaini");
            echo "Cookie berhasil dibuat, please refresh browser";
        }
    ?>
</body>
</html>