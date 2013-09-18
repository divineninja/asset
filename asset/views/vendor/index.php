<div class="span12">
	<div class="btn-group">
		<button data-url="<?php echo URL; ?>vendor/register" class="btn btn-info" id="show_add_item">Add Vendor</button>
		<button data-url="<?php echo URL; ?>vendor/edit_item" class="btn btn-success edit_item">Edit Vendor</button>
		<button data-url="<?php echo URL; ?>vendor/delete_item" class="btn btn-danger delete_item">Delete Vendor(s)</button>
	</div>
</div>

<div class="content-display">
	<table class="table dataTable table-striped table-bordered">
		<thead>
			<tr>
				<th>[ ]</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Company</th>
				<th>Other Details</th>
			</tr>
		</thead>
		<tbody>	
		<?php foreach ($this->items as $value) { ?>		
			<tr>
				<td><input id="item-<?php echo $value->id; ?>" type="checkbox" class="item_id" name="users" value="<?php echo $value->id; ?>" /></td>
				<td><?php echo $value->first_name; ?></td>
				<td><?php echo $value->last_name; ?></td>
				<td><?php echo $value->company; ?></td>
				<td><?php echo $value->other_details; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>