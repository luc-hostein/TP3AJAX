<?php
echo "<h2>TP3</h2>";
echo "<h3>Exo 7</h3><hr>";


setlocale(LC_ALL,'fr_FR.UTF8');
for($annee=2020;$annee<=2030;$annee++){
    $jour = strftime("%A",mktime(0,0,0,5,1,$annee));
    if(strftime("%A",mktime(0,0,0,5,1,$annee)) == "dimanche" ||
        strftime("%A",mktime(0,0,0,5,1,$annee)) == "samedi"){

        echo"$annee :: $jour Weekend non prolongé <br>";
    }elseif(strftime("%A",mktime(0,0,0,5,1,$annee)) == "lundi" ||
        strftime("%A",mktime(0,0,0,5,1,$annee)) == "vendredi"){
        echo"$annee :: $jour Weekend prolongé <br>";
    }else{
        echo"$annee :: $jour Pas un weekend <br>";
    }

}

?>