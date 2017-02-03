<?php 
class Caneta{
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;
  
  function rabiscar(){
    if($this->tampada == true){
      echo "Não posso rabiscar\n";
    }
    else echo "Estou rabiscando\n";
  }
  
  function tampar(){
    $this->tampada = true;
  }
  function destampar(){
    $this->tampada = false;
  }
}

$c1 = new Caneta;
$c1 ->cor = "Azul";
$c1 ->ponta = 0.5;
$c1 ->tampada = true;

$c1->rabiscar();
$c1->destampar();
$c1->rabiscar();

$c2 = new Caneta;
$c2->modelo = 'bic';

print($c2->modelo);

?>
