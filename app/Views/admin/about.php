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
                  About Company
                </div>
                <div class="card-body">
                   <form method="post" action="<?= base_url('admin/about') ?>">
                    <div class="form-group row">
                        <textarea name="about" id="summernote" required><?= $about_us ?></textarea>
                    </div>
                    <hr>
                    <div class="form-group float-right">
                      <input name="update" type="submit" class="btn btn-primary" value="Update">
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
