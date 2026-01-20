<?= $this->include('templates/head') ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">

                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://team03.wi1cm.uni-trier.de/public/spalten" class="text-decoration-none">Spalten</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bearbeiten</li>
                    </ol>
                </nav>

                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 15px;">
                    <div class="card-header bg-primary bg-gradient text-white p-4">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-white text-primary d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="bi bi-pencil-fill fs-5"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">Spalte anpassen</h4>
                                <small class="opacity-75">ID: #<?= esc($spalte['id']) ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <?= view('pages/_spalten_form', [
                            'spalte' => $spalte,
                            'formAction' => $formAction
                        ]) ?>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p class="text-muted small">Änderungen werden sofort im Taskboard übernommen.</p>
                </div>
            </div>
        </div>
    </div>

<?= $this->include('templates/footer') ?>