<?php
    if (isset($_POST['submit'])) {
        $nilai  = $_POST['nilai'];
        $dari   = isset($_POST['dari']) ? $_POST['dari'] : "";
        $ke     = isset($_POST['ke']) ? $_POST['ke'] : "";
        $hasil  = 0;
        $satuan = $ke;

        if ($dari == "Celcius") {
            if ($ke == "Fahrenheit") {
                $hasil = ($nilai * 9/5) + 32;
            } elseif ($ke == "Reamur") {
                $hasil = $nilai * 4/5;
            } elseif ($ke == "Kelvin") {
                $hasil = $nilai + 273;
            } elseif ($ke == "Celcius") {
                $hasil = $nilai;
            }

        } elseif ($dari == "Fahrenheit") {
            if ($ke == "Celcius") {
                $hasil = ($nilai - 32) * 5/9;
            } elseif ($ke == "Reamur") {
                $hasil = ($nilai - 32) * 4/9;
            } elseif ($ke == "Kelvin") {
                $hasil = ($nilai - 32) * 5/9 + 273;
            } elseif ($ke == "Fahrenheit") {
                $hasil = $nilai;
            }

        } elseif ($dari == "Reamur") {
            if ($ke == "Celcius") {
                $hasil = $nilai * 5/4;
            } elseif ($ke == "Fahrenheit") {
                $hasil = ($nilai * 9/4) + 32;
            } elseif ($ke == "Kelvin") {
                $hasil = ($nilai * 5/4) + 273;
            } elseif ($ke == "Reamur") {
                $hasil = $nilai;
            }

        } elseif ($dari == "Kelvin") {
            if ($ke == "Celcius") {
                $hasil = $nilai - 273;
            } elseif ($ke == "Fahrenheit") {
                $hasil = ($nilai - 273) * 9/5 + 32;
            } elseif ($ke == "Reamur") {
                $hasil = ($nilai - 273) * 4/5;
            } elseif ($ke == "Kelvin") {
                $hasil = $nilai;
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
    </head>
    <body>
        <form method="POST" action="">
            Nilai : <input type="text" name="nilai"> <br>
            Dari : <br>
            <input type="radio" name="dari" value="Celcius">Celcius <br>
            <input type="radio" name="dari" value="Fahrenheit">Fahrenheit <br>
            <input type="radio" name="dari" value="Reamur">Reamur<br>
            <input type="radio" name="dari" value="Kelvin">Kelvin <br>

            Ke: <br>
            <input type="radio" name="ke" value="Celcius">Celcius <br>
            <input type="radio" name="ke" value="Fahrenheit">Fahrenheit <br>
            <input type="radio" name="ke" value="Reamur">Reamur<br>
            <input type="radio" name="ke" value="Kelvin">Kelvin <br>
            <button type="submit" name="submit">Konversi</button>
        </form>

        <?php if(isset($_POST['submit']) && !empty($dari) && !empty($ke)): ?>
            <h2>Hasil Konversi: <?= $hasil ?> ° <?= $satuan ?></h2>
        <?php endif; ?>
    </body>
</html>