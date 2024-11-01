<main class="app-main">
  <div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <!-- .container -->

        <div class="page-section">
          <header class="page-title-bar bg-primary">
            <p class="lead font-weight-bold text-center text-white p-2">
              <?= $page ?>
            </p>
          </header>
          <div class="row">
            <?php if ($page === 'Update Wallet') { ?>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    Update Wallet
                    <a href="<?= previous_url() ?>" class="btn btn-sm btn-primary float-right">GO BACK</a>
                  </div>
                  <div class="card-body">
                    <p class="text-danger"><strong>Paste the right wallet address according to the specified Network to
                        avoid loss of funds</strong></p>
                    <form method="post" action="<?= base_url('admin/wallets') ?>">
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Wallet Name</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" name="name" value="<?= $wallet_name ?>" required>
                          <input type="hidden" class="form-control" name="id" value="<?= $the_id ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Wallet Code</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" value="<?= $wallet_code ?>" name="ticker" required>
                          <small>e.g: btc, eth, ltc, usdt...</small>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Wallet Address</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" value="<?= $wallet_address ?>" name="address" required>
                          <small><b>Note: </b>Wallets set here will be ignored if the Wallet is an Auto Deposit Wallet and
                            Blockbee API is set. Payment will be sent to the Wallet address on your Blockbee
                            Profile.</small>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Generate Barcode</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="barcode" required>
                            <option value="1" <?php if ($barcode == 1) {
                              echo 'selected';
                              } ?>>Yes</option>
                            <option value="0" <?php if ($barcode == 0) {
                              echo 'selected';
                              } ?>>No</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Admin Password<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group float-right">
                        <input name="update" type="submit" class="btn btn-secondary" value="Update Wallet">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php }
            else { ?>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    Add New Wallet
                  </div>
                  <div class="card-body">
                    <p class="text-danger"><strong>Always indicate the Network and Paste the right wallet address to avoid
                        loss of funds</strong></p>
                    <form method="post" action="<?= base_url('admin/wallets') ?>">
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Wallet Name</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" name="name" value="" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Wallet Code</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" value="" name="ticker" required>
                          <small>e.g: btc, eth, ltc, usdt...</small>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Wallet Address</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" value="" name="address" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Generate Barcode</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="barcode" required>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Admin Password<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group float-right">
                        <input name="create" type="submit" class="btn btn-secondary" value="Add Wallet">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <span><i class="fa fa-caret-down"></i> <span class="font-weight-bold">Manual Deposit
                        Wallets</span></span>
                  </div>
                  <div class="card-body">
                    <table id="Manual" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-primary">Name</th>
                          <th class="text-primary">Status</th>
                          <th class="text-primary">Updated</th>
                          <th class="text-primary">Code</th>
                          <th class="text-primary">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <script>
                          $(document).ready(function () {
                            $('#Manual').DataTable({
                              order: [[2, 'desc']],
                              scrollX: true,
                              processing: true,
                              serverSide: true,
                              ajax: '../datatable?wallets=Manual'
                            });
                          });
                        </script>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>