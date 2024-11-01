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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <span>
                                        <i class="fa fa-caret-down"></i> <span class="font-weight-bold">
                                            <?= $page ?>
                                        </span>
                                    </span>
                                    <a href="<?= base_url("admin/manage?id=$user_id") ?>" class="btn btn-sm btn-primary float-right"><i class="fa fa-caret-left"></i> BACK</a>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?= base_url('admin/edit') ?>"
                                        onSubmit="return(confirm('Are you sure that you want to update the Transaction?'))">
                                        <input type="hidden" name="id" class="form-control" value="<?= $the_id; ?>" />
                                        <input type="hidden" name="user_id" class="form-control" value="<?= $user_id; ?>" />
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-3 mb-3"><label for="input01">Amount</label> <input
                                                    type="number" class="form-control" name="amount"
                                                    value="<?= $amount ?>" required /></div>
                                            <div class="col-md-3 mb-3"><label for="input02">Bank Name</label>
                                                <input type="text" class="form-control" name="bank_name"
                                                    value="<?= $bank_name ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Bank Address</label>
                                                <input type="text" class="form-control" name="bank_address"
                                                    value="<?= $bank_address ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Sender ID</label>
                                                <input type="text" class="form-control" name="sender_id"
                                                    value="<?= $sender_id ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Sender Account</label>
                                                <input type="text" class="form-control" name="sender_acc"
                                                    value="<?= $sender_acc ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Reference ID</label>
                                                <input type="text" class="form-control" name="reference"
                                                    value="<?= $reference ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Receiver</label>
                                                <input type="text" class="form-control" name="receiver_name"
                                                    value="<?= $receiver_name ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Receiver Account</label>
                                                <input type="text" class="form-control" name="receiver_acc"
                                                    value="<?= $receiver_acc ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Type</label>
                                                <input type="text" class="form-control" name="type"
                                                    value="<?= $type ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Swift Code</label>
                                                <input type="text" class="form-control" name="swift"
                                                    value="<?= $swift ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Routing Number</label>
                                                <input type="text" class="form-control" name="routing"
                                                    value="<?= $routing ?>" />
                                            </div>
                                            <div class="col-md-3 mb-3"><label for="input02">Balance</label>
                                                <input type="text" class="form-control" name="balance"
                                                    value="<?= $balance ?>" />
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Transaction Month</label>
                                                <input id="flatpickr02" type="text" name="month" class="form-control"
                                                    data-toggle="flatpickr" data-enable-time="true"
                                                    data-date-format="F Y" value="<?= $month ?>">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Date</label>
                                                <input id="flatpickr02" type="text" name="created_at" class="form-control"
                                                    data-toggle="flatpickr" data-enable-time="true"
                                                    data-date-format="Y-m-d H:i:s" value="<?= $the_created_at ?>">
                                            </div>

                                            <div class="col-md-12 mb-3"><label for="input02">Remarks</label>
                                                <textarea class="form-control" rows="4"
                                                    name="remarks"><?= $remarks ?></textarea>
                                            </div>
                                            <!-- /form column -->
                                        </div>
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <input type="submit" name="update_transaction" value="Update"
                                                    class="btn btn-sm btn-success" style="margin-top: 3px;" />
                                            </div>
                                            <!-- /form column -->
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="card-footer-content text-muted"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>