<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="modelo.css"/>
</head>
<body>
    <?php
        $array1 = [["Fiat","Marea","Tipo","Uno","147"],
                   ["GM","Vectra","Monza","Corsa"],
                   ["VW","Voyage","Parati"],
                   ["Ford","Escort","Ka","Ecosport"]];
                      
        foreach($array1 as $index => $a){
            $indice = $index + 1;
            echo "<lable name=\"array1[]\" value=\"\">$indice.$a[0]<br>";
            for($i = 1; $i < count($a);$i++){
                echo "<input type=\"radio\" name=\"array1[]\">$a[$i]<br>";
            }
        }
    ?>
</body>
</html>