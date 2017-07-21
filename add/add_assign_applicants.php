<div class="panel panel-default">
	<div class="panel-body">
	<h3 class="text-center"><strong>Transfer Applicant</strong></h3><br>
							<form action="process/process.assignment.php?action=add" method="POST" role="form">
								<div class="form-group col-md-6 col-md-offset-3 text-center">
									<div class="form-group">
										<label>Name of Applicant</label>
										<select name="app_id" class="form-control">
											<option>-No Selected-</option>
											<?php
											$applicants = new Applicants();
											foreach ($applicants->all_applicant() as $val) {
												echo '<option value=' . $val['app_id'] . '>' . $val['app_fname'] . ' ' . $val['app_lname'] . '</option>';
											}
											?>
										</select>
									</div>

									<div class="form-group">
										<label>Services</label>
										<select name="service" class="form-control">
											<option>-No Selected-</option>
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
											<option>-No Selected-</option>
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
										<input type="text" name="reason" class="form-control" id="" placeholder="Enter Reason">
									</div>
								
									<button type="submit" class="btn btn-primary btn-submit">ASSIGN</button>
								</div>
							</form>
	</div> <!-- Panel-Body -->
</div> <!-- END OF PANEL -->