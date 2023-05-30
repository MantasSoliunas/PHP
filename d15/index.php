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
        $darbuotojai = ['Tomas', 'Domas', 'Rita', 'Kristina'];
        print_r($darbuotojai);
        $darbuotojai[] = 'Rasa';
        print_r($darbuotojai);
        echo $darbuotojai[1];
        echo count($darbuotojai);
    
        $i = 1;
        while ($i <=12) {
            $result = $i * 12;
            echo "$i kart 12 yra $result <br>";
            $i++;
        }
    ?>
</body>
</html>