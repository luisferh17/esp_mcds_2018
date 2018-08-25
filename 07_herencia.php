<?php 

class Operacion {
protected $num1;
protected $num2;


public function __construct($num1, $num2) {
$this->num1 = $num1;
$this->num2 = $num2;


}
}

class Suma extends Operacion {
	public function getResultado() {
		return $this->num1 + $this->num2;
	}
}


class Resta extends Operacion {
	public function getResultado() {
		return $this->num1 - $this->num2;
	}
}


class Division extends Operacion {
	public function getResultado() {
		return $this->num1 / $this->num2;
	}
}

class Multiplicacion extends Operacion {
	public function getResultado() {
		return $this->num1 * $this->num2;
	}
}


$oper1 = new Suma(6, 13);
echo "\nLa suma es: ".$oper1->getResultado();

$oper2 = new resta(25, 17);
echo "\nLa resta es: ".$oper2->getResultado();

$oper3 = new Division(30, 6);
echo "\nLa division es: ".$oper3->getResultado();

$oper4 = new Multiplicacion(13, 7);
echo "\nLa multiplicacion es: ".$oper4->getResultado();

 ?>