<div class="panel panel-default">
	<div class="panel-body">
		<h3 class="text-center"><strong>List of Admin</strong></h3>
		<div class="pull-right"><a href="index.php?mod=add&sub=admin">Add Admin</a></div>
	<br>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th><center>Username</center></th>
						<th><center>First Name</center></th>
						<th><center>Last Name</center></th>
						<th><center>Time Added</center></th>
						<th><center>Date Added</center></th>
					</tr>
				</thead>
					<tbody>
						<?php $admin = new Admin();
						foreach($admin->all_admin() as $val) { ?>
						<tr>
							<td><?= $val['adm_username']; ?></td>
							<td><?= $val['adm_fname']; ?></td>
							<td><?= $val['adm_lname']; ?></td>
							<td><?= $val['adm_time_added']; ?></td>
							<td><?= $val['adm_date_added']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
			</table>
		</div> <!-- Table Responsive -->
	</div> <!-- Panel-Body -->
</div> <!-- END OF PANEL -->