<main class="app-main">
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">
				<!-- .container -->

				<div class="page-section">
					<header class="page-title-bar bg-primary">
						<p class="lead font-weight-bold text-center text-white p-2">
							<?= $page ?>
						</p>
					</header>
					<div class="row">
						<?php if ($page === 'Manage Accounts') { ?>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										Update Account
										<a href="<?= base_url('admin/accounts') ?>"
											class="btn btn-sm btn-primary float-right">GO BACK</a>
									</div>
									<div class="card-body">
										<form method="POST" action="<?= base_url('admin/accounts') ?>">
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-username">Username</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="username"
														value="<?= $the_username ?>" required>
													<input type="hidden" class="form-control" name="id"
														value="<?= $the_id ?>" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-username">Email</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" value="<?= $the_email ?>"
														name="email">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-username">Password</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="password"
														placeholder="Leave Blank to use current password">
												</div>
											</div>
											<?php if ($the_role == 0) { ?>
												<div class="form-group row">
													<label class="col-lg-4 col-form-label">Role</label>
													<div class="col-lg-6">
														<select class="form-control" name="role">
															<option value="">Select</option>
															<option value="1" <?php if ($the_role == 1) {
																echo 'selected';
																} ?>>
																Super Admin</option>
															<option value="0" <?php if ($the_role == 0) {
																echo 'selected';
																} ?>>
																Moderator</option>
														</select>
													</div>
												</div>
											<?php }
											else { ?>
												<input type="hidden" name="role" value="<?= $the_role ?>">
											<?php } ?>
											<div class="form-group row">
												<div class="col-lg-8 ml-auto">
													<input name="update" type="submit" class="btn btn-secondary"
														value="Update Admin">
												</div>
											</div>
										</form>
										<p><b>Super Admin</b> have full access to site settings</p>
										<p><b>Moderator</b> Do not have access to site settings</p>
									</div>
								</div>
							</div>

						<?php }
						else { ?>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<span>
											<i class="fa fa-caret-down"></i> <span class="font-weight-bold">
												<?= $page ?>
											</span>
										</span>

									</div>
									<div class="card-body">
										<table id="accounts" class="table table-striped table-bordered dt-responsive nowrap"
											style="width: 100%;">
											<thead>
												<tr>
													<th>Username</th>
													<th>Email</th>
													<th>Updated</th>
													<th>Role</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<script>
													$(document).ready(function () {
														$('#accounts').DataTable({
															order: [[2, 'desc']],
															scrollX: true,
															processing: true,
															serverSide: true,
															ajax: '<?= base_url('datatable?accounts=1') ?>'
														});
													});
												</script>
											</tbody>
										</table>

									</div>
									<div class="card-footer">
										<div class="card-footer-content text-muted"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										Add Admin Account
									</div>
									<div class="card-body">
										<form method="POST" action="<?= base_url('admin/accounts') ?>">
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-username">Username</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="username"
														placeholder="Don't enter an already existing Username" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-username">Email</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="email">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-username">Password</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="password">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="val-skill">Role <span
														class="text-danger">*</span></label>
												<div class="col-lg-6">
													<select class="form-control" name="role" required>
														<option value="">Select</option>
														<option value="1">Super Admin</option>
														<option value="0">Moderator</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-8 ml-auto">
													<input name="create" type="submit" class="btn btn-secondary"
														value="Create Admin">
												</div>
											</div>
										</form>
										<p><b>Super Admin</b> have full access to site settings</p>
										<p><b>Moderator</b> Do not have access to site settings</p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>