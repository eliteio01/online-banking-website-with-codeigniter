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
                <div class="card">
                  <div class="card-header">Upload Theme</div>
                  <div class="card-body">
                    <form method="post" action="<?= base_url('admin/theme') ?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="file" class="form-control" name="file" required>
                      </div>
                      <div class="form-group">
                        <input name="upload_theme" type="submit" class="btn btn-primary" value="Upload">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Frontend Template (Landing Pages)</div>
                    <div class="card-body">
                <div class="row">
                  <div class="col-lg-9">
                  <?php $activeFront = file_get_contents("templates/$template/info.json"); ?>
                  <p><strong>Active Theme: </strong><br><?= json_decode($activeFront)->name; ?></p>
                  <p><strong>Description: </strong><br><?= json_decode($activeFront)->description; ?></p>
                  <p><strong>Version: </strong><br><?= json_decode($activeFront)->version; ?></p>
                  <p>
                  <strong>Author: </strong><br>
                  <a href="<?= json_decode($activeFront)->author_url; ?>" target="_blank"><?= json_decode($activeFront)->author; ?></a>
                  </p>
                  </div>  
                  <div class="col-lg-3">
                      <div class="card">
                        <div class="card-header">
                          <?= json_decode($activeFront)->name; ?>
                          <strong class="text-success float-right">ACTIVE</strong>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('templates/' . $template . '/screenshot.png'); ?>" target="_blank"><img src="<?= base_url('templates/' . $template . '/screenshot.png'); ?>" width="100%" height="100px" /></a>
                        </div>
                        <div class="card-footer">
                    <div class="card-footer-content">
                        <a href="<?= base_url() ?>" target="_blank" class="btn btn-sm btn-primary">PREVIEW</a>
                      </div>
                      </div>
                      </div>
                  </div>  
                </div>
                </div>
                <div class="card-footer">
                    <div class="card-footer-content">
                  <div class="row">
                      
                        <?php foreach ($template_folder as $dirs) { ?>
                          <?php if ($template !== substr($dirs, 0, -1)) { ?>
                            <div class="col-lg-4">
                              <div class="card">
                                <div class="card-header">
                                    <?php $Front = file_get_contents('templates/'.substr($dirs, 0, -1).'/info.json'); ?>
                                    <?= json_decode($Front)->name; ?>
                                </div>
                                <div class="card-body">
                                    <a href="<?= base_url('templates/' . substr($dirs, 0, -1) . '/screenshot.png'); ?>" target="_blank"><img src="<?= base_url('templates/' . substr($dirs, 0, -1) . '/screenshot.png'); ?>"
                                    width="100%" height="100px" /></a>
                                  
                                </div>
                                <div class="card-footer">
                                  <div class="card-footer-content text-muted">
                                    <form method="post" action="<?= base_url('admin/theme') ?>"
                                      onSubmit="return(confirm('Are you sure you want to proceed?'))">
                                      <input type="hidden" name="theme" value="<?= substr($dirs, 0, -1); ?>">
                                      <input type="hidden" name="type" value="frontend">
                                      <input name="activate_theme" type="submit" class="btn btn-primary" value="Activate">
                                      <input name="delete_theme" type="submit" class="btn btn-danger" value="Delete">
                                    </form>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php }
                            } ?>

                  </div>
                  </div>


                </div>
              </div>
            </div>


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Backend Template (User Dashboard)</div>
                    <div class="card-body">
                <div class="row">
                  <div class="col-lg-9">
                  <?php $activeBack = file_get_contents("themes/$theme/info.json"); ?>
                  <p><strong>Active Theme: </strong><br><?= json_decode($activeBack)->name; ?></p>
                  <p><strong>Description: </strong><br><?= json_decode($activeBack)->description; ?></p>
                  <p><strong>Version: </strong><br><?= json_decode($activeBack)->version; ?></p>
                  <p>
                  <strong>Author: </strong><br>
                  <a href="<?= json_decode($activeBack)->author_url; ?>" target="_blank"><?= json_decode($activeBack)->author; ?></a>
                  </p>
                  </div>   
                  <div class="col-lg-3">
                      <div class="card">
                        <div class="card-header">
                          <?= json_decode($activeBack)->name; ?>
                          <strong class="text-success float-right">ACTIVE</strong>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('themes/' . $theme . '/screenshot.png'); ?>" target="_blank"><img src="<?= base_url('themes/' . $theme . '/screenshot.png'); ?>" width="100%"
                            height="100px" /></a>
                          
                        </div>
                        <div class="card-footer">
                    <div class="card-footer-content">
                        <a href="<?= base_url('user') ?>" target="_blank" class="btn btn-sm btn-primary">PREVIEW</a>
                      </div>
                      </div>
                      </div>
                  </div>  
                </div>
                </div>
                <div class="card-footer">
                    <div class="card-footer-content">
                  <div class="row">
                        <?php foreach ($theme_folder as $dir) { ?>
                          <?php if ($theme !== substr($dir, 0, -1)) { ?>
                            <div class="col-lg-4">
                              <div class="card">
                                <div class="card-header">
                                  <?php $Back = file_get_contents('themes/'.substr($dir, 0, -1).'/info.json'); ?>
                                    <?= json_decode($Back)->name; ?>
                                </div>
                                <div class="card-body">
                                    <a href="<?= base_url('themes/' . substr($dir, 0, -1) . '/screenshot.png') ?>" target="_blank"><img src="<?= base_url('themes/' . substr($dir, 0, -1) . '/screenshot.png'); ?>"
                                    width="100%" height="100px" /></a>
                                  
                                </div>
                                <div class="card-footer">
                                  <div class="card-footer-content text-muted">
                                    <form method="post" action="<?= base_url('admin/theme') ?>"
                                      onSubmit="return(confirm('Are you sure you want to proceed?'))">
                                      <input type="hidden" name="theme" value="<?= substr($dir, 0, -1); ?>">
                                      <input type="hidden" name="type" value="backend">
                                      <input name="activate_theme" type="submit" class="btn btn-primary" value="Activate">
                                      <input name="delete_theme" type="submit" class="btn btn-danger" value="Delete">
                                    </form>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php }
                            } ?>

                  </div>
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