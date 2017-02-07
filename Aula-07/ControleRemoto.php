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
    
    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    function setVolume($volume) {
        $this->volume = $volume;
    }

    function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    
    function getVolume() {
        return $this->volume;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getTocando() {
        return $this->tocando;
    }

    public function abrirMenu() {
       echo "Está ligado? " . ($this->getLigado()?"SIM":"NÃO");
       echo "Está tocando? " . ($this->getTocando()?"SIM":"NÃO");
       echo "Volume " . $this->getVolume();
       for($i=0;$i <= $this->getVolume();$i+=10){
           echo "|";
       }
       echo "<br>";
    }
    public function fecharMenu() {
        
    }    
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        
    }

    public function ligarMudo() {
        
    }

    public function maisVolume() {
        
    }

    public function menosVolume() {
        
    }

    public function pause() {
        
    }

    public function play() {
        
    }

}
