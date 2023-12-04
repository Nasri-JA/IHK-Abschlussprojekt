<div>
    <div
        class="tab-pane fade {{ $tab == 1 ? 'show active' : '' }}"
        id="personalData-tab-pane"
        role="tabpanel"
        aria-labelledby="personalData-tab"
        tabindex="0"
    >
        <div class="row mt-5">
            <form action="">
                <div class=" row mb-3">
                    <div class="col-sm-2">
                        @if ($avatarPath)
                            <img src="{{ $avatarPath->temporaryUrl() }}" alt="Profilbild" class="rounded-circle" style="width: 150px; height: 150px;">
                        @else
                            <img src="" alt="Profilbild" class="" style="width: 150px; height: 150px;">
                        @endif
                    </div>
                    <div class="col-sm-4">
                        <input
                            wire:model="avatarPath"
                            type="file"
                            class="form-control"
                        >
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="personalNumber"
                        class="col-sm-2 col-form-label"
                    >Personalnummer
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="personalNumber"
                            type="text"
                            class="form-control"
                            id="personalNumber"
                            name="personalNumber"
                        >
                        @error('personalNumber')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="firstName"
                        class="col-sm-2 col-form-label"
                    >Vorname
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="firstName"
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="firstName"
                        >
                        @error('firstName')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="familyName"
                        class="col-sm-2 col-form-label"
                    >Familienname
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="familyName"
                            type="text"
                            class="form-control"
                            id="familyName"
                            name="familyName"
                        >
                        @error('familyName')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="birthName"
                        class="col-sm-2 col-form-label"
                    >Geburtsname
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="birthName"
                            type="text"
                            class="form-control"
                            id="birthName"
                            name="birthName"
                        >
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="birthDate"
                        class="col-sm-2 col-form-label"
                    >Geburtsdatum
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="birthDate"
                            type="date"
                            class="form-control"
                            id="birthDate"
                            name="birthDate"
                        >
                        @error('birthDate')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="birthPlace"
                        class="col-sm-2 col-form-label"
                    >Geburtsort
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="birthPlace"
                            type="text"
                            class="form-control"
                            id="birthPlace"
                            name="birthPlace"
                        >
                        @error('birthPlace')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="countryOfBirth"
                        class="col-sm-2 col-form-label"
                    >Geburtsland
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <select
                            wire:model.defer="countryOfBirth"
                            class="form-select"
                            id="countryOfBirth"
                            name="countryOfBirth"
                        >
                            <option value="">Bitte auswählen</option>
                            @foreach ( $countries as $c )
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                        @error('countryOfBirth')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="gender"
                        class="col-sm-2 col-form-label"
                    >Geschlecht
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <select
                            wire:model.defer="gender"
                            class="form-select"
                            id="gender"
                            name="gender"
                        >
                            <option value="">Bitte auswählen</option>
                            @foreach ( $genders as $g )
                                <option value="{{$g->id}}">{{$g->name}}</option>
                            @endforeach
                        </select>
                        @error('gender')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="nationality"
                        class="col-sm-2 col-form-label"
                    >Staatsangehörigkeit
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <select
                            wire:model.defer="nationality"
                            class="form-select"
                            id="nationality"
                            name="nationality"
                        >
                            <option value="">Bitte auswählen</option>
                            @foreach ( $nationalities as $n )
                                <option value="{{$n->id}}">{{$n->name}}</option>
                            @endforeach
                        </select>
                        @error('nationality')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="mobile"
                        class="col-sm-2 col-form-label"
                    >Mobilnummer
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="mobile"
                            type="tel"
                            class="form-control"
                            id="mobile"
                            name="mobile"
                        >
                        @error('mobile')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="tel"
                        class="col-sm-2 col-form-label"
                    >Telefonnummer
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="tel"
                            type="tel"
                            class="form-control"
                            id="tel"
                            name="tel"
                        >
                    </div>
                </div>
                <div class="row mb-3">
                    <label
                        for="emailPrivate"
                        class="col-sm-2 col-form-label"
                    >E-Mail
                        <i class="text-danger">*</i>
                    </label>
                    <div class="col-sm-4">
                        <input
                            wire:model.defer="emailPrivate"
                            type="email"
                            class="form-control"
                            id="emailPrivate"
                            name="emailPrivate"
                        >
                        @error('emailPrivate')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>