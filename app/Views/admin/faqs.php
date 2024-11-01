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
                        
                        
            <?php if ($page === 'Update FAQ'){ ?>
             <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  Update FAQ
                  <a href="<?= previous_url() ?>" class="btn btn-sm btn-primary float-right">GO BACK</a>
                </div>
                <div class="card-body">
                  <form method="post" action="<?= base_url('admin/faqs') ?>">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Question</label>
                      <div class="col-lg-6">
                         <textarea class="form-control" name="question" rows="2"><?= $question ?></textarea>
                        <input type="hidden" class="form-control" name="id" value="<?= $the_id ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Answer</label>
                      <div class="col-lg-6">
                          <textarea name="answer" id="summernote" required><?= $answer ?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group float-right">
                      <input name="update" type="submit" class="btn btn-primary" value="Update FAQ">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php } else { ?>
            
            
            
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  Add FAQ
                </div>
                <div class="card-body">
                   <form method="post" action="<?= base_url('admin/faqs') ?>">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Question</label>
                      <div class="col-lg-6">
                         <textarea class="form-control" name="question" rows="2" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label">Answer</label>
                      <div class="col-lg-6">
                        <textarea name="answer" id="summernote" required></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group float-right">
                      <input name="add" type="submit" class="btn btn-primary" value="Add FAQ">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <span><i class="fa fa-caret-down"></i> <span class="font-weight-bold">FAQs</span></span>
                </div>
                <div class="card-body">
                  <table id="Faqs" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th class="text-primary">Question</th>
                        <th class="text-primary">Updated</th> 
                        <th class="text-primary">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       <script>
                        $(document).ready(function () {
                            $('#Faqs').DataTable({
                              order: [[1, 'desc']],
                              scrollX: true,
                              processing: true,
                              serverSide: true,
                              ajax: '../datatable?faqs=1'
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
