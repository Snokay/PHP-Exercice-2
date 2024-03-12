<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";

function genererCasesACocher($url, $amount) {
    for ($i = 0; $i < $amount; $i++){
        echo "<img src='$url' alt='Image'> ";
    }
}

echo genererCasesACocher($url, 4);

?>
