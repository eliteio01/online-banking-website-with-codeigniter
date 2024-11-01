
  <!-- App Capsule -->
  <div id="appCapsule" class="cap">
    <div class="section mt-2 text-center">
      <a href="<?= base_url() ?>">
			<img src="<?= base_url('uploads/'.$company_logo) ?>" width="150px"/>
			</a>
      <br>
      
    </div>
    <div class="section mb-5 p-2">

      <?php if(session()->getFlashdata('msg')){?>
      <div class="alert alert-primary alert-dismissible fade show mb-2" role="alert">
        <?= session()->getFlashdata('msg') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php } ?>

      <form method="post" action="<?= base_url('auth/login') ?>">
          <input type="hidden" name="url" value="<?= $url ?>" required>
        <div class="card">
          <div class="card-header pb-1">
            <h2><?= $page ?></h2>
          </div>
          <div class="card-body pb-1">
            <div class="form-group basic">
              <div class="input-wrapper">
                <label class="label" for="email1">Account ID</label>
                <input type="text" class="form-control" name="email" required>
              </div>
            </div>
            <div class="form-group basic">
              <div class="input-wrapper">
                <label class="label" for="email1">Password</label>
                <div class="input-group mb-3">
                  <input name="password" type="password" value="" class="input form-control" id="password" required="true" aria-label="password" aria-describedby="basic-addon1"/>
                  <div class="input-group-append">
                    <span class="input-group-text" onclick="password_show_hide();">
                     <i class="fas fa-eye" style="color:var(--secondary_color)" id="show_eye"></i>
                     <i class="fas fa-eye-slash d-none" style="color:var(--secondary_color)" id="hide_eye"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group basic">
              <div class="input-wrapper">
                <a href="resetpassword" class="text-primary">Forgot Password?</a> | <a href="register" class="text-primary">Register</a>
              </div>
            </div>
            <input type="submit" class="btn btn-secondary btn-block btn-lg" name="user_login" value="Sign In">
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- * App Capsule -->
  