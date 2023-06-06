<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PIRMA UZDUOTIS -->
    <?php ini_set('display_errors', '1');?>
    <?php 
        class Person {
            public $name;
            public $lastName;

            public function greet() {
                return 'Hello ' . $this -> name . ' ' . $this -> lastName . '!<br>';
            }
        }

        $john = new Person();
        $jane = new Person();
        
        $john -> name = "John";
        $john -> lastName = "Doe";

        $jane -> name = "Jane";
        $jane -> lastName = "Smith";
        
        echo $john -> greet();
        echo $jane -> greet();
    ?>
    <!-- ANTRA UZDUOTIS -->
    <?php
        function printDate($year) {
            if ($year < date('Y')) {
                return '&copy ' . $year . '-' . date('Y');
            } elseif ($year == date('Y')) {
                return '&copy ' . date('Y');
            } else {
                return 'Kelionė laiku negalima';
            }
        }

        echo printDate(2022);
    ?>
</body>
</html>