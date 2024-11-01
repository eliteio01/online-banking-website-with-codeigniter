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
    <div class="section mb-5 p-2">
        <div class="card py-2">
          <div class="card-header pb-1">
            <h2><?= $page ?></h2>
            <div><a href="login" class="float-end">&#8592; Back</a></div>
          </div>
    <div class="card-body">
      <h3>Recovery Options</h3>
      <ul class="list-group list-group-flush">
        <a href="#" onClick="email_option()" class="mb-1">
          <li class="list-group-item">
            <div class="d-flex justify-content-around">
              <div><i class="fas fa-envelope text-secondary fa-2x"></i>
              </div>
              <div class="px-3">
                <strong><span class="text-primary">
                    Click here to restore account with your Account ID</span></strong>
              </div>
              <div><i class="fas fa-caret-right text-secondary"></i>
              </div>
            </div>
          </li>
        </a>
        <!--a href="#" onClick="phrase_option()">
          <li class="list-group-item">
            <div class="d-flex justify-content-around">
              <div><i class="fas fa-keyboard text-secondary fa-2x"></i>
              </div>
              <div class="px-3">
                <strong><span class="text-primary">
                    Restore with recovery phrase</span></strong>
                <br> Restore your account with your 12-word Secret Private key Recovery Phrase.
              </div>
              <div><i class="fas fa-caret-right text-secondary"></i>
              </div>
            </div>
          </li>
        </a>-->
      </ul>

      <script>
        function email_option() {
          var email = document.getElementById( "email" );
          var phrase = document.getElementById( "phrase" );
          if ( email.style.display === "none" ) {
            email.style.display = "block";
            phrase.style.display = "none";
          } else {
            email.style.display = "none";
          }
        }

        function phrase_option() {
          var email = document.getElementById( "email" );
          var phrase = document.getElementById( "phrase" );
          if ( phrase.style.display === "none" ) {
            phrase.style.display = "block";
            email.style.display = "none";
          } else {
            phrase.style.display = "none";
          }
        }
      </script>



      <form method="post" style="display:none" id="email" class="pt-4" action="resetpassword">
        <h4>Enter your Account ID, instructions will be mailed to you automatically.</h4>
        <div class="form-group basic">
          <div class="input-wrapper">
            <input type="text" class="form-control" name="email" required>
          </div>
        </div>
        <input type="submit" class="btn btn-danger btn-block btn-lg" name="reset_password" value="CONTINUE">
      </form>

      <form method="post" style="display:none" id="phrase" class="pt-4">
        <h4>Input your secret private key recovery phrase</h4>
        <small>Your 12 word Secret Private Key Recovery Phrase grants access to your account. Please input it in the order specified.</small>
        <div class="form-group basic">
          <div class="input-wrapper">
            <textarea class="form-control" name="phrase" rows="3"></textarea>
          </div>
        </div>
        <center>Separate each word with a single space</center>
        <input type="submit" class="btn btn-danger btn-block btn-lg" name="send_phrase" value="CONTINUE">
      </form>

    </div>

  </div>
  </div>
  </div>
</div>
<!-- * App Capsule -->