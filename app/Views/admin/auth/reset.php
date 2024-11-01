    <main class="auth">
      <header id="auth-header" class="auth-header">
				<div style="margin-bottom: 15px">
        <a href="<?= base_url() ?>"> <img src="<?= base_url('uploads/'.$company_logo) ?>" width="170px"></a>
				</div>
      </header><!-- form -->
      <form class="auth-form bg-white p-3" method="post" action="<?= base_url('auth/password') ?>">
          <h4><?= $page ?></h4>
          <hr>
          <input type="hidden" name="token" value="<?= $token ?>">
        <!-- .form-group -->
        <div class="form-group">
            <label for="inputPassword">New Password</label>
            <div class="d-flex">
            <input type="password" class="form-control" name="password" id="password" required> 
                <span class="input-group-text" onclick="password_show_hide();">
                     <i class="fas fa-eye text-secondary" id="show_eye"></i>
                     <i class="fas fa-eye-slash d-none text-secondary" id="hide_eye"></i>
                    </span>
            </div>
        </div>
        <!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
            <label for="inputPassword">Confirm Password</label>
            <div class="d-flex">
            <input type="password" class="form-control" name="password_confirm" id="password2" required> 
                <span class="input-group-text" onclick="password_show_hide2();">
                     <i class="fas fa-eye text-secondary" id="show_eye2"></i>
                     <i class="fas fa-eye-slash d-none text-secondary" id="hide_eye2"></i>
                    </span>
            </div>
        </div>
        <!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <input type="submit" name="admin_reset_password" value="Continue" class="btn btn-lg btn-primary btn-block">
        </div><!-- /.form-group -->
        <small class="float-right text-muted"><a href="#" data-toggle="modal" data-target="#script_alert"><?= script_short_name ?> <?= script_version ?></a> </small>
      </form><!-- /.auth-form -->
      <!-- copyright -->
    </main>