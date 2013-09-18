<?php echo $this->create_form( $this->set_url('admin/update_member') ); ?>
<table class="table login-form">
	<tr>
		<td>Last Name: </td>
		<td><input type="text" value="<?php echo $this->item->first_name; ?>" name="last_name" class="required last_name" required="required" /></td>
	</tr>
	<tr>
		<td>First Name: </td>
		<td><input type="text" value="<?php echo $this->item->last_name; ?>" name="first_name" class="required first_name"  required="required" /></td>
	</tr>
	<tr>
		<td>Display Name: </td>
		<td><input type="text" value="<?php echo $this->item->display_name; ?>" name="display_name" class="required display_name"  required="required" readonly="readonly" /></td>
	</tr>
	<tr>
		<td>Role: </td>
		<td>
			<select name="role" class="required" >
				<option value="">-- Select Role --</option>
			<?php
				foreach ($this->roles as $roles ) {
					$selected = ( $roles->role_id == $this->item->role_id )? 'selected="selected"': '';
				?>
					<option <?php echo $selected; ?> value="<?php echo $roles->role_id; ?>"><?php echo $roles->name; ?></option>
				<?php
				}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Username: </td>
		<td><input type="text"  value="<?php echo $this->item->username; ?>"  name="username" class="required"  required="required" /></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="Password" name="password" /></td>
	</tr>
	<tr>
		<td>Verify Password: </td>
		<td><input type="Password" name="verify_password" /></td>
	</tr>
</table>
<input type="hidden" name="id" value="<?php echo $this->item->id; ?>">
<?php echo $this->end_form(); ?>