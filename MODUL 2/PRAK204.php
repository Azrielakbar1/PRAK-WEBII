<?php 
if(isset($_POST['submit'])){
    $nilai = $_POST['nilai'];
    $hasil = "";

    if ($nilai >= 1000){
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    } elseif ($nilai >=100 ){
        $hasil = "Ratusan";
    } elseif ($nilai >= 20){
        $hasil = "Puluhan";
    } elseif ($nilai >= 10){
        $hasil = "Belasan";
    } elseif ($nilai >= 1){
        $hasil = "Satuan";
    } elseif ($nilai == 0){
        $hasil = "Nol";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
    </head>
    <body>
        <form method="POST" action="">
            Nilai: <input type="number" name="nilai" value="<?=  isset($nilai) ? $nilai : '' ?>">
            <button type="submit" name="submit">Konversi</button>
        </form>

        <?php if(isset($_POST['submit'])): ?>
            <h2>Hasil: <?=  $hasil ?></h2>
        <?php endif; ?>
    </body>
</html>