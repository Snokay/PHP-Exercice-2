<h1>Exercice 4</h1>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</p>

<table>
    <tr>
        <td>Pays</td>
        <td>Capitale</td>
        <td>Lien Wiki</td>
    </tr>

<style type="text/css">
    table {
    border-collapse: collapse;
    border: 2px solid black;
    letter-spacing: 1px;
    font-size: 0.8rem;
    }

    td, th {
    border: 2px solid black;
    padding: 5px 20px;
    }

    td {
    text-align: left;
    }
</style>

<?php

$capitales = array(
    "FRANCE" => "Paris",
    "ALLEMAGNE" => "Berlin",
    "ITALIE" => "Rome",
    "USA"=> "Washington",
);

function afficherTableHTML($capitales){
    //We do the same thing just before we use a ksort to put them in alphabetical order.
    ksort($capitales);
    $tables = "";
    foreach ($capitales as $pays => $ville) {
        $tables .= 
        "<tr>
        <td>" . $pays . "</td>" .
        "<td>" . $ville . "</td>" .
        "<td>" .
        '<a href="https://fr.wikipedia.org/wiki/' . $ville . '" target="_blank">' . "Lien" . "</a>" .
        "</td>" .
        "</tr>";
    }

    return $tables;
}

echo afficherTableHTML($capitales);

?>

</table>