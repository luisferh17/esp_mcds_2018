<?php

class Usuario{
	
	private $nombre;
	private $genero; 

public function getNombre() {
	return $this->nombre;
}

public function setNombre($nombre) {
	$this->nombre = $nombre;
}

public function getGenero() {
	return $this->genero;
}


public function setGenero($genero) {
	if($genero != 'M' and $genero != 'F') {
		throw new exception("El género debe ser M o F...");
	} else {
		$this->genero =$genero;
	}
	}
}


$usu1 = new Usuario;
$usu1->setNombre('Lucho');

$usu1->setGenero('M');
echo "Nombre: ".$usu1->getNombre();
echo "\nGenero: ".$usu1->getGenero(); 


$usu2 = new Usuario;
$usu2->setNombre('Paola');

$usu2->setGenero('F');
echo "Nombre: ".$usu2->getNombre();
echo "\nGenero: ".$usu2->getGenero(); 



?>