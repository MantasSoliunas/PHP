<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php ini_set('display_errors', '1');?>
    <?php 
        // class Car {
        //     public $bakas;

        //     public function degaluKiekis($litrai) {
        //         $this -> bakas += $litrai;
        //         return $this;
        //     }

        //     public function atstumas($distancija) {
        //         $km = $distancija;
        //         $litrai = $km * 0.33;
        //         $this -> bakas -= $litrai;
        //         return $this;
        //     }
        // }

        // $bmw = new Car();

        // $bakas = $bmw -> degaluKiekis(1320) -> atstumas(800) -> bakas;
        // echo 'Bake bus likę: ' . $bakas . ' L.';


        // $kaledos2023 = strtotime('Dec 25, 2023');
        // echo date('l', $kaledos2023);

        $data1 = new DateTime();
        $data2 = new DateTime();
        
        $capetown = new DateTimeZone('Africa/Johannesburg');
        $vilnius = new DateTimeZone('Europe/Vilnius');

        $data1 -> setTimezone($capetown);
        $data2 -> setTimezone($vilnius);

        echo 'Laikas Cape Town: ' . $data1 -> format('g:ia, l, F j, Y') . '<br>';
        echo 'Laikas Vilniuje: ' . $data2 -> format('g:ia, l, F j, Y') . '<br>';
    ?>
</body>
</html>