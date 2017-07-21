<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading heading-custom text-center">
		<h3><strong>Update Company</strong></h3>
	</div>
	<!-- Panel Body -->
	<div class="panel-body">
		<div class="form-group col-md-6 col-md-offset-3 text-center">
			<form action="process/process.company.php?action=edit" method="POST" class="form-horizontal" role="form">
				<?php 
				$company = new Company();
				foreach ($company->specificCompany($_GET['id']) as $val) { ?>
				
				<input type="hidden" name="id" value="<?= $val['com_id']; ?>">

				<div class="form-group">
					<label>Company Name</label>
					<input type="text" name="name" value="<?= $val['com_name'] ?>" class="form-control" placeholder="Enter Name" required>
				</div>

				<div class="form-group">
					<label>Company Description</label>
					<input type="text" class="form-control" value="<?= $val['com_description'] ?>" name="description" placeholder="Enter Description" required>
				</div>

				<div class="form-group">
					<label>Company Address</label>
					<input type="text" class="form-control" value="<?= $val['com_address'] ?>" name="address" placeholder="Enter Address" required>
				</div>

				<div class="form-group text-center">
					<div class="col-sm-9 col-sm-offset-3">
					    <button type="submit" class="btn btn-primary btn-submit">Update</button>
					</div>
				</div>
				<?php 
				}
				?>
			</form> <!-- /form -->
		</div>
	</div>
</div> 
				