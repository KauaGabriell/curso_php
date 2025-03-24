<?php

class Humano {
    public $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

$matheus = new Humano("Matheus");
$variavel = 10;

echo is_object($matheus) ? "É um objeto" : "Não é um objeto"; // Saída: É um objeto  
echo "<br>";
echo is_object($variavel) ? "É um objeto" : "Não é um objeto"; // Saída: Não é um objeto  
echo "A classe do objeto Matheus é: " . get_class($matheus); 
// Saída: A classe do objeto Matheus é: Humano
