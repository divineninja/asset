<?php  if( isset($_SESSION['logged_in']) ) { ?>
		<div class="panel panel-primary col-sm-4 col-md-4">
	        <div class="panel-heading">
	          <h3 class="panel-title">Thank you for visiting <?php echo $_SESSION['user_data']->display_name; ?>!</h3>
	        </div>
	        <div class="panel-body">
	        	<div class="row-fluid">
		          	<div class="col-sm-12 col-md-12">
					    <a style="min-height: 300px; margin: 0 auto 10px;" href="#" class="thumbnail">
					      <img src="<?php echo $_SESSION['user_data']->picture; ?>" alt="...">
					    </a>
					</div>
					<div class="col-sm-12 col-md-12">
						<ul class="list-unstyled">
							<li><label>Name:</label> <?php echo $_SESSION['user_data']->first_name. ' '. $_SESSION['user_data']->last_name; ?></li>
							<li><label>Gender:</label> <?php echo $_SESSION['user_data']->gender ?></li>
							<li><label>Email Address:</label> <?php echo $_SESSION['user_data']->email ?></li>
							<li><label>Username:</label> <?php echo $_SESSION['user_data']->username ?></li>
							<li><label>Google ID:</label> <?php echo $_SESSION['user_data']->google_id ?></li>
							<li>
								<div class="btn-group">
									<a class="btn btn-primary btn-small" href="<?php echo URL.$_SESSION['user_data']->name ?>">Dashboard</a>
									<a class="btn btn-primary btn-small" href="<?php echo URL.'/user/logout' ?>">Sign out</a>
								</div>
							</li>
						</ul>								
					</div>
				</div>
	        </div>
	      </div>
<?php }  ?>