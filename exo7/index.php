<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.</p>

<?php

function genererCasesACocher($elements) {
    $html = '';

    foreach ($elements as $valeur) {
        $html .= "<input type='checkbox' name='$valeur' value='1'> $valeur <br>";
    }

    return $html;
}

$elements = array("Choix 1", "Choix 2", "Choix 3",);

echo genererCasesACocher($elements);

?>
