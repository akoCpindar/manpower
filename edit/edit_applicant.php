<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading heading-custom text-center">
							<h3><strong>Update Applicants</strong></h3>
						</div>
						<!-- Panel Body -->
						<div class="panel-body">
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<form action="process/process.applicants.php?action=edit" method="POST" class="form-horizontal" role="form">
								<?php 
								$applicants = new Applicants();
								foreach ($applicants->specificApplicant($_GET['id']) as $val) { ?>
									<input type="hidden" name="id" value="<?= $val['app_id']; ?>">
					                <div class="form-group">
					                    <label class="col-sm-3 control-label">First Name:</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="fname" value="<?= $val['app_fname'] ?>" placeholder="First Name" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Middle Initial:</label>
					                    <div class="col-sm-2">
					                        <input type="text" name="mname" value="<?= $val['app_minitial'] ?>" placeholder="MI" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Last Name:</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="lname" value="<?= $val['app_lname'] ?>" placeholder="Last Name" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Age:</label>
					                    <div class="col-sm-2">
					                        <input type="text" name="age" value="<?= $val['app_age'] ?>" placeholder="Age" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="control-label col-sm-3">Gender:</label>
					                    <div class="col-sm-6">
					                        <div class="row">
					                            <div class="col-sm-4">
					                                <label class="radio-inline">
					                                    <input type="radio" name="gender" value="Male" <?php if($val['app_gender'] == 'Male') echo 'checked=\"checked\"'; ?>>Male
					                                </label>
					                            </div>
					                            <div class="col-sm-4">
					                                <label class="radio-inline">
					                                    <input type="radio" name="gender" value="Female" <?php if($val['app_gender'] == 'Female') echo 'checked=\"checked\"'; ?>>Female
					                                </label>
					                            </div>
					                        </div>
					                    </div>
					                </div> <!-- /.form-group -->

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Date of Birth</label>
					                    <div class="col-sm-3">
					                        <input type="date" name="bday" value="<?= $val['app_birthdate'] ?>" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Address:</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="address" value="<?= $val['app_address'] ?>" class="form-control" placeholder="Address" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Mobile Number:</label>
					                    <div class="col-sm-4">
					                        <input type="text" name="mobile" value="<?= $val['app_mobile'] ?>" class="form-control" placeholder="Mobile Number" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Email Address:</label>
					                    <div class="col-sm-9">
					                        <input type="email" name="email" value="<?= $val['app_email'] ?>" placeholder="Email" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group text-center">
					                    <div class="col-sm-9 col-sm-offset-3">
					                        <button type="submit" class="btn btn-primary btn-submit">Register</button>
					                    </div>
					                </div>
					               <?php 
									}
									?>
					            </form> <!-- /form -->
							</div>
						</div>
					</div>
				