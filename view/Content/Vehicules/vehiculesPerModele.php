<h2>
    Nos véhicule : modèle <?=$args[0]->getModele()?>
</h2>
<div>
    <?php
        echo "<div class=\"vehiculesheet-container\">";
        foreach($args as $currentVehicule)
            include(VIEW_DIR . "Content/Sheets/vehiculeFullSheet.php");
        echo "</div>";
    ?>
</div>