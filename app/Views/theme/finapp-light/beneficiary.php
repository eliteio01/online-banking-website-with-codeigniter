<!-- App Capsule -->
<div id="appCapsule">

	<div class="section mt-3 text-center">
		<div class="avatar-section">
			<img src="<?= base_url('uploads/' . $Img) ?>" alt="<?=$Name;?>" class="imaged" style="width:100px;height:100px;border-radius:50%">
		</div>
	</div>
	<div class="section mt-2 text-center">
		<div class="row">
			<div class="col-4 col-sm-4">
				<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transferBen">Transfer&nbsp;<i class="fas fa-share"></i></a>
			</div>
			<div class="col-4 col-sm-4">
        <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#EditBen">Edit&nbsp;<i class="fas fa-edit"></i></a>
			</div>
			<div class="col-4 col-sm-4">
				<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBen">Delete&nbsp;<i class="fas fa-trash"></i></a>
			</div>
		</div>
	</div>


	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<div class="item">
				<div class="in">
					<div>
						<?= $Name; ?>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="item">
				<div class="in">
					<div>
						<?= $Email; ?>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Bank</div>
					<span class="text-primary">
						<?= $Bank; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>IBAN</div>
					<span class="text-primary">
						<?= $Acc_no; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Swift Code</div>
					<span class="text-primary">
						<?= $Swift; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Routing</div>
					<span class="text-primary">
						<?= $rtn; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Added</div>
					<span class="text-primary">
						<?= date( "jS F\, Y h:i A", strtotime( $Date ) ); ?>
					</span>
				</div>
			</a>
		</li>
	</ul>
</div>
<!-- * App Capsule -->
<!-- Transfer -->
<div class="modal fade action-sheet" id="transferBen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Transfer to <?= implode(' ', array_slice(explode(' ', $Name), 0, 1)); ?></h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<form method="POST">
						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="label" for="account1">From</label>
								<select class="form-control custom-select" name="account" required>
									<option value=""></option>
									<option value="savings">Savings (***
										<?= substr($savings_acc,-4); ?>) -
										<?= $currency.number_format($savings_balance,2); ?>
									</option>
									<option value="checking">Checking (***
										<?= substr($check_acc,-4); ?>) -
										<?= $currency.number_format($check_balance,2); ?>
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
								<input type="hidden" name="name" value="<?=$Name;?>">
								<input type="hidden" name="acct" value="<?=$Acc_no;?>">
								<input type="hidden" name="bank" value="<?=$Bank;?>">
								<input type="hidden" name="swift" value="<?=$Swift;?>">
								<input type="hidden" name="routing" value="<?=$rtn;?>">
								<input type="hidden" name="address" value="<?=$Address;?>">
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Remarks</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-edit"></i></span>
								<textarea class="form-control" rows="3" name="remarks"></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">PIN</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-user-shield"></i></span>
								<input type="number" name="pin" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<input type="submit" name="transfer" value="Proceed" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Transfer  -->

<!-- Delete -->
<div class="modal fade dialogbox" id="deleteBen" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header pt-2">
				<h5 class="modal-title">You are about to Delete <?=$Name;?> from your Beneficiary List</h5>
			</div>
			<div class="modal-body">
				Are you sure about this?
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
					<form method="post" action="<?= base_url('user/beneficiary') ?>">
          <input type="hidden" name="id" value="<?=$b_id;?>">
						<input type="submit" class="btn btn-text-primary" value="PROCEED" name="delete_beneficiary">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Delete-->
<!-- Edit Beneficiary -->
<div class="modal fade action-sheet" id="EditBen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Update Beneficiary</h5>
			</div>
			<div class="modal-body">

				<div class="action-sheet-content">
					<form method="post" enctype="multipart/form-data" action="<?= base_url('user/beneficiary') ?>">
						<div class="form-group basic">
							<label class="label">Beneficiary Name</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
								<input type="text" name="name" class="form-control" value="<?= $Name; ?>" required>
								<input type="hidden" name="photo" value="<?= $Photo; ?>">
								<input type="hidden" name="id" value="<?=$b_id;?>">
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Email</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-envelope"></i></span>
								<input type="text" name="email" class="form-control" value="<?= $Email; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">IBAN/Account Number</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-file-invoice"></i></span>
								<input type="text" name="acc_no" class="form-control" value="<?= $Acc_no; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Bank</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-university"></i></span>
								<input type="text" name="bank" class="form-control" value="<?= $Bank; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Swift Code</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-random"></i></span>
								<input type="text" name="swift" class="form-control" value="<?= $Swift; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Routing Transit Number</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-sync-alt"></i></span>
								<input type="text" name="rtn" class="form-control" value="<?= $rtn; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Address (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-map-marker-alt"></i></span>
								<textarea class="form-control" rows="3" name="address"><?= $Address; ?></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Photo (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-image"></i></span>
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="form-group basic">
							<input type="submit" name="update_beneficiary" value="Update" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Edit Beneficiary  -->