<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        tr {
            height: 40px;
            text-align: center;
        }
        td {
            width: 60px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<table border=\"1\">";
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>\n";
            for($col = 1; $col <= 10; $col++) {
                $x = $col * $row;
                echo "<td>$x</td>\n";
            }
            echo "</tr>";
        }
        echo "</table>"
    ?>
</body>
</html>