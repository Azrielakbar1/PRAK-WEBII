<?php
if (isset($_POST['submit'])) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];

        if ($nama1 > $nama2){
            $temp = $nama1;
            $nama1 = $nama2;
            $nama2 = $temp;
        }
        if ($nama2 > $nama3){
            $temp = $nama2;
            $nama2 = $nama3;
            $nama3 = $temp;
        }
        if ($nama1 > $nama2){
            $temp = $nama1;
            $nama1 = $nama2;
            $nama2 = $temp;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 201</title>
</head>
<body>
    <form method="POST" action="">
        Nama 1: <input type="text" name="nama1"> <br>
        Nama 2: <input type="text" name="nama2"> <br>
        Nama 3: <input type="text" name="nama3"> <br>
        <button type="submit" name="submit">Urutkan</button> 
    </form>
    <?php
    if (isset($_POST['submit'])): ?>
        <tr>
            <th style="text-align: left;"><h2>Output</h2></th>
        </tr>
        <tr>
            <td><?= $nama1 ?><br>
            <?= $nama2 ?><br>
            <?= $nama3 ?>
        </td>
        </tr>
    <?php endif; ?>
</body>
</html>