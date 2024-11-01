
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
					    <?php if ($page === 'Edit Email Template'){ ?>
					    <div class="col-lg-12">
					        <?php foreach ($all as $row) { ?>
							<div class="card">
								<div class="card-header"><?= $row['name'] ?><a href="<?= previous_url() ?>" class="float-right btn btn-outline-primary">Back</a></div>
								<div class="card-body">
									<form class="form-valide" method="post" action="<?= base_url('admin/templates') ?>">
									    <div class="form-group">
													<input type="text" name="subject" class="form-control" value="<?= $row['subject'] ?>" required>
													<input type="hidden" name="id" value="<?= $row['id'] ?>">
												</div>
										<div class="form-group">
											<textarea name="body" id="summernote" required><?= $row['body'] ?></textarea>
										</div>
										<div class="form-group float-right">
											<input name="update" type="submit" class="btn btn-secondary" value="Update">
										</div>
									</form>
								</div>
							</div>
							<?php } ?>
						</div>
					    <?php } else { ?>
					    <div class="col-lg-6">
							<div class="card">
								<div class="card-header">Email Header
								<a href="#merge" class="float-right btn btn-outline-primary">View Merge Fields</a>
								</div>
								<div class="card-body">
									<form method="post" action="<?= base_url('admin/templates') ?>">
										<div class="form-group">
											<textarea name="header" class="form-control" rows="20" required><?= $email_header ?></textarea>
										</div>
										<div class="form-group float-right">
											<input name="update_header" type="submit" class="btn btn-secondary" value="Update">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">Email Footer
								<a href="#merge" class="float-right btn btn-outline-primary">View Merge Fields</a>
								</div>
								<div class="card-body">
									<form method="post" action="<?= base_url('admin/templates') ?>">
										<div class="form-group">
											<textarea name="footer" class="form-control" rows="20" required><?= $email_footer; ?></textarea>
										</div>
										<div class="form-group float-right">
											<input name="update_footer" type="submit" class="btn btn-secondary" value="Update">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down"></i> <span class="font-weight-bold"><?= $page; ?></span></span>
								</div>
                  <div class="card-body">
										<table id="template" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
											<thead>
												<tr>
													<th class="text-primary">Name</th>
													<th class="text-primary">Action</th>
												</tr>
											</thead>
											<tbody>
                        <script>
                            $(document).ready(function () {
                                $('#template').DataTable({
                                  order: [[0, 'asc']],
                                  scrollX: true,
                                  processing: true,
                                  serverSide: true,
                                  ajax: '../datatable?template=1'
                                });
                            });
                          </script>
											</tbody>
										</table>
									</div>
							</div>
						</div>
					    <?php } ?>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									Available Merge Fields
								</div>
								<div class="card-body">
									<div class="row" id="merge">
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Type of coin</span> = coin_type</p>
											<p><span class="text-primary font-weight-bold">Current Date</span> = current_date</p>
											<p><span class="text-primary font-weight-bold">Current Year</span> = current_year</p>
											<p><span class="text-primary font-weight-bold">Daily Profit</span> = daily_profit</p>
											<p><span class="text-primary font-weight-bold">Investment Plan Name</span> = investment_plan</p>
											<p><span class="text-primary font-weight-bold">KYC Verification file</span> = kyc_file</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">KYC File type</span> = kyc_file_type</p>
											<p><span class="text-primary font-weight-bold">Password Reset</span> = new_password</p>
											<p><span class="text-primary font-weight-bold">P2P receiver name</span> = receiver_name</p>
											<p><span class="text-primary font-weight-bold">Admin Security PIN</span> = security_pin</p>
											<p><span class="text-primary font-weight-bold">Site Email</span> = site_email</p>
											<p><span class="text-primary font-weight-bold">Site Logo</span> = site_logo</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Site Name</span> = site_name</p>
											<p><span class="text-primary font-weight-bold">theme Color</span> = site_theme_color</p>
											<p><span class="text-primary font-weight-bold">Upload Folder</span> = site_upload_folder</p>
											<p><span class="text-primary font-weight-bold">Site Link</span> = site_url</p>
											<p><span class="text-primary font-weight-bold">Amount</span> = the_amount</p>
											<p><span class="text-primary font-weight-bold">Coin</span> = the_coin</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Last Date of Investment</span> = the_end_date</p>
											<p><span class="text-primary font-weight-bold">Type of Investment</span> = the_package</p>
											<p><span class="text-primary font-weight-bold">Investment Plan name</span> = the_plan_name</p>
											<p><span class="text-primary font-weight-bold">Return on Investment</span> = the_roi</p>
											<p><span class="text-primary font-weight-bold">Transaction amount</span> = the_transaction_amount</p>
											<p><span class="text-primary font-weight-bold">Transaction Reference</span> = the_transaction_ref</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Wallet Address</span> = the_wallet_address</p>
											<p><span class="text-primary font-weight-bold">Support Department</span> = ticket_dept</p>
											<p><span class="text-primary font-weight-bold">Support Ticket Message</span> = ticket_description</p>
											<p><span class="text-primary font-weight-bold">Support Ticket Reference</span> = ticket_reference</p>
											<p><span class="text-primary font-weight-bold">Support Ticket Title</span> = ticket_title</p>
											<p><span class="text-primary font-weight-bold">Transaction Reference</span> = transaction_reference</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">User Country</span> = user_country</p>
											<p><span class="text-primary font-weight-bold">User Email</span> = user_email</p>
											<p><span class="text-primary font-weight-bold">User Full name</span> = user_full_name</p>
											<p><span class="text-primary font-weight-bold">User Password</span> = user_password</p>
											<p><span class="text-primary font-weight-bold">User Referrer</span> = user_upline</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Wallet Address</span> = wallet_address</p>
											<p><span class="text-primary font-weight-bold">Wallet name</span> = wallet_name</p>
											<p><span class="text-primary font-weight-bold">Table displaying Wallets</span> = wallet_table</p>
											<p><span class="text-primary font-weight-bold">Withdrawal Transaction ID/Hash</span> = withdrawal_hash</p>
											<p><span class="text-primary font-weight-bold">User Withdrawal Wallet</span> = withdrawal_wallet</p>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</main>
