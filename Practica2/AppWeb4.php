<?php
class imprimirAmigos
{
    public $amigo1 = "Yael: ";
    public $amigo2 = "Victor ";
    public $amigo3 = "Rafa";
    public $amigo4 = "Nay";
    public $amigo5 = "Chelsea";
    public function imprimir()
    {
        print "<h1>$this->titulo</h1>";
        print "<h1>$this->nombre</h1>";
        print "<h1>$this->paterno</h1>";
        print "<h1>$this->materno</h1>";
    }
}
$obj1 = new imprimirAmigos();
$obj1->imprimir();
?>