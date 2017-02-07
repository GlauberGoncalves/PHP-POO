<?php
require_once 'Controlador.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleRemoto
 *
 * @author Glauber
 */
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    // metodos especiais
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    private function setVolume($volume) {
        if ($volume >= 0 and $volume <= 100) {
            $this->volume = $volume;
        }
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    // Metodos 
    
    public function abrirMenu() {
       echo "<br>Está ligado? " . ($this->getLigado()?"SIM":"NÃO");
       echo "<br>Está tocando? " . ($this->getTocando()?"SIM":"NÃO");
       echo "<br>Volume " . $this->getVolume();
       for($i=0;$i <= $this->getVolume();$i+=10){
           echo "|";
       }
       echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando menu...";
    }    
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado() and $this->getVolume() == 0)
            $this->setVolume (50);
    }
    public function ligarMudo() {
        if($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        }        
    }
    public function pause() {
        if($this->getTocando() and $this->getLigado()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if($this->getLigado() and !($this->getTocando())){
            $this->setTocando(TRUE);
        }
    }

}
