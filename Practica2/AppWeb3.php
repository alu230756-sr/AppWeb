<?php
class imprimirHabilidades
{
    public $habilidades = "Logistica, resolucion de problemas, aprendizaje de lenguajes, trabajo en equipo, comprension, paciencia, ser mas dinamico, pensamiento rapido, mejor legibilidad";
    public function imprimir()
    {
        print "<h1>$this->habilidades</h1>";
    }
}
$obj1 = new imprimirHabilidades();
$obj1->imprimir();
?>