<?php

class Pokemon {
    // Atributos
    private $nome;
    private $ataque;
    private $defesa;
    public  $vida;
    
    function __construct($nome, $ataque, $defesa, $vida) {
        $this->nome = $nome;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->vida = $vida;
    }
    function getNome() {
        return $this->nome;
    }

    function getAtaque() {
        return $this->ataque;
    }

    function getDefesa() {
        return $this->defesa;
    }

    public function getVida() {
        return $this->vida;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAtaque($ataque) {
        $this->ataque = $ataque;
    }

    function setDefesa($defesa) {
        $this->defesa = $defesa;
    }

    public function setVida($vida) {
        if($vida >= 0){
            $this->vida = $vida;
        }else{
            $this->vida = 0;
        }
    }

    //Metodos
    public function atacar($pok){
        $pok->defender($this->getAtaque());
    }

    public function defender($valor){
        if($this->getDefesa() < $valor->getAtaque()){
            $d = ($valor->getAtaque() - $this->getDefesa());
            $this->setVida($this->getVida() - $d);
            return $d;
        } 
        return 0;
    }
    
}
