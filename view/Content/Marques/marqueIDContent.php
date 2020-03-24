<h2>
    <?=$args->getNom()?>
</h2>
<?php
    $currentMarque = $args;
    include(VIEW_SHEET_DIR . "marqueFullSheet.php");
    
    echo "<a href=\"?action=marqueListe\">&#60; Revenir à la liste</a>";
?>