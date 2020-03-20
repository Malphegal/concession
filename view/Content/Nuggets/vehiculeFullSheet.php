<?php
    $newSheet = "";
    $newSheet .= "<div class=\"vehiculesheet\">"
        . "<img src=\"" . $currentVehicule->getImg() . "\" />"
        . "<dl>"
        . "<dt>Modèle : </dt><dd>" . $currentVehicule->getModele() . "</dd>"
        . "<dt>Marque : </dt><dd>" . $currentVehicule->getMarque() . "</dd>"
        . "<dt>Motorisation : </dt><dd>" . $currentVehicule->getMotorisation() . "</dd>"
        . "<dt>Nombre de portes : </dt><dd>" . $currentVehicule->getNbPortes() . "</dd>"
        . "<dt>Couleurs :</dt><dd class=\"colorcontainer\">";
    foreach ($currentVehicule->getCouleurs() as $col)
        $newSheet .= "<div style=\"background-color: $col\"></div>";
    echo $newSheet . "</dd></dl></div>";

?>