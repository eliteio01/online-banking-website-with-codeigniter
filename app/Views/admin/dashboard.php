<main class="app-main">
  <div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <!-- .container -->
        <div class="page-section">

          <?php if ($pending_tickets > 0) { ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-danger has-icon alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <div class="alert-icon bg-danger">
                    <span class="fa fa-envelope"></span>
                  </div>
                  <h5 class="alert-heading text-danger">Notification</h5>
                  <strong class="text-black">You have <span class="text-danger">
                      <?= $pending_tickets ?>
                    </span> unread Support Ticket</strong>
                  <a href="<?= base_url('admin/tickets') ?>" class="alert-link text-danger">Click here to view</a>
                </div>
              </div>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
									<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">All Accounts</span></span>
									<a href="<?= base_url('admin/create_account') ?>" class="float-right btn btn-sm btn-primary">Create Account</a>
								</div>
                <div class="card-header d-lg-none d-xl-none">
                  <center>Click the <span class="text-white"
                      style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details
                  </center>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/delete_records') ?>" method="POST" id="del_form"
                    onSubmit="return(confirm('Are you sure you want to delete selected?'))">
                    <table id="users" class="table table-striped table-bordered dt-responsive nowrap"
                      style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="text-primary">
                            <div class="d-flex">
                              <input type="button" id="toggle" class="btn btn-sm btn-primary" value="select all"
                                onClick="mark()">
                              <input type="hidden" name="type" value="users">
                              <input type="submit" class="btn btn-sm btn-danger" name="delete_statement" value="Delete"
                                style="display:none" id="del">
                            </div>
                          </th>
                          <th class="text-primary">Account ID</th>
                          <th class="text-primary">Name</th>
                          <th class="text-primary">Email</th>
                          <th class="text-primary">Created</th>
                          <th class="text-primary">Account Status</th>
                          <th class="text-primary">Checking</th>
                          <th class="text-primary">Savings</th>
                          <th class="text-primary">Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <script>
                          $(document).ready(function () {
                            $('#users').DataTable({
                              order: [[4, 'desc']],
                              "columnDefs": [{
                                "targets": 0,
                                "orderable": false
                              }],
                              scrollX: true,
                              processing: true,
                              serverSide: true,
                              ajax: '<?= base_url("datatable?users=1") ?>'
                            });
                          });
                        </script>

                      </tbody>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Total
                      Users</span></span>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary has-icon" role="alert">
                    <div class="alert-icon bg-primary">
                      <span class="fas fa-users"></span>
                    </div>
                    <h3 class="card-title mb-4"> <span class="badge badge-sm badge-primary">TOTAL ACCOUNTS</span>
                    </h3>
                    <h4 class="text-primary">
                      <?= $total_users ?>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Last Registered
                      User</span></span>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary has-icon" role="alert">
                    <div class="alert-icon bg-primary">
                      <span class="fas fa-user"></span>
                    </div>
                    <h3 class="card-title mb-4"> <span class="badge badge-sm badge-primary">LAST ACCOUNT</span></h3>
                    <h4 class="text-primary">
                      <?= $last_user ?>
                    </h4>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</main>