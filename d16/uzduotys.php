<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function plotas($x,$y) {
            return $x * $y;
        }
        $showForm = true;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST["x"];
            $y = $_POST["y"];
            $result = plotas($x,$y);
            echo "<h3>Stačiakampio plotas: $result<h3>";
            $showForm = false;
            unset($_POST["x"]);
            unset($_POST["y"]);
            }
    ?>
        
        <?php if ($showForm): ?>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
        <label for="x">Kraštine X:</label>
        <input type="number" name="x" required>
        <br>
        <label for="y">Kraštine Y:</label>
        <input type="number" name="y" required>
        <br>
        <input type="submit" value="Skaičiuoti">
        </form>
        <?php endif; ?>
        
</body>
</html>