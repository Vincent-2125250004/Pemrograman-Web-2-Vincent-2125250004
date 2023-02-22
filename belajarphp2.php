<?php
    //Membuat Variable
    $nama_depan ="Cent";
    $namaDepan ="Cent";
    $namaBelakang="Rachmat";
    $umur=19;
    $ipk = 3.92; //float // double
    $hadir = false;
    $sallary = null;

    //echo "Nama Lengkap : ", $nama_depan," ", $namaBelakang;
    // echo "Nama Lengkap : $namaDepan $namaBelakang";
    echo "Nama Lengkap : ${namaDepan} ${namaBelakang}";
    echo "<br/>";
    echo "Umur : $umur Tahun";
    $umur = 21;
    echo "<br/>";
    echo "Umur Sekarang : $umur tahun";
    unset($umur);//menghapus variable dinamis
    //Static Variable (Define)
    define("TEMPATLAHIR", "PALEMBANG");
    echo "<br/>";
    echo "Tempat Lahir :" .TEMPATLAHIR
    //Variable Global
    /*
    1. Session --> $_SESSION['nama'];
    2. Cookie --> $_COOKIE['namaCookie'];
    3. Post --> $_POST['npm'];
    4. Get --> $_GET['npm'];
    5. Server --> $_SERVER[];
    */
    
?>