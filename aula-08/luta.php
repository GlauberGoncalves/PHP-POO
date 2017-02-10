<?php
require_once 'pokemon.php';
class Luta {
    // Atributos
    private $pdireita;
    private $pesquerda;
   
    
    // Metodos publicos
    public function lutar($po1, $po2){
        $cont = 0;
        print("<h2>" . $po1->getNome() . " VS ". $po2->getNome() ."</h2>");
        while(($po1->getVida() > 0) and ($po2->getVida() > 0)){            
            if($cont == 0){                
               $dano = $po2->defender($po1);              
                $cont = 1;
                 print("<br>");
                 print($po1->getNome() . " atacou " . $po2->getNome() . " causando " . $dano . " de dano!");
                $this->status($po1, $po2);
                print("<br>");
            }else{
                $dano = $po1->defender($po2);
                $cont = 0;
                print("<br>");
                print("<br>" . $po2->getNome() . " atacou " . $po1->getNome(). " causando " . $dano . " de dano!");                                
                $this->status($po1, $po2);
                print("<br>------------------------------------");
            }                        
        }
        $this->verificaVencedor($po1, $po2);
    }
    
    private function verificaVencedor($p1, $p2){        
        if(!($p1->getVida())){
            print($p2->getNome() . " Venceu!!!");
        }elseif (!($p2->getVida())) {
            print("<br><h2>" . $p1->getNome() . " Venceu!!!<h2>");            
        }else{
            return 0;
        }
        
    }
    
    public function status($l1,$l2){
        print("<br>");
        print($l1->getNome(). ":" . $l1->getVida());

        print("<br>");
        print($l2->getNome(). ":" . $l2->getVida());       
    }
}