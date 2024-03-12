<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>

<style type="text/css">
    #form{
        width: 20%;
        background-color: silver;
        padding: 10px 3px;
    }
</style>

<?php

function afficherInput($nomsInput) {
    echo '<form method="post" id="form">';
    foreach ($nomsInput as $nomsInput) {
        echo '<label for="' . $nomsInput . '">' . ucfirst($nomsInput) . ':</label>' . "<br>";
        echo '<input type="text" id="' . $nomsInput . '" name="' . $nomsInput . '" /><br>';
    }
    echo '</form>';
}

// Exemple d'utilisation :
$nomsInput = array("Nom", "Prénom", "Ville");
afficherInput($nomsInput);

?>
