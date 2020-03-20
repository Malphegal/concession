<h2>
    <?=$args->getImmat()?>
</h2>
<?php
    $currentVehicule = $args;
    include(VIEW_DIR . "Content/Nuggets/vehiculeFullSheet.php");

    echo "<a href=\"?action=vehiculeListe\">&#60; Revenir à la liste</a>";
?>