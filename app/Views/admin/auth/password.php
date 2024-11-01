    <main class="auth">
      <header id="auth-header" class="auth-header">
				<div style="margin-bottom: 15px">
        <a href="<?= base_url() ?>"> <img src="<?= base_url('uploads/'.$company_logo) ?>" width="170px"></a>
				</div>
      </header><!-- form -->
    
      <form class="auth-form bg-white p-3" method="post" action="<?= base_url('auth/password') ?>">
          <h4><?= $page ?></h4>
          <hr>
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" class="form-control" name="username" autofocus="" required> <label for="inputUser">Enter Username</label>
          </div>
        </div><!-- /.form-group -->
        <div class="form-group">
          <p><a href="<?= base_url('auth/admin') ?>">Back to Login</a> </p>
        </div>
        <!-- .form-group -->
        <div class="form-group">
          <input type="submit" name="admin_reset" value="Continue" class="btn btn-lg btn-primary btn-block">
        </div><!-- /.form-group -->
        <small class="float-right text-muted"><a href="#" data-toggle="modal" data-target="#script_alert"><?= script_short_name ?> <?= script_version ?></a> </small>
      </form><!-- /.auth-form -->
      <!-- copyright -->
      
    </main>