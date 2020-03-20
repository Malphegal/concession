<h2>
    Nos véhicule : modèle <?=$args[0]->getModele()?>
</h2>
<div>
    <?php
        foreach($args as $currentVehicule)
            include(VIEW_DIR . "Content/Nuggets/vehiculeFullSheet.php");
    ?>
</div>