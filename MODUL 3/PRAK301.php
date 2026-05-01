<?php 
$jumlah = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $jumlah = $_POST['jumlah'];
}
?>


<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Jumlah Peserta : <input type="text" name="jumlah">
            <br>
            <button type="submit">Cetak</button>
        </form>

        <?php
        $i = 1;
        while ($i <= $jumlah){
            if($i % 2 == 0){
                echo "<h2 style= 'color: green;'>Peserta ke-$i</h2>";
            } else {
                echo "<h2 style= 'color: red;'>Peserta ke-$i</h2>";
            }
            $i++;
        }
        ?>
    </body>
</html>