<main class="app-main">
  <div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-capitalize alert alert-primary" align="center"><i
                class="fa fa-caret-down text-primary"></i>
              <h5>
                <?= $name; ?>
              </h5>
            </div>
          </div>
        </div>

        <!-- .container -->

        <div class="page-section">
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">
                      <?= $name; ?>
                    </span></span>
                </div>
                <div class="card-header" align="center">
                  <span class="user-avatar user-avatar-xxl"><img src="<?= base_url('uploads/' . $image) ?>"
                      alt="<?= $name; ?>"></span>
                  <hr>
                  <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/manage') ?>">
                    <div class="form-row">
                      <div class="col-md-8 mb-3">
                        <input type="file" class="form-control" id="name" name="photo">
                        <input type="hidden" name="id" value="<?= $user_id ?>">
                      </div>
                      <div class="col-md-4 mb-3">
                        <input name="upload_photo" type="submit" class="btn btn-primary form-control" value="Upload">
                      </div>
                    </div>
                    <!-- /.form-actions -->
                  </form>
                </div>
                <div class="card-body">
                  <header class="page-cover">
                    <div class="text-center">
                      <div class="my-1">
                        <?= $email; ?>
                      </div>
                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">Account Status</span> <br>
                        <h4>
                          <?= $status; ?>
                        </h4>
                      </div>
                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">Account ID</span> <br>
                        <span class="text-black">
                          <?= $account_id; ?>
                        </span>
                      </div>
                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">PIN</span> <br>
                        <span class="text-black">
                          <?= $pin; ?>
                        </span>
                      </div>
                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">COT Code</span> <br>
                        <span class="text-black">
                          <?= $cot; ?>
                        </span>
                      </div>

                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">TAX Code</span> <br>
                        <span class="text-black">
                          <?= $tax; ?>
                        </span>
                      </div>

                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">IMF Code</span> <br>
                        <span class="text-black">
                          <?= $imf; ?>
                        </span>
                      </div>
                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">Checking Balance/Acc Number</span> <br>
                        <span class="text-black">
                          <?= $currency . number_format($check_balance, 2); ?>/
                          <span class="text-danger">
                            <?= $check_acc; ?>
                          </span>
                        </span>
                      </div>
                      <div style="margin-bottom: 5px">
                        <span class="font-weight-bold text-primary">Savings Balance/Acc Number</span> <br>
                        <span class="text-black">
                          <?= $currency . number_format($savings_balance, 2); ?>/
                          <span class="text-danger">
                            <?= $savings_acc; ?>
                          </span>
                        </span>
                      </div>
                      <hr>
                      <a href="<?= base_url('auth/userdashboard?id=' . $user_id) ?>"
                        onClick="return(confirm('You are about to login the user dashboard. Click Ok to continue. Page Opens in New Tab'))"
                        target="_blank" class="btn btn-danger">Access <?= $name ?>'s dashboard</a>
                    </div>
                  </header>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Last Login
                              Information</span></span>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-4">
                              <p><span class="text-primary">
                                  Date:</span>

                                <br>
                                <strong>
                                  <?= $lastDate; ?>
                                </strong>
                              </p>
                            </div>
                            <div class="col-lg-4">
                              <p><span class="text-primary">
                                  Time:</span>
                                <br>
                                <strong>
                                  <?= $lastTime; ?>
                                </strong>
                              </p>
                            </div>
                            <div class="col-lg-4">
                              <p><span class="text-primary">
                                  Country:</span>
                                <br>
                                <strong>
                                  <?= $l_country; ?>
                                </strong>
                              </p>
                            </div>
                            <div class="col-lg-4">
                              <p><span class="text-primary">
                                  Region:</span>
                                <br>
                                <strong>
                                  <?= $l_region; ?>
                                </strong>
                              </p>
                            </div>
                            <div class="col-lg-4">
                              <p><span class="text-primary">
                                  City:</span>
                                <br>
                                <strong>
                                  <?= $l_city; ?>
                                </strong>
                              </p>
                            </div>
                            <div class="col-lg-8">
                              <p><span class="text-primary">
                                  URL:</span>
                                <br>
                                <strong>
                                  <?= $lastUrl; ?>
                                </strong>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card">
                        <form method="get" action="<?= base_url('admin/generator') ?>">
                          <div class="card-header">
                            <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Automatic
                                Transaction History Generator</span></span>
                          </div>
                          <div class="card-body">

                            <input type="hidden" name="name" value="<?= $name; ?>">
                            <input type="hidden" name="user_id" value="<?= $user_id; ?>">
                            <input type="hidden" name="admin_id" value="<?= $admin_username; ?>">
                            <div class="form-row">

                              <div class="col-md-3 mb-3">
                                <select name="acc" class="form-control" required>
                                  <option value="">Select Account</option>
                                  <option value="<?= $check_acc; ?>">Checking</option>
                                  <option value="<?= $savings_acc; ?>">Savings</option>

                                </select>
                              </div>
                              <div class="col-md-3 mb-3">
                                <select name="type" class="form-control" required>
                                  <option value="">Select Type</option>
                                  <option value="Credit">Credit</option>
                                  <option value="Debit">Debit</option>

                                </select>
                              </div>
                              <div class="col-md-3 mb-3">
                                <input id="flatpickr02" type="text" placeholder="From" name="from" class="form-control"
                                  data-toggle="flatpickr" data-enable-time="true" data-date-format="Y-m-d H:i:s"
                                  required>
                              </div>
                              <div class="col-md-3 mb-3">
                                <input id="flatpickr02" type="text" placeholder="To" name="to" class="form-control"
                                  data-toggle="flatpickr" data-enable-time="true" data-date-format="Y-m-d H:i:s"
                                  required>
                              </div>

                            </div>
                            <div class="form-row">
                              <div class="col-md-3 mb-3">
                                <input type="number" class="form-control" name="num" placeholder="No. of Records"
                                  required>
                              </div>
                              <div class="col-md-3 mb-3">
                                <input type="number" class="form-control" name="min"
                                  placeholder="Minimum <?= $currency; ?>" required>
                              </div>
                              <div class="col-md-3 mb-3">
                                <input type="number" class="form-control" name="max"
                                  placeholder="Maximum <?= $currency; ?>" required>
                              </div>
                              <div class="col-md-3 mb-3">
                                <input name="run" type="submit" class="btn btn-primary form-control" value="Run">
                              </div>
                            </div>
                            <!-- /.form-actions -->
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Update
                        Profile</span></span>
                  </div>
                  <form method="post" action="<?= base_url('admin/manage') ?>">
                    <input type="hidden" name="id" value="<?= $user_id ?>">
                    <div class="card-body">
                      <!-- form row -->
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Account ID</label> <input type="text"
                            class="form-control" name="account_id" value="<?= $account_id; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Name</label> <input type="text"
                            class="form-control" name="name" value="<?= $name; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Account Status</label>
                          <select name="status" class="form-control">
                            <option value="">Select</option>
                            <option value="Active">Active</option>
                            <option value="Dormant">Dormant</option>
                            <option value="DailyLimit">Daily Limit Exceeded</option>
                            <option value="WeeklyLimit">Weekly Limit Exceeded</option>
                            <option value="MonthlyLimit">Monthly Limit Exceeded</option>
                            <option value="CotExpire">COT Expired</option>
                            <option value="Declined">Transaction Decline</option>
                            <option value="DeclinedLogin">Login Decline</option>
                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Email</label> <input type="email"
                            class="form-control" name="email" value="<?= $email; ?>" required>
                        </div>

                      </div>
                      <div class="form-row">
                        <!-- form column -->
                        <div class="col-md-3 mb-3">
                          <label class="text-danger font-weight-bold">Checking Account Number</label> <input
                            type="number" class="form-control" name="check_acc" value="<?= $check_acc; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-danger font-weight-bold">Checking Account Balance</label> <input
                            type="number" class="form-control" name="check_balance" value="<?= $check_balance; ?>"
                            required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-success font-weight-bold">Savings Account Number</label> <input
                            type="number" class="form-control" name="savings_acc" value="<?= $savings_acc; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-success font-weight-bold">Savings Account Balance</label> <input
                            type="number" class="form-control" name="savings_balance" value="<?= $savings_balance; ?>"
                            required>
                        </div>

                      </div>
                      <div class="form-row">
                        <!-- form column -->
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Account Currency</label>
                          <select name="currency" class="form-control">
                            <option value="">Select</option>
                                                        <option value="$">US Dollar</option>
                                                        <option value="€">Euro</option>
                                                        <option value="£">Pounds Sterling</option>
                                                        <option value="RM">Malaysian Ringgit - RM</option>
                                                        <option value="SGD$">Singapore Dollar</option>
                                                        <option value="₹">Indian Rupee</option>
                                                        <option value="Rp">Indonesian Rupiah</option>
                                                        <option value="AUD$">Australian Dollar</option>
                                                        <option value="CAD$">Canadian Dollar</option>
                                                        <option value="₣">CFP Franc</option>
                                                        <option value="¥">Japanese Yen</option>
                                                        <option value="¥">Chinese Yen</option>
                                                        <option value="ا.د">Jordanian Dinar</option>
                                                        <option value="ك.د">Kuwaiti Dinar</option>
                                                        <option value="MXN$">Mexican Peso</option>
                                                        <option value=".ع.ر">Omani Rial</option>
                                                        <option value="₱">Philippine Peso</option>
                                                        <option value="ق.ر">Qatari Rial</option>
                                                        <option value=" ﷼">Saudi Riyal</option>
                                                        <option value="₩">South Korean Won</option>
                                                        <option value="฿">Thailand Baht</option>
                                                        <option value="₫">Vietnam Dong</option>
                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Password</label> <input type="text"
                            class="form-control" name="password" placeholder="Leave empty for old password">
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Phone</label> <input type="text"
                            class="form-control" name="phone" value="<?= $phone; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Country</label>
                          <select name="country" class="form-control" id="country">
                            <option value="">Select</option>
                          </select>
                        </div>

                      </div>
                      <div class="form-row">
                        <!-- form column -->
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">City</label>
                          <select name="city" class="form-control" id="state">
                            <option value="">Select Country First</option>
                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Address</label>
                          <textarea name="address" class="form-control" rows="2" required><?= $address; ?></textarea>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">ZIP</label> <input type="text"
                            class="form-control" name="zip" value="<?= $zip; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Date of Birth</label>
                          <input id="flatpickr02" type="text" name="dob" value="<?= $dob; ?>" class="form-control"
                            data-toggle="flatpickr" data-enable-time="false" data-date-format="l J \of F Y" required>
                        </div>

                      </div>
                      <div class="form-row">
                        <!-- form column -->
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Gender</label>
                          <select name="gender" class="form-control">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Occupation</label> <input type="text"
                            class="form-control" name="occupation" value="<?= $occupation; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">PIN</label> <input type="text"
                            class="form-control" name="pin" value="<?= $pin; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">COT Code</label> <input type="text"
                            class="form-control" name="cot" value="<?= $cot; ?>" required>
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">TAX Code</label> <input type="text"
                            class="form-control" name="tax" value="<?= $tax; ?>" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">IMF Code</label> <input type="text"
                            class="form-control" name="imf" value="<?= $imf; ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Credit Card Last 4 Digit</label> <input
                            type="text" class="form-control" name="creditCard" value="<?= $creditCard ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Card Expiry Month/Year</label> <input type="text"
                            maxlength="5" class="form-control" name="expire" value="<?= $expire ?>" required>
                        </div>

                      </div>
                      <div class="form-row">

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Account Created On</label>
                          <input id="flatpickr02" type="text" name="created_at" value="<?= $created_at; ?>"
                            class="form-control" data-toggle="flatpickr" data-enable-time="false"
                            data-date-format="l J \of F Y" required>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Photo Upload</label>
                          <select name="allow_upload" class="form-control">
                           <option value="1" <?php if ($allow_upload == 1) {
                                echo 'selected';
                                } ?>>Enabled</option>
                              <option value="0" <?php if ($allow_upload == 0) {
                                echo 'selected';
                                } ?>>Disabled</option>
                          </select>
                          <small>This option is to enable/disable profile photo upload from the user dashboard</small>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Show Codes</label>
                          <select name="allow_codes" class="form-control">
                            <option value="1" <?php if ($allow_codes == 1) {
                                echo 'selected';
                                } ?>>Show</option>
                              <option value="0" <?php if ($allow_codes == 0) {
                                echo 'selected';
                                } ?>>Hide</option>
                          </select>
                          <small>This option is to show/hide COT,IMF, & Tax codes from the user dashboard</small>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">&nbsp;</label>
                          <input name="update_account" type="submit" class="btn btn-primary form-control"
                            value="Update Account">
                        </div>

                      </div>
                    </div>
                  </form>
                </div>


              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Credit
                        Account</span></span>
                  </div>
                  <div class="card-body">
                    <form method="post" onSubmit="return(confirm('Proceed?'))" action="<?= base_url('admin/manage') ?>">
                      <input type="hidden" name="id" value="<?= $user_id ?>">
                      <div class="form-group">
                        <label for="input01">Account to Credit</label>
                        <select class="form-control" name="account" required>
                          <option value="">-Select-</option>
                          <option value="Checking">Checking -
                            <?= $currency . $check_balance; ?>
                          </option>
                          <option value="Savings">Savings -
                            <?= $currency . $savings_balance; ?>
                          </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="number" name="amount" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Sender</label>
                        <input type="text" name="sender" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Date & Time</label>
                        <input id="flatpickr02" type="text" name="date" class="form-control" data-toggle="flatpickr"
                          data-enable-time="true" data-date-format="d-m-Y H:i" required>
                      </div>
                      <div class="form-group">
                        <label>Bank Address</label>
                        <textarea class="form-control" rows="2" name="bank_address"><?= $company_address ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Remarks</label>
                        <textarea class="form-control" rows="4" name="remarks"></textarea>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="reset" class="btn btn-danger">Reset</button>
                          <input type="submit" name="credit_account" value="Credit" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Debit
                        Account</span></span>
                  </div>
                  <div class="card-body">
                    <form method="post" onSubmit="return(confirm('Proceed?'))" action="<?= base_url('admin/manage') ?>">
                      <input type="hidden" name="id" value="<?= $user_id ?>">
                      <div class="form-group">
                        <label for="input01">Account to Debit</label>
                        <select class="form-control" name="account" required>
                          <option value="">-Select-</option>
                          <option value="Checking">Checking -
                            <?= $currency . $check_balance; ?>
                          </option>
                          <option value="Savings">Savings -
                            <?= $currency . $savings_balance; ?>
                          </option>
                        </select>
                      </div>


                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Receiver Bank</label>
                            <input type="text" name="bank" class="form-control" required>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Receiver Name</label>
                            <input type="text" name="receiver" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Account Number</label>
                            <input type="text" name="RecAcc" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Date & Time</label>
                        <input id="flatpickr02" type="text" name="date" class="form-control" data-toggle="flatpickr"
                          data-enable-time="true" data-date-format="d-m-Y H:i" required>
                      </div>
                      <div class="form-group">
                        <label>Bank Address</label>
                        <textarea class="form-control" rows="2" name="bank_address"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Remarks</label>
                        <textarea class="form-control" rows="3" name="remarks"></textarea>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="reset" class="btn btn-danger">Reset</button>
                          <input type="submit" name="debit_account" value="Debit" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-caret-down text-primary"></i> Send Notification
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/manage') ?>">
                  <input type="hidden" name="user_id" value="<?= $user_id ?>">
                  <input type="hidden" name="email" value="<?= $email ?>">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea name="message" id="summernote" required></textarea>
                  </div>
                  <div class="form-group">
                    <input type="file" name="file" class="form-control">
                    <small>You can attach screenshot (jpg, jpeg, png, gif, gif)</small>
                  </div>
                  <div class="form-group">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <input type="submit" name="notify" value="Send" class="btn btn-success">
                  </div>
                </form>
              </div>
              <br>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Checking Account
                    Statement</span></span>
                <span class="float-right"><i class="fa fa-info-circle text-primary"></i></span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <span class="float-left text-uppercase font-weight-bold text-primary">
                      <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> CHECKINGS (
                      <?= $check_acc; ?>) <i class="fa fa-caret-right"></i>
                    </span>
                  </div>
                  <div class="col-lg-4">

                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <h5 class="text-black">
                      <?= $currency; ?>
                      <?= number_format($check_balance, 2); ?>
                    </h5>
                    <span class="text-muted font-weight-bold">Available Balance</span>
                  </div>
                  <div class="col-lg-3">
                    <span class="text-black font-weight-bold">
                      <?= $currency; ?>
                      <?= number_format($cMonthlyCredit, 2); ?>
                    </span><br>
                    <small class="text-muted font-weight-bold">Credit this month</small>
                  </div>
                  <div class="col-lg-3">
                    <span class="text-black font-weight-bold">
                      <?= $currency; ?>
                      <?= number_format($cMonthlyDebit, 2); ?>
                    </span><br>
                    <small class="text-muted font-weight-bold">Debit this month</small>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <form action="<?= base_url('admin/delete_records') ?>" method="POST" id="del_form_one"
                    onSubmit="return(confirm('Are you sure you want to delete selected?'))">
                    <table id="Checking" class="table table-striped table-bordered dt-responsive nowrap"
                      style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-primary">
                            <div class="d-flex">
                              <input type="button" id="toggle<?= $savings_acc ?>" class="btn btn-sm btn-primary"
                                value="select all" onClick="mark<?= $savings_acc ?>()">
                              <input type="hidden" name="type" value="users">
                              <input type="submit" class="btn btn-sm btn-danger" name="delete_statement" value="Delete"
                                style="display:none" id="del<?= $savings_acc ?>">
                            </div>
                          </th>
                          <th class="text-primary">Date</th>
                          <th class="text-primary">Type</th>
                          <th class="text-primary">Description</th>
                          <th class="text-primary">Amount</th>
                          <th class="text-primary">Transaction ID</th>
                          <th class="text-primary"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <script>
                          $(document).ready(function () {
                            $('#Checking').DataTable({
                              order: [[1, 'desc']],
                              "columnDefs": [{
                                "targets": 0,
                                "orderable": false
                              }],
                              scrollX: true,
                              processing: true,
                              serverSide: true,
                              ajax: '<?= base_url("datatable?statement=1currency=$currency&main=$check_acc") ?>'
                            });
                          });
                        </script>

                      </tbody>
                    </table>
                  </form>
                  <br>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Savings Account
                    Statement</span></span>
                <span class="float-right"><i class="fa fa-info-circle text-primary"></i></span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <span class="float-left text-uppercase font-weight-bold text-primary">
                      <?= implode(' ', array_slice(explode(' ', $company_name), 0, 1)); ?> SAVINGS (
                      <?= $savings_acc; ?>) <i class="fa fa-caret-right"></i>
                    </span>
                  </div>
                  <div class="col-lg-4">

                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <h5 class="text-black">
                      <?= $currency; ?>
                      <?= number_format($savings_balance, 2); ?>
                    </h5>
                    <span class="text-muted font-weight-bold">Available Balance</span>
                  </div>
                  <div class="col-lg-3">
                    <span class="text-black font-weight-bold">
                      <?= $currency; ?>
                      <?= number_format($MonthlyCredit, 2); ?>
                    </span><br>
                    <small class="text-muted font-weight-bold">Credit this month</small>
                  </div>
                  <div class="col-lg-3">
                    <span class="text-black font-weight-bold">
                      <?= $currency; ?>
                      <?= number_format($MonthlyDebit, 2); ?>
                    </span><br>
                    <small class="text-muted font-weight-bold">Debit this month</small>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <form action="<?= base_url('admin/delete_records') ?>" method="POST" id="del_form_two"
                    onSubmit="return(confirm('Are you sure you want to delete selected?'))">
                    <table id="Savings" class="table table-striped table-bordered dt-responsive nowrap"
                      style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-primary">
                            <div class="d-flex">
                              <input type="button" id="toggle<?= $check_acc ?>" class="btn btn-sm btn-primary"
                                value="select all" onClick="mark<?= $check_acc ?>()">
                              <input type="hidden" name="type" value="users">
                              <input type="submit" class="btn btn-sm btn-danger" name="delete_statement" value="Delete"
                                style="display:none" id="del<?= $check_acc ?>">
                            </div>
                          </th>
                          <th class="text-primary">Date</th>
                          <th class="text-primary">Type</th>
                          <th class="text-primary">Description</th>
                          <th class="text-primary">Amount</th>s
                          <th class="text-primary">Transaction ID</th>
                          <th class="text-primary"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <script>
                          $(document).ready(function () {
                            $('#Savings').DataTable({
                              order: [[1, 'desc']],
                              "columnDefs": [{
                                "targets": 0,
                                "orderable": false
                              }],
                              scrollX: true,
                              processing: true,
                              serverSide: true,
                              ajax: '<?= base_url("datatable?statement=1&currency=$currency&main=$savings_acc") ?>'
                            });
                          });
                        </script>

                      </tbody>
                    </table>
                  </form>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <!-- /.page -->
        </div>

        <script>
          function mark<?= $savings_acc ?>() {
            var checkboxes = document.getElementsByName('all[]');
            var button = document.getElementById('toggle<?= $savings_acc ?>');
            if (button.value == 'select all') {
              for (var i in checkboxes) {
                checkboxes[i].checked = 'FALSE';
              }
              document.getElementById('del<?= $savings_acc ?>').style.display = 'block';
              button.value = 'deselect all'
            } else {
              for (var i in checkboxes) {
                checkboxes[i].checked = '';
              }
              button.value = 'select all';
              document.getElementById('del<?= $savings_acc ?>').style.display = 'none';
            }
          }

          function showbtn<?= $savings_acc ?>() {
            document.getElementById('del<?= $savings_acc ?>').style.display = 'block';
          }
        </script>
        <script>
          function mark<?= $check_acc ?>() {
            var checkboxes = document.getElementsByName('all[]');
            var button = document.getElementById('toggle<?= $check_acc ?>');
            if (button.value == 'select all') {
              for (var i in checkboxes) {
                checkboxes[i].checked = 'FALSE';
              }
              document.getElementById('del<?= $check_acc ?>').style.display = 'block';
              button.value = 'deselect all'
            } else {
              for (var i in checkboxes) {
                checkboxes[i].checked = '';
              }
              button.value = 'select all';
              document.getElementById('del<?= $check_acc ?>').style.display = 'none';
            }
          }

          function showbtn<?= $check_acc ?>() {
            document.getElementById('del<?= $check_acc ?>').style.display = 'block';
          }
        </script>