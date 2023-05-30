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
    <?php
        $cities = ['Berlynas', 'Roma', 'Londonas'];
        $cities[] = 'Tokijas';
        print_r($cities); 
    ?>
    <ul>
       <li><?php echo $cities[1];?></li> 
    </ul>
    <?php 
        $cities2 = [
            'Tokijas' => 13.6,
            'Vasingtonas' => 0.6,
            'Maskva' => 11.5
        ];
        $cities2['Londonas'] = 8.6;
        print_r($cities2);   
    ?>
    <ul>
<!-- ANTRA UZDUOTIS -->
        <?php 
            $population = $cities2['Tokijas'];
        ?>
        <li><?php echo "Gyventojų skaičius: $population mln.";?></li>
    </ul>
    <?php 
        $cities3 = [
            'Tokijas' => [13.6, 1868, 'Japonija'],
            'Vasingtonas' => [0.6, 1790, 'JAV'],
            'Maskva' => [11.5, 1147, 'Rusija']
        ];
        $cities3['Londonas'] = [8.6, 43, 'Anglija']; 
        $population = $cities3['Londonas'][0];
        $founded = $cities3['Londonas'][1];
        $country = $cities3['Londonas'][2];    
    ?>
    <ul>
        <li><?php echo "Gyventojų skaičius: $population mln.";?></li>
        <li><?php echo "Įkurtas: $founded m.";?></li>
        <li><?php echo "Šalis: $country";?></li>
    </ul>
    <br>
<!-- TRECIA UZDUOTIS -->
    <?php 
        $metai = 1774;
        $foundedDC = $cities3['Vasingtonas'][1];
        $yearsleft = $foundedDC - $metai;
        if ($metai >= $foundedDC) {
            echo "Vašingtonas yra JAV sostinė."; 
        } elseif ($metai == 1774) {
            echo "JAV sostinė vis dar Filadelfijoje.";
        } else {
            echo "Liko $yearsleft metai (-ų) iki Vašingtono įkūrimo.";
        }
    ?>
<br>
<!-- KETVIRTA UZDUOTIS -->
    <?php 
        $cities4 = ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];
    ?>
    <ul>
        <?php for ($i = 0; $i < count($cities4); $i++) {
            echo "<li>$cities4[$i]</li>";
        }
        ?>
    </ul>
    <ul>
        <?php foreach ($cities4 as $city) {
            echo $city .'<br>';
        }
        ?>
    </ul>
<br>
<!-- PENKTA UZDUOTIS -->
    <?php 
        $tempApril = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
        $totalTemp = 0;
        foreach ($tempApril as $day) {
            $totalTemp += $day;
        }
        $avgTempApril = round($totalTemp / count($tempApril));
        echo "Vidutinė balandžio mėnesio temperatūra: $avgTempApril.<br>";
        rsort($tempApril). "<br>";
        $topHot = array_slice($tempApril, 0, 5);
        $topCold = array_slice($tempApril, -5, 5);
        echo "Penkios šilčiausios temperatūros:" . implode(",", $topHot) . ".<br>";
        echo "Penkios šalčiausios temperatūros:" . implode(",", $topCold) . ".<br>";
    ?>
 <br>
<!-- SESTA UZDUOTIS -->
    <?php
    $ceu = array(
        "Italija"=>"Roma",
        "Liuksemburgas"=>"Liuksemburgas",
        "Belgija"=>"Briuselis",
        "Danija"=>"Kopenhaga",
        "Suomija"=>"Helsinkis",
        "Prancūzija"=>"Paryžius",
        "Slovakija"=>"Bratislava",
        "Slovenija"=>"Liublijana",
        "Vokietija"=>"Berlynas",
        "Graikija"=> "Atėnai",
        "Airija"=>"Dublinas",
        "Nyderlandai"=>"Amsterdamas",
        "Portugalija"=>"Lisabona",
        "Ispanija"=>"Madridas",
        "Švedija"=>"Stokholmas",
        "Didžioji Britanija"=>"Londonas",
        "Kipras"=>"Nikosija",
        "Lietuva"=>"Vilnius",
        "Čekija"=>"Praha",
        "Estija"=>"Talinas",
        "Vengrija"=>"Budapeštas",
        "Latvija"=>"Ryga",
        "Malta"=>"Valeta",
        "Austrija"=>"Viena",
        "Bulgarija"=>"Sofija",
        "Rumunija"=>"Bukareštas",
        "Lenkija"=>"Varšuva");
    asort($ceu);
    foreach ($ceu as $country => $capital) {
        echo "$country: $capital<br>";
    }
    ?>
</body>
</html>