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
                        
                        
            <?php if ($page === 'Update Testimonial'){ ?>
             <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  Update Testimonial
                  <a href="<?= previous_url() ?>" class="btn btn-sm btn-primary float-right">GO BACK</a>
                </div>
                <div class="card-body">
                  <form method="post" action="<?= base_url('admin/testimonials') ?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Name</label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control" name="name" value="<?= $name ?>" required>
                        <input type="hidden" class="form-control" name="id" value="<?= $the_id ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Image (Optional)</label>
                      <div class="col-lg-6">
                         <input type="file" name="file" class="form-control">
                      <small>You can attach screenshot (jpg, jpeg, png, gif, gif)</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Comment</label>
                      <div class="col-lg-6">
                          <textarea name="content" id="summernote" required><?= $content ?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group float-right">
                      <input name="update" type="submit" class="btn btn-primary" value="Update Testimonial">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php } else { ?>
            
            
            
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  Add Testimonial
                </div>
                <div class="card-body">
                   <form method="post" action="<?= base_url('admin/testimonials') ?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Name</label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control" name="name" value="" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Image (Optional)</label>
                      <div class="col-lg-6">
                         <input type="file" name="file" class="form-control">
                      <small>You can attach screenshot (jpg, jpeg, png, gif, gif)</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Comment</label>
                      <div class="col-lg-6">
                          <textarea name="content" id="summernote" required></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group float-right">
                      <input name="add" type="submit" class="btn btn-primary" value="Add Testimonial">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <span><i class="fa fa-caret-down"></i> <span class="font-weight-bold">Testimonials</span></span>
                </div>
                <div class="card-body">
                  <table id="Testimonials" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th class="text-primary">Name</th>
                        <th class="text-primary">Image</th> 
                        <th class="text-primary">Updated</th> 
                        <th class="text-primary">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       <script>
                        $(document).ready(function () {
                            $('#Testimonials').DataTable({
                              order: [[2, 'desc']],
                              scrollX: true,
                              processing: true,
                              serverSide: true,
                              ajax: '../datatable?testimonials=1'
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
