<div class="panel panel-default">
	<div class="panel-body">
	<h3 class="text-center"><strong>Transfer Applicant</strong></h3><br>
							<form action="process/process.assignment.php?action=edit" method="POST" role="form">
								<div class="form-group col-md-6 col-md-offset-3 text-center">
								<?php 
								$assign = new Assign();
								foreach ($assign->all_specific_assign($_GET['id']) as $row) { ?>

									<input type="hidden" name="id" value="<?= $row['ass_id'] ?>">
									<input type="hidden" name="app_id" value="<?= $row['ass_id'] ?>">
									<div class="form-group">
										<?php
											$applicant = new Applicants();
										?>
										<label>Name of Applicant</label>
										<input type="text" value="<?php echo $applicant->specificApplicantName($_GET['id']); ?>" class="form-control" id="" placeholder="Enter Applicant Name">
									</div>

									<div class="form-group">
										<label>Services</label>
										<select name="service" class="form-control">
											<option value="<?= $row['ass_service'] ?>"><?= $row['ass_service'] ?></option>
											<?php
											$services = new Services();
											foreach ($services->all_services_active() as $val) {
												echo '<option value=' . $val['ser_title'] . '>' . $val['ser_title'] . '</option>';
											}
											?>
										</select>
									</div>

									<div class="form-group">
										<label>Company</label>
										<select name="company" class="form-control">
											<option value="<?= $row['ass_company'] ?>"><?= $row['ass_company'] ?></option>
											<?php
											$company = new Company();
											foreach ($company->all_company() as $val) {
												echo '<option value=' . $val['com_name'] . '>' . $val['com_name'] . '</option>';
											}
											?>
										</select>
									</div>

									<div class="form-group">
										<label>Reason</label>
										<input type="text" name="reason" value="<?= $row['ass_reason'] ?>" class="form-control" id="" placeholder="Enter Reason">
									</div>
								
									<button type="submit" class="btn btn-primary btn-submit">Transfer</button>
									<?php } ?>
								</div>
							</form>
	</div> <!-- Panel-Body -->
</div> <!-- END OF PANEL -->