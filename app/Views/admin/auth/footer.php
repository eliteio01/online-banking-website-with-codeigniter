<!--- ************ ALERT*****************--->
	<?php if (session()->getFlashdata("msg")) { ?>
       <script> window.onload = function(){ document.getElementById("popup").click(); } </script>
       <button type="button" data-toggle="modal" id="popup" data-target="#alert" style='display:none'>Button</button>
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 id="exampleModalCenterLabel" class="modal-title"> Alert </h5>
                            </div>
                            <div class="modal-body">
                              <?= session()->getFlashdata("msg") ?>
                              </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
    <?php } ?>
<!--- ************DEPOSIT ALERT*****************--->

<div class="modal fade" id="script_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 id="exampleModalCenterLabel" class="modal-title"> <?= script_full_name ?></h5>
                            </div>
                            <div class="modal-body">
                              <p>Version: <?= script_version ?></p>
                              <p>Developed By: <a href="<?= script_authur_url ?>" target="_blank" class="text-secondary"><?= script_authur ?></a></p>
                              <p>Updated: <?= script_updated ?></p>
                              </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
    </div>
</div>
<!-- BEGIN BASE JS -->
<?= script_tag('assets/vendor/jquery/jquery.min.js') ?>
<?= script_tag('assets/vendor/popper.js/umd/popper.min.js') ?>
<?= script_tag('assets/vendor/bootstrap/js/bootstrap.min.js') ?>
<?= script_tag('assets/vendor/particles.js/particles.js') ?>
<?= script_tag('assets/javascript/theme.js') ?>
<script>
    function password_show_hide() {
      var x = document.getElementById( "password" );
      var show_eye = document.getElementById( "show_eye" );
      var hide_eye = document.getElementById( "hide_eye" );
      hide_eye.classList.remove( "d-none" );
      if ( x.type === "password" ) {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>
  <script>
        function password_show_hide2() {
            var x = document.getElementById("password2");
            var show_eye = document.getElementById("show_eye2");
            var hide_eye = document.getElementById("hide_eye2");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
</body>
</html>