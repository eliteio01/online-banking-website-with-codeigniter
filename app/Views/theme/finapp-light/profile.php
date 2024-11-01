<!-- App Capsule -->
<div id="appCapsule" class="appCap">
<div class="container mb-2 mt-2">

	<div class="section mt-3 text-center">
		<div class="avatar-section">
			<?php if ($allow_upload == 1) { ?>
			<a href="#" data-bs-toggle="modal" data-bs-target="#photo"><img src="<?= base_url('uploads/'.$image) ?>" alt="avatar" class="imaged w100 rounded">
			<span class="button"><i class="fas fa-camera"></i></span>
			</a>
			<?php } else { ?>
			<a href="#"><img src="<?= base_url('uploads/'.$image) ?>" alt="avatar" class="imaged w100 rounded"></a>
			<?php } ?>
		</div>
	</div>
	
	<div class="section mt-3 text-center">
		<?php if(isset($validation)) {?>
    <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
      <?= $validation->listErrors() ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
	</div>

	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#profile">
				<div class="in">
					<div>
						<?= $name ?>
					</div>
					<span class="text-primary">
						<i class="fas fa-edit"></i> EDIT PROFILE
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Checkings Balance</div>
					<span class="text-primary">
						<?= $currency.number_format($check_balance,2) ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Savings Balance</div>
					<span class="text-primary">
						<?= $currency.number_format($savings_balance,2) ?>
					</span>
				</div>
			</a>
		</li>
	</ul>
	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Email</div>
					<span class="text-primary">
						<?= $email ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Country</div>
					<span class="text-primary">
						<?= $country ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>City</div>
					<span class="text-primary">
						<?= $city ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Gender</div>
					<span class="text-primary">
						<?= $gender ?>
					</span>
				</div>
			</a>
		</li>
		<?php if ($allow_codes == 1) { ?>
			<li>
			<a href="#" class="item">
				<div class="in">
					<div>COT Code</div>
					<span class="text-primary">
						<?= $cot ?>
					</span>
				</div>
			</a>
		</li>
			<li>
			<a href="#" class="item">
				<div class="in">
					<div>Tax Code</div>
					<span class="text-primary">
						<?= $tax ?>
					</span>
				</div>
			</a>
		</li>
			<li>
			<a href="#" class="item">
				<div class="in">
					<div>IMF Code</div>
					<span class="text-primary">
						<?= $imf ?>
					</span>
				</div>
			</a>
		</li>
			<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#pin">
				<div class="in">
					<div>PIN</div>
					<span class="text-primary">
                     <i class="fas fa-eye" style="color:var(--secondary_color)" id="show_eye"></i>
                     <i class="fas fa-eye-slash d-none" style="color:var(--secondary_color)" id="hide_eye"></i>
					</span>
				</div>
			</a>
		</li>
		<?php } ?>
		<li>
			<a href="#" class="item">
				<div class="in">
					<span class="text-primary">
						<?= $address ?>
					</span>
				</div>
			</a>
		</li>
	</ul>
	<div class="listview-title mt-1">Security</div>
	<ul class="listview image-listview text inset" id="Password">
		<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#pass">
				<div class="in">
					<div class="text-danger">Change Password</div>
					<span class="text-primary">
						<i class="fas fa-user-shield"></i>
					</span>
				</div>
			</a>
		</li>
		
		<!--<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#phrase">
				<div class="in">
					<div class="text-danger">Recovery Phrase</div>
					<span class="text-primary">
						<i class="fas fa-user-lock"></i>
					</span>
				</div>
			</a>
		</li>-->
	</ul>

	<div class="listview-title mt-1">&nbsp;</div>

</div>
</div>

<!-- Dialog Form -->
<div class="modal fade dialogbox" id="photo" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Change Profile Photo</h5>
			</div>
			<form method="post" enctype="multipart/form-data" action="<?= base_url('user/profile') ?>">
				<div class="modal-body text-start mb-2">
					<div class="form-group basic">
						<div class="input-wrapper">
							<input type="file" class="form-control" name="photo" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-inline">
						<button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</button>

						<input type="submit" class="btn btn-text-primary" value="UPLOAD" name="upload_photo">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- * Dialog Form -->
<!-- Dialog Form -->
<div class="modal fade dialogbox" id="profile" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Profile</h5>
			</div>
			<form method="POST" action="<?= base_url() ?>/user/profile">
				<div class="modal-body text-start mb-2">

					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Name</label>
							<input type="text" class="form-control" name="name" value="<?= $name ?>" required>
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Phone</label>
							<input type="phone" class="form-control" name="phone" value="<?= $phone ?>">
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Country: <?= $country ?></label>
							<select name="country" class="form-control" id="country" required>
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">City: <?= $city ?></label>
							<select name="city" class="form-control" id="state">
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Gender</label>
							<select class="form-control" name="gender" required>
								<option value="">-Select-</option>
								<option value="Male" <?php if ($gender == 'Male'){ echo 'selected'; }  ?>>Male</option>
								<option value="Female" <?php if ($gender == 'Female'){ echo 'selected'; }  ?>>Female</option>
								<option value="Other" <?php if ($gender == 'Other'){ echo 'selected'; }  ?>>Other</option>
							</select>
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Address</label>
							<textarea class="form-control" rows="3" name="address"><?= $address ?></textarea>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="btn-inline">
						<button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</button>

						<input type="submit" class="btn btn-text-primary" value="UPDATE" name="edit_contact">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- * Dialog Form -->
<!-- Dialog Form -->
<div class="modal fade dialogbox" id="pass" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Change Password</h5>
			</div>
			<form method="POST" action="<?= base_url() ?>/user/profile">
				<div class="modal-body text-start mb-2">

					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Old Password</label>
							<input type="password" class="form-control" name="old_password" required>
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">New Password</label>
							<input type="password" class="form-control" minlenght="5" name="new_password" required>
						</div>
					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Confirm New Password</label>
							<input type="password" class="form-control" name="confirm_password" required>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="btn-inline">
						<button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</button>

						<input type="submit" class="btn btn-text-primary" value="Change" name="change_password">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- * Dialog Form -->
<!-- Dialog Form -->
<div class="modal fade dialogbox" id="pin" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Do not share your PIN with anyone</h5>
			</div>
			<div class="modal-body">
				<h4 class="text-danger"><?= $pin ?></h4>
			</div>
			<div class="modal-footer">
					<div class="btn-inline">
						<button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CLOSE</button>
					</div>
				</div>
		</div>
	</div>
</div>
<!-- * Dialog Form -->
	<?php if(isset($validation)) { ?>
    <script type="text/javascript">
      $( document ).ready( function () {
        $( "#profileError" ).modal( 'show' );
      } );
    </script>
    <div class="modal fade" id="profileError" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header"> </div>
          <div class="modal-body">
            <?= $validation->listErrors() ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>