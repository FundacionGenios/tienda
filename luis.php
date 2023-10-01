<?php 

//practica de git y poo

class Producto{
    public $nombre;
    public $precio;
    public $categoria;

    function __construct($nombre,$precio,$categoria){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    public function obtenerInfo($id){
        echo "La informacion del producto ingresado con id" . " " . $id . " "  . "es:" . " " . $this->nombre . ", " . $this->precio . ", " . $this->categoria;
        echo "<br>";
    }

    public function borrarInfo($id){
        echo "El producto con el id:" . " " . $id . " " . "esta siendo eliminado...";
        $this->nombre = "";
        $this->precio = "";
        $this->categoria = "";
    }
}

$producto = new Producto('Doritos',5700,'Pasa bocas');
 
?>