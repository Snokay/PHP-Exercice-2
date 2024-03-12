<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<table>
    <tr>
        <td>Pays</td>
        <td>Capitale</td>
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
    foreach ($capitales as $pays => $ville) {
        echo "<tr>";

        echo "<td>" . $pays . "</td>";
        echo "<td>" . $ville . "</td>";

        echo "</tr>";
    }
}

afficherTableHTML($capitales);

?>

</table>