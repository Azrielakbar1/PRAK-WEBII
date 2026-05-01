<?php 
$tinggi = 0;
$alamat = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tinggi = $_POST['tinggi'];
    $alamat = $_POST['alamat'];
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Tinggi: <input type="text" name="tinggi">
            <br>
            Alamat Gambar: <input type="text" name="alamat">
            <br>
            <button type="submit">Cetak</button>
        </form>
        <br>
        <?php 
        $baris = 1;
        while ($baris <= $tinggi) {
            $padding = ($baris - 1) * 25;
            $gambar = 1;
            echo "<div style='padding-left: {$padding}px'>";
            while ($gambar <= $tinggi - $baris + 1) { 
                echo "<img src= '$alamat' width= '25'>";
                $gambar++;
            }
            echo "</div>";
            $baris++;
        }
        ?>
    </body>
</html>