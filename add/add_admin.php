<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading heading-custom text-center">
							<h3><strong>Register New Admin</strong></h3>
						</div>
						<!-- Panel Body -->
						<div class="panel-body">
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<form action="process/process.admin.php?action=add" method="POST" class="form-horizontal" role="form">

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Username:</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="username" placeholder="Username" class="form-control" required>
					                    </div>
					                </div>
					                
					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Password:</label>
					                    <div class="col-sm-9">
					                        <input type="password" name="password" placeholder="Password" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Confirm Password:</label>
					                    <div class="col-sm-9">
					                        <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">Last Name:</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group">
					                    <label class="col-sm-3 control-label">First Name:</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="fname" placeholder="First Name" class="form-control" required>
					                    </div>
					                </div>

					                <div class="form-group text-center">
					                    <div class="col-sm-9 col-sm-offset-3">
					                        <button type="submit" class="btn btn-primary btn-submit">Register</button>
					                    </div>
					                </div>
					            </form> <!-- /form -->
							</div>
						</div>
					</div>