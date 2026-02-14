<div class="container mt-4">

    <div class="card shadow-sm">

        <!-- Header linksbündig -->
        <div class="card-header">
            <h4 class="mb-0">Dashboard Übersicht</h4>
        </div>

        <div class="card-body">

            <!-- Beschreibungstext -->
            <p class="text-muted mb-4">
                Hier sehen Sie eine Übersicht über die aktuellen Gesamtzahlen im System.
                Angezeigt wird die Anzahl der registrierten Personen, erstellten Tasks
                sowie vorhandenen Boards.
            </p>

            <!-- Statistik-Karten -->
            <div class="row g-4 justify-content-center text-center">

                <!-- Personen -->
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="/personen" class="text-decoration-none text-dark w-100">
                        <div class="glass-card p-4 h-100">
                            <h1>👥</h1>
                            <h3><?= esc($personenCount) ?></h3>
                            <p class="text-muted mb-0">Personen</p>
                        </div>
                    </a>
                </div>

                <!-- Tasks -->
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="/tasks" class="text-decoration-none text-dark w-100">
                        <div class="glass-card p-4 h-100">
                            <h1>📋</h1>
                            <h3><?= esc($taskCount) ?></h3>
                            <p class="text-muted mb-0">Tasks</p>
                        </div>
                    </a>
                </div>

                <!-- Boards -->
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="/boards" class="text-decoration-none text-dark w-100">
                        <div class="glass-card p-4 h-100">
                            <h1>📁</h1>
                            <h3><?= esc($boardCount) ?></h3>
                            <p class="text-muted mb-0">Boards</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>
