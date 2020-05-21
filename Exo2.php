<?php
echo "<h2>TP3</h2>";
echo "<h3>Exo 2</h3><hr>";
setlocale(LC_ALL,'fr_FR.UTF8');

echo "Date de naissance : ";
echo date('d/j/o', mktime(0, 0, 0, 10, 26, 2000));
echo"<br>";
echo "Date aujourd'hui :";
echo date('d/j/o G:i', time());
echo"<br>";
$birth = new DateTime("2000-10-26");
$now = new DateTime("now");
$living = date_diff($now,$birth);
echo "Age : ".$living->y." ans ".$living->m." month " .$living->d." days ".$living->s." second";
echo "<br>";
echo time()-mktime(0,0,0,10,26,2000);



?>