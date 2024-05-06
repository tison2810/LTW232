</script>
<a class="button-account" href="/profile/add_user">Thêm tài khoản</a>
<table class="table">
	<thead>
		<tr style="text-align: center";>
			<!-- <th>ID</th> -->
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Role</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
			<tr style="text-align: center";>
				<!-- <td>
					<?php echo $user->getId(); ?>
				</td> -->
			    <td>
					<?php echo $user->getName(); ?>
				</td>
				<td>
				    <?php echo $user->getEmail(); ?>
				</td>
				<td>
					<?php echo $user->getPhone(); ?>
				</td>
				<td>
					<?php echo $user->getAddress(); ?>
				</td>
				<td>
					<?php echo $user->getRole(); ?>
				</td>
				<td><a href="/profile/edit_user/<?php echo $user->getId(); ?>" style="text-decoration: none";>Edit</a></td>
				<td><a href="/profile/delete_user/<?php echo $user->getId(); ?>" style="text-decoration: none";>Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
