<?php

class Admin extends Controller{
    
	function __construct(){
        parent::__construct();        
        $this->view->nav = $this->view->admin_nav;
    }
    
    public function index(){
		$this->check_log('admin/index');
    }
	
	public function register(){
		$this->view->roles = $this->model->get_roles();
		$this->check_log('admin/form/register', true);
	}
	
	public function save_member(){
		$this->model->save_member( $_POST );
	}
	
	public function dashboard(){
		$this->check_log('admin/dashboard');
	}
	
	
	public function notifications(){
		$this->check_log('admin/notifications');
	}
	
	public function messages(){
		$this->check_log('admin/messages');
	}
	
	public function members(){
		$this->view->members = $this->model->get_members();
		$this->check_log('admin/members');
	}

	public function edit_member( $id ){
		$this->view->roles = $this->model->get_roles();
		$this->view->item = $this->model->get_member($id);
		$this->check_log('admin/form/edit_member', true);
	}
	
	public function delete_members(){
		
		$ids = ( is_array( $_POST['ids'] ) ) ? $_POST['ids'] : die();

		$this->model->delete_members($ids);

	}

	public function update_member(){
		$this->model->update_member($_POST);
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