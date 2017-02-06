<?php
class ContaBanco{
  public $numConta;
  protected $tipo;
  private $dono;
  private $status;
  private $saldo;
  protected $mensalidade;

  // Métodos especiais

  public function getNumConta(){
    return $this->numConta;
  }
  public function setNumConta($conta){
    $this->numConta = $conta;
  }

  public function getTipo(){
    return $this->tipo;
  }
  public function setTipo($t){
    $this->tipo = $t;
  }

  public function getDono(){
    return $this->dono;
  }
  public function setDono($d){
    $this->dono = $d;
  }

  public function getStatus(){
    return $this->status;
  }
  public function setStatus($s){
    $this->status = $s;
  }

  public function getSaldo(){
    return $this->saldo;
  }
  public function setSaldo($s){
    $this->saldo = $s;
  }
  
  public function getMensalidade(){
    return $this->mensalidade;
  }
  public function setMensalidade($m){
    $this->mensalidade = $m;
  }

  // métodos

  public function abrirConta($n,$t,$nome){
    $this->setNumConta($n);
    $this->setStatus(true);
    $this->setDono($nome);
    $this->setMensalidade(12);
    
    if ($t == 'cc'){
      $this->saldo = 50.00;
      $this->tipo = 'cc';
    }
    else if ($t == 'cp')
      $this->saldo = 150.00;
      $this->tipo = 'cp';
  }
  
  public function fecharConta(){
    if($this->saldo == 0){      
      $this->setStatus(false);
    }else
      print("Erro: Conta não pode ser fechada devido a saldo inregular");
  }
  
  public function setDeposito($valor){
    if($valor > 0 and $this->getStatus())
      $this->setSaldo(getSaldo + $valor);
    else print("Erro: Valor invalido\n\n");
  }
  
  public function sacar($valor){
    if($this->saldo >= $valor)
      $this->setSaldo($this->getSaldo() - $valor);
    else print("Erro: Saldo insuficiente\n\n");
  }
  
  public function mensalidade(){
      $this->setSaldo($this->getSaldo() - $this->getMensalidade());
  }
}

$c1 = new ContaBanco;
$c1->abrirConta(1001, 'cp', 'Glauber');
$c1->setDeposito(0);

print_r($c1);

$c1->sacar(150);

  $c1->mensalidade();

print_r($c1);
?>
