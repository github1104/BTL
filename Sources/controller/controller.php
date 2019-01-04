<?php
class Controller{

	function loadView($view, $data=array()){
		include('views/layout.php');
	}

	function index(){
		$this->loadView('index');
	}
	
	function dichvu(){
		$this->loadView('dichvu');
	}

	function dangky(){
		$this->loadView('dangky');
	}

	function tronggiu(){
		$this->loadView('tronggiu');
	}

	function lienhe(){
		$this->loadView('lienhe');
	}

	function gioithieu(){
		$this->loadView('gioithieu');
	}

	function chuandoan(){
		$this->loadView('chuandoan');
	}

	function datlich(){
		$this->loadView('datlich');
	}
}
 
?>