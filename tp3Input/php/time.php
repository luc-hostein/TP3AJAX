<?php

$data = getdate();
$heure = $data("hours");
$minute = $data("minutes");
$seconde = $data("seconds");
$heureNow = "il est : $heure:$minute:$seconde";
$date = array($heureNow=>array("hours"=>$heure,"minutes"=>$minute,"secondes"=>$seconde,));

echo "hello world";


?>