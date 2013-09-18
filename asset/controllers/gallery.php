<?php

class gallery extends controller {
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->render('gallery/index');
	}

}