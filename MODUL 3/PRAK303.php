<?php 
$bawah = 0;
$atas = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Batas Bawah : <input type="text" name="bawah">
            <br>
            Batas Atas : <input type="text" name="atas">
            <br>
            <button type="submit">Cetak</button>
        </form>
        <br>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            $i = $bawah;
            do{
                if(($i + 7) % 5 == 0){
                    echo "<img src = 'star.png' width = '30'>";
                } else {
                    echo $i . " ";
                }
                $i++;
            } while ($i <= $atas);
        }
        ?>
    </body>
</html>