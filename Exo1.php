<?php
echo "<h2>TP3</h2>";
echo "<h3>Exo 1</h3><hr>";

echo "EN : ";
echo date('l j F Y', mktime(0, 0, 0, 03, 18, 2020));
echo "<br>";
setlocale(LC_ALL,'fr_FR.UTF8');
echo "FR : ".strftime("%A %d %B %G",time());
echo"<br>";
echo "Date et heure :";
echo date('d/j/o G:i', time());
echo"<br>";
echo "Il c'est passé ";
echo mktime(time());;
echo " seconde";


?>
