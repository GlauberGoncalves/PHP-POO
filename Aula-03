<?php 

class Smartphone{
  public $modelo;
  public $marca;
  protected $garantia = 365;
  private $ligado = false;
  private $ligacao = false;
  private $internet = false;
  
  public function ligar(){
    echo("Ligando celular...\n");
    $this->ligado = true;
    echo ("Celular ligado com sucesso\n\n");
  }
 
  public function desligar(){
    print("Aguarde... desligando celular\n");
    $this->ligacao = false;
    $this->internet = false;
    $this->ligado = false;
    print("Celular desligado com sucesso\n\n");
  }
 
  public function chamada(){
    if($this->ligado == false){
      echo("Erro!\nNão foi possivel efetuar a ligação\nTelefone desligado.\n\n");
    }else{
      $this->ligacao = true;
      echo("Ligando para Cigrano...\nLigação estabelecida\n\n");
    }
  }
  
  public function especifications(){
    echo("Marca: ". $this->marca . "\n");
    print("Modelo: ". $this->modelo . "\n");
    print("Garantia: ". $this->garantia . "dias\n");
  }
  
}

/****************** Usando a classe   ****************/  

$celular = new Smartphone;

$celular->marca = 'Moto';
$celular->modelo = 'G3';

/* $celular->especifications(); */

$celular->chamada();
$celular->ligar();
$celular->chamada();
$celular->desligar();

?>
