<?php echo $this->create_form( $this->set_url('vendor/update_item') ); ?>
<table class="table">
	<tr>
		<td>First Name: </td>
		<td><input type="text" value="<?php echo $this->item->first_name; ?>" name="first_name" class="required" required="required" /></td>
	</tr>
	<tr>
		<td>Last Name: </td>
		<td><input type="text" value="<?php echo $this->item->last_name; ?>" name="last_name" class="required"  required="required" /></td>
	</tr>		
	<tr>
		<td>Company: </td>
		<td><input type="text" value="<?php echo $this->item->company; ?>" name="company" class="required"  required="required" /></td>
	</tr>
	<tr>
		<td>Other Details: </td>
		<td><textarea name="other_details" required="required"><?php echo $this->item->other_details; ?></textarea></td>
	</tr>
</table>
<input type="hidden" name="id" value="<?php echo $this->item->id; ?>">
<?php echo $this->end_form(); ?>