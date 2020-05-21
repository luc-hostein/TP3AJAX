<?php
echo "<h2>TP3</h2>";
echo "<h3>Exo 3</h3><hr>";
setlocale(LC_ALL,'fr_FR.UTF8');


$eclipse = new DateTime("2020-2-9T8:34:35");
$nbJour = new DateInterval("P29DT12H44M3S");
for($i=0;$i<100;$i++){
    $eclipse->add($nbJour);
}

//$living = date_add($eclipse,$nbJour);
echo $eclipse->format('Y-m-d H:i:s');
echo "<br>";




?>
