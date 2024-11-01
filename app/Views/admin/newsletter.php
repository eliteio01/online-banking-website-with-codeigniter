<main class="app-main">
	<!-- .wrapper -->
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
							<div class="col-lg-12">
							
								<div class="card">
									<div class="card-header">
										<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold text-primary"><?= $page; ?></span></span>
									</div>
									<div class="card-body">
									    <p class="text-primary">This will send the notification to the mail box of selected users</p>
										<form method="post" enctype="multipart/form-data" action="<?= base_url('admin/newsletter') ?>">
												<div class="form-group">
													<?php if ($count > 0) { ?>
													<select class="form-control" name="all[]" multiple size="10" required>
														<?php foreach ($all as $rows) { ?>
														<option value="<?= $rows['email']; ?>">
															<?= $rows['name']; ?> - <?= $rows['email']; ?>
														</option>
														<?php } ?>
													</select>
													<?php } ?>
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Subject" required>
												</div>
												<div class="form-group">
													<textarea name="message" id="summernote" required></textarea>
												</div>
												<div class="form-group">
													<input type="file" name="file" class="form-control">
													<small>You can attach file (photo or pdf document)</small>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<button type="reset" class="btn btn-danger">Reset</button>
														<input type="submit" name="send" value="Send" class="btn btn-success">
													</div>
												</div>
											</form>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- /.page -->
		</div>
	</div>
	<!-- .app-footer -->
</main>