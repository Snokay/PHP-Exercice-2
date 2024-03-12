<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<?php

function convertirMajRouge($phrase){
        $phrase = strtoupper($phrase);
    
        $chaine = '<span style="color: red;">' . $phrase . '</span>';
        
        return $chaine;
}

$phrase = "Mon texte en parametre ";
echo convertirMajRouge($phrase);

?>