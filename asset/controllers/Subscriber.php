<?php 
class Subscriber extends Controller {


	function __construct(){
		parent::__construct();
		$this->view->nav = $this->view->subscriber_nav;
	}

	public function index(){
		$this->check_log('subscriber/index');
	}

	public function manage(){
		$this->check_log('subscriber/manage');
	}

	public function dashboard(){
		$this->check_log('subscriber/dashboard');
	}

	public function check_log( $file, $noInclude = false ){
		if( !isset( $_SESSION['logged_in']) ){
			header("location: ". URL.'admin');
		}else if( isset( $_SESSION['logged_in']) && $_SESSION['role'] == '2' || $_SESSION['role'] == '1' ){
			$this->view->render( $file, $noInclude, true );
		}else if( isset( $_SESSION['logged_in']) && $_SESSION['role'] == '3' ){
			header("location: ". URL);
		}else{
			$this->view->render('admin/login');
		}
	}


}