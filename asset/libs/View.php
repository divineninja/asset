<?php

class View extends Database{
	
	var $admin_nav = array(
			array(
				'url' => 'admin/dashboard',
				'name' => 'Dashboard',
			),
			array(
				'url' => 'admin/members',
				'name' => 'Members'
			),
			array(
				'url' => 'admin/notifications',
				'name' => 'Notifications'
			),
			array(
				'url' => 'admin/messages',
				'name' => 'Messages'
			),
			array(
				'url' => 'vendor',
				'name' => 'Vendors'
			),
			array(
				'url' => 'user/logout',
				'name' => 'Sign Out'
			)
	);

	var $subscriber_nav = array(
			array(
				'url' => 'subscriber/dashboard',
				'name' => 'Dashboard',
			),
			array(
				'url' => 'subscriber/manage',
				'name' => 'Manage',
			),
			array(
				'url' => 'user/logout',
				'name' => 'Sign Out'
			)
	);

	var $manager_nav = array(
			array(
				'url' => 'manager/dashboard',
				'name' => 'Dashboard',
			),
			array(
				'url' => 'manager/manage',
				'name' => 'Manage',
			),
			array(
				'url' => 'user/logout',
				'name' => 'Sign Out'
			)
	);
    function __construct() {
       // echo 'this is the view <br />';
    }
	
    public function render($name, $noInclude = false, $sidebar = false ){
        if($noInclude == true){            
            require 'views/' . $name . '.php';            
        }else{            
            require 'views/header.php';
			
			if( $sidebar ){
					echo '<div class="span3">';
				require 'views/left.php';
					echo '</div><div class="span9">';
				require 'views/' . $name . '.php';
					echo '</div>';
			}else{
				require 'views/' . $name . '.php';
			}
			
            require 'views/footer.php';
        }
    }
	
	/*
	 * Create a open form
	 * 
	 */
	public function create_form( $action = '', $class="submit", $method = 'POST', $enctype = false ){
		$type = ( $enctype == true ) ? 'enctype="multipart/form-data"': '';
		return "<form action='$action' id='submit' class='$class' method='$method' $type >";
	}
	/*
	 * end form
	 *
	 */
	 
	public function end_form(){
		return '</form>';
	}
	
	public function get_active(){
		return $_GET['url'];
	}
	
}