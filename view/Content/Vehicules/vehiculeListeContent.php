<h2>
    Nos véhicules en magasin
</h2>
<div>
    <?php
        if (count($args) == 0)
            return;
        $previousMarque = $args[0]->getMarque();
        echo "<h3>$previousMarque</h3><ul>";
        foreach($args as $v)
        {
            $currentMarque = $v->getMarque();
            if ($currentMarque != $previousMarque)
                echo "</ul><h3>$currentMarque</h3><ul>";
            echo "<a href=\"?action=vehiculeID&id=" . $v->getId() . "\" class=\"listshort\"><span>" . $v->getImmat() . "</span><span>" . $v->getModele() . "</span></a>";
            $previousMarque = $currentMarque;
        }
        echo "</ul>";
    ?>
</div>