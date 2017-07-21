<div class="panel panel-default">

						<div class="panel-body">
							<h3 class="text-center"><strong>List of Services</strong></h3>
							<div class="pull-right"><a href="index.php?mod=add&sub=services">Add Services</a></div>
							<br>
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th><center>Service Title</center></th>
											<th><center>Status</center></th>
											<th><center>Time Added</center></th>
											<th><center>Date Added</center></th>
											<th><center>Action</center></th>
										</tr>
									</thead>
									<tbody>
											<?php 
											$services = new Services();
											foreach($services->all_services() as $val) { ?>
											<tr>
												<td><center><?= $val['ser_title']; ?></center></td>
												<td><center><?= $val['ser_status']; ?></center></td>
												<td><center><?= $val['ser_time']; ?></center></td>
												<td><center><?= $val['ser_date']; ?></center></td>
												<td><center><a href="index.php?mod=edit&sub=services&id=<?= $val['ser_id'] ?>">EDIT</a> | 
												<?php 
												if ($val['ser_status'] == 'Active') { ?>
													<a href="process/process.services.php?action=remove&id=<?= $val['ser_id']; ?>">REMOVE</a></center></td>
												<?php } else { ?>
													<a href="process/process.services.php?action=archive&id=<?= $val['ser_id']; ?>">ARCHIVE</a></center></td>
												<?php } ?>
											</tr>
											<?php
											}	
											?>
										
									</tbody>
								</table>
							</div> <!-- Table Responsive -->
						</div> <!-- Panel-Body -->
					</div> <!-- END OF PANEL -->