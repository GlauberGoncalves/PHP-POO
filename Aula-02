<?php 

// visibilidade

class Caneta{
  public $modelo;
  public $cor;
  private $ponta;
  private $carga;
  protected $tampada;
  
  public function rabiscar(){
    if($this->tampada == true){
      echo "Não posso rabiscar\n";
    }
    else echo "Estou rabiscando\n";
  }
  
  public function tampar(){
    $this->tampada = true;
  }
  public function destampar(){
    $this->tampada = false;
  }
}

$c1 = new Caneta;
$c1->modelo = 'Bic';
// $c1->tampada = true; não é possivel acessar dessa maneira
$c1->destampar();

var_dump($c1);
?>
