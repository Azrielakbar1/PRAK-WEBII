<?php 
$jumlah = 0;
if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    if(isset($_POST['aksi']) && $_POST['aksi'] == 'tambah'){
        $jumlah = $_POST['jumlah'] + 1;
    } else if (isset($_POST['aksi']) && $_POST['aksi'] == 'kurang'){
        $jumlah = $_POST['jumlah'] - 1;
    } else {
        $jumlah = $_POST['jumlah'];
    }
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Jumlah Bintang <input type="text" name="jumlah">
            <br>
            <button type="submit">Submit</button>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "<p> Jumlah Bintang $jumlah</p>";
            echo "<br>";
            $i = 1;
            while($i <= $jumlah){
                echo "<img src='star.png' width='50'>";
                $i++;
            }
            echo "<br>
            <form method='POST'>
            <input type='hidden' name='jumlah' value= '$jumlah'> 
            <button type='submit' name='aksi' value='tambah'>Tambah</button>
            <button type='submit' name='aksi' value='kurang'>Kurang</button>
            </form>";  
        } 
        ?>
    </body>
</html>