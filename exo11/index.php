<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<?php

function formaterDateFr($dateString) {
    $mois = array(
        1 => "janvier", 
        2 => "février", 
        3 => "mars", 
        4 => "avril", 
        5 => "mai", 
        6 => "juin", 
        7 => "juillet", 
        8 => "août", 
        9 => "septembre", 
        10 => "octobre", 
        11 => "novembre", 
        12 => "décembre"
    );

    $partiesDate = explode('-', $dateString);
    $annee = intval($partiesDate[0]);
    $moisNum = intval($partiesDate[1]);
    $jour = intval($partiesDate[2]);

    $dateEnLettres = $jour . ' ' . $mois[$moisNum] . ' ' . $annee;

    echo $dateEnLettres;
}

formaterDateFr("2018-02-23");

?>