<?php
class imprimirNombre
{
    public $titulo = "Nombre completo es: ";
    public $nombre = "Ivan Axel";
    public $paterno = "Hipolito";
    public $materno = "De La Fuente";
    public function imprimir()
    {
        print "<h1>$this->titulo</h1>";
        print "<h1>$this->nombre</h1>";
        print "<h1>$this->paterno</h1>";
        print "<h1>$this->materno</h1>";
    }
}
$persona = new imprimirNombre();
$persona->imprimir();
?>