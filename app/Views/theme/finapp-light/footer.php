<!-- App Bottom Menu -->
<div class="appBottomMenu">
  <a href="<?= base_url('user/profile') ?>" class="item active">
    <div class="col">
      <i class="fas fa-cog fa-2x"></i>
      <strong>Settings</strong>
    </div>
  </a>
  <a href="<?= base_url('user/notifications') ?>" class="item active">
    <div class="col">
      <i class="far fa-envelope fa-2x"></i>
      <strong>Notifications</strong>
    </div>
  </a>
  <a href="<?= base_url('user') ?>" class="item active">
    <div class="col">
      <i class="fas fa-house-user fa-2x"></i>
      <strong>Home</strong>
    </div>
  </a>
  <a href="<?= base_url('user/support') ?>" class="item active">
    <div class="col">
      <i class="far fa-comment-dots fa-2x"></i>
      <strong>Support</strong>
    </div>
  </a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#logout" class="item active">
    <div class="col">
      <i class="fas fa-sign-out-alt fa-2x"></i>
      <strong>Logout</strong>
    </div>
  </a>
</div>
<!-- * App Bottom Menu -->
</div>
<!-- Pay Bills -->
<div class="modal fade action-sheet" id="payBills" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?>&nbsp;Pay Bills</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="transactions">
							<!-- item -->
							<a href="<?= base_url('user/alert') ?>" class="item">
								<div class="detail"> <span class="fas fa-helicopter image-block imaged w48"></span>
									<div> <strong>Plane Tickets</strong>
										<p>Buy Flight tickets from your
											<?= $company_name; ?>'s Account.</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="<?= base_url('user/alert') ?>" class="item">
								<div class="detail"> <span class="fas fa-hotel image-block imaged w48"></span>
									<div> <strong>Hotel Booking</strong>
										<p>Book your favourite Hotel</p>
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
<!-- * Pay Bills  -->


<!--- ************ ALERT*****************--->
<?php if (session()->getFlashdata("msg")) { ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#alert").modal('show');
    });
  </script>
  <div class="modal fade dialogbox" id="alert" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header text-center">
          &nbsp;
        </div>
        <div class="modal-body">
          <?= session()->getFlashdata("msg") ?>
        </div>
        <div class="modal-footer">
          <div class="btn-inline">
            <a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!--- ************ALERT*****************--->


<!--- ************ PROFILE*****************--->
  <div class="modal fade dialogbox" id="ProfileModal" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title">
          <?= $name ?>
        </h5>
        </div>
        <div class="modal-body">
        <div class="action-sheet-content text-center">
          <?php if ($notification > 0) { ?>
            <strong class="text-black">You have <span class="text-success">
                <?= $notification ?>
              </span> unread Notification</strong> <a href="<?= base_url('user/notifications') ?>"
              class="alert-link text-success">Click here
              to view</a>
            <hr>
          <?php } ?>
          <a href="<?= base_url('user/profile') ?>" class="btn btn-primary btn-block">My profile</a>
          <div class="row mt-2">
            <div class="col-6">
              <button type="button" class="btn btn-info btn-block" data-bs-dismiss="modal"><i class="fas fa-times"></i>
                &nbsp;Close</button>
            </div>
            <div class="col-6">
              <a href="<?= base_url('user/logout?url=' . current_url()) ?>" class="btn btn-danger btn-block"><i
                  class="fas fa-sign-out-alt"></i> &nbsp;Sign Out</a>
            </div>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <div class="btn-inline">
            <a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--- ************PROFILE*****************--->



<!--- ************ Code ALERT*****************--->
<?php if (session()->getFlashdata("code")) { ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#code_alert").modal('show');
    });
  </script>
  <div class="modal fade dialogbox" id="code_alert" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <?= session()->getFlashdata("code") ?>
    </div>
  </div>
<?php } ?>
<!--- ************COT ALERT*****************--->



<!--- ************DEPOSIT ALERT*****************--->
<?php if (session()->getFlashdata("deposit")) { ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#deposit_popup").modal('show');
    });

    function copyWallet() {
      document.getElementById("copy").innerHTML = 'Copied!';
      new ClipboardJS('.clip_modal', {
        container: document.getElementById('deposit_popup')
      });
    }
  </script>
  <div class="modal fade dialogbox" id="deposit_popup" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header text-center">
        </div>
        <div class="modal-body">
          <?= session()->getFlashdata("deposit") ?>
        </div>
        <div class="modal-footer">
          <div class="btn-inline">
            <a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!--- ************DEPOSIT ALERT*****************--->

<!-- * Android Add to Home Action Sheet -->
<div id="cookiesbox" class="offcanvas offcanvas-bottom cookies-box" tabindex="-1" data-bs-scroll="true"
  data-bs-backdrop="false">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">We use cookies</h5>
  </div>
  <div class="offcanvas-body">
    <div>
      <?= $company_name ?> uses cookies to provide necessary website functionality, improve your experience and analyze
      our traffic. By using our website, you agree to our Privacy Policy and our Cookies Policy.
    </div>
    <div class="buttons">
      <a href="#" class="btn btn-primary btn-block" data-bs-dismiss="offcanvas">I understand</a>
    </div>
  </div>
</div>

<!-- * App Bottom Menu -->
<!-- Logout -->
<div class="modal fade dialogbox" id="logout" data-bs-backdrop="static" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="pt-3 text-center">
        <img src="<?= base_url('uploads/' . $image) ?>" alt="image" class="imaged"
          style="width:50px;height:50px;border-radius:50%">
      </div>
      <div class="modal-header pt-2">
        <h5 class="modal-title">You are about to logout</h5>
      </div>
      <div class="modal-body">
        Are you sure about this?
      </div>
      <div class="modal-footer">
        <div class="btn-inline">
          <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
          <a href="<?= base_url('user/logout?url=' . current_url()) ?>" class="btn btn-text-primary">LOGOUT</a>
        </div>
      </div>
    </div>
  </div>
<!-- * Logout-->
<!-- ========= JS Files =========  -->
<script language="javascript">
  populateCountries("country", "state");
  populateCountries("country2");
  populateCountries("country2");
</script>
<!-- Bootstrap -->
<?= script_tag('themes/finapp-light/css/src/bootstrap/bootstrap.min.js') ?>
<?= script_tag('themes/finapp-light/js/lib/bootstrap.bundle.min.js') ?>
<?= script_tag('themes/finapp-light/js/plugins/splide/splide.min.js') ?>
<?= script_tag('themes/finapp-light/js/main.js') ?>

<?= script_tag('themes/finapp-light/js/plugins/datatable/datatables.min.js') ?>
<?= script_tag('themes/finapp-light/js/fontawesome.min.js') ?>
<?= script_tag('themes/finapp-light/js/all.min.js') ?>
<?= script_tag('themes/finapp-light/js/html2canvas.js"') ?>
<!-- ========= JS Files =========  -->

<!-- ========= Custom JS Files =========  -->
<script>
  function copyRef() {
    document.getElementById("copy_ref").innerHTML = 'Copied!';
    new ClipboardJS('.clip');
  }
</script>
<!-- ========= Custom JS Files =========  -->
<?= view("includes/livechat") ?>
</body>

</html>