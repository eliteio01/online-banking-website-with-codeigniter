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
                                        <i class="fa fa-caret-down"></i> <span class="font-weight-bold"><?= $page ?></span>
                                    </span>
                                    <a href="<?= previous_url() ?>" class="btn btn-sm btn-primary float-right">GO BACK</a>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?= base_url('admin/approve_records') ?>" onSubmit="return(confirm('Are you sure that you want to approve the Transaction?'))">
                                        <input type="hidden" name="id" class="form-control" value="<?= $the_id; ?>" />
                                        <input type="hidden" name="reference" class="form-control" value="<?= $the_ref; ?>" />
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-6 mb-3"><label for="input01">Amount</label> <input type="number" class="form-control" name="amount" value="<?= $amount ?>" required /></div>
                                            <div class="col-md-6 mb-3"><label for="input02">Payment Method</label> <input type="text" class="form-control" name="method" value="<?= $method ?>" /></div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input02">Date</label> 
                                              <input id="flatpickr02" type="text" name="date" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="Y-m-d H:i:s" value="<?= $date ?>">
                                            </div>
                                            <?php if ($action === 'withdrawal') { ?>
                                            <div class="col-md-6 mb-3"><label for="input02">Wallet</label> <input type="text" class="form-control" name="wallet" value="<?= $wallet ?>" /></div>
                                            <div class="col-md-12 mb-3"><label for="input02">Transaction ID/Hash</label> <textarea class="form-control" rows="4" name="hash"></textarea></div>
                                            <?php } ?>
                                            <!-- /form column -->
                                        </div>
                                        <div class="form-row">
                                            <!-- form column -->
                                            <div class="col-md-12 mb-3">
                                                <input type="submit" name="approve_transaction" value="Approve" class="btn btn-sm btn-success" style="margin-top: 3px;" />
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
