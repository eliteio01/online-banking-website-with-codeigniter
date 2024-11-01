    <main class="auth">
      <header id="auth-header" class="auth-header">
				<div style="margin-bottom: 15px">
        <a href="<?= base_url() ?>"> <img src="<?= base_url('uploads/'.$company_logo) ?>" width="170px"></a>
				</div>
      </header><!-- form -->

      <form class="auth-form bg-white p-3" method="post" action="<?= base_url('auth/admin') ?>">
          <h4><?= $page ?></h4>
          <hr>
          <?= $alert ?>
          <input type="hidden" name="url" value="<?= $url ?>">
        <div class="form-group">
          <label for="inputUser">Username</label>
            <input type="text" class="form-control" name="username" autofocus="" required> 
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <div class="d-flex">
            <input type="password" class="form-control" name="password" id="password" required> 
                <span class="input-group-text" onclick="password_show_hide();">
                     <i class="fas fa-eye text-secondary" id="show_eye"></i>
                     <i class="fas fa-eye-slash d-none text-secondary" id="hide_eye"></i>
                    </span>
            </div>

        </div>
        <div class="form-group">
          <p>Forgot Password? - <a href="<?= base_url('auth/password') ?>">Click here</a> </p>
        </div>
        <div class="form-group">
          <input type="submit" name="admin_login" value="Continue" class="btn btn-lg btn-primary btn-block">
        </div>
        <small class="float-right text-muted"><a href="#" data-toggle="modal" data-target="#script_alert"><?= script_short_name ?> <?= script_version ?></a> </small>
      </form>


    </main>
    
    