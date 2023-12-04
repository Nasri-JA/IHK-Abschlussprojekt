<div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Personal löschen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Der Vorgang kann nicht rückgängig gemacht werden.
                        <br>Möchten Sie das Personal wirklich löschen?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
                    <button type="button" wire:click="deleteStaff()" class="btn btn-danger" data-bs-dismiss="modal" id="deleteToastBtn">Löschen</button>
                </div>
            </div>
        </div>
    </div>
</div>