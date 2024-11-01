<div id="appCapsule" class="appCap">
<div class="container mb-3 mt-2">
    <?php if ($page === 'Support'){ ?>
    <div class="card mb-3">
      <div class="card-header bg-primary text-white"><?= $page ?></div>
      <div class="card-body">
        <div class="contact-form">
          <form method="post" action="<?= base_url('user/support') ?>">
            <div class="form-group mb-3">
              <select name="dept" class="form-control" required>
											<option value=""></option>
											<option value="Change Password">Change Password</option>
											<option value="Complaints">Complaints</option>
											<option value="Get card">Get Card</option>
											<option value="Update Profile">Update Profile</option>
											<option value="Card Protect">Card Protect</option>
											<option value="Card Replacement">Card Replacement</option>
											<option value="Dispense Error">Dispense Error</option>
											<option value="PIN Retrieval">PIN Retrieval</option>
											<option value="Loans">Loans</option>
											<option value="Investment">Investments</option>
											<option value="Account Information">Account Information</option>
											<option value="Transfer">Money Transfer</option>
											<option value="Auto Save">Auto Save</option>
											<option value="Budget">Budget</option>
											<option value="Credit Journey">Credit Journey</option>
											<option value="Home Options">Home Options</option>
										</select>
            </div>

            <div class="form-group mb-3">
              <input class="form-control" type="text" name="subject" placeholder="Subject">
            </div>

            <div class="form-group mb-3">
              <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <input type="submit" name="send_support" value="Submit" class="btn btn-secondary w-100">
          </form>
        </div>
      </div>
    </div>
    <?php } else { ?>
    <div class="card mb-3">
        <div class="card-header bg-primary text-white"><?= $page ?></div>
        <div class="card-body">
          <div class="contact-form">
            <form method="post" action="<?= base_url('user/loan') ?>">
              <div class="form-group mb-3">
                <input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
              </div>

              <div class="form-group mb-3">
                <input class="form-control" type="number" name="amount" placeholder="Amount Needed">
              </div>
              
              <div class="form-group mb-3">
                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Purpose"></textarea>
              </div>
              <input type="submit" name="apply" value="Apply" class="btn btn-primary w-100">
            </form>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="card">
      <div class="card-header bg-primary text-white"><?= $page ?> History</div>
      <div class="card-body">
        <table class="table table-striped table-bordered dt-responsive nowrap table-condensed" id="<?= $page ?>" width="100%">
          <small class="text-center mobile">Click the <span class="text-white" style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details</small><hr>
          <thead>
            <tr class="table-primary">
              <th>Date</th>
              <th>Details</th>
              <th>Reference</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <script>
              $( document ).ready( function () {
                $( '#<?= $page ?>' ).DataTable( {
                  order: [[ 0, 'desc' ]],
                  scrollX: true,
                  processing: true,
                  serverSide: true,
                  ajax: '../usertable?<?= $page ?>=1'
                } );
              } );
            </script>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>