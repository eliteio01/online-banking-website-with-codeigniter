<main class="app-main">
  <div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">

        <div class="page-section">
          <header class="page-title-bar bg-primary">
            <p class="lead font-weight-bold text-center text-white p-2">
              <?= $page; ?>
            </p>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <span><i class="fa fa-caret-down"></i> <span class="font-weight-bold">
                      <?= $page; ?>
                    </span></span>
                </div>
                <?php foreach ($all as $row) { ?>
                  <form method="post" action="<?= base_url('admin/settings') ?>">
                    <div class="card-body">
                      <div class="form-row">
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Bank Name</label>
                          <input type="text" class="form-control" name="company_name" value="<?= $company_name; ?>"
                            required>
                        </div>
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Bank Email</label>
                          <input type="text" class="form-control" name="company_email" value="<?= $company_email; ?>"
                            required>
                        </div>
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Bank Phone Number</label>
                          <input type="text" class="form-control" name="company_phone" value="<?= $company_phone; ?>"
                            required>
                        </div>
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Bank Routing Number</label>
                          <input type="text" class="form-control" name="bank_routing" value="<?= $bank_routing; ?>"
                            required>
                        </div>

                      </div>
                      <hr>
                      <!-- form row -->
                      <div class="form-row">
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Site Abbreviation</label>
                          <input type="text" class="form-control" name="abrv" value="<?= $abrv; ?>">
                        </div>
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Email Sender</label>
                          <input type="text" class="form-control" name="noreply" value="<?= $noreply; ?>" required>
                          <small>Always use your domain name</small>
                        </div>
                        <div class="col-md-3 mb-2">
                          <label class="text-primary font-weight-bold">Primary Color</label>
                          <input type="color" class="form-control" name="theme_color" value="<?= $theme_color; ?>"
                            required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="text-primary font-weight-bold">Allow Registration</label>
                          <select class="form-control" name="allow_register">
                            <option value="1" <?php if ($row['allow_register'] == 1) {
                                echo 'selected';
                                } ?>>Enabled</option>
                              <option value="0" <?php if ($row['allow_register'] == 0) {
                                echo 'selected';
                                } ?>>Disabled</option>
                            </select>
                          </div>

                        </div>

                        <hr>
                        <!-- form row -->
                        <div class="form-row">
                          <div class="col-md-4 mb-2">
                            <label class="text-primary font-weight-bold">Secondary Color</label>
                            <input type="color" class="form-control" name="secondary_color" value="<?= $secondary_color; ?>"
                            required>
                        </div>
                        <div class="col-md-4 mb-2">
                          <label class="text-primary font-weight-bold">Maximum Upload Size (MB)</label>
                          <input type="text" class="form-control" name="max_upload" value="<?= $max_upload; ?>">
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Admin Login Notification</label>
                          <select class="form-control" name="login_notify">
                            <option value="1" <?php if ($row['login_notify'] == 1) {
                              echo 'selected';
                              } ?>>Enabled</option>
                            <option value="0" <?php if ($row['login_notify'] == 0) {
                              echo 'selected';
                              } ?>>Disabled</option>
                          </select>
                        </div>

                      </div>
                      <hr>

                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Google Recaptcha V2</label>
                          <select class="form-control" name="recaptcha" required>
                            <option value="">Select</option>
                            <option value="1" <?php if ($row['recaptcha'] == 1) {
                              echo 'selected';
                              } ?>>Enabled</option>
                            <option value="0" <?php if ($row['recaptcha'] == 0) {
                              echo 'selected';
                              } ?>>Disabled</option>
                          </select>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Recaptcha V2 Site key</label>
                          <input type="text" class="form-control" name="captchaPublicKey"
                            value="<?= $row['captchaPublicKey'] ?>" required>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Recaptcha V2 Secret key</label>
                          <input type="text" class="form-control" name="captchaPrivateKey"
                            value="<?= $row['captchaPrivateKey'] ?>" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Wire Fees (%)</label>
                          <input type="text" class="form-control" name="wire_fee" value="<?= $row['wire_fee'] ?>"
                            required>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Livechat Support</label>
                          <select class="form-control" name="live_chat">
                            <option value="1" <?php if ($row['live_chat'] == 1) {
                              echo 'selected';
                              } ?>>Enabled</option>
                            <option value="0" <?php if ($row['live_chat'] == 0) {
                              echo 'selected';
                              } ?>>Disabled</option>
                          </select>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Whatsapp/Telegram Chat</label>
                          <select class="form-control" name="im_chat">
                            <option value="1" <?php if ($row['im_chat'] == 1) {
                              echo 'selected';
                              } ?>>Enabled</option>
                            <option value="0" <?php if ($row['im_chat'] == 0) {
                              echo 'selected';
                              } ?>>Disabled</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Whatsapp/Telegram Position</label>
                          <select class="form-control" name="im_position">
                            <option value="right" <?php if ($row['im_position'] === 'right') {
                              echo 'selected';
                              } ?>>
                              Right</option>
                            <option value="left" <?php if ($row['im_position'] === 'left') {
                              echo 'selected';
                              } ?>>Left
                            </option>
                          </select>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Whatsapp Number</label>
                          <input type="text" class="form-control" name="whatsapp" value="<?= $row['whatsapp'] ?>">
                          <small>Enter in International Format: +2347066721094</small>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="text-primary font-weight-bold">Telegram Username</label>
                          <input type="text" class="form-control" name="telegram" value="<?= $row['telegram'] ?>">
                        </div>
                      </div>
                      <hr>
                      <!-- form row -->
                      <div class="form-row">
                        <div class="col-md-4 mb-2">
                          <label class="text-primary font-weight-bold">SEO Description</label>
                          <textarea class="form-control" rows="4"
                            name="company_description"><?= $company_description; ?></textarea>
                        </div>
                        <div class="col-md-4 mb-2">
                          <label class="text-primary font-weight-bold">SEO Keywords</label>
                          <textarea class="form-control" rows="4"
                            name="company_keyword"><?= $company_keyword; ?></textarea>
                        </div>
                        <div class="col-md-4 mb-2">
                          <label class="text-primary font-weight-bold">Address</label>
                          <textarea class="form-control" rows="4"
                            name="company_address"><?= $company_address; ?></textarea>
                        </div>

                      </div>

                    </div>
                    <div class="card-footer">
                      <div class="card-footer-content text-muted">
                        <div class="form-actions">
                          <input name="update_settings" type="submit" class="btn btn-primary" value="Update Settings">
                        </div>
                      </div>
                    </div>
                  </form>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">Chat Code</div>
                <div class="card-body">
                  <form method="post" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="text-primary font-weight-bold">Livechat Plugin Code</label>
                      <textarea class="form-control" name="chat_code" rows="4"><?= $row['chat_code'] ?></textarea>
                      <small>If it refuse to update, please insert chat plugin code via PHPMyAdmin</small>
                    </div>
                    <div class="form-group">
                      <input name="update_chat" type="submit" class="btn btn-primary" value="Update Code">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">Logo</div>
                <div class="card-body">
                  <img src="<?= base_url('uploads/' . $company_logo) ?>" height="80px" />
                  <hr>
                  <form method="post" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="file" class="form-control" name="file" required>
                      <input type="hidden" name="type" value="logo">
                    </div>
                    <div class="form-group">
                      <input name="upload" type="submit" class="btn btn-primary" value="Update">
                      <small>Recommended: 250 x 65</small>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">Site Icon</div>
                <div class="card-body">
                  <img src="<?= base_url('uploads/' . $company_favicon) ?>" height="80px" />
                  <hr>
                  <form method="post" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="file" class="form-control" name="file" required>
                      <input type="hidden" name="type" value="favicon">
                    </div>
                    <div class="form-group">
                      <input name="upload" type="submit" class="btn btn-primary" value="Update">
                      <small>Recommended: 500 x 500</small>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>