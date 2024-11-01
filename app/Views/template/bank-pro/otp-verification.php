<style>
    :root {
        --primary: <?= $theme_color ?>;
        --secondary: <?= $secondary_color ?>;
    }
</style>

<!---**************COLORS*****************-->
<link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme.min.css') ?>" data-skin="default">
<link rel="stylesheet" href="<?= base_url('assets/stylesheets/others.css') ?>">
<!-- END THEME STYLES -->

<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class="body-content js-body-content">
                <div class="card">
                    <div class="card-header">
                        <h4>Verify Login OTP</h4>
                    </div>
                    <div class="card">
                        <form method="post" action="<?= base_url('verify-otp') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- form row -->
                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label class="text-primary font-weight-bold">Verification code</label>
                                        <input type="text" class="form-control" id="otp" name="otp" value="" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label class="text-primary font-weight-bold">&nbsp;</label>
                                        <input name="complete_account" type="submit" class="btn btn-primary form-control" value="VERIFY">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>