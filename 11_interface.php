<?php 

interface Animal{
public function comer();
public function correr();
}

class Perro implements Animal{
	private $nombre;

	public function __construct($nombre) {
		$this->nombre = $nombre;

 }
		public function getNombre() {
			return $this->nombre;
		}

		public function ladrar() {
	return "Ladrar...";
}

public function comer() {
	return "Comer...";
}
 
public function correr() {
	return "Correr...";
}
 }

class Gato implements Animal{
	private $nombre;

	public function __construct($nombre) {
		$this->nombre = $nombre;

 }
		public function getNombre() {
			return $this->nombre;
		}


public function maullar() {
	return "Maullar...";
}

public function comer() {
	return "Comer...";
}
 
public function correr() {
	return "Correr...";
}
 }

$perro1 = new Perro('Firulais');
echo $perro1->getNombre();
echo $perro1->correr();
echo $perro1->comer();
echo $perro1->ladrar();


$gato1 = new Gato('Felix');
echo $gato1->getNombre();
echo $gato1->correr();
echo $gato1->comer();
echo $gato1->maullar();

 ?>