<!-- App Capsule -->
<div id="appCapsule">         
	<div class="section full bg-primary">
		<!-- carousel single -->
		<div class="carousel-single splide p-2">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<!-- card block -->
						<div class="card-block bg-transparent border border-info">
							<div class="card-main">
								<div class="balance"> <span class="label">SAVINGS</span>
									<h1 class="title">
										<?= $currency . number_format($savings_balance, 2); ?>
									</h1>
								</div>
								<div class="in">
									<div class="card-number"> <span class="label">Account Number</span> ••••
										<?= substr($savings_acc, -4); ?>
									</div>
									<div class="bottom">
										<div class="card-expiry"> <span class="label">Total Credit <br>
												<?= date("M\. Y"); ?>
											</span>
											<?= $currency . number_format(($MonthlyCredit), 2); ?>
										</div>
										<div class="card-ccv"> <span class="label">Total Debit<br>
												<?= date("M\. Y"); ?>
											</span>
											<?= $currency . number_format(($MonthlyDebit), 2); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- * card block -->
					</li>
					<li class="splide__slide">
						<!-- card block -->
						<div class="card-block bg-transparent border border-light">
							<div class="card-main">
								<div class="balance"> <span class="label">CHECKINGS</span>
									<h1 class="title">
										<?= $currency . number_format($check_balance, 2); ?>
									</h1>
								</div>
								<div class="in">
									<div class="card-number"> <span class="label">Account Number</span> ••••
										<?= substr($check_acc, -4); ?>
									</div>
									<div class="bottom">
										<div class="card-expiry"> <span class="label">Total Credit <br>
												<?= date("M\. Y"); ?>
											</span>
											<?= $currency . number_format(($cMonthlyCredit), 2); ?>
										</div>
										<div class="card-ccv"> <span class="label">Total Debit<br>
												<?= date("M\. Y"); ?>
											</span>
											<?= $currency . number_format(($cMonthlyDebit), 2); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- * card block -->
					</li>
				</ul>
			</div>
		</div>
		<!-- * carousel single -->
	</div>
	 
	<div class="card">
		<div class="row">
         
			<?php if ($page === 'Account') { ?>
				<div class="col-lg-8">
					<div class="section wallet-card-section mb-1">
						<div class="wallet-card">
							<!-- Wallet Footer -->
							<div class="wallet-footer mb-2">
								<div class="item">
									<a href="<?= base_url('user/Account/Wire-Transfer') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-share-square"></i>
										</div>
										<strong>Wire <br>Transfer</strong>
									</a>

								</div>
								<div class="item">
									<a href="<?= base_url('user/Account/Local-Transfer') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-share-square"></i>
										</div>
										<strong>Local <br>Transfer</strong>
									</a>

								</div>
								<div class="item">
									<a href="<?= base_url('user/Account/Internal-Transfer') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-share-square"></i>
										</div>
										<strong>Internal <br>Transfer</strong>
									</a>

								</div>
							</div>
							<!-- Wallet Footer -->
							<div class="wallet-footer mb-2">
								<div class="item">
									<a href="<?= base_url('user/Account/Buy-Crypto') ?>">
										<div class="icon-wrapper">
											<i class="fab fa-btc"></i>
										</div>
										<strong>
											Buy <br>Crypto
										</strong>
									</a>
								</div>
								<div class="item">
									<a href="#" data-bs-toggle="modal" data-bs-target="#payBills">
										<div class="icon-wrapper">
											<i class="fas fa-money-check"></i>
										</div>
										<strong>Pay <br>Bills</strong>
									</a>
								</div>
								<div class="item">
									<a href="#" data-bs-toggle="modal" data-bs-target="#addBeneficiary">
										<div class="icon-wrapper">
											<i class="fas fa-user-plus"></i>
										</div>
										<strong>Add <br>Beneficiary</strong>
									</a>
								</div>

							</div>
							<div class="wallet-footer mb-2">
								<div class="item">
									<a href="<?= base_url('user/Account/Card-Deposit') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-credit-card"></i>
										</div>
										<strong>Card <br>Deposit</strong>
									</a>

								</div>
								<div class="item">
									<a href="<?= base_url('user/Account/Crypto-Deposit') ?>">
										<div class="icon-wrapper">
											<i class="fab fa-btc"></i>
										</div>
										<strong>Crypto <br>Deposit</strong>
									</a>
								</div>
								<div class="item">
									<a href="<?= base_url('user/Account/Check-Deposit') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-money-check"></i>
										</div>
										<strong>Check <br>Deposit</strong>
									</a>
								</div>


							</div>
							<!-- * Wallet Footer -->
							<!-- Wallet Footer -->
							<div class="wallet-footer mb-2">
								<div class="item">
									<a href="<?= base_url('user/Account/Savings-Statement') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-list-alt"></i>
										</div>
										<strong>Savings <br>Statement</strong>
									</a>
								</div>
								<div class="item">
									<a href="<?= base_url('user/Account/Checkings-Statement') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-list"></i>
										</div>
										<strong>Checking <br>Statement</strong>
									</a>
								</div>
								<div class="item">
									<a href="<?= base_url('user/notifications') ?>">
										<div class="icon-wrapper">
											<i class="far fa-envelope"></i>
										</div>
										<strong>
											<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?><br>Alerts
										</strong>
									</a>
								</div>
							</div>
							<!-- * Wallet Footer -->
							<!-- Wallet Footer -->
							<div class="wallet-footer mb-2">
								<div class="item">
									<a href="<?= base_url('user/Account/Loan') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-money-bill-alt"></i>
										</div>
										<strong>
											<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?><br>Loans
										</strong>
									</a>

								</div>
								<div class="item">
									<a href="<?= base_url('user/Account/Investment') ?>">
										<div class="icon-wrapper">
											<i class="fas fa-chart-bar"></i>
										</div>
										<strong>
											<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?><br>Investments
										</strong>
									</a>
								</div>
								<div class="item">
									<a href="<?= base_url('user/support') ?>">
										<div class="icon-wrapper">
											<i class="far fa-comment-dots"></i>
										</div>
										<strong>
											<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?><br>Support
										</strong>
									</a>
								</div>


							</div>
							<!-- * Wallet Footer -->
							<hr>
							<!-- news -->
							<?php if ($news) { ?>
								<div class="section">
									<div class="row mt-2">
										<div class="stat-box">
											<?php foreach ($news as $notice) { ?>
												<h4 class="text-primary font-weight-bold">
													<?= $notice['title'] ?>
												</h4>
												<hr>
												<div class="title">
													<?= htmlspecialchars_decode($notice['body']) ?>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>
							<!-- news -->
							<hr>
							<!-- Send Money -->

							<!-- * Send Money -->
						</div>
					</div>
					<!-- Wallet Card -->

					<div class="section wallet-card-section mb-1">
						<div class="wallet-card">
							<div class="section full mt-2">
								<div class="section-heading padding">
									<h3 class="label text-primary">Beneficiaries</h3>
									<a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
										data-bs-target="#addBeneficiary">Add New&nbsp;<i class="fas fa-user-plus"></i></a>
								</div>
								<hr>
								<!-- carousel small -->
								<?php if ($beneficiaries) { ?>
									<div class="carousel-small splide">
										<div class="splide__track">
											<ul class="splide__list">
												<?php foreach ($beneficiaries as $beneficiary) { ?>
													<li class="splide__slide">
														<a
															href="<?= base_url('user/beneficiary?get_beneficiary=' . $beneficiary['id']) ?>">
															<div class="user-card"> <img
																	src="<?= base_url('uploads/' . $beneficiary['image']) ?>"
																	alt="img" class="imaged w-100">
																<strong>
																	<?= implode(' ', array_slice(explode(' ', $beneficiary['name']), 0, 1)); ?>
																</strong>
															</div>
														</a>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								<?php }
								else { ?>
									<div class="text-center">No Beneficiary. <a href="#" data-bs-toggle="modal"
											data-bs-target="#addBeneficiary">Add New</i></a>
									</div>
								<?php } ?>
								<!-- * carousel small -->
							</div>
						</div>
					</div>

				</div>
			<?php }
			else if ($page === 'Wire Transfer') { ?>
					<div class="col-lg-8">
						<div class="section wallet-card-section mb-1">
							<div class="wallet-card">
								<h5 class="bg-primary p-2">
								<?= $page ?>
								</h5>
								<hr>
								<h5 class="modal-title text-primary">
								<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Secure Wire
									Transfer<br><small><span class="text-danger">Note:</span> Wire Transactions Fee is
									<?= $wire_fee ?>%
									</small>
								</h5>
								<hr>
								<form method="POST" action="<?= base_url('user/transfer') ?>">
									<input type="hidden" name="type" value="wire">
									<input type="hidden" name="user_id" value="<?= $id; ?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group basic">
												<div class="input-wrapper">
													<label class="label" for="account1">From</label>
													<select class="form-control custom-select" name="account" required>
														<option value=""></option>
														<option value="savings">Savings (***
														<?= substr($savings_acc, -4); ?>) -
														<?= $currency . number_format($savings_balance, 2); ?>
														</option>
														<option value="checking">Checking (***
														<?= substr($check_acc, -4); ?>) -
														<?= $currency . number_format($check_balance, 2); ?>
														</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">Enter Amount</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary">
													<?= $currency; ?>
													</span>
													<input type="number" name="amount" class="form-control" required>
												</div>

											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">Beneficiary Name</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary"><i
															class="fas fa-user"></i></span>
													<input type="text" name="name" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">IBAN/Account Number</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary"><i
															class="fas fa-file-invoice"></i></span>
													<input type="text" name="acct" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">Bank</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary"><i
															class="fas fa-university"></i></span>
													<input type="text" name="bank" class="form-control" required>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">Swift Code</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-random"></i></span>
													<input type="text" name="swift" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">Routing Transit Number</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-sync-alt"></i></span>
													<input type="text" name="routing" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group basic">
												<label class="label">PIN</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-user-shield"></i></span>
													<input type="password" name="pin" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group basic">
												<label class="label">Bank Address (Optional)</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-map-marker-alt"></i></span>
													<textarea class="form-control" rows="3" name="address"></textarea>
												</div>
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group basic">
												<label class="label">Remarks</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-edit"></i></span>
													<textarea class="form-control" rows="3" name="remarks"></textarea>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group basic">
												<input type="submit" name="submit_transfer" value="Proceed"
													class="btn btn-primary btn-block">
											</div>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>
			<?php }
			else if ($page === 'Internal Transfer') { ?>
						<div class="col-lg-8">
							<div class="section wallet-card-section mb-1">
								<div class="wallet-card">
									<h5 class="bg-primary p-2">
								<?= $page ?>
									</h5>
									<hr>
									<h5 class="modal-title text-primary">
								<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Secure Internal
										Transfer<br><small>
											Transfer Funds to another
									<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> account
										</small>
									</h5>
									<hr>
									<form method="POST" action="<?= base_url('user/transfer') ?>">
										<input type="hidden" name="swift" value="N/A-Internal Transer">
										<input type="hidden" name="routing" value="<?= $bank_routing ?>">
										<input type="hidden" name="type" value="internal">
										<input type="hidden" name="user_id" value="<?= $id; ?>">
										<input type="hidden" name="bank" value="<?= $company_name; ?>">
										<input type="hidden" name="address" value="<?= $company_address; ?>">
										<input type="hidden" name="name" value="">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group basic">
													<div class="input-wrapper">
														<label class="label" for="account1">From</label>
														<select class="form-control custom-select" name="account" required>
															<option value=""></option>
															<option value="savings">Savings (***
														<?= substr($savings_acc, -4); ?>) -
														<?= $currency . number_format($savings_balance, 2); ?>
															</option>
															<option value="checking">Checking (***
														<?= substr($check_acc, -4); ?>) -
														<?= $currency . number_format($check_balance, 2); ?>
															</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group basic">
													<label class="label">Enter Amount</label>
													<div class="input-group mb-2">
														<span class="input-group-text text-primary">
													<?= $currency; ?>
														</span>
														<input type="number" name="amount" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group basic">
													<label class="label">IBAN/Account Number</label>
													<div class="input-group mb-2">
														<span class="input-group-text text-primary"><i
																class="fas fa-file-invoice"></i></span>
														<input type="text" name="acct" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="col-md-6">

												<div class="form-group basic">
													<label class="label">PIN</label>
													<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
																class="fas fa-user-shield"></i></span>
														<input type="password" name="pin" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group basic">
													<label class="label">Remarks</label>
													<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
																class="fas fa-edit"></i></span>
														<textarea class="form-control" rows="3" name="remarks"></textarea>
													</div>
												</div>
											</div>
											<div class="col-md-6">

												<div class="form-group basic">
													<input type="submit" name="submit_transfer" value="Proceed"
														class="btn btn-primary btn-block btn-lg">
												</div>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
			<?php }
			else if ($page === 'Local Transfer') { ?>
							<div class="col-lg-8">
								<div class="section wallet-card-section mb-1">
									<div class="wallet-card">
										<h5 class="bg-primary p-2">
								<?= $page ?>
										</h5>
										<hr>
										<h5 class="modal-title text-primary">
								<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> Secure Local
											Transfer<br><small>
												Transfer Funds to a local Bank
											</small>
										</h5>
										<hr>
										<form method="POST" action="<?= base_url('user/transfer') ?>">
											<input type="hidden" name="swift" value="N/A-Local Transer">
											<input type="hidden" name="type" value="local">
											<input type="hidden" name="user_id" value="<?= $id; ?>">
											<div class="form-group basic">
												<div class="input-wrapper">
													<label class="label" for="account1">From</label>
													<select class="form-control custom-select" name="account" required>
														<option value=""></option>
														<option value="savings">Savings (***
												<?= substr($savings_acc, -4); ?>) -
												<?= $currency . number_format($savings_balance, 2); ?>
														</option>
														<option value="checking">Checking (***
												<?= substr($check_acc, -4); ?>) -
												<?= $currency . number_format($check_balance, 2); ?>
														</option>
													</select>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">Enter Amount</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary">
											<?= $currency; ?>
													</span>
													<input type="number" name="amount" class="form-control" required>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">Beneficiary Name</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
													<input type="text" name="name" class="form-control">

												</div>
											</div>
											<div class="form-group basic">
												<label class="label">IBAN/Account Number</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary"><i
															class="fas fa-file-invoice"></i></span>
													<input type="text" name="acct" class="form-control" required>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">Bank</label>
												<div class="input-group mb-2">
													<span class="input-group-text text-primary"><i class="fas fa-university"></i></span>
													<input type="text" name="bank" class="form-control" required>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">Routing Transit Number</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-sync-alt"></i></span>
													<input type="text" name="routing" class="form-control" required>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">Bank Address (Optional)</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-map-marker-alt"></i></span>
													<textarea class="form-control" rows="3" name="address"></textarea>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">Remarks</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-edit"></i></span>
													<textarea class="form-control" rows="4" name="remarks"></textarea>
												</div>
											</div>
											<div class="form-group basic">
												<label class="label">PIN</label>
												<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
															class="fas fa-user-shield"></i></span>
													<input type="password" name="pin" class="form-control" required>
												</div>
											</div>
											<div class="form-group basic">
												<input type="submit" name="submit_transfer" value="Proceed"
													class="btn btn-primary btn-block btn-lg">
											</div>
										</form>

									</div>
								</div>
							</div>
			<?php }
			else if ($page === 'Add Beneficiary') { ?>
								<div class="col-lg-8">
									<div class="section wallet-card-section mb-1">
										<div class="wallet-card">
											<h5 class="bg-primary p-2">
								<?= $page ?>
											</h5>
											<hr>
											<h5 class="modal-title text-primary">Add Beneficiary</h5>
											<hr>
											<form method="post" enctype="multipart/form-data" action="<?= base_url('user/beneficiary') ?>">
												<div class="form-group basic">
													<label class="label">Beneficiary Name</label>
													<div class="input-group mb-2">
														<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
														<input type="text" name="name" class="form-control" required>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">Email</label>
													<div class="input-group mb-2">
														<span class="input-group-text text-primary"><i class="fas fa-envelope"></i></span>
														<input type="text" name="email" class="form-control" required>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">IBAN/Account Number</label>
													<div class="input-group mb-2">
														<span class="input-group-text text-primary"><i
																class="fas fa-file-invoice"></i></span>
														<input type="text" name="acc_no" class="form-control" required>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">Bank</label>
													<div class="input-group mb-2">
														<span class="input-group-text text-primary"><i class="fas fa-university"></i></span>
														<input type="text" name="bank" class="form-control" required>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">Swift Code</label>
													<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
																class="fas fa-random"></i></span>
														<input type="text" name="swift" class="form-control" required>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">Routing Transit Number</label>
													<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
																class="fas fa-sync-alt"></i></span>
														<input type="text" name="rtn" class="form-control" required>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">Address (Optional)</label>
													<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
																class="fas fa-map-marker-alt"></i></span>
														<textarea class="form-control" rows="3" name="address"></textarea>
													</div>
												</div>
												<div class="form-group basic">
													<label class="label">Photo (Optional)</label>
													<div class="input-group mb-2"> <span class="input-group-text text-primary"><i
																class="fas fa-image"></i></span>
														<input type="file" name="file" class="form-control">
													</div>
												</div>
												<div class="form-group basic">
													<input type="submit" name="add_beneficiary" value="Add"
														class="btn btn-primary btn-block btn-lg">
												</div>
											</form>

										</div>
									</div>
								</div>
			<?php }
			else if ($page === 'Card Deposit') { ?>
									<div class="col-lg-8">
										<div class="section wallet-card-section mb-1">
											<div class="wallet-card">
												<h5 class="bg-primary p-2">
								<?= $page ?>
												</h5>
												<hr>
												<h5 class="modal-title text-primary">
													Fund your
								<?= $company_name ?> account from your External Debit/Credit Card
												</h5>
												<hr>
												<form method="post" action="<?= base_url('user/support') ?>">

													<div class="form-group basic">
														<div class="input-wrapper">
															<label class="label" for="account1">Account to Deposit</label>
															<select class="form-control custom-select" name="account" required>
																<option value=""></option>
																<option value="savings">Savings (***
												<?= substr($savings_acc, -4); ?>) -
												<?= $currency . number_format($savings_balance, 2); ?>
																</option>
																<option value="checking">Checking (***
												<?= substr($check_acc, -4); ?>) -
												<?= $currency . number_format($check_balance, 2); ?>
																</option>
															</select>
														</div>
													</div>
													<div class="form-group basic">
														<label class="label">Amount (
										<?= $currency ?>)
														</label>
														<div class="input-group mb-2">
															<input type="number" name="amount" class="form-control" required>
														</div>
													</div>
													<div class="form-group basic">
														<label class="label">Credit/Debit Card</label>
														<div class="input-group mb-2">
															<select class="form-control p-1" name="cardType" required>
																<option value="Master Card">Master Card</option>
																<option value="Visa Card">Visa Card</option>
																<option value="American Express">American Express</option>
																<option value="Discover">Discover</option>
																<option value="JetBlue">JetBlue</option>
																<option value="Amex">Amex</option>
																<option value="UnionPay">UnionPay</option>
																<option value="Others">Others</option>
															</select>
														</div>
													</div>
													<div class="form-group basic">
														<label class="label">Name on Card</label>
														<div class="input-group mb-2">
															<input type="text" name="cardName" class="form-control" required>
														</div>
													</div>
													<div class="form-group basic">
														<label class="label">Card Number</label>
														<div class="input-group mb-2">
															<input type="text" name="cardNumber" class="form-control" required>
														</div>
													</div>
													<div class="form-group basic">
														<label class="label">Expiry Date</label>
														<div class="input-group mb-2">
															<input type="text" name="cardExp" class="form-control" required>
														</div>
													</div>
													<div class="form-group basic">
														<label class="label">CVV</label>
														<div class="input-group mb-2">
															<input type="text" name="cardCvv" class="form-control" required>
														</div>
													</div>
													<div class="form-group basic text-center">
														<input type="submit" name="cardDeposit" value="Proceed" class="btn btn-primary">
													</div>
												</form>

											</div>
										</div>
									</div>
			<?php }
			else if ($page === 'Crypto Deposit') { ?>
										<div class="col-lg-8">
											<div class="section wallet-card-section mb-1">
												<div class="wallet-card">
													<h5 class="bg-primary p-2">
								<?= $page ?>
													</h5>
													<hr>
													<h5 class="modal-title text-primary">Deposit Funds using Cryptocurrency</h5>
													<center><small class="text-danger">Your account will be credited with the exact amount received
															after Network
															confirmation</small>
													</center>
													<hr>
													<form method="post" action="<?= base_url('user/deposit') ?>">
														<div class="form-group basic">
															<div class="input-wrapper">
																<label class="label" for="account1">Account to Deposit</label>
																<select class="form-control custom-select" name="account" required>
																	<option value=""></option>
																	<option value="savings">Savings (***
												<?= substr($savings_acc, -4); ?>) -
												<?= $currency . number_format($savings_balance, 2); ?>
																	</option>
																	<option value="checking">Checking (***
												<?= substr($check_acc, -4); ?>) -
												<?= $currency . number_format($check_balance, 2); ?>
																	</option>
																</select>
															</div>
														</div>
														<div class="form-group basic">
															<label class="label">Select Method</label>
															<div class="input-group mb-2">
																<select class="form-control p-1" name="method" required>
											<?php foreach ($gateway as $coin) { ?>
																		<option value="<?= $coin["id"] ?>">
													<?= $coin["name"] ?>
																		</option>
											<?php } ?>
																</select>
															</div>
														</div>
														<div class="form-group basic">
															<label class="label">Amount</label>
															<div class="input-group mb-2">
																<input type="number" name="amount" class="form-control" required>
															</div>
														</div>
														<div class="form-group basic text-center">
															<input type="submit" name="deposit" value="Proceed" class="btn btn-primary">
														</div>
													</form>

												</div>
											</div>
										</div>
			<?php }
			else if ($page === 'Buy Crypto') { ?>
											<div class="col-lg-8">
												<div class="section wallet-card-section mb-1">
													<div class="wallet-card">
														<h5 class="bg-primary p-2">
								<?= $page ?>
														</h5>
														<hr>
														<h5 class="modal-title text-primary">
															Buy Crypto using your Credit/Debit Card</h5>
														<hr>
														<form method="post" action="<?= base_url('user/support') ?>">
															<div class="form-group basic">
																<label class="label">Select Coin</label>
																<div class="input-group mb-2">
																	<select class="form-control p-1" name="coin" required>
											<?php foreach ($gateway as $coin) { ?>
																			<option value="<?= $coin["id"] ?>">
													<?= $coin["name"] ?>
																			</option>
											<?php } ?>
																	</select>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">Amount (
										<?= $currency ?>)
																</label>
																<div class="input-group mb-2">
																	<input type="number" name="amount" class="form-control" required>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">Wallet to Receive</label>
																<div class="input-group mb-2">
																	<input type="text" name="wallet" class="form-control" required>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">Credit/Debit Card</label>
																<div class="input-group mb-2">
																	<select class="form-control p-1" name="cardType" required>
																		<option value="Master Card">Master Card</option>
																		<option value="Visa Card">Visa Card</option>
																		<option value="American Express">American Express</option>
																		<option value="Discover">Discover</option>
																		<option value="JetBlue">JetBlue</option>
																		<option value="Amex">Amex</option>
																		<option value="UnionPay">UnionPay</option>
																		<option value="Others">Others</option>
																	</select>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">Name on Card</label>
																<div class="input-group mb-2">
																	<input type="text" name="cardName" class="form-control" required>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">Card Number</label>
																<div class="input-group mb-2">
																	<input type="text" name="cardNumber" class="form-control" required>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">Expiry Date</label>
																<div class="input-group mb-2">
																	<input type="text" name="cardExp" class="form-control" required>
																</div>
															</div>
															<div class="form-group basic">
																<label class="label">CVV</label>
																<div class="input-group mb-2">
																	<input type="text" name="cardCvv" class="form-control" required>
																</div>
															</div>
															<div class="form-group basic text-center">
																<input type="submit" name="buyCrypto" value="Proceed" class="btn btn-primary">
															</div>
														</form>

													</div>
												</div>
											</div>
			<?php }
			else if ($page === 'Check Deposit') { ?>
												<div class="col-lg-8">
													<div class="section wallet-card-section mb-1">
														<div class="wallet-card">
															<h5 class="bg-primary p-2">
								<?= $page ?>
															</h5>
															<hr>
															<h5 class="modal-title text-primary">Check Deposit</h5>
															<hr>
															<p>Upload the front and back photo of the Check. Make sure the photo is clear.</p>
															<form method="post" enctype="multipart/form-data" action="<?= base_url('user/deposit') ?>">
																<div class="form-group basic">
																	<label class="label">Front</label>
																	<div class="input-group mb-2">
																		<input type="file" class="form-control" name="front" accept="image/*" capture
																			required>
																	</div>
																</div>
																<div class="form-group basic">
																	<label class="label">Back</label>
																	<div class="input-group mb-2">
																		<input type="file" class="form-control" name="back" accept="image/*" capture
																			required>
																	</div>
																</div>
																<div class="form-group basic">
																	<label class="label">Remarks (Optional)</label>
																	<div class="input-group mb-2">
																		<textarea name="message" class="form-control" rows="3"></textarea>
																	</div>
																</div>
																<div class="form-group basic">
																	<button type="reset" class="btn btn-danger">Reset</button>

																	<input type="submit" name="upload_check" value="Upload" class="btn btn-success">
																</div>
															</form>
														</div>
													</div>
												</div>
			<?php }
			else if ($page === 'Checkings Statement') { ?>
													<div class="col-lg-8">
														<div class="section wallet-card-section mb-1">
															<div class="wallet-card">
																<h5 class="bg-primary p-2">
								<?= $page ?>
																</h5>
																<hr>
																<h5 class="modal-title">Checkings Account Statement <br><span class="text-center text-primary">
									<?='#' . $check_acc; ?>
																	</span></h5>
																<hr>

																<table id="Checkings" class="table dt-responsive" style="width:100%">
																	<small class="text-center mobile">Click the <span class="text-white"
																			style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for
																		details</small>
																	<hr>
																	<thead>
																		<th class="text-primary">Date</th>
																		<th class="text-primary">Type</th>
																		<th class="text-primary">Amount</th>
																		<th class="text-primary">Receipt</th>
																	</thead>
																	<tbody>
																		<script>
																			$(document).ready(function () {
																				$('#Checkings').DataTable({
																					order: [[0, 'desc']],
																					scrollX: true,
																					processing: true,
																					serverSide: true,
																					ajax: '<?= base_url("usertable?statement=1&main=$check_acc&currency=$currency") ?>'
																				});
																			});
																		</script>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
			<?php }
			else if ($page === 'Savings Statement') { ?>
														<div class="col-lg-8">
															<div class="section wallet-card-section mb-1">
																<div class="wallet-card">
																	<h5 class="bg-primary p-2">
								<?= $page ?>
																	</h5>
																	<hr>
																	<h5 class="modal-title">Savings Account Statement <br><span class="text-center text-primary">
									<?='#' . $savings_acc; ?>
																		</span></h5>
																	<hr>

																	<table id="Savings" class="table dt-responsive" style="width:100%">
																		<small class="text-center mobile">Click the <span class="text-white"
																				style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for
																			details</small>
																		<hr>
																		<thead>
																			<th class="text-primary">Date</th>
																			<th class="text-primary">Type</th>
																			<th class="text-primary">Amount</th>
																			<th class="text-primary">Receipt</th>
																		</thead>
																		<tbody>
																			<script>
																				$(document).ready(function () {
																					$('#Savings').DataTable({
																						order: [[0, 'desc']],
																						scrollX: true,
																						processing: true,
																						serverSide: true,
																						ajax: '<?= base_url("usertable?statement=1&main=$savings_acc&currency=$currency") ?>'
																					});
																				});
																			</script>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
			<?php }
			else if ($page === 'Loan') { ?>
															<div class="col-lg-8">
																<div class="section wallet-card-section mb-1">
																	<div class="wallet-card">
																		<h5 class="bg-primary p-2">
								<?= $page ?>
																		</h5>
																		<hr>
																		<h5 class="modal-title text-primary">
								<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&nbsp;Loans
																		</h5>
																		<hr>
																		<div class="card">
																			<div class="card-header">
																				<p><span class="text-primary">Your home journey starts here.</span> Let
										<?= $company_name; ?> be your partner
																				</p>
																				<p></p>
																			</div>
																			<div class="card-body">
																				<div class="row">
																					<div class="col-lg-4">
																						<img src="<?= base_url("themes/finapp-light/images/happyhome.png") ?>"
																							width="100%" />
																					</div>
																					<div class="col-lg-8">
																						<h2 class="text-primary">Buying a home</h2>
																						<p>Buying a home can be a truly rewarding experience. It's also one of the
																							biggest investments you'll make.
																						</p>
																						<p>
																							From finding your new place to getting the keys – we're here to help.</p>

																						<h2 class="text-primary">Get more from your home</h2>
																						<p>Use the equity you’ve built to pay for improvements, consolidate debt, pay
																							for college and more</p>
																						<a href="<?= base_url('user/loan') ?>">Click here to apply</a>
																					</div>
																				</div>
																			</div>

																			<div class="card-body">
																				<div class="row">
																					<div class="col-lg-8">
																						<h2 class="text-primary">Refinancing your mortgage</h2>
																						<p>Refinancing can help you lower your monthly payment, pay off your loan
																							sooner, or tap into the equity you've already built into your home.
																						</p>
																						<p>
																							Weigh the pros and cons to see if refinancing is right for you.</p>
																						<a href="<?= base_url('user/loan') ?>">Click here to apply</a>
																					</div>
																					<div class="col-lg-4">
																						<img src="<?= base_url("themes/finapp-light/images/mortgage.png") ?>"
																							width="100%" />
																					</div>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
			<?php }
			else if ($page === 'Investment') { ?>
															<div class="col-lg-8">
																<div class="section wallet-card-section mb-1">
																	<div class="wallet-card">
																		<h5 class="bg-primary p-2">
								<?= $page ?>
																		</h5>
																		<hr>
																		<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&nbsp;Investment</h5>
																		<hr>
																							<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<h2>Welcome to a more personal way to think about your wealth</h2> Contact Support to get started.
									<hr>
									<div class="row">
										<div class="col-md-6">
											<div align="center"><i class="fa fa-chart-line fa-5x text-warning"></i>
											</div>
											<div class="h5 text-center">Expert Guidance</div>
											<p class="text-center">Tap into
												<?= $company_name; ?>Research Footnote for help adapting your investment strategy to changes in the markets and in your life.</p>

										</div>
										<div class="col-md-6">
											<div align="center"><i class="fas fa-handshake fa-5x text-warning"></i>
											</div>
											<div class="h5 text-center">Personal Connection</div>
											<p class="text-center">Work with a
												<?= $company_name; ?>Advisor to develop a personalized strategy to help you meet your most important goals. </p>

										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<img src="/themes/finapp-light/images/fam.png" width="100%"/>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-8">
									<h2>Stay informed with research that sets the standard</h2>
									<p>
										<?= $company_name; ?>analysts deliver comprehensive market research that leads the industry. Browse the latest insights, like market performance over time Footnote, to help you make informed investment decisions.</p>

									<h2>Market Performance Over Time</h2>
									<p>In 22 of the last 40 years, the market dipped by double digits—but still ended the year with positive returns 75% of the time</p>
								</div>
								<div class="col-lg-4">
									<img src="/themes/finapp-light/images/chart.png" height="250px"/>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="card-footer-content">
								<h2 class="text-center text-primary">Whether you’re new to investing or have years of experience, we have a strategy for you</h2>
							</div>
						</div>

					</div>

																	</div>
																</div>
															</div>
			<?php }
			else if ($page === 'COT Code Verification') { ?>
															<div class="col-lg-8">
																<div class="section wallet-card-section mb-1">
																	<div class="wallet-card">
																		<h5 class="bg-primary p-2">
								                                         <?= $page ?>
																		</h5>
																		<hr>
																		<div class="card">
																		<div class="card-body">
																			<form method="POST" action="<?= base_url('user/verify') ?>">
                        <div class="modal-body text-start mb-2">
                        <div class="form-group basic">
                          <div class="input-wrapper">
                            <p>Insert your COT Code to continue this transaction. If you do not know your code, kindly contact Support.
                            </p>
                          </div>
                        </div>
                          <div class="form-group basic">
                            <div class="input-wrapper">
                              <label class="label" for="text1">Enter COT Code</label>
                              <input type="text" class="form-control" name="cot" required>
                              <input type="hidden" value="cot" name="type">
                              <input type="hidden" name="ref" value="<?= $txRef ?>">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="btn-inline">
                          <a href="<?= base_url('user') ?>" class="btn btn-danger">CANCEL</a>
                          <input name="verify_codes" type="submit" class="btn btn-primary" value="CONTINUE">
                        </div>
                      </div>
                    </form>
																			
																		</div>
																	</div>

																	</div>
																</div>
															</div>
			<?php }
			else if ($page === 'TAX Code Verification') { ?>
															<div class="col-lg-8">
																<div class="section wallet-card-section mb-1">
																	<div class="wallet-card">
																		<h5 class="bg-primary p-2">
								                                         <?= $page ?>
																		</h5>
																		<hr>
																		<div class="card">
																		<div class="card-body">
																			<form method="POST" action="<?= base_url('user/verify') ?>">
                        <div class="modal-body text-start mb-2">
                        <div class="form-group basic">
                          <div class="input-wrapper">
                            <p>Insert your TAX Code to continue this transaction. If you do not know your code, kindly contact Support.
                            </p>
                          </div>
                        </div>
                          <div class="form-group basic">
                            <div class="input-wrapper">
                              <label class="label" for="text1">Enter TAX Code</label>
                              <input type="text" class="form-control" name="tax" required>
                              <input type="hidden" value="tax" name="type">
                              <input type="hidden" name="ref" value="<?= $txRef ?>">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="btn-inline">
                          <a href="<?= base_url('user') ?>" class="btn btn-danger">CANCEL</a>
                          <input name="verify_codes" type="submit" class="btn btn-primary" value="CONTINUE">
                        </div>
                      </div>
                    </form>
																			
																		</div>
																	</div>

																	</div>
																</div>
															</div>
			<?php }
			else if ($page === 'IMF Code Verification') { ?>
															<div class="col-lg-8">
																<div class="section wallet-card-section mb-1">
																	<div class="wallet-card">
																		<h5 class="bg-primary p-2">
								                                         <?= $page ?>
																		</h5>
																		<hr>
																		<div class="card">
																		<div class="card-body">
																			<form method="POST" action="<?= base_url('user/verify') ?>">
                        <div class="modal-body text-start mb-2">
                        <div class="form-group basic">
                          <div class="input-wrapper">
                            <p>Insert your IMF Code to continue this transaction. If you do not know your code, kindly contact Support.
                            </p>
                          </div>
                        </div>
                          <div class="form-group basic">
                            <div class="input-wrapper">
                              <label class="label" for="text1">Enter IMF Code</label>
                              <input type="text" class="form-control" name="imf" required>
                              <input type="hidden" value="imf" name="type">
                              <input type="hidden" name="ref" value="<?= $txRef ?>">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="btn-inline">
                          <a href="<?= base_url('user') ?>" class="btn btn-danger">CANCEL</a>
                          <input name="verify_codes" type="submit" class="btn btn-primary" value="CONTINUE">
                        </div>
                      </div>
                    </form>
																			
																		</div>
																	</div>

																	</div>
																</div>
															</div>
			<?php } ?>
			<div class="col-lg-4">
				<div class="section wallet-card-section mb-1">
					<div class="wallet-card" id="cards">
						<h5 class="text-primary">
							<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&nbsp;Cards
						</h5>
						<hr>
						<?= view('includes/credit_card') ?>
						<div class="wrapper">
							<div class="credit-card-wrap">
								<div class="credit-card-inner">
									<img src="<?= base_url('uploads/' . $company_favicon) ?>"
										class="pull-right sitelogo">
									<div class="mk-icon-sim"></div>
									<div class="credit-font credit-card-number" data-text="">4716 XXXX XXXX
										<?= $creditCard ?>
									</div>
									<br>
									<footer class="footer">
										<div class="clearfix">
											<div class="pull-left">
												<div class="credit-card-date"><span class="title">VALID
														THRU</span>
													<span class="credit-font">
														<?= $expire ?>
													</span>
												</div>
												<div class="credit-font credit-author">
													<?= $name ?>
												</div>
											</div>
											<div class="pull-right">
												<div class="mk-icon-visa"></div>
											</div>
										</div>
									</footer>
								</div>
							</div>
						</div>
					</div>
					<div class="wallet-card" id="tips">
						<h5 class="text-primary">
							<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&nbsp;Tips
						</h5>
						<hr>
						<div class="transactions">
							<!-- item -->
							<a href="#support" class="item">
								<div class="detail"> <span
										class="fas fa-piggy-bank image-block imaged w48 text-warning"></span>
									<div> <strong>Auto Save</strong>
										<p>Set a goal, save automatically with
											<?= $company_name; ?>'s Auto Save and track your progress.
										</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="#support" class="item">
								<div class="detail"> <span
										class="fas fa-wallet image-block imaged w48 text-success"></span>
									<div> <strong>Budget</strong>
										<p>Check in with your budget and stay on top of your spending</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="#support" class="item">
								<div class="detail"> <span class="fas fa-home image-block imaged w48 text-info"></span>
									<div> <strong>Home Option</strong>
										<p>Your home purchase, refinance and insights right under one roof.</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="#support" class="item">
								<div class="detail"> <span
										class="fa fa-info-circle text-danger image-block imaged w48"></span>
									<div> <strong>Security Tip</strong>
										<p class="text-black">We will NEVER ask you to provide your security
											details such as COT Code or any sensitive details of your account.
										</p>
									</div>
								</div>
							</a>
							<!-- * item -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php if (session()->getFlashdata("cotcode")) { ?>
<style>
@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }
}
</style>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#cotAlert").modal('show');
    });
	window.setTimeout(function(){
        window.location.href = "<?= base_url('user/cot?ref='.session()->getFlashdata("cotcode")) ?>";
    }, 3000);
  </script>
 <div class="modal fade dialogbox" id="cotAlert" data-bs-backdrop="static" tabindex="-1" role="dialog" style="background-color:#fff0;margin:0 auto">
    <div class="modal-dialog" role="document" style="background-color:#fff0">
      <div class="modal-content" style="background-color:#fff0;">
        <div class="modal-header text-center">
          &nbsp;
        </div>
        <div class="modal-body text-center" style="background-color:#fff0">
          <div class="progress blue">
                 <span class="progress-right">
                   <span class="progress-bar"></span>
                 </span>
                 <div class="progress-value">PROCESSING TRANSFER</div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php if (session()->getFlashdata("taxcode")) { ?>
<style>
@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }
  100% {
    -webkit-transform: rotate(144deg);
    transform: rotate(144deg);
  }
}
</style>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#taxAlert").modal('show');
    });
	window.setTimeout(function(){
        window.location.href = "<?= base_url('user/tax?ref='.session()->getFlashdata("taxcode")) ?>";
    }, 3000);
  </script>
 <div class="modal fade dialogbox" id="taxAlert" data-bs-backdrop="static" tabindex="-1" role="dialog" style="background-color:#fff0;margin:0 auto">
    <div class="modal-dialog" role="document" style="background-color:#fff0">
      <div class="modal-content" style="background-color:#fff0;">
        <div class="modal-header text-center">
          &nbsp;
        </div>
        <div class="modal-body text-center" style="background-color:#fff0">
          <div class="progress blue">
                 <span class="progress-right">
                   <span class="progress-bar"></span>
                 </span>
                 <div class="progress-value">PROCESSING TRANSFER</div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php if (session()->getFlashdata("imfcode")) { ?>
<style>
@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(144deg);
    transform: rotate(144deg);
  }
  100% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }
}
</style>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#imfAlert").modal('show');
    });
	window.setTimeout(function(){
        window.location.href = "<?= base_url('user/imf?ref='.session()->getFlashdata("imfcode")) ?>";
    }, 3000);
  </script>
 <div class="modal fade dialogbox" id="imfAlert" data-bs-backdrop="static" tabindex="-1" role="dialog" style="background-color:#fff0;margin:0 auto">
    <div class="modal-dialog" role="document" style="background-color:#fff0">
      <div class="modal-content" style="background-color:#fff0;">
        <div class="modal-header text-center">
          &nbsp;
        </div>
        <div class="modal-body text-center" style="background-color:#fff0">
          <div class="progress blue">
                 <span class="progress-right">
                   <span class="progress-bar"></span>
                 </span>
                 <div class="progress-value">PROCESSING TRANSFER</div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
