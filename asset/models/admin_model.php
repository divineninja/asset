<?php
class admin_Model extends Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function save_member( $params ){
		
		// validate if the usename and password are equal
		if( $params['password'] != $params['verify_password'] ) {
			echo json_encode(array(
				'status' => 'error',
				'code' => 600,
				'message' => 'Password Does Not Matched.'
			));
			return;
		}
		
		// unset verify password from the parameters
		unset( $params['verify_password'] );

		// set deprecated password to the array
		$params['password'] = $this->set_password( $params['password'] );
		
		// try to login user if the user is already registered or new member
		if( $this->login_user( $params ) ){
			echo json_encode(array(
				'status' => 'error',
				'code' => 600,
				'message' => 'User Already Registered.'
			));
			return;
		}else{
			// insert to database if the user is not registered
			$this->insert( 'users', $params );
			echo json_encode(array(
				'status' => 'ok',
				'code' => 200,
				'message' => 'User Successfully Registered.'
			));
			return;
		}
	}
	public function get_member( $id ){
		return $this->selectSingle("SELECT * FROM users as s
				LEFT JOIN roles as r on s.role = r.role_id 
					WHERE s.id = $id");
	}

	public function get_members(){
		return $this->select('SELECT * FROM users as s
				LEFT JOIN roles as r on s.role = r.role_id');
	}

	public function get_roles(){
		return $this->select('SELECT * FROM roles');	
	}
	
	public function delete_members($ids = array() ){
		foreach($ids as $id){
			$this->delete( 'users', "id = $id" );
		}
	}

	public function update_member($params){

		if( isset($params['password']) && isset($params['verify_password']) ){
			// validate if the usename and password are equal
			if( $params['password'] != $params['verify_password'] ) {
				echo json_encode(array(
					'status' => 'error',
					'code' => 600,
					'message' => 'Password Does Not Matched.'
				));
				return;
			}
			// unset verify password from the parameters
			unset( $params['verify_password'] );

			// set deprecated password to the array
			$params['password'] = $this->set_password( $params['password'] );
		}else{
			unset($params['password']);
			unset($params['verify_password']);
		}
		// update user
		$this->update('users', $params, "id = {$params['id']}");

		echo json_encode(array(
				'status' => 'ok',
				'code' => 200,
				'message' => 'User Successfully Updated.'
			));
	}
}