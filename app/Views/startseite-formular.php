<body>
        <div class="container mt-5" style="margin-bottom: 80px;">
            <div class="border rounded p-3 bg-white shadow-sm">
            <h3 class="mb-4">Spalte Erstellen</h3>
            <hr>
            <form>
                <div class="mb-3">
                    <label for="spaltenbezeichnung" class="form-label">Spaltenbezeichnung</label>
                    <input type="text" class="form-control" id="spaltenbezeichnung" placeholder="Bezeichung für die Spalte"">
                </div>

                <div class="mb-3">
                    <label for="spaltenbeschreibung" class="form-label">Spaltenbeschreibung</label>
                    <textarea class="form-control" id="spaltenbeschreibung" rows="2" placeholder=""></textarea>
                </div>


                <div class="mb-3">
                    <label for="sortid" class="form-label">Sortid</label>
                    <input type="text" class="form-control" id="sortid" placeholder="">
                </div>


                <div class="mb-3">
                    <label for="board" class="form-label">Board auswählen</label>
                    <select class="form-select" id="board">
                        <option selected>Board wählen...</option>
                        <option value="1">Allgemeine Todos</option>
                        <option value="2">In Bearbeitung</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-success me-2">Speichern</button>
                <button type="reset" class="btn btn-secondary">Abbrechen</button>
            </form>
        </div>

        </div>
    </div>

</body>