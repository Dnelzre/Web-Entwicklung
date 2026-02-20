<form action="<?= $formAction ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="spalte" class="form-label">Spaltenbezeichnung <span class="text-danger">*</span></label>
        <input type="text" name="spalte" id="spalte" class="form-control"
               value="<?= old('spalte', $spalte['spalte'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Spaltenbeschreibung <span class="text-danger">*</span></label>
        <textarea name="spaltenbeschreibung" class="form-control" rows="3" required><?= old('spaltenbeschreibung', $spalte['spaltenbeschreibung'] ?? '') ?></textarea>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Sortier-ID</label>
            <input type="number" name="sortid" class="form-control"
                   value="<?= old('sortid', $spalte['sortid'] ?? 100) ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Board <span class="text-danger">*</span></label>
            <select name="boardsid" class="form-select" required>
                <option value="">-- Board auswählen --</option>
                <?php if (!empty($boards)): ?>
                    <?php foreach ($boards as $board): ?>
                        <?php
                        $boardId = $board['id'] ?? $board->id;
                        $boardName = $board['name'] ?? $board->name;
                        $selected = old('boardsid', $spalte['boardsid'] ?? '') == $boardId ? 'selected' : '';
                        ?>
                        <option value="<?= esc($boardId) ?>" <?= $selected ?>>
                            <?= esc($boardName) ?> (ID: <?= esc($boardId) ?>)
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <a href="https://team03.wi1cm.uni-trier.de/public/spalten" class="btn btn-secondary me-2">Abbrechen</a>
        <button type="submit" class="btn btn-success">Speichern</button>
    </div>
</form>