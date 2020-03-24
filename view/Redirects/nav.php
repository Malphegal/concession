<nav>
    <a href="index.php" <?=checkNavTag("index.php")?>><span></span><span>Accueil</span></a>
    <a href="?action=marqueListe" <?=checkNavTag("action=marque")?>><span></span><span>Nos marques</span></a>
    <a href="?action=vehiculeListe" <?=checkNavTag("action=vehicule")?>><span></span><span>Nos véhicules</span></a>
    <a href="">Part2 (todo:)</a>
</nav>
<?php
    function checkNavTag($str){
        $uri = $_SERVER["REQUEST_URI"];
        if (preg_match('/\baction=.+\b/', $uri)){
            $sub = substr($uri, strpos($uri, "action="));
            $nextHopper = strpos($sub, "&");
            if ($nextHopper)
                $sub = substr($sub, 0, $nextHopper);
            if (strpos($sub, $str) !== false)
                return "class=\"boldnav\"";
            else
                return "";
        }
        return strpos($str, "index.php") !== false ? "class=\"boldnav\"" : "";
    }
?>