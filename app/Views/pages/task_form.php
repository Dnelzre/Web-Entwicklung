<div class="container mt-4">
    <h2>Neuen Task anlegen</h2>
    <form action="<?=('https://team03.wi1cm.uni-trier.de/public/task/store') ?>" method="post">
        <div class="mb-3">
            <label>Taskbezeichnung (tasks)</label>
            <input type="text" name="tasks" class="form-control" required>
        </div>
        <div class="row mb-3">
            <div class="col"><label>ID Taskart</label><input type="number" name="taskartenid" class="form-control"></div>
            <div class="col"><label>ID Person</label><input type="number" name="personenid" class="form-control"></div>
            <div class="col"><label>ID Spalte</label><input type="number" name="spaltenid" class="form-control"></div>
        </div>
        <div class="mb-3">
            <label>Erinnerungsdatum</label>
            <input type="date" name="erinnerungsdatum" class="form-control">
        </div>
        <div class="mb-3">
            <label>Erinnerung (ID)</label>
            <input type="number" name="erinnerung" class="form-control">
        </div>
        <div class="mb-3">
            <label>Notiz</label>
            <textarea name="notizen" class="form-control"></textarea>
        </div>
        <form action="<?= ('https://team03.wi1cm.uni-trier.de/public/tasks_store') ?>" method="post">
            <button type="submit" class="btn btn-success">Speichern</button>
            <a href="<?=('https://team03.wi1cm.uni-trier.de/public/tasks_view') ?>" class="btn btn-secondary">Abbrechen</a>
        </form>
    </form>
</div>