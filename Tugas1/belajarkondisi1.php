<?php
    $hari = "Rabu";

    if ($hari == " Kamis ") {
        echo  " Ini Hari Kamis ";
    }else{
        echo " Ini Hari Rabu ";
    }
?>
<?php
    $hari = " Rabu ";
    $cekhari = ($hari == " Kamis ") ? " Ini Hari Kamis " : " Ini Hari Kamis ";
    echo $cekhari;
?>