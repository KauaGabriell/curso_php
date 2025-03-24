<?php
class Gato
{
    public function miar()
    {
        return "Miau!";
    }

    public function dormir()
    {
        return "Dormindo...";
    }

    public $nome = "Felix";
    public $idade = 2;
}
if (class_exists('Gato')) {
    echo "A classe Gato existe!";
}

$metodos = get_class_methods('Gato');
print_r($metodos);
$propriedades = get_class_vars('Gato');
print_r($propriedades);
