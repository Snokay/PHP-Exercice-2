<h1>Exercice 12</h1>

<p>A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<?php

$tableauValeurs = array(true, "texte", 10, 25.369, array("valeur1", "valeur2"));

foreach ($tableauValeurs as $valeur) {
    if (is_array($valeur)) {
        echo "array (" . count($valeur) . ") {";
        foreach ($valeur as $element) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;[0]=> string(" . strlen($element) . ") \"" . $element . "\"";
        }
        echo "} <br>";
    } else if (gettype($valeur) == "string") {
        echo gettype($valeur) . "(" . strlen($valeur) . ") \"" . $valeur . "\" <br>";
    } else {
    echo gettype($valeur) . " (" . var_export($valeur, true) . ") <br>";
    }
}

?>