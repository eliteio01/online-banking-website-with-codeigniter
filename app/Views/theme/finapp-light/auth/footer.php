<!-- ========= JS Files =========  --> 
<script language="javascript">
  populateCountries( "country", "state" );
  populateCountries( "country2" );
  populateCountries( "country2" );
</script>
<!-- Bootstrap -->
<?= script_tag('themes/finapp-light/js/jquery.min.js') ?>
<?= script_tag('themes/finapp-light/js/jquery-3.2.1.slim.min.js') ?>
<?= script_tag('themes/finapp-light/css/src/bootstrap/bootstrap.min.js') ?>
<?= script_tag('themes/finapp-light/js/lib/bootstrap.bundle.min.js') ?>
<?= script_tag('themes/finapp-light/js/plugins/splide/splide.min.js') ?>
<?= script_tag('themes/finapp-light/js/base.js') ?>

<?= script_tag('themes/finapp-light/js/plugins/datatable/datatables.min.js') ?>
<?= script_tag('themes/finapp-light/js/fontawesome.min.js') ?>
<?= script_tag('themes/finapp-light/js/all.min.js') ?>
<?= script_tag('themes/finapp-light/js/functions.js') ?>
<!-- ========= JS Files =========  -->
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
<?= view('includes/livechat') ?>
</body>
</html>