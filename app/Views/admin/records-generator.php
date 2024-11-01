<?= $meta ?>
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
                    <div class="card-body" align="center">
                        <!-- Growing spinner -->
                        <h3 class="section-title"> Generating Transactions. Relax and take a glass of
                            water <i class="fas fa-smile text-primary"></i><i class="fas fa-smile text-info"></i><i
                                class="fas fa-smile text-success"></i>
                        </h3>
                        <h4>This page will go back automatically after generating the number of
                            Transactions set.</h4>
                        <div class="spinner-grow text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-muted" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-dark" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>

                        <hr>
                        <h4><span class="text-primary">Total Number of Transaction Set:</span> <span
                                class="text-danger">
                                <?= $Anumber; ?>
                            </span></h4>
                        <h4><span class="text-primary">Total Number of Transaction Generated:</span> <span
                                class="text-danger">
                                <?= $runningTime; ?>
                            </span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>