<main class="app-main">
    <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .container -->

                <div class="page-section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header">
                                    <span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">
                                            <?= $page; ?>
                                        </span></span>
                                    <a href="<?= base_url('admin') ?>"
                                        class="float-right btn btn-sm btn-outline-primary">Dashboard</a>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        Note: Some data are generated automatically to make account creation easy.
                                    </div>
                                    <form method="post" action="<?= base_url('admin/create_account') ?>">
                                        <div class="card-body">
                                            <!-- form row -->
                                            <div class="form-row">
                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Account ID</label>
                                                    <input type="text" class="form-control" name="account_id"
                                                        value="<?= rand(1000000, 9999999); ?>" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Name</label> <input
                                                        type="text" class="form-control" name="name" value="" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Account Status</label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="">Select</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Dormant">Dormant</option>
                                                        <option value="DailyLimit">Daily Limit Exceeded</option>
                                                        <option value="WeeklyLimit">Weekly Limit Exceeded</option>
                                                        <option value="MonthlyLimit">Monthly Limit Exceeded</option>
                                                        <option value="CotExpire">COT Expired</option>
                                                        <option value="Declined">Transaction Decline</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Email</label> <input
                                                        type="email" class="form-control" name="email" value=""
                                                        required>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <!-- form column -->
                                                <div class="col-md-3 mb-3">
                                                    <label class="text-danger font-weight-bold">Checking Account
                                                        Number</label> <input type="number" class="form-control"
                                                        name="check_acc" value="<?= $acc_no . $md . rand(100, 999); ?>"
                                                        required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-danger font-weight-bold">Checking Account
                                                        Balance</label> <input type="number" class="form-control"
                                                        name="check_balance" value="0" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-success font-weight-bold">Savings Account
                                                        Number</label> <input type="number" class="form-control"
                                                        name="savings_acc"
                                                        value="<?= $acc_no . $md . rand(100, 999); ?>" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-success font-weight-bold">Savings Account
                                                        Balance</label> <input type="number" class="form-control"
                                                        name="savings_balance" value="0" required>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <!-- form column -->
                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Account
                                                        Currency</label>
                                                    <select name="currency" class="form-control" required>
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
                                                    <label class="text-primary font-weight-bold">Password</label> <input
                                                        type="text" class="form-control" name="password" value=""
                                                        required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Phone</label> <input
                                                        type="text" class="form-control" name="phone" value="" required>
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
                                                    <textarea name="address" class="form-control" rows="2"></textarea>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">ZIP</label> <input
                                                        type="text" class="form-control" name="zip" value="">
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Date of Birth</label>
                                                    <input id="flatpickr02" type="text" name="dob" value=""
                                                        class="form-control" data-toggle="flatpickr"
                                                        data-enable-time="false" data-date-format="l J \of F Y"
                                                        required>
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
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Occupation</label>
                                                    <input type="text" class="form-control" name="occupation" value="">
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">PIN</label> <input
                                                        type="text" class="form-control" name="pin"
                                                        value="<?= rand(1000, 9999); ?>" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">COT Code</label> <input
                                                        type="text" class="form-control" name="cot"
                                                        value="<?='1100' . rand(10000, 99999); ?>" required>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">TAX Code</label> <input
                                                        type="text" class="form-control" name="tax"
                                                        value="<?= rand(100, 999) . '-' . rand(100, 999); ?>" required>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">IMF Code</label> <input
                                                        type="text" class="form-control" name="imf"
                                                        value="<?= $abrv . rand(10, 99); ?>" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Credit Card Last 4
                                                        Digit</label> <input type="text" class="form-control"
                                                        name="creditCard" value="<?= rand(1000, 9999); ?>" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Card Expiry
                                                        Month/Year</label> <input type="text" maxlength="5"
                                                        class="form-control" name="expire"
                                                        value="<?= date("m") . '/' . (date("y") + 3); ?>" required>
                                                </div>

                                            </div>
                                            <div class="form-row">

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Account Created
                                                        On</label>
                                                    <input id="flatpickr02" type="text" name="created_at" value=""
                                                        class="form-control" data-toggle="flatpickr"
                                                        data-enable-time="false" data-date-format="l J \of F Y"
                                                        required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Photo Upload</label>
                                                    <select name="allow_upload" class="form-control" required>
                                                        
                                                        <option value="0">Disabled</option>
                                                        <option value="1">Enable</option>
                                                    </select>
                                                    <small>This option is to enable/disable profile photo upload from
                                                        the user dashboard</small>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">Show Codes</label>
                                                    <select name="allow_codes" class="form-control" required>
                                                        <option value="0">Hide</option>
                                                        <option value="1">Show</option>
                                                        
                                                    </select>
                                                    <small>This option is to show/hide COT,IMF, & Tax codes from the
                                                        user dashboard</small>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label class="text-primary font-weight-bold">&nbsp;</label>
                                                    <input name="create_new" type="submit"
                                                        class="btn btn-primary form-control" value="Create Account">
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.page -->
</div>
</div>
</main>