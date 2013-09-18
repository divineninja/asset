<?php

class manager extends Controller {


	function __construct(){
		parent::__construct();
		 $this->view->nav = $this->view->manager_nav;
	}

	public function index() {
		$this->check_log('manager/index');
	}

	public function check_log( $file, $noInclude = false ){
		if( !isset( $_SESSION['logged_in']) ){
			header("location: ". URL.'admin');
		}else if( isset( $_SESSION['logged_in']) && $_SESSION['role'] == '3' || $_SESSION['role'] == '1' ){
			$this->view->render( $file, $noInclude, true );
		}else if(  isset( $_SESSION['logged_in']) && $_SESSION['role'] == '2' ){
			header("location: ". URL);
		}else{
			$this->view->render('admin/login');
		}
	}
}