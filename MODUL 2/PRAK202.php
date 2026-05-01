<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = isset($_POST['jk']) ? $_POST['jk']:"";

    if (empty($nama)){
        $errorname = '* nama tidak boleh kosong';
    }
    if (empty($nim)){
        $errornim = '* nim tidak boleh kosong';
    }
    if (empty($jk)){
        $errorjk = '* jenis kelamin tidak boleh kosong';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
</head>
<body>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" value="<?= isset($nama) ? $nama : '' ?>"> 
        <span style="color: red;"><?= isset($errorname) ? $errorname : '' ?>*</span> <br>
        Nim: <input type="text" name="nim" value="<?=  isset($nim) ? $nim : '' ?>"> 
        <span style="color: red;"><?= isset($errornim) ? $errornim : '' ?>*</span><br>
        Jenis Kelamin:
        <span style="color: red"><?= isset($errorjk) ? $errorjk: '' ?>*</span> <br>
        <input type="radio" name="jk" value="Laki-Laki"> Laki-laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if(isset($_POST['submit']) && empty($errorname) && empty($errornim) && empty($errorjk)): ?>
        <h2>Output:</h2>
        <p><?= $nama ?></p>
        <p><?= $nim ?></p>
        <p><?= $jk ?></p>
    <?php endif; ?>
</body>
</html>