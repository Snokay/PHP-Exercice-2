<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, 
ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</p>

<style type="text/css">
    #form{
        width: 20%;
        background-color: silver;
        padding: 10px 3px;
    }
</style>

<?php

$sexeInput = array("Monsieur", "Madame", "Mademoiselle");
$nomsInput = array("Nom", "Prénom", "Email", "Ville");
$choiceinput = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet ");

function form($nomsInput, $sexeinput, $choiceinput) {
    echo '<form method="post" id="form">';
    foreach ($nomsInput as $nomsInput) {
        echo '<label for="' . $nomsInput . '">' . ucfirst($nomsInput) . ':</label>' . "<br>";
        echo '<input type="text" id="' . $nomsInput . '" name="' . $nomsInput . '" /><br>';
    }
    echo "<br>";
    echo "<select>";
    foreach ($sexeinput as $valeur) {
        echo "<option value=\"$valeur\">$valeur</option>";
    }
    echo "</select>";
    echo "<br>";
    echo "<br>";
    $html = '';
    foreach ($choiceinput as $valeur) {
        $html .= "<input type='checkbox' name='$valeur' value='1'> $valeur <br>";
    }
    echo $html;
    echo "<br>";
    echo "<input type='submit' name='submit' <br>";
    echo '</form>';
}

form($nomsInput, $sexeInput, $choiceinput)

?>