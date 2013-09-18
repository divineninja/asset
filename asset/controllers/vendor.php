<?php
class vendor extends Controller {
	
	function __construct(){
		parent::__construct();
		$this->view->nav = $this->view->admin_nav;
	}

	public function index(){
		$this->view->items = $this->model->get_vendors();
		$this->check_log('vendor/index');
	}

	public function register(){
		$this->check_log('vendor/form/register', true);
	}

	public function save(){
		$this->model->insert_vendor($_POST);
	}

	public function edit_item( $id ){
		$this->view->item = $this->model->get_vendor_detail($id);
		$this->check_log('vendor/form/edit_vendor', true);
	}

	public function update_item(){
		$this->model->update_vendor($_POST);
	}


	public function delete_item(){
		
		$ids = ( is_array( $_POST['ids'] ) ) ? $_POST['ids'] : die();

		$this->model->delete_item($ids);

	}
	public function check_log( $file, $noInclude = false ){
		if( isset( $_SESSION['logged_in']) && $_SESSION['role'] == '1' ){
			$this->view->render( $file, $noInclude, true );
		}else if(  isset( $_SESSION['logged_in']) && ($_SESSION['role'] == '2' || $_SESSION['role'] == '3') ){
			header("location: ". URL);
		}else{
			$this->view->render('admin/login');
		}
	}
}