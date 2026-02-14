<body>
<section class="hero-section">
    <div class="container text-center">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <h1 class="display-3 fw-bold text-dark mb-4">Effizientes <br><span class="text-primary">Projektmanagement</span></h1>
                <p class="lead text-muted mb-5">
                    Strukturen schaffen, Prioritäten setzen und Projekte erfolgreich umsetzen.
                    Ihre zentrale Plattform für moderne Teamarbeit.
                </p>
                <a href="<?= base_url('tasks') ?>" class="btn btn-main btn-lg mb-5">Jetzt Starten</a>
            </div>
        </div>

<div class="row g-4 text-start">
    <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4">
            <div class="icon-box"><i class="bi bi-card-checklist"></i></div>
            <h5 class="fw-bold">Tasks</h5>
            <p class="small text-muted">Ihre Aufgaben im Fokus: Alle Details, Fristen und Prioritäten übersichtlich in Karten gebündelt.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4">
            <div class="icon-box"><i class="bi bi-layers"></i></div>
            <h5 class="fw-bold">Boards</h5>
            <p class="small text-muted">Struktur für jedes Projekt: Trennen Sie verschiedene Themenbereiche sauber voneinander.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4">
            <div class="icon-box"><i class="bi bi-columns-gap"></i></div>
            <h5 class="fw-bold">Spalten</h5>
            <p class="small text-muted">Arbeitsabläufe visualisieren: Definieren Sie individuelle Phasen, die Ihre Aufgaben durchlaufen.</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4">
            <div class="icon-box"><i class="bi bi-people"></i></div>
            <h5 class="fw-bold">Personen</h5>
            <p class="small text-muted">Verantwortung klären: Weisen Sie Aufgaben gezielt Teammitgliedern zu für maximale Transparenz.</p>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-lg-10 mt-4">
        <div class="p-4 border-top">
            <p class="text-muted italic">
                <strong>Das Gesamtsystem:</strong> Ein integriertes Ökosystem, in dem Projekte in Boards strukturiert, durch Spalten in logische Abläufe unterteilt und durch die gezielte Zuweisung an Personen zum Erfolg geführt werden.
            </p>
        </div>
    </div>
</div>
</div>
</section>

<div class="d-flex justify-content-center my-5">
    <a href="<?= base_url('dashboard') ?>"
       class="btn btn-primary btn-lg px-5 py-3 shadow-sm rounded-pill custom-dashboard-btn">
        <i class="fas fa-rocket me-2"></i> Zum Dashboard gehen
    </a>
</div>

<div class="divider"></div>

<div class="tasks-title">
    <p>Aufgaben</p>
</div>

<div class="container">
    <div class="row justify-content-center g-4">

        <div class="col-12 col-md-4">
            <a href="https://team03.wi1cm.uni-trier.de/public/tasks" class="text-decoration-none">
                <div class="card card-hero h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h5 class="fw-bold mb-1">Aufgabe 5</h5>
                        <p class="text-muted mb-3">Tasks</p>
                        <span class="btn btn-cta btn-sm px-4">Öffnen</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a href="https://team03.wi1cm.uni-trier.de/public/spalten" class="text-decoration-none">
                <div class="card card-hero h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fas fa-columns"></i>
                        </div>
                        <h5 class="fw-bold mb-1">Aufgabe 6</h5>
                        <p class="text-muted mb-3">Spalten</p>
                        <span class="btn btn-cta btn-sm px-4">Öffnen</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a href="https://team03.wi1cm.uni-trier.de/public/boards" class="text-decoration-none">
                <div class="card card-hero h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <h5 class="fw-bold mb-1">Aufgabe 7</h5>
                        <p class="text-muted mb-3">Boards</p>
                        <span class="btn btn-cta btn-sm px-4">Öffnen</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<div class="spacer"></div>

</body>