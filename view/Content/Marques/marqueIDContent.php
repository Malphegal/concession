<h2>
    <?=$args->getNom()?>
</h2>
<?php
// ---------- listfull -> vehiculesheet ------------ */
// ---------- listfull -> vehiculesheet ------------ */
// ---------- listfull -> vehiculesheet ------------ */
    echo "<div class=\"listfull\">"
    . "<img src=\"" . $args->getImg() . "\" />"
    . "<dl>"
    . "<dt>Origine : </dt><dd>" . $args->getOrigine() . "</dd>"
    . "<dt>Description : </dt><dd>" . $args->getDesc() . "</dd>"
    . "</dl></div>";
    
    echo "<a href=\"?action=marqueListe\">&#60; Revenir à la liste</a>";
?>