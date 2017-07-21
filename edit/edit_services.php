<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading heading-custom text-center">
							<h3><strong>Update Services</strong></h3>
						</div>
						<!-- Panel Body -->
						<div class="panel-body">
								<div class="form-group col-md-6 col-md-offset-3 text-center">
								<form action="process/process.services.php?action=edit" method="POST" class="form-horizontal" role="form">
								<?php 
								$services = new Services();
								foreach ($services->specificService($_GET['id']) as $val) { ?>
									<input type="hidden" name="id" value="<?= $val['ser_id']; ?>">
					                <div class="form-group">
										<label>Service Title</label>
										<input type="text" name="title" value="<?= $val['ser_title'] ?>" class="form-control" placeholder="Enter Service Title" required>
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
				