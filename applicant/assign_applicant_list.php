<div class="panel panel-default">

	<div class="panel-body">
	<h3 class="text-center"><strong>List of Assign Applicant</strong></h3>
	<div class="pull-right"><a href="index.php?mod=add&sub=assign_applicant">Assign Applicant</a></div>
	<br>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th><center>Employee Name</center></th>
						<th><center>Service</center></th>
						<th><center>Company</center></th>
						<th><center>Reason</center></th>
						<th><center>Status</center></th>
						<th><center>Time</center></th>
						<th><center>Date</center></th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php $assign = new Assign();
						$applicant = new Applicants();
						foreach($assign->all_assign() as $val) { ?>
					<tr>
						<td><center><?= $applicant->specificApplicantName($val['app_id']); ?></center></td>
						<td><center><?= $val['ass_service']; ?></center></td>
						<td><center><?= $val['ass_company']; ?></center></td>
						<td><center><?= $val['ass_reason']; ?></center></td>
						<td><center><?= $val['ass_status']; ?></center></td>
						<td><center><?= $val['ass_time']; ?></center></td>
						<td><center><?= $val['ass_date']; ?></center></td>
						<td><center><a href="index.php?mod=edit&sub=assign_applicant&id=<?= $val['app_id'] ?>">Transfer</a></center></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!-- Table Responsive -->
	</div> <!-- Panel-Body -->
</div> <!-- END OF PANEL -->