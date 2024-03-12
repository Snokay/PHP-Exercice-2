<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.</p>

<?php

function alimenterListeDeroulante($elements) {
    echo "<select>";
    
    foreach ($elements as $valeur) {
        echo "<option value=\"$valeur\">$valeur</option>";
    }
    
    echo "</select>";
}

$elements = array("Monsieur", "Madame", "Mademoiselle");
alimenterListeDeroulante($elements);

?>
