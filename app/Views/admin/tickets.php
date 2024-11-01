<main class="app-main">
    <div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">
					<div class="page-section">
						<header class="page-title-bar bg-primary">
							<p class="lead font-weight-bold text-center text-white p-2">
								<?= $page; ?>
							</p>
						</header>
						<div class="row">
						    <?php if ($page == 'Read Ticket'){ ?>
						    <div class="col-lg-12">
						        <?php foreach ($single as $row) { ?>
              <div class="card">
                <div class="card-header">
                  <?= $row[ 'subject' ]; ?>
                </div>
                <div class="card-body">
                  <?= $row[ 'description' ]; ?>
                </div>
                <div class="card-footer">
                  <div class="card-footer-content">
                   <?= date( "jS M\. Y", strtotime( $row[ 'created_at' ] ) ) ?>
                    <a href="<?= previous_url() ?>" class="btn btn-sm btn-danger float-right">CLOSE</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
						    <?php } else { ?>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header d-lg-none d-xl-none">
                                    <center>Click the <span class="text-white" style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details</center>
                                </div>
									<div class="card-body">
									    <form action="<?= base_url('admin/delete_records') ?>" method="POST" id="del_form" onSubmit="return(confirm('Are you sure you want to delete selected?'))"> 
										<table id="Tickets" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
											<thead>
												<tr>
												    <th class="text-primary">
                                                <div class="d-flex">
                                                <input type="button" id="toggle" class="btn btn-sm btn-primary" value="select all" onClick="mark()">
                                                <input type="hidden" name="type" value="tickets">
                                                <input type="submit" class="btn btn-sm btn-danger" name="delete_statement" value="Delete" style="display:none" id="del">
                                                </div>
                                                </th>
													<th class="text-primary">Name</th>
													<th class="text-primary">Email</th>
													<th class="text-primary">Date</th>
													<th class="text-primary">Title</th>
													<th class="text-primary">Reference</th>
													<th class="text-primary">Status</th>
													<th class="text-primary">Action</th>
												</tr>
											</thead>
											<tbody>
											    <script>
                            $(document).ready(function () {
                                $('#Tickets').DataTable({
                                  order: [[3, 'desc']],
                                                  "columnDefs": [ {
                                                    "targets": 0,
                                                    "orderable": false
                                                    } ],
                                  scrollX: true,
                                  processing: true,
                                  serverSide: true,
                                  ajax: '../datatable?tickets=1'
                                });
                            });
                          </script>
											</tbody>
										</table>
										</form>
									</div>
								</div>
							</div>
              <?php } ?>
						</div>
					</div>
			</div>
			<!-- /.page -->
		</div>
	</div>
</main>
