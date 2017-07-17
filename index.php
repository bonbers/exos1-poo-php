<?php

class Exo1
{
    public function bonjour()
    {
        echo "Bonjour tous le monde!";
    }
}

$exo = new Exo1;
$exo->bonjour();

?>

<?php
class Politesse
{

    function __construct() {
    echo "Bonjour tous le monde ! Je suis le parent";
    }
}

class Politesse2 extends Politesse {
    function __construct()
    {
        parent::__construct();
        echo "Je suis l'enfant de Politesse !";
    }
}

//$objet = new Politesse();
$objet = new Politesse2();
?>

<?php

class Client {
    public $chaine;
    public $VotreNom;
    function __construct()
    {
        $this->chaine;
        $this->VotreNom;
    }
    function presentation($chaine, $VotreNom){
        $this->chaine=$chaine;
        $this->VotreNom=$VotreNom;
        echo $chaine."<br>".$VotreNom;
    }
}
$affiche = new Client();
$affiche->presentation("Bonjour tous le monde moi c'est","test");

?>

<?php

class Phrase{

    private $chaine="Prog orientée objet";

    public function gras()
    {
        echo '<b>'.$this->chaine.'</b>';
    }
    public function italique()
    {
        echo '<i>'.$this->chaine.'</i>';
    }
    public function souligne()
    {
        echo '<u>'.$this->chaine.'</u>';
    }
    public function majuscules()
    {
        echo '<t style="text-transform: uppercase;">'.$this->chaine.'</t>';
    }
}
$chaine = new Phrase();
//var_dump($chaine);
echo $chaine->gras();
echo $chaine->italique();
echo $chaine->souligne();
echo $chaine->majuscules().'<br>';
?>


<?php

class Tri
{
    public $tableau;
    public function __construct($tableau)
    {
        $this->tableau=$tableau;
    }
    public function triage()
    {
        $tableautrier= $this->tableau;
        sort($tableautrier);
        return $tableautrier;
    }
}
$tableautwo = new Tri (array(11, -2, 4, 35, 0, 8, -9));
var_dump($tableautwo->triage());

?>
<br>
<?php


class Calculatrice{
    public $num1;
    public $num2;
    public function __construct($calc1, $calc2)
    {
        $this->num1=$calc1;
        $this->num2=$calc2;
    }
    public function addition(){
        return $this->num1 + $this->num2;
    }
    public function soustraction(){
        return $this->num1 - $this->num2;
    }
    public function multiplication() {
        return $this->num1 * $this->num2;
    }
    public function division() {
        return $this->num1 / $this->num2;
    }
}

$calcul = new Calculatrice(10, 5);
echo $calcul->addition().'<br>';
echo $calcul->division().'<br>';
echo $calcul->multiplication().'<br>';
echo $calcul->soustraction().'<br>';

?>

