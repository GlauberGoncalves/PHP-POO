<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'pokemon.php';
        require_once 'luta.php';
        
        // creating objects
        $p1 = new Pokemon('Pikachu', 900, 250, 2000);
        $p2 = new Pokemon('Bubasaur', 300, 500, 2000);
        
        $duelo = new Luta();
        $duelo->lutar($p1, $p2);
        
        
        ?>
    </body>
</html>
