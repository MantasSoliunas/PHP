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
        $x = 10;
        $y = 7;
        $result = $x + $y;
    ?>

    <?php echo "$x + $y = $result"; ?>
    <br>
    <?php $result = $x - $y; ?>
    <?php echo "$x - $y = $result"; ?>
    <br>
    <?php $result = $x * $y; ?>
    <?php echo "$x * $y = $result"; ?>
    <br>
    <?php $result = $x / $y; ?>
    <?php echo "$x / $y = $result"; ?>
    <br>
    <?php $result = $x % $y; ?>
    <?php echo "$x % $y = $result"; ?>
</body>
</html>