<h2>
    La liste de nos véhicules
</h2>
<div>
    <?php
        foreach($args as $v)
            echo "<a href=\"?action=vehiculeID&id=" . $v->getId() . "\" class=\"listshort\">", $v->getImmat() . " : " . $v->getModele() . "</a>";
    ?>
</div>