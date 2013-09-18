<?php echo $this->create_form( $this->set_url('admin/save_member') ); ?>
<table class="table login-form">
	<tr>
		<td>Last Name: </td>
		<td><input type="text" name="last_name" class="required last_name" required="required" /></td>
	</tr>
	<tr>
		<td>First Name: </td>
		<td><input type="text" name="first_name" class="required first_name"  required="required" /></td>
	</tr>
	<tr>
		<td>Display Name: </td>
		<td><input type="text" name="display_name" class="required display_name"  required="required" readonly="readonly" /></td>
	</tr>
	<tr>
		<td>Role: </td>
		<td>
			<select name="role" class="required" >
				<option value="">-- Select Role --</option>
			<?php
				foreach ($this->roles as $roles ) {
				?>
					<option value="<?php echo $roles->role_id; ?>"><?php echo $roles->name; ?></option>
				<?php
				}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Username: </td>
		<td><input type="text" name="username" class="required"  required="required" /></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="Password" class="required"  name="password" required="required" /></td>
	</tr>
	<tr>
		<td>Verify Password: </td>
		<td><input type="Password" class="required"  name="verify_password" required="required" /></td>
	</tr>
</table>
<?php echo $this->end_form(); ?>