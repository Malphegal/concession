<h2>
    Nos marques
</h2>
<div>
    <?php
        foreach($args as $m)
            echo "<a href=\"?action=marqueID&id=" . $m->getId() . "\" class=\"listshort bigger-1-3\">", $m->getNom() . "</a>";
    ?>
</div>