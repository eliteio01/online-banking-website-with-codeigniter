<script src="https://www.google.com/recaptcha/api.js?render=<?= $captchaPublicKey ?>"></script>
<script>
    grecaptcha.ready( () => {
      grecaptcha.execute( '<?= $captchaPublicKey ?>', {
        action: 'validate_captcha'
      } ).then( token => {
        document.querySelector( '#recaptchaResponse' ).value = token;
      } );
    } );
  </script>
<!-- App Capsule -->
<div id="appCapsule" class="cap">
  <div class="section mt-2 text-center">
    <a href="<?= base_url() ?>">
			<img src="<?= base_url('uploads/'.$company_logo) ?>" width="150px"/>
			</a>
  </div>
  <div class="section mb-5 p-2">
    <?php if(session()->getFlashdata('msg')){?>
    <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
      <?= session()->getFlashdata('msg') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
    <?php if(isset($validation)) {?>
    <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
      <?= $validation->listErrors() ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
    <form method="post" action="register">
        
      <input type="hidden" class="form-control" name="recaptcha_response" id="recaptchaResponse">
      <input type="hidden" name="action" value="validate_captcha">
      <div class="card">
          <div class="card-header pb-1">
            <h2><?= $page ?></h2>
          </div>
        <div class="card-body pb-1">
          <div class="form-group basic">
            <div class="input-wrapper">
              <label class="label" for="email1">Full Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
          </div>
          <div class="form-group basic">
            <div class="input-wrapper">
              <label class="label" for="email1">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>

          <div class="form-group basic">
            <div class="input-wrapper">
              <label class="label" for="email1">Username</label>
              <input type="text" class="form-control" name="username" required>
            </div>
          </div>

          <div class="form-group basic">
            <div class="input-wrapper">
              <label class="label" for="password1">Password</label>
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
              <label class="label" for="password1">Confirm Password</label>
              <div class="input-group mb-3">
                <input name="confirmpassword" type="password" value="" class="input form-control" id="password2" required="true" aria-label="password" aria-describedby="basic-addon1"/>
                <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide2();">
                     <i class="fas fa-eye" style="color:var(--secondary_color)" id="show_eye2"></i>
                     <i class="fas fa-eye-slash d-none" style="color:var(--secondary_color)" id="hide_eye2"></i>
                    </span>
                
                </div>
              </div>
            </div>
          </div>
          <div class="form-group basic">
            <div class="input-wrapper">
              <label class="label" for="password1">Referrer (Username only)</label>
              <input type="text" name="upline_username" class="form-control" value="<?= $ref ?>">
            </div>
          </div>
          <div class="form-group basic">
            <div class="input-wrapper">
              Have an account? <a href="login" class="text-primary">Login</a>
            </div>
          </div>
          <button class="btn btn-secondary btn-block btn-lg" type="submit">Continue</button>
        </div>
      </div>

    </form>
  </div>
</div>
<!-- * App Capsule -->