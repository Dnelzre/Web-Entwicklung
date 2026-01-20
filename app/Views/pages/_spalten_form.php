<form action="<?= $formAction ?? ('https://team03.wi1cm.uni-trier.de/public/spalten/postSubmit') ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="spalte" class="form-label">Spaltenbezeichnung <span class="text-danger">*</span></label>
        <input type="text" name="spalte" id="spalte" class="form-control"
               value="<?= old('spalte') ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Spaltenbeschreibung <span class="text-danger">*</span></label>
        <textarea name="spaltenbeschreibung" class="form-control" rows="3" required><?= old('spaltenbeschreibung') ?></textarea>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Sortier-ID (Zahl)</label>
            <input type="number" name="sortid" class="form-control" value="<?= old('sortid', 100) ?>">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Board</label>
            <select name="boardsid" class="form-select">
                <option value="1" selected>Standard Board (ID 1)</option>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-3">
        <a href="<?=('https://team03.wi1cm.uni-trier.de/public/spalten') ?>" class="btn btn-secondary me-2">Abbrechen</a>
        <button type="submit" class="btn btn-success">Speichern</button>
    </div>
</form>