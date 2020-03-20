<header>
    <h1>La concession chez Geges</h1>
    <div id="searchbar" class="centeredflexed">
        <form action="" method="post" class="centeredflexed">
            <div>
                <label class="arrow-bot">Marque</label>
                <select name="marque" id="marqueselect">
                    <option disabled selected value></option>
                    <?php
                        foreach ($marqueOptions as $m)
                            echo "<option value='" . strtolower($m) . "'>$m</option>";
                    ?>
                </select>
            </div>
            <div>
                <label class="arrow-bot disabledlabel">Modèle</label>
                <select name="modele" id="modeleselect" disabled>
                    
                </select>
            </div>
        </form>
    </div>
</header>