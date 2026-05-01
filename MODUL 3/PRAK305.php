<?php 
$str = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $str= $_POST['str'];
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            <input type="text" name="str">
            <button type="submit">submit</button>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $panjang = strlen($str);
            echo "<h2>Input:</h2>";
            echo $str;
            echo "<h2>Output:</h2>";
        $i = 0;
        while($i < $panjang){
            $j = 0;
            while($j < $panjang){
                if($j == 0){
                    echo strtoupper($str[$i]);
                } else {
                    echo strtolower($str[$i]);
                }
                $j++;
            }
            $i++;
        }
        }
         
        ?>
    </body>
</html>