<div class="hide alert alert-info login-message"></div>
<?php echo  $this->create_form( $this->set_url('user/login'), 'form_submit' ); ?>
<table class='table login-form'>
	<tr>
		<td>Username: </td>
		<td><input type="text" name="username" class="span12" required="required"/></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" name="password" class="span12"  required="required"/></td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="btn-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-danger" />
				<button name="submit" class="btn btn-google btn-info" >Login with Google</button>
			</div>
		</td>	
	</tr>
<table>
<?php echo $this->end_form(); ?>