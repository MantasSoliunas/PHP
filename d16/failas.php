<?php
        setcookie("name", "Valdas Adamkus", time()+3600, "/","", 0);
        setcookie("age", "92", time()+3600, "/","", 0);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failo skaitymas su PHP</title>
</head>
<body>
    <?php
        // $filename = 'text.txt';
        // $file = fopen($filename, "r");

        // $filesize = filesize($filename);
        // $filetext = fread($file, $filesize);
        // fclose($file);

        // echo "Failo dydis: $filesize B";
        // echo "<pre>$filetext</pre>";
     ?>

    <?php 
        // if(isset($_COOKIE["name"])) {
        //     echo 'Welcome, ' . $_COOKIE["name"] . '<br>';
        //     echo 'You are ' . $_COOKIE["age"] . ' years old.';
        // } else {
        //     echo "Who are you?";
        // }
    ?>

    <?php 
        function sudetis($num1, $num2) {
            $suma = $num1 + $num2;
            echo "Dviejų skaičių suma: $suma";
        }
        sudetis(547, 2541);
    ?>
</body> 
</html>