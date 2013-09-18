<div class="span12">
	<div class="btn-group">
		<button data-url="<?php echo URL; ?>admin/register" class="btn btn-info" id="show_add_item">Add Member</button>
		<button data-url="<?php echo URL; ?>admin/edit_member" class="btn btn-success edit_item">Edit Member</button>
		<button data-url="<?php echo URL; ?>admin/delete_members" class="btn btn-danger delete_item">Delete Member(s)</button>
	</div>
</div>

<div class="content-display">
	<table class="dataTable table table-striped table-bordered">
		<thead>
			<tr>
				<th>[ ]</th>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Display Name</th>
				<th>Role</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $this->members  as $members ): ?>
			<tr>
				<td><input id="item-<?php echo $members->id; ?>" type="checkbox" class="item_id" name="users" value="<?php echo $members->id; ?>" /></td>
				<td><?php echo $members->username; ?></td>
				<td><?php echo $members->first_name; ?></td>
				<td><?php echo $members->last_name; ?></td>
				<td><?php echo $members->display_name; ?></td>
				<td><?php echo $members->name; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>