<?php

class User extends Controller{
    
    function __construct(){
        parent::__construct();        
    }
    
	function login(){
		if( !isset( $_SESSION['logged_in'] ) ){
			$this->model->login($_POST);
		}else{
			header( 'LOCATION: '. URL );
		}
	}
	
	function logout(){
		session_destroy();
		header( 'LOCATION: '. URL );
	}
	
}