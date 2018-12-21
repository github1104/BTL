	<?php

class Controller{

	function loadView($view, $data=array()){
		include("views/layout.php");
		
	}

	function index(){
		$this->loadView('index');
	}
	
}
 
?>