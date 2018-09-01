<?php 

class Autor {
	private $nombre;
	private $email;

	public function __construct($nombre, $email) {
		$this->nombre = $nombre;
		$this->email = $email;
	}

public function getNombre() {
	return $this->nombre;
}

public function getEmail() {
	return $this->email;
  }

}

class Libro {
	private $autores = array();
	private $nombre;
	private $precio;

public function __construct($nombre, $precio) {
		$this->nombre = $nombre;
		$this->precio = $precio;

}

public function getNombre() {
	return $this->nombre;
}

public function getPrecio() {
	return $this->precio;
  }

public function addAutor($nombre, $email) {
	$this->autores[] = new Autor($nombre, $email);
}

public function getAutores(){
	return $this->autores;
}

  }

$libro1 = new Libro("Patrones de Diseño", 50);
$libro1->addAutor("Erich Gamma","erich@gmail.com");
$libro1->addAutor("Richard Helm", "richard@gmail.com");
$libro1->addAutor("John Vlissides", "john@gmail.com");
$libro1->addAutor("Ralph Johnson", "ralph@gmail.com");

echo "= = = = = = = = = = = = = =\n";
echo "\nLibro: ".$libro1->getNombre();
echo "\nPrecio: $".$libro1->getPrecio()."\n";
echo "Autores: \n";
foreach ($libro1->getAutores() as $autor) {
	echo " - ".$autor->getNombre()."\n";
}
echo "\n\n= = = = = = = = = = = = = =";

$libro2 = new Libro("Cien años de Soledad", 75);
$libro2->addAutor("Gabriel Garcia Marquez","gabo@gmail.com");


echo "= = = = = = = = = = = = = =\n";
echo "\nLibro: ".$libro2->getNombre();
echo "\nPrecio: $".$libro2->getPrecio()."\n";
echo "Autor: \n";
foreach ($libro2->getAutores() as $autor) {
	echo " - ".$autor->getNombre()."\n";
}
echo "\n\n= = = = = = = = = = = = = =";


$libro3 = new Libro("El medio es el diseño", 35);
$libro3->addAutor("Claudia Jurado","claju@gmail.com");


echo "= = = = = = = = = = = = = =\n";
echo "\nLibro: ".$libro3->getNombre();
echo "\nPrecio: $".$libro3->getPrecio()."\n";
$autor = $libro3->getAutores();
	echo "Autor: ".$autor[0]->getNombre()."\n";

echo "\n\n= = = = = = = = = = = = = =";

 ?>