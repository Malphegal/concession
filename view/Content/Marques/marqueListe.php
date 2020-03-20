<h2>
    Nos marques
</h2>
<div>
    <?php
        foreach($args as $m)
            echo "<a href=\"?action=marqueID&id=" . $m->getId() . "\" class=\"listshort\">", $m->getNom() . "</a>";
    ?>
</div>