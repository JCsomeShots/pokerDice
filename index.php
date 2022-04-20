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
    private static $carasDau = array("As", "K", "Q", "J", 7 ,8);
    private static $counter = 0;
    private $lanzar;
    
    public function throw(){ 
        $this->lanzar = array_rand(static::$carasDau , 1) ;
        PokerDice::$counter += 1;
        return $this->lanzar;    
      }
      
      public function shapeName(){
        echo static::$carasDau[$this->lanzar] . "</br>"; 
    }
    
    public function getTotal(){
        echo "Has tirado los dados ". self::$counter." veces </br>";
    }

}


echo "Te toca lanzar los dados <br>";
function instanciar(){
  for ($i = 0; $i < 5; $i++){
    $poker[$i] = new PokerDice;
    $poker[$i]-> throw();
    $poker[$i]-> shapeName();

  }
  if($poker[4]){
    $poker[4]-> getTotal();
  }
}
instanciar();
  
?>
</body>
</html>
