<?php

class contact extends controller {
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->render('contact/index');
	}

}