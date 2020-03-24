<?php
    echo "<div class=\"marquesheet\">"
        . "<figure><img src=\"" . $currentMarque->getImage() . "\" /></figure>"
        . "<dl>"
        . "<dt>Origine : </dt><dd>" . $currentMarque->getOrigine() . "</dd>"
        . "<dt>Description : </dt><dd>" . $currentMarque->getDesc() . "</dd>"
        . "</dl></div>";
?>