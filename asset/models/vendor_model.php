<?php
class vendor_Model extends Model {
	
	function __construct() {
        parent::__construct();
    }
	
	public function insert_vendor( $data ){
		$this->insert('vendors',$data);
		echo json_encode(array(
				'status' => 'ok',
				'code' => 200,
				'message' => 'User Successfully Registered.'
			));
		return;
	}	

	public function get_vendor_detail( $id ){
		return $this->selectSingle("SELECT * FROM vendors WHERE id = '$id'");
	}

	public function update_vendor($params){
		// update user
		$this->update('vendors', $params, "id = {$params['id']}");

		echo json_encode(array(
				'status' => 'ok',
				'code' => 200,
				'message' => 'User Successfully Updated.'
			));
	}

	public function get_vendors(){
		return $this->select("SELECT * FROM vendors");
	}

	public function delete_item($ids = array() ){
		foreach($ids as $id){
			$this->delete( 'vendors', "id = $id" );
		}
	}

}