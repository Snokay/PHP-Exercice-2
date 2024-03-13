<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule.</p>

<!-- Une classe est un moule qui permet de regrouper des méthode et fonction et utiliser pour créer une nouvelle instance-->
<style>
    #text{
        font-family: Arial, Helvetica, sans-serif;
        background-color: silver;
        width: 30%;
    }
</style>

<div id="Text">
<?php

class Voiture {
    private string $marque;
    private string $modèle;
    private int $nbPortes;
    private int $vitesseActuelle;
    private int $start;

    public function __construct(string $marque, string $modèle, int $nbPortes) {
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->start = false;
    }

    public function demarrer(){
        if ($this->start == false){
            $this->start = true;
            echo "Le véhicule $this->marque $this->modèle démarre<br>";
        }
    }

    public function accelerer(int $vitesse){
        if ($this->start == true){
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule $this->marque $this->modèle accélère de $this->vitesseActuelle km / h<br>";
        }else{
            echo "Le véhicule $this->marque $this->modèle accélère de $vitesse<br>";
            echo "Pour accélerer, il faut démarrer le véhicule $this->marque $this->modèle<br>";
        }
    }

    public function stopper(){
        if ($this->start == true){
            $this->start = false;
            $this->vitesseActuelle = 0;
            echo "Le véhicule $this->marque $this->modèle est stoppé<br>";
        }
    }

    public function ralentir($vitesse){
        if ($this->start == true && $this->vitesseActuelle > 0){
            $this->vitesseActuelle -= $vitesse;
            echo "Le véhicule $this->marque $this->modèle ralenti sa vitesse passe a $this->vitesseActuelle km / h<br>";
        }
    }

    public function vitesseCheck(){
        echo "La vitesse du véhicule $this->marque $this->modèle est de : $this->vitesseActuelle km / h<br>";
	}

    public function information(){
        echo "<br>Infos véhicule<br> ******************<br>";
        echo " Nom et modèle du véhicule : $this->marque $this->modèle<br>";
        echo "Nombre de portes : $this->nbPortes <br>";
        echo $this->start == true ? "Le véhicule $this->marque est démarré<br>" : "Le véhicule $this->marque est à l'arrêt<br>";
        echo "Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br>";
	}

    public function __toString()
	{
		return "$this->marque $this->modèle $this->nbPortes<br>";
	}

}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->ralentir(10);
$v1->vitesseCheck();
$v2->vitesseCheck();

$v1->information();
$v2->information();

?>
</div>