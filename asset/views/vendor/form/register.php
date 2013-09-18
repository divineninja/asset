<?php echo $this->create_form( $this->set_url('vendor/save') ); ?>
<table class="table">
	<tr>
		<td>First Name: </td>
		<td><input type="text" name="first_name" class="required" required="required" /></td>
	</tr>
	<tr>
		<td>Last Name: </td>
		<td><input type="text" name="last_name" class="required"  required="required" /></td>
	</tr>		
	<tr>
		<td>Company: </td>
		<td><input type="text" name="company" class="required"  required="required" /></td>
	</tr>
	<tr>
		<td>Other Details: </td>
		<td><textarea name="other_details" required="required"></textarea></td>
	</tr>
</table>
<?php echo $this->end_form(); ?>