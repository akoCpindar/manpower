<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading heading-custom text-center">
		<h3><strong>Add Company</strong></h3>
	</div>
	<!-- Panel Body -->
	<div class="panel-body body-custom text-center">
		<form action="process/process.company.php?action=add" method="POST" role="form">
			<div class="form-group col-md-6 col-md-offset-3 text-center">
				<div class="form-group">
					<label>Company Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Name" required>
				</div>

				<div class="form-group">
					<label>Company Description</label>
					<input type="text" class="form-control" name="description" placeholder="Enter Description" required>
				</div>

				<div class="form-group">
					<label>Company Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter Address" required>
				</div>
								
				<button type="submit" class="btn btn-primary btn-submit">ADD</button>
			</div>
		</form>
	</div>
</div>