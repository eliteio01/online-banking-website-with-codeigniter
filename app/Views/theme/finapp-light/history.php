<div id="appCapsule" class="appCap">
<div class="container">
  
	<!-- ref link -->
	<div class="section">
		<div class="row mt-2 mb-4">
			<div class="card">
        <div class="card-header"><h3 class="text-primary"><?= $page ?></h3></div>
        <div class="card-body">
          <table class="table table-striped table-bordered dt-responsive nowrap table-condensed" id="<?= $page ?>" width="100%">
            <small class="text-center mobile">Click the <span class="text-white" style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details</small><hr>
          <?php if ($page === 'Investments') { ?>
          <thead>
            <tr class="table-primary">
              <th>Date</th>
              <th>Capital (<?= $currency ?>)</th>
              <th>Returns (<?= $currency ?>)</th>
              <th>Plan</th>
              <th>Reference</th>
              <th>Status</th>
            </tr>
          </thead>
          <?php } else if ($page === 'Notifications'){ ?>
          <thead>
              <th>Date</th>
							<th>Open</th>
							<th>Title</th>
							<th>Reference</th>
							<th>Status</th>
							<th>Action</th>
          </thead>
          <?php } else if ($page === 'Referrals'){ ?>
          <thead>
              <th>Date Registered</th>
							<th>Name</th>
							<th>Email</th>
          </thead>
          <?php } else if ($page === 'Earnings'){ ?>
          <thead>
              <th>Date</th>
							<th>Amount (<?= $currency ?>)</th>
							<th>Plan</th>
							<th>Reference</th>
							<th>Status</th>
          </thead>
          <?php } else { ?>
          <thead>
              <th>Date</th>
							<th>Amount (<?= $currency ?>)</th>
							<th>Type</th>
							<th>Payment Mode</th>
							<th>Reference</th>
							<th>Status</th>
          </thead>
          <?php } ?>
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
	<!-- ref link -->
</div>
</div>