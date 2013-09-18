<?php
class user_Model extends Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function login( $params ){
		$params['password'] = $this->set_password( $params['password'] );
		$login = $this->login_user( $params );
	
		if( $login ){
			$_SESSION['logged_in'] = true;
			$_SESSION['role'] = $login->role;
			$_SESSION['user_data'] = $login;
			echo json_encode(array(
				'status' => 'ok',
				'code' => 200,
				'message' => 'successfully Logged In.',
				'details' => $login
			));
			
			return;
		}else{
			echo json_encode(array(
				'status' => 'error',
				'code' => 600,
				'message' => 'Username and Password is not Found.'
			));
			return;
		}
	}
	
}
