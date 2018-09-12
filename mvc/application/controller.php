<?php

class Controller {
 public $load;
 public $model;

 public function __construct() {
 $this->load = new Load;
 $this->model = new Model;

 if (isset($_GET['page'])) {
 	if($_GET['page'] == 'add') {
 		$this->add();
 	}
 } else {
 	 $this->home();
 }
 }
 public function home() {
 	//$data = $this->model->getInfo();
    $data = $this->model->getAllUsers();
    $this->load->view('home.php', $data);
 }

public function add() {

	if($_POST) {
		$firstName 	 =$_POST['firstName'];
		$lastName 	 =$_POST['lastName'];
		$email 		 =$_POST['email'];
		$phoneNumber =$_POST['phoneNumber'];
		$address 	 =$_POST['address'];
		if ($this->model->addUser($firstName, $lastName, $email, $phoneNumber, $address)) {
			echo "<script> alert('User was added succesfully!'); window.location.replace('./'); </script>";
		} else {
			echo "<script> alert('User wasn't added succesfully!'); window.location.replace('./'); </script>";
		}
		
	}

	$this->load->view('users/add.php');
}

}

?>