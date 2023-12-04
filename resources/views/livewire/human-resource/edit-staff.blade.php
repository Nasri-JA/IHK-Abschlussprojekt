<div>
    <div class="row g-3">
        <div class="col-12 card ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Profilbild</th>
                        <th>Vorname</th>
                        <th>Nachname</th>
                        <th>Email</th>
                        <th>Personalnummer</th>
                        <th>Stadt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $staff)
                        <tr>
                            <td>
                                @if ($staff->avatar_path)
                                    <img 
                                        src="{{ asset('storage/' . $staff->avatar_path) }}" 
                                        alt="Profilbild" 
                                        class="rounded-circle" 
                                        style="width: 50px; height: 50px;"
                                    >
                                @else
                                    Kein Bild vorhanden
                                @endif
                            </td>
                            <td>{{ $staff->first_name }}</td>
                            <td>{{ $staff->family_name }}</td>
                            <td>{{ $staff->email_private }}</td>
                            <td>{{ $staff->personal_number }}</td>
                            <td>{{ $staff->city }}</td>
                            <td>
                                <button 
                                    class="btn btn-secondary btn-sm"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editModal"
                                    wire:click.prevent="showModal({{ $staff->id }})"
                                    ><i class="fa-solid fa-edit"></i>
                                </button>
                                <button 
                                    class="btn btn-danger btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteModal"
                                    wire:click.prevent="showDeleteModal({{ $staff->id }})"
                                    ><i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
    </div>

    <!-- Modal Edit -->
    <div>
        <div class="modal fade modal-dialog-scrollable" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" wire:ignore>
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Personal bearbeiten</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        @include('livewire.human-resource.modals.edit-staff-fields')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Schließen</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="update" id="updateToastBtn">Speichern</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    @include('livewire.human-resource.modals.delete-staff-modal')

    <!-- Toast Success -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="updateToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-body text-bg-success">
            Änderungen wurden erfolgreich aktualisiert.
          </div>
        </div>
    </div>

    <!-- Toast Danger -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="deleteToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-body text-bg-danger">
            Personal wurde erfolgreich gelöscht.
          </div>
        </div>
    </div>
</div>
