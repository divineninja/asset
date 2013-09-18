<?php

class Database extends PDO{
    
    public function __construct() {	
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }
	
	public function set_url( $uri = '' ){
		return URL.$uri;
	}
	
	public function set_password( $string = '' ){
		return md5( md5( $string ) );
	}
	
}