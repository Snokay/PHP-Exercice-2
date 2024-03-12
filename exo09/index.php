<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<?php

function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $valeur) {
        echo "<input type='radio' name='genre' value='$valeur'> $valeur <br>";
    }
}

$nomsRadio = array("Masculin", "Féminin", "Autre");

afficherRadio($nomsRadio);

?>