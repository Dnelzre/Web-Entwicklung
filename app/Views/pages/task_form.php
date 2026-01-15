<?= $this->include('templates/head') ?>

<body>
<div class="container mt-5">
    <div class="border rounded p-3 bg-white shadow-sm">
    <h3 class="mb-4">Neuen Task anlegen</h3>
    <form action="<?=('https://team03.wi1cm.uni-trier.de/public/task/store') ?>" method="post">
        <hr>

        <div class="mb-3">
            <label>Taskbezeichnung (tasks)</label>
            <div class="col-sm-9">
                <input type="text" name="tasks" class="form-control bg-secondary bg-opacity-10 border-1" required>
            </div>
        </div>

        <div class="mb-3">
            <label>ID Taskart</label>
            <div class="col-sm-9">
                <input type="number" name="taskartenid" class="form-control bg-secondary bg-opacity-10 border-1">
            </div>
        </div>

        <div class="mb-3">
            <label>ID Person</label>
            <div class="col-sm-9">
                <input type="number" name="personenid" class="form-control bg-secondary bg-opacity-10 border-1">
            </div>
        </div>

        <div class="mb-3">
            <label>ID Spalte</label>
            <div class="col-sm-9">
                <select name="spaltenid" class="form-select bg-secondary bg-opacity-10 border-1 text-dark">
                    <option value="0" >---bitte auswählen---</option>
                    <option value="1" >ToDo</option>
                    <option value="2" >In Bearbeitung</option>
                    <option value="3" >Erledigt</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label>Erinnerung</label>
            <div class="col-sm-9">
                <select name="erinnerung" class="form-select bg-secondary bg-opacity-10 border-1 text-dark">
                    <option value="0" >---bitte auswählen---</option>
                    <option value="1" >Nein</option>
                    <option value="2" >Ja</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label>Erinnerungsdatum</label>
            <div class="col-sm-9">
                <input type="date" name="erinnerungsdatum" class="form-control bg-secondary bg-opacity-10 border-1 text-dark">
            </div>
        </div>

        <div class="mb-3">
            <label>Erinnerung (ID)</label>
            <div class="col-sm-9">
                <input type="number" name="erinnerung" class="form-control bg-secondary bg-opacity-10 border-1 text-dark">
            </div>
        </div>

        <div class="mb-3">
            <label>Notizen</label>
            <div class="col-sm-9">
                <textarea class="form-control bg-secondary bg-opacity-10 border-1" id="notizen" name="note" rows="4"
                          placeholder="Text..."></textarea>
            </div>
        </div>

        <form action="<?= ('https://team03.wi1cm.uni-trier.de/public/tasks_store') ?>" method="post">
            <button type="submit" class="btn btn-success">Speichern</button>
            <a href="<?=('https://team03.wi1cm.uni-trier.de/public/tasks_view') ?>" class="btn btn-secondary">Abbrechen</a>
        </form>
        </form>
    </div>
    <div style="margin-bottom: 50px;"></div>
</div>

</body>