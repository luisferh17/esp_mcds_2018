<?php 

abstract class Fruta {
	protected $nombre;
	protected $color;
	protected $precio;

	public function __construct($n, $c, $p) {
		$this->nombre = $n;
		$this->color = $c;
		$this->precio = $p;
	}

abstract public function getInfo();
}

class Manzana extends Fruta {
public function getInfo() {
	return "Nombre: ".$this->nombre."\nColor: ".$this->color."\nPrecio ".$this->precio;
}
}

class Guayaba extends Fruta {
public function getInfo() {
	return "\nNombre: ".$this->nombre."\nColor: ".$this->color."\nPrecio ".$this->precio;
}
}

//$fruta1 = new Fruta; //Error: Las clases abstractas no se pueden instanciar
$fruta1 = new Manzana('Manzana-Royal', 'Rojo', 1200);
echo $fruta1->getInfo();

$fruta2 = new Guayaba('Guayaba-Agria', 'Amarillo', 1750);
echo $fruta2->getInfo();
 ?>