<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes HTML</title>
    <style>
        table {
            border-collapse: separate;
            border: 1.5px solid black;
            margin-top: 20px;

        }
        th, td {
            border: 1.5px solid black;
            text-align: left;
        }

        th{
            background-color: red;
            font-weight: bold;
            font-size: 20px; 
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $smarthphone = [
                "hp1" => "Samsung Galaxy S22",
                "hp2" => "Samsung Galaxy S22+",
                "hp3" => "Samsung Galaxy A03",
                "hp4" => "Samsung Galaxy XCover 5",
            ];
            
            foreach ($smarthphone as $key => $phone) {
                echo "<tr>";
                echo "<td>" . $phone . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>