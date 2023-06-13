<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel dan Function PHP</title>
</head>
<body>

<?php
    $nama_mahasiswa = "Ade";
    $prodi = "Sistem Informasi";
?>

<P>
    Nama saya adalah <?= $nama_mahasiswa. " " . $prodi; ?>, saya adalah mahasiswa UMSU Prodi <?= $prodi; ?>
</p>
 <?php 
 echo perkalian(5,7);
 
 
     $ganjil = 5;
     $genap = 6;

    Function perkalian($ganjil,$genap){
        return $ganjil * $genap;
    }
 ?>

 <p> Hasil penjumlahan dari <?= $ganjil ?> dengan <?= $genap ?> adalah <?= $ganjil + $genap ?></p>
 <p> Hasil perkalian dari <?= $ganjil ?> dengan <?= $genap ?> adalah <?= perkalian($ganjil,$genap) ?></p>


</body>
</html>