<?php
    $currentImg = $currentVehicule->getImage();
    if (!file_exists($currentImg))
        $currentImg = IMG_VEHICULES . "default.png";

    $newSheet = "";
    $newSheet .= "<div class=\"vehiculesheet\">"
        . "<figure><img src=\"" . $currentImg . "\" /></figure>"
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