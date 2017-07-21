<div class="panel panel-default">
	<div class="panel-body">
		<h3 class="text-center"><strong>List of Company</strong></h3>
		<div class="pull-right"><a href="index.php?mod=add&sub=company">Add Company</a></div>
		<br>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th><center>Company Name</center></th>
						<th><center>Company Description</center></th>
						<th><center>Company Address</center></th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$company = new Company();
					foreach($company->all_company() as $val) { ?>
					<tr>
						<td><center><?= $val['com_name']; ?></center></td>
						<td><center><?= $val['com_description']; ?></center></td>
						<td><center><?= $val['com_address']; ?></center></td>
						<td><center><a href="index.php?mod=edit&sub=company&id=<?= $val['com_id'] ?>">EDIT</a></center></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!-- Table Responsive -->
	</div> <!-- Panel-Body -->
</div> <!-- END OF PANEL -->