<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>

<!-- Une classe est un moule qui permet de regrouper des méthode et fonction et utiliser pour créer une nouvelle instance-->

<?php

class Voiture {
    protected string $marque;
    protected string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }
    public function information(){
        return "$this->marque $this->modele";
	}
}

class VoitureElec extends Voiture {

    
    private string $autonomie;


    public function __construct( $marque, $modele , string $autonomie) {

        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;

    }


    public function information(){
        return "<br>".parent::information()." avec une autonomie de ".$this->autonomie;
    }
}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->information();
echo $ve1->information();
?>