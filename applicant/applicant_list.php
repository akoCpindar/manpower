<div class="panel panel-default">

	<div class="panel-body">
	<h3 class="text-center"><strong>List of Applicant</strong></h3>
	<div class="pull-right"><a href="index.php?mod=add&sub=applicant">Add Applicant</a></div>
	<br>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th><center>First Name</center></th>
						<th><center>Middle Initial</center></th>
						<th><center>Last Name</center></th>
						<th><center>Age</center></th>
						<th><center>Gender</center></th>
						<th><center>Birthdate</center></th>
						<th><center>Address</center></th>
						<th><center>Mobile Number</center></th>
						<th><center>Email Address</center></th>
						<th><center>Status</center></th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php $applicants = new Applicants();
						foreach($applicants->all_applicant() as $val) { ?>
					<tr>
						<td><center><?= $val['app_fname']; ?></center></td>
						<td><center><?= $val['app_minitial']; ?></center></td>
						<td><center><?= $val['app_lname']; ?></center></td>
						<td><center><?= $val['app_age']; ?></center></td>
						<td><center><?= $val['app_gender']; ?></center></td>
						<td><center><?= $val['app_address']; ?></center></td>
						<td><center><?= $val['app_mobile']; ?></center></td>
						<td><center><?= $val['app_birthdate']; ?></center></td>
						<td><center><?= $val['app_email']; ?></center></td>
						<td><center><?= $val['app_status']; ?></center></td>
						<td><center><a href="index.php?mod=edit&sub=applicant&id=<?= $val['app_id'] ?>">UPDATE</a></center></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!-- Table Responsive -->
	</div> <!-- Panel-Body -->
</div> <!-- END OF PANEL -->