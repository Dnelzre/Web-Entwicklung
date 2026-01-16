<!-- Reines visuelles Formular-Partial für Spalten (kein PHP, keine Logik) -->
<form action="#" method="post">

    <div class="mb-3 form-floating">
        <input type="text" name="spalte" id="spalte" class="form-control" placeholder="Spaltenname" required>
        <label for="spalte">Spaltenname <span class="text-danger">*</span></label>
    </div>

    <div class="mb-3">
        <label class="form-label">Spaltenbeschreibung</label>
        <textarea name="spaltenbeschreibung" class="form-control" rows="4" placeholder="Beschreibung der Spalte..."></textarea>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Sortid</label>
            <input type="number" name="sortid" class="form-control" value="100">
        </div>

        <div class="col-md-6">
            <label class="form-label">Board ID</label>
            <input type="number" name="boardsid" class="form-control" value="1">
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Abbrechen</button>
        <button type="submit" class="btn btn-success">Speichern</button>
    </div>

</form>
