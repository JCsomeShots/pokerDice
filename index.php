<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcions i Estructures de control</title>
  <style>
    h1 , h2 {
      text-align: center;
    }
    body {
      padding: 20px;
      background-color: lightgoldenrodyellow;
    }
  </style>
</head>
<body>
<h1>POO</h1>
<h2>NIVELL 2</h2>

<?php 
echo " Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode. Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió. Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora. </br></br></br>";

class PokerDice {
    private $carasDau = array("As", "K", "Q", "J", 7 ,8);
    private static $counter = 0;
    private $lanzar;

    
    public function throw (){ 
        $this->shapeName( array_rand($this->carasDau , 1) );
        echo "<br>". $this->lanzar;     
        static::$counter += 1;
        
    }
    
    public function shapeName($aleatorio){
        echo $this->carasDau[$aleatorio];   
    }
    
    public function object(){
        for ($i = 0; $i < 5; $i++){
            $poker[$i] = new PokerDice;
            $poker[$i]->throw();
        }
    }
    
    public function getTotal(){
        echo "Has tirado los dados ". static::$counter." veces </br>";
    }
}


echo "Te toca lanzar los dados <br>";
$jugar = new PokerDice;
$jugar -> object();
$jugar -> getTotal();

?>
</body>
</html>