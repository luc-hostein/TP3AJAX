<?php
echo "<h2>TP3</h2>";
echo "<h3>Exo 6</h3><hr>";

for($annee=2020;$annee<=2062;$annee++){
if(date("m-d", strtotime("$annee-02-29")) == "02-29"){
    echo $annee."<br>";
}
}

?>
