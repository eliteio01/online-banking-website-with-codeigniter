
<!--- ************ ALERT*****************--->
	<?php if (session()->getFlashdata("msg")) { ?>
       <script> window.onload = function(){ document.getElementById("popup").click(); } </script>
       <button type="button" data-toggle="modal" id="popup" data-target="#alert" style='display:none'>Button</button>
       <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
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
</div>

<script>
    function mark() {
        var checkboxes = document.getElementsByName('all[]');
        var button = document.getElementById('toggle');
        if (button.value == 'select all') {
            for (var i in checkboxes) {
                checkboxes[i].checked = 'FALSE';
            }
            document.getElementById('del').style.display = 'block';
            button.value = 'deselect all'
        } else {
            for (var i in checkboxes) {
                checkboxes[i].checked = '';
            }
            button.value = 'select all';
            document.getElementById('del').style.display = 'none';
        }
    }

    function showbtn() {
        document.getElementById('del').style.display = 'block';
    }
</script>
<script language="javascript">
	populateCountries( "country", "state" );
	populateCountries( "country2" );
	populateCountries( "country2" );
</script>
<script src="<?= base_url('assets/vendor/popper.js/umd/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/summernote/summernote-bs4.js') ?>"></script>
<script src="<?= base_url('assets/vendor/summernote/summernote-tools.js') ?>"></script>
<script src="<?= base_url('assets/vendor/pace-progress/pace.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/stacked-menu/js/stacked-menu.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/javascript/theme.min.js') ?>"></script> <!-- END THEME JS -->
<script src="<?= base_url('assets/javascript/pages/dashboard-demo.js') ?>"></script> <!-- END PAGE LEVEL JS -->

<script src="<?= base_url('assets/vendor/datatable/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatable/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatable/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatable/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/flatpickr/flatpickr.min.js') ?>"></script>

</body>
</html>