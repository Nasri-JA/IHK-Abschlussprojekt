<div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul
                        class="nav nav-tabs"
                        id="myTab"
                        role="tablist"
                    >
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 1 ? 'show active active-tab' : '' }}"
                                id="role-tab"
                                {{ $tab != 1 ? 'disabled' : '' }}
                                data-bs-target="#role-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="role-tab-pane"
                                aria-selected="true"
                            >Rolle</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 2 ? 'show active active-tab' : '' }}"
                                id="personalData-tab"
                                {{ $tab != 2 ? 'disabled' : '' }}
                                data-bs-target="#personalData-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="personalData-tab-pane"
                                aria-selected="false"
                            >Personendaten</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 3 ? 'show active active-tab' : '' }}"
                                id="registrationAddress-tab"
                                {{ $tab != 3 ? 'disabled' : '' }}
                                data-bs-target="#registrationAddress-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="registrationAddress-tab-pane"
                                aria-selected="false"
                            >Meldeanschrift</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 4 ? 'show active active-tab' : '' }}"
                                id="idCard-tab"
                                {{ $tab != 4 ? 'disabled' : '' }}
                                data-bs-target="#idCard-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="idCard-tab-pane"
                                aria-selected="false"
                            >Ausweis</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 5 ? 'show active active-tab' : '' }}"
                                id="legalInformation-tab"
                                {{ $tab != 5 ? 'disabled' : '' }}
                                data-bs-target="#legalInformation-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="legalInformation-tab-pane"
                                aria-selected="false"
                            >Rechtliche Information</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 6 ? 'show active active-tab' : '' }}"
                                id="qualification-tab"
                                {{ $tab != 6 ? 'disabled' : '' }}
                                data-bs-target="#qualification-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="qualification-tab-pane"
                                aria-selected="false"
                            >Qualifikation</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 7 ? 'show active active-tab' : '' }}"
                                id="operatingSite-tab"
                                {{ $tab != 7 ? 'disabled' : '' }}
                                data-bs-target="#operatingSite-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="operatingSite-tab-pane"
                                aria-selected="false"
                            >Zuständige Betriebsstätte</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 8 ? 'show active active-tab' : '' }}"
                                id="contractData-tab"
                                {{ $tab != 8 ? 'disabled' : '' }}
                                data-bs-target="#contractData-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="contractData-tab-pane"
                                aria-selected="false"
                            >Vertragsdaten</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 9 ? 'show active active-tab' : '' }}"
                                id="bankData-tab"
                                {{ $tab != 9 ? 'disabled' : '' }}
                                data-bs-target="#bankData-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="bankData-tab-pane"
                                aria-selected="false"
                            >Bankdaten</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 10 ? 'show active active-tab' : '' }}"
                                id="loginData-tab"
                                {{ $tab != 10 ? 'disabled' : '' }}
                                data-bs-target="#loginData-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="loginData-tab-pane"
                                aria-selected="false"
                            >Logindaten</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 11 ? 'show active active-tab' : '' }}"
                                id="docUpload-tab"
                                {{ $tab != 11 ? 'disabled' : '' }}
                                data-bs-target="#docUpload-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="docUpload-tab-pane"
                                aria-selected="false"
                            >Dokument Upload</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 12 ? 'show active active-tab' : '' }}"
                                id="overview-tab"
                                {{ $tab != 12 ? 'disabled' : '' }}
                                data-bs-target="#overview-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="overview-tab-pane"
                                aria-selected="false"
                            >Übersicht</button>
                        </li>
                    </ul>
                    <div
                        class="tab-content"
                        id="myTabContent"
                    >

                        <!-- Tab Role Start -->
                        <div
                            class="tab-pane fade {{ $tab == 1 ? 'show active' : '' }}"
                            id="role-tab-pane"
                            role="tabpanel"
                            aria-labelledby="role-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="date"
                                            class="col-sm-2 col-form-label"
                                        >Beginn Tätigkeit Wachperson
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="date"
                                                type="date"
                                                class="form-control"
                                                id="date"
                                                name="date"
                                                required
                                            >
                                            @error('date')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label>Einsatzarten
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input
                                                    wire:model.defer="checkbox"
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck1"
                                                >
                                                <label
                                                    class="form-check-label"
                                                    for="gridCheck1"
                                                >
                                                    Example checkbox 1
                                                </label>
                                                <br>
                                                <input
                                                    wire:model.defer="checkbox"
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck2"
                                                >
                                                <label
                                                    class="form-check-label"
                                                    for="gridCheck2"
                                                >
                                                    Example checkbox 2
                                                </label>
                                                <br>
                                                <input
                                                    wire:model.defer="checkbox"
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck3"
                                                >
                                                <label
                                                    class="form-check-label"
                                                    for="gridCheck3"
                                                >
                                                    Example checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            class="form-check-label"
                                            for=""
                                        >Ist ???
                                        </label>
                                        <div class="col-sm-10">
                                            <input
                                                wire:model.defer="radio"
                                                class="form-check-input"
                                                type="radio"
                                                id="radio1"
                                                name="radio"
                                            >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab Role End -->

                        <!-- Tab PersonalData Start -->
                        <div
                            class="tab-pane fade {{ $tab == 2 ? 'show active' : '' }}"
                            id="personalData-tab-pane"
                            role="tabpanel"
                            aria-labelledby="personalData-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class=" row-mb3 form-group">
                                        <label>Profilbild</label>
                                        <div class="row">
                                            <div class="col">
                                                <img
                                                    src=""
                                                    class="rounded mr-2"
                                                    style="width: 64px; height: 64px; object-fit: contain;"
                                                >
                                                <input
                                                    wire:model="avatar"
                                                    type="file"
                                                >
                                            </div>
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
                                                <option value="1">Deutschland</option>
                                                <option value="2">Österreich</option>
                                                <option value="3">Schweiz</option>
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
                                                <option value="1">Männlich</option>
                                                <option value="2">Weiblich</option>
                                                <option value="2">Divers</option>
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
                                                <option value="1">deutsch</option>
                                                <option value="2">österreichisch</option>
                                                <option value="3">schweizerisch</option>
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
                        <!-- Tab PersonalData End -->

                        <!-- Tab Address Start -->
                        <div
                            class="tab-pane fade {{ $tab == 3 ? 'show active' : '' }}"
                            id="registrationAddress-tab-pane"
                            role="tabpanel"
                            aria-labelledby="registrationAddress-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="street"
                                            class="col-sm-2 col-form-label"
                                        >Straße
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="street"
                                                type="text"
                                                class="form-control"
                                                id="street"
                                                name="street"
                                            >
                                            @error('street')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="houseNumber"
                                            class="col-sm-2 col-form-label"
                                        >Hausnummer
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="houseNumber"
                                                type="text"
                                                class="form-control"
                                                id="houseNumber"
                                                name="houseNumber"
                                            >
                                            @error('houseNumber')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="additionalAddress"
                                            class="col-sm-2 col-form-label"
                                        >Zusatz</label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="additionalAddress"
                                                type="text"
                                                class="form-control"
                                                id="additionalAddress"
                                                name="additionalAddress"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="zipCode"
                                            class="col-sm-2 col-form-label"
                                        >Postleitzahl
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="zipCode"
                                                type="text"
                                                class="form-control"
                                                id="zipCode"
                                                name="zipCode"
                                            >
                                            @error('zipCode')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="city"
                                            class="col-sm-2 col-form-label"
                                        >Ort
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="city"
                                                type="text"
                                                class="form-control"
                                                id="city"
                                                name="city"
                                            >
                                            @error('city')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="country"
                                            class="col-sm-2 col-form-label"
                                        >Staat
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="country"
                                                class="form-select"
                                                id="country"
                                                name="country"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Deutschland</option>
                                                <option value="2">Österreich</option>
                                                <option value="3">Schweiz</option>
                                            </select>
                                            @error('country')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab Address End -->

                        <!-- Tab ID-Card Start -->
                        <div
                            class="tab-pane fade {{ $tab == 4 ? 'show active' : '' }}"
                            id="idCard-tab-pane"
                            role="tabpanel"
                            aria-labelledby="idCard-tab"
                            tabindex="0"
                        >
                            <div
                                class="row mt-5"
                                x-data="{ cardType: '' }"
                            >
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="cardType"
                                            class="col-sm-2 col-form-label"
                                        >Ausweisart
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="cardType"
                                                class="form-select"
                                                id="cardType"
                                                name="cardType"
                                                x-model="cardType"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Typ1</option>
                                                <option value="2">Typ2</option>
                                                <option value="3">Typ3</option>
                                            </select>
                                            @error('cardType')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="description"
                                            class="col-sm-2 col-form-label"
                                        >Beschreibung
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="description"
                                                type="text"
                                                class="form-control"
                                                id="description"
                                                name="description"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="agency"
                                            class="col-sm-2 col-form-label"
                                        >Ausweis??? Behörde
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="agency"
                                                type="text"
                                                class="form-control"
                                                id="agency"
                                                name="agency"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="location"
                                            class="col-sm-2 col-form-label"
                                        >Stadt
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="location"
                                                class="form-select"
                                                id="location"
                                                name="location"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Berlin</option>
                                                <option value="2">Frankfurt</option>
                                                <option value="3">hamburg</option>
                                            </select>
                                            @error('location')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="dateOfIssue"
                                            class="col-sm-2 col-form-label"
                                        >Ausstelldatum
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="dateOfIssue"
                                                type="date"
                                                class="form-control"
                                                id="dateOfIssue"
                                                name="dateOfIssue"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="validUntil"
                                            class="col-sm-2 col-form-label"
                                        >Gültig bis
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="validUntil"
                                                type="date"
                                                class="form-control"
                                                id="validUntil"
                                                name="validUntil"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="idCardNumber"
                                            class="col-sm-2 col-form-label"
                                        >Ausweisnummer
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="idCardNumber"
                                                type="text"
                                                class="form-control"
                                                id="idCardNumber"
                                                name="idCardNumber"
                                            >
                                            @error('idCardNumber')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div x-show="cardType == '3'">
                                        <div class="row mb-3">
                                            <label
                                                for="mashineReadableLines"
                                                class="col-sm-2 col-form-label"
                                            >Maschinenlesbare Zeile 1
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="mashineReadableLines"
                                                    type="text"
                                                    class="form-control"
                                                    id="machineReadableLines"
                                                    name="machineReadableLines"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="mashineReadableLines"
                                                class="col-sm-2 col-form-label"
                                            >Maschinenlesbare Zeile 2
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="mashineReadableLines"
                                                    type="text"
                                                    class="form-control"
                                                    id="machineReadableLines"
                                                    name="machineReadableLines"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="mashineReadableLine3"
                                                class="col-sm-2 col-form-label"
                                            >Maschinenlesbare Zeile 3
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="mashineReadableLines"
                                                    type="text"
                                                    class="form-control"
                                                    id="machineReadableLines"
                                                    name="machineReadableLines"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab ID-Card End -->

                        <!-- Tab legalInfo Start -->
                        <div
                            class="tab-pane fade {{ $tab == 5 ? 'show active' : '' }}"
                            id="legalInfo-tab-pane"
                            role="tabpanel"
                            aria-labelledby="legalInfo-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="numberOfChildren"
                                            class="col-sm-2 col-form-label"
                                        >Anzahl der Kinder
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="numberOfChildren"
                                                type="number"
                                                class="form-control"
                                                id="numberOfChildren"
                                                name="numberOfChildren"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="socialInsuranceNumber"
                                            class="col-sm-2 col-form-label"
                                        >Sozialversicherungsnummer
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="socialInsuranceNumber"
                                                type="text"
                                                class="form-control"
                                                id="socialInsuranceNumber"
                                                name="socialInsuranceNumber"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="taxClass"
                                            class="col-sm-2 col-form-label"
                                        >Steuerklasse
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="taxClass"
                                                class="form-select"
                                                id="taxClass"
                                                name="taxClass"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Steuerklasse I (1)</option>
                                                <option value="2">Steuerklasse II (2)</option>
                                                <option value="3">Steuerklasse III (3)</option>
                                                <option value="4">Steuerklasse IV (4)</option>
                                                <option value="4">Steuerklasse IV (4) mit Faktor</option>
                                                <option value="5">Steuerklasse V (5)</option>
                                                <option value="6">Steuerklasse VI (6)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="taxNumber"
                                            class="col-sm-2 col-form-label"
                                        >Steuernummer
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="taxNumber"
                                                type="text"
                                                class="form-control"
                                                id="taxNumber"
                                                name="taxNumber"
                                            >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab legalInfo End -->

                        <!-- Tab Qualification Start -->
                        <div
                            class="tab-pane fade {{ $tab == 6 ? 'show active' : '' }}"
                            id="qualification-tab-pane"
                            role="tabpanel"
                            aria-labelledby="qualification-tab"
                            tabindex="0"
                        >
                            <div
                                class="row mt-5"
                                x-data="{ qualiType: '' }"
                            >
                                <form action="">
                                    <!-- Header 1 Start -->
                                    <div class="row mb-3">
                                        <div class="col mb-1 mt-3 ">
                                            <h5
                                                class="TabHeader p-2"
                                                for=""
                                            >Nachweis der Qualifikation
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- Header 1 End -->
                                    <div class="row mb-3">
                                        <label
                                            for="qualificationType"
                                            class="col-sm-2 col-form-label"
                                        >Art der Qualifikation
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="qualificationType"
                                                class="form-select"
                                                id="qualificationType"
                                                name="qualificationType"
                                                x-model="qualiType"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Art1</option>
                                                <option value="2">Art2</option>
                                                <option value="3">Art3</option>
                                            </select>
                                            @error('qualificationType')
                                                <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="typeProof"
                                            class="col-sm-2 col-form-label"
                                        >Art Nachweis
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="typeProof"
                                                type="text"
                                                class="form-control"
                                                id="typeProof"
                                                name="typeProof"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="dateOfProof"
                                            class="col-sm-2 col-form-label"
                                        >Datum Nachweis
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="dateOfProof"
                                                type="date"
                                                class="form-control"
                                                id="dateOfProof"
                                                name="dateOfProof"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="issuedBy"
                                            class="col-sm-2 col-form-label"
                                        >Ausstellende Stelle
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="issuedBy"
                                                type="text"
                                                class="form-control"
                                                id="issuedBy"
                                                name="issuedBy"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label
                                            for="superordinateQualification"
                                            class="col-sm-2 col-form-label"
                                        >Übergeordnete Qualifikation
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="superordinateQualification"
                                                class="form-select"
                                                id="superordinateQualification"
                                                name="superordinateQualification"
                                            >
                                                <option value="">Bitte Auswählen</option>
                                                <option value="1">Führerschein</option>
                                                <option value="2">LKW-Führerschein</option>
                                                <option value="2">PKW-Führerschein</option>
                                                <option value="3">Waffenschein</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div x-show="qualiType == '3'">
                                        <!-- Header 2 Start -->
                                        <div class="row mb-1 mt-3">
                                            <div class="col mb-3 mt-3 ">
                                                <h5
                                                    class="TabHeader p-2"
                                                    for=""
                                                >IHK Qualifikation
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- Header 2 End -->
                                        <div class="row mb-3">
                                            <label
                                                for="firstNameProof"
                                                class="col-sm-2 col-form-label"
                                            >Vorname Nachweis
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="firstNameProof"
                                                    type="text"
                                                    class="form-control"
                                                    id="firstNameProof"
                                                    name="firstNameProof"
                                                >
                                                @error('firstNameProof')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="familyNameProof"
                                                class="col-sm-2 col-form-label"
                                            >Familienname Nachweis
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="familyNameProof"
                                                    type="text"
                                                    class="form-control"
                                                    id="familyNameProof"
                                                    name="familyNameProof"
                                                >
                                                @error('familyNameProof')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="birthDateProof"
                                                class="col-sm-2 col-form-label"
                                            >Geburtsdatum Nachweis
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="birthDateProof"
                                                    type="date"
                                                    class="form-control"
                                                    id="birthDateProof"
                                                    name="birthDateProof"
                                                >
                                                @error('birthDateProof')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="birthPlaceProof"
                                                class="col-sm-2 col-form-label"
                                            >Geburtsort Nachweis
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="birthPlaceProof"
                                                    type="text"
                                                    class="form-control"
                                                    id="birthPlaceProof"
                                                    name="birthPlaceProof"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="examDate"
                                                class="col-sm-2 col-form-label"
                                            >Prüfungsdatum
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="examDate"
                                                    type="date"
                                                    class="form-control"
                                                    id="examDate"
                                                    name="examDate"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="teachingStart"
                                                class="col-sm-2 col-form-label"
                                            >Beginn des Unterrichtungszeitraum
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="teachingStart"
                                                    type="date"
                                                    class="form-control"
                                                    id="teachingStart"
                                                    name="teachingStart"
                                                >
                                                @error('teachingStart')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="teachingEnd"
                                                class="col-sm-2 col-form-label"
                                            >Ende des UnterrichtungsZeitraum
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="teachingEnd"
                                                    type="date"
                                                    class="form-control"
                                                    id="teachingEnd"
                                                    name="teachingEnd"
                                                >
                                                @error('teachingEnd')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="IhkChamber"
                                                class="col-sm-2 col-form-label"
                                            >IHK Kammer
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="IhkChamber"
                                                    class="form-select"
                                                    id="IhkChamber"
                                                    name="IhkChamber"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Kammer1</option>
                                                    <option value="2">Kammer2</option>
                                                    <option value="3">Kammer3</option>
                                                </select>
                                                @error('IhkChamber')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab qualification End-->

                        <!-- Tab operatingSite Start -->
                        <div
                            class="tab-pane fade {{ $tab == 7 ? 'show active' : '' }}"
                            id="operatingSite-tab-pane"
                            role="tabpanel"
                            aria-labelledby="operatingSite-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="operatingSite"
                                            class="col-sm-2 col-form-label"
                                        >Zuständige Betriebsstätte
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="operatingSite"
                                                class="form-select"
                                                id="operatingSite"
                                                name="operatingSite"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Betriebsstätte1</option>
                                                <option value="2">Betriebsstätte2</option>
                                                <option value="3">Betriebsstätte3</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab operatingSite End -->

                        <!-- Tab contractData Start -->
                        <div
                            class="tab-pane fade {{ $tab == 8 ? 'show active' : '' }}"
                            id="contractData-tab-pane"
                            role="tabpanel"
                            aria-labelledby="contractData-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="jobTitle"
                                            class="col-sm-2 col-form-label"
                                        >Berufsbezeichnung
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="jobTitle"
                                                type="text"
                                                class="form-control"
                                                id="jobTitle"
                                                name="jobTitle"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="jobPosition"
                                            class="col-sm-2 col-form-label"
                                        >Berufliche Position
                                        </label>
                                        <div class="col-sm-4">
                                            <select
                                                wire:model.defer="jobPosition"
                                                class="form-select"
                                                id="jobPosition"
                                                name="jobPosition"
                                            >
                                                <option value="">Bitte auswählen</option>
                                                <option value="1">Vollzeit</option>
                                                <option value="2">Teilzeit</option>
                                                <option value="3">450 Euro-Basis</option>
                                                <option value="4">Auszubildende(r)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="holidayDays"
                                            class="col-sm-2 col-form-label"
                                        >Urlaubstage
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="holidayDays"
                                                type="number"
                                                class="form-control"
                                                id="holidayDays"
                                                name="holidayDays"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="contractStart"
                                            class="col-sm-2 col-form-label"
                                        >Vertrgsbeginn
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="contractStart"
                                                type="date"
                                                class="form-control"
                                                id="contractStart"
                                                name="contractStart"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="trialPeriod"
                                            class="col-sm-2 col-form-label"
                                        >Probezeit
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="trialPeriod"
                                                type="number"
                                                class="form-control"
                                                id="trialPeriod"
                                                name="trialPeriod"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            class="form-check-label"
                                            for="temporaryEmployment"
                                        >Befristetes Arbeitsverhältnis
                                        </label>
                                        <div class="col-sm-10">
                                            <input
                                                wire:model.defer="temporaryEmployment"
                                                class="form-check-input"
                                                type="radio"
                                                id="temporaryEmployment"
                                                name="temporaryEmployment"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="notice"
                                            class="col-sm-2 col-form-label"
                                        >Notizen
                                        </label>
                                        <div class="col-sm-4">
                                            <textarea
                                                wire:model.defer="notice"
                                                class="form-control"
                                                id="notice"
                                                name="notice"
                                            >
                                            </textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab contractData End -->

                        <!-- Tab bankData Start -->
                        <div
                            class="tab-pane fade {{ $tab == 9 ? 'show active' : '' }}"
                            id="bankData-tab-pane"
                            role="tabpanel"
                            aria-labelledby="bankData-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="bankingInstitute"
                                            class="col-sm-2 col-form-label"
                                        >Bankinstittut
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="bankingInstitute"
                                                type="text"
                                                class="form-control"
                                                id="bankingInstitute"
                                                name="bankingInstitute"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="bic"
                                            class="col-sm-2 col-form-label"
                                        >BIC
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="bic"
                                                type="text"
                                                class="form-control"
                                                id="bic"
                                                name="bic"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="swift"
                                            class="col-sm-2 col-form-label"
                                        >SWIFT
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="swift"
                                                type="text"
                                                class="form-control"
                                                id="swift"
                                                name="swift"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="iban"
                                            class="col-sm-2 col-form-label"
                                        >IBAN
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="iban"
                                                type="text"
                                                class="form-control"
                                                id="iban"
                                                name="iban"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="accounttHolder"
                                            class="col-sm-2 col-form-label"
                                        >Kontoinhaber
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="accounttHolder"
                                                type="text"
                                                class="form-control"
                                                id="accounttHolder"
                                                name="accounttHolder"
                                            >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab bankData End -->

                        <!-- Tab loginData Start -->
                        <div
                            class="tab-pane fade {{ $tab == 10 ? 'show active' : '' }}"
                            id="loginData-tab-pane"
                            role="tabpanel"
                            aria-labelledby="loginData-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form action="">
                                    <div class="row mb-3">
                                        <label
                                            for="email"
                                            class="col-sm-2 col-form-label"
                                        >E-Mail
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="email"
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                name="email"
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label
                                            for="passowrd"
                                            class="col-sm-2 col-form-label"
                                        >Passwort
                                        </label>
                                        <div class="col-sm-4">
                                            <input
                                                wire:model.defer="passowrd"
                                                type="password"
                                                class="form-control"
                                                id="passowrd"
                                                name="passowrd"
                                            >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab loginData End -->

                        <!-- Tab docUpload Start -->
                        <div
                            class="tab-pane fade {{ $tab == 11 ? 'show active' : '' }}"
                            id="docUpload-tab-pane"
                            role="tabpanel"
                            aria-labelledby="docUpload-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <form
                                    wire:submit.prevent="upload"
                                    class="row"
                                >
                                    <div class="col-md-6 form-group">
                                        <label
                                            for="file"
                                            class="form-label"
                                        ></label>
                                        <input
                                            wire:model="file"
                                            class="form-control"
                                            type="file"
                                            id="file"
                                        >
                                    </div>
                                    <div class="col-md-6">
                                        <button
                                            class="col-md-2 mt-4 btn btn-warning"
                                            type="submit"
                                        >Hochladen</button>
                                        <button
                                            class="col-md-2 mt-4 btn btn-danger"
                                            type="button"
                                        >Löschen</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Tab docUpload End -->

                        <!-- Tab overview Start -->
                        <div
                            class="tab-pane fade {{ $tab == 12 ? 'show active' : '' }}"
                            id="overview-tab-pane"
                            role="tabpanel"
                            aria-labelledby="overview-tab"
                            tabindex="0"
                        >
                            <div class="row mt-5">
                                <!-- Tab 1 -->
                                <div class="row">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Rolle
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="date"
                                                class="col-sm-2 col-form-label"
                                            >Beginn Tätigkeit Wachperson
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="date"
                                                    type="date"
                                                    class="form-control"
                                                    id="date"
                                                    name="date"
                                                    required
                                                >
                                                @error('date')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label>Einsatzarten
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input
                                                        wire:model.defer="checkbox"
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="gridCheck1"
                                                    >
                                                    <label
                                                        class="form-check-label"
                                                        for="gridCheck1"
                                                    >
                                                        Example checkbox 1
                                                    </label>
                                                    <br>
                                                    <input
                                                        wire:model.defer="checkbox"
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="gridCheck2"
                                                    >
                                                    <label
                                                        class="form-check-label"
                                                        for="gridCheck2"
                                                    >
                                                        Example checkbox 2
                                                    </label>
                                                    <br>
                                                    <input
                                                        wire:model.defer="checkbox"
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="gridCheck3"
                                                    >
                                                    <label
                                                        class="form-check-label"
                                                        for="gridCheck3"
                                                    >
                                                        Example checkbox 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                class="form-check-label"
                                                for=""
                                            >Ist ???
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    wire:model.defer="radio"
                                                    class="form-check-input"
                                                    type="radio"
                                                    id="radio1"
                                                    name="radio"
                                                >
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 1 End-->

                                <!-- Tab 2 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Personendaten
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class=" row-mb3 form-group">
                                            <label>Profilbild</label>
                                            <div class="row">
                                                <div class="col">
                                                    <img
                                                        src=""
                                                        class="rounded mr-2"
                                                        style="width: 64px; height: 64px; object-fit: contain;"
                                                    >
                                                    <input
                                                        wire:model="avatar"
                                                        type="file"
                                                    >
                                                </div>
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
                                                    <option value="1">Deutschland</option>
                                                    <option value="2">Österreich</option>
                                                    <option value="3">Schweiz</option>
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
                                                    <option value="1">Männlich</option>
                                                    <option value="2">Weiblich</option>
                                                    <option value="2">Divers</option>
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
                                                    <option value="1">deutsch</option>
                                                    <option value="2">österreichisch</option>
                                                    <option value="3">schweizerisch</option>
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
                                <!--Tab 2 End-->

                                <!-- Tab 3 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Meldeanschrift
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="street"
                                                class="col-sm-2 col-form-label"
                                            >Straße
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="street"
                                                    type="text"
                                                    class="form-control"
                                                    id="street"
                                                    name="street"
                                                >
                                                @error('street')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="houseNumber"
                                                class="col-sm-2 col-form-label"
                                            >Hausnummer
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="houseNumber"
                                                    type="text"
                                                    class="form-control"
                                                    id="houseNumber"
                                                    name="houseNumber"
                                                >
                                                @error('houseNumber')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="additionalAddress"
                                                class="col-sm-2 col-form-label"
                                            >Zusatz</label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="additionalAddress"
                                                    type="text"
                                                    class="form-control"
                                                    id="additionalAddress"
                                                    name="additionalAddress"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="zipCode"
                                                class="col-sm-2 col-form-label"
                                            >Postleitzahl
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="zipCode"
                                                    type="text"
                                                    class="form-control"
                                                    id="zipCode"
                                                    name="zipCode"
                                                >
                                                @error('zipCode')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="city"
                                                class="col-sm-2 col-form-label"
                                            >Ort
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="city"
                                                    type="text"
                                                    class="form-control"
                                                    id="city"
                                                    name="city"
                                                >
                                                @error('city')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="country"
                                                class="col-sm-2 col-form-label"
                                            >Staat
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="country"
                                                    class="form-select"
                                                    id="country"
                                                    name="country"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Deutschland</option>
                                                    <option value="2">Österreich</option>
                                                    <option value="3">Schweiz</option>
                                                </select>
                                                @error('country')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 3 End-->

                                <!-- Tab 4 -->
                                <div
                                    class="row mt-5"
                                    x-data="{ cardType: '' }"
                                >
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Ausweis
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="cardType"
                                                class="col-sm-2 col-form-label"
                                            >Ausweisart
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="cardType"
                                                    class="form-select"
                                                    id="cardType"
                                                    name="cardType"
                                                    x-model="cardType"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Typ1</option>
                                                    <option value="2">Typ2</option>
                                                    <option value="3">Typ3</option>
                                                </select>
                                                @error('cardType')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="description"
                                                class="col-sm-2 col-form-label"
                                            >Beschreibung
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="description"
                                                    type="text"
                                                    class="form-control"
                                                    id="description"
                                                    name="description"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="agency"
                                                class="col-sm-2 col-form-label"
                                            >Ausweis??? Behörde
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="agency"
                                                    type="text"
                                                    class="form-control"
                                                    id="agency"
                                                    name="agency"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="location"
                                                class="col-sm-2 col-form-label"
                                            >Stadt
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="location"
                                                    class="form-select"
                                                    id="location"
                                                    name="location"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Berlin</option>
                                                    <option value="2">Frankfurt</option>
                                                    <option value="3">hamburg</option>
                                                </select>
                                                @error('location')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="dateOfIssue"
                                                class="col-sm-2 col-form-label"
                                            >Ausstelldatum
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="dateOfIssue"
                                                    type="date"
                                                    class="form-control"
                                                    id="dateOfIssue"
                                                    name="dateOfIssue"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="validUntil"
                                                class="col-sm-2 col-form-label"
                                            >Gültig bis
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="validUntil"
                                                    type="date"
                                                    class="form-control"
                                                    id="validUntil"
                                                    name="validUntil"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="idCardNumber"
                                                class="col-sm-2 col-form-label"
                                            >Ausweisnummer
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="idCardNumber"
                                                    type="text"
                                                    class="form-control"
                                                    id="idCardNumber"
                                                    name="idCardNumber"
                                                >
                                                @error('idCardNumber')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div x-show="cardType == '3'">
                                            <div class="row mb-3">
                                                <label
                                                    for="mashineReadableLines"
                                                    class="col-sm-2 col-form-label"
                                                >Maschinenlesbare Zeile 1
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="mashineReadableLines"
                                                        type="text"
                                                        class="form-control"
                                                        id="machineReadableLines"
                                                        name="machineReadableLines"
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="mashineReadableLines"
                                                    class="col-sm-2 col-form-label"
                                                >Maschinenlesbare Zeile 2
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="mashineReadableLines"
                                                        type="text"
                                                        class="form-control"
                                                        id="machineReadableLines"
                                                        name="machineReadableLines"
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="mashineReadableLine3"
                                                    class="col-sm-2 col-form-label"
                                                >Maschinenlesbare Zeile 3
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="mashineReadableLines"
                                                        type="text"
                                                        class="form-control"
                                                        id="machineReadableLines"
                                                        name="machineReadableLines"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 4 End-->

                                <!-- Tab 5 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Rechtliche Information
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="numberOfChildren"
                                                class="col-sm-2 col-form-label"
                                            >Anzahl der Kinder
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="numberOfChildren"
                                                    type="number"
                                                    class="form-control"
                                                    id="numberOfChildren"
                                                    name="numberOfChildren"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="socialInsuranceNumber"
                                                class="col-sm-2 col-form-label"
                                            >Sozialversicherungsnummer
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="socialInsuranceNumber"
                                                    type="text"
                                                    class="form-control"
                                                    id="socialInsuranceNumber"
                                                    name="socialInsuranceNumber"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="taxClass"
                                                class="col-sm-2 col-form-label"
                                            >Steuerklasse
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="taxClass"
                                                    class="form-select"
                                                    id="taxClass"
                                                    name="taxClass"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Steuerklasse I (1)</option>
                                                    <option value="2">Steuerklasse II (2)</option>
                                                    <option value="3">Steuerklasse III (3)</option>
                                                    <option value="4">Steuerklasse IV (4)</option>
                                                    <option value="4">Steuerklasse IV (4) mit Faktor</option>
                                                    <option value="5">Steuerklasse V (5)</option>
                                                    <option value="6">Steuerklasse VI (6)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="taxNumber"
                                                class="col-sm-2 col-form-label"
                                            >Steuernummer
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="taxNumber"
                                                    type="text"
                                                    class="form-control"
                                                    id="taxNumber"
                                                    name="taxNumber"
                                                >
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 5 End-->

                                <!-- Tab 6 -->
                                <div
                                    class="row mt-5"
                                    x-data="{ qualiType: '' }"
                                >
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Qualifikation
                                        </h5>
                                    </div>
                                    <form action="">
                                        <!-- Header 1 Start -->
                                        <div class="row mb-3">
                                            <div class="col mb-1 mt-3 inactive">
                                                <p
                                                    class="TabHeader p-1"
                                                    for=""
                                                >Nachweis der Qualifikation
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Header 1 End -->
                                        <div class="row mb-3">
                                            <label
                                                for="qualificationType"
                                                class="col-sm-2 col-form-label"
                                            >Art der Qualifikation
                                                <i class="text-danger">*</i>
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="qualificationType"
                                                    class="form-select"
                                                    id="qualificationType"
                                                    name="qualificationType"
                                                    x-model="qualiType"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Art1</option>
                                                    <option value="2">Art2</option>
                                                    <option value="3">Art3</option>
                                                </select>
                                                @error('qualificationType')
                                                    <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="typeProof"
                                                class="col-sm-2 col-form-label"
                                            >Art Nachweis
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="typeProof"
                                                    type="text"
                                                    class="form-control"
                                                    id="typeProof"
                                                    name="typeProof"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="dateOfProof"
                                                class="col-sm-2 col-form-label"
                                            >Datum Nachweis
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="dateOfProof"
                                                    type="date"
                                                    class="form-control"
                                                    id="dateOfProof"
                                                    name="dateOfProof"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="issuedBy"
                                                class="col-sm-2 col-form-label"
                                            >Ausstellende Stelle
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="issuedBy"
                                                    type="text"
                                                    class="form-control"
                                                    id="issuedBy"
                                                    name="issuedBy"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <label
                                                for="superordinateQualification"
                                                class="col-sm-2 col-form-label"
                                            >Übergeordnete Qualifikation
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="superordinateQualification"
                                                    class="form-select"
                                                    id="superordinateQualification"
                                                    name="superordinateQualification"
                                                >
                                                    <option value="">Bitte Auswählen</option>
                                                    <option value="1">Führerschein</option>
                                                    <option value="2">LKW-Führerschein</option>
                                                    <option value="2">PKW-Führerschein</option>
                                                    <option value="3">Waffenschein</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div x-show="qualiType == '3'">
                                            <!-- Header 2 Start -->
                                            <div class="row mb-1 mt-3">
                                                <div class="col mb-3 mt-3 inactive">
                                                    <p
                                                        class="TabHeader p-1"
                                                        for=""
                                                    >IHK Qualifikation
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Header 2 End -->
                                            <div class="row mb-3">
                                                <label
                                                    for="firstNameProof"
                                                    class="col-sm-2 col-form-label"
                                                >Vorname Nachweis
                                                    <i class="text-danger">*</i>
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="firstNameProof"
                                                        type="text"
                                                        class="form-control"
                                                        id="firstNameProof"
                                                        name="firstNameProof"
                                                    >
                                                    @error('firstNameProof')
                                                        <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="familyNameProof"
                                                    class="col-sm-2 col-form-label"
                                                >Familienname Nachweis
                                                    <i class="text-danger">*</i>
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="familyNameProof"
                                                        type="text"
                                                        class="form-control"
                                                        id="familyNameProof"
                                                        name="familyNameProof"
                                                    >
                                                    @error('familyNameProof')
                                                        <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="birthDateProof"
                                                    class="col-sm-2 col-form-label"
                                                >Geburtsdatum Nachweis
                                                    <i class="text-danger">*</i>
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="birthDateProof"
                                                        type="date"
                                                        class="form-control"
                                                        id="birthDateProof"
                                                        name="birthDateProof"
                                                    >
                                                    @error('birthDateProof')
                                                        <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="birthPlaceProof"
                                                    class="col-sm-2 col-form-label"
                                                >Geburtsort Nachweis
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="birthPlaceProof"
                                                        type="text"
                                                        class="form-control"
                                                        id="birthPlaceProof"
                                                        name="birthPlaceProof"
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="examDate"
                                                    class="col-sm-2 col-form-label"
                                                >Prüfungsdatum
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="examDate"
                                                        type="date"
                                                        class="form-control"
                                                        id="examDate"
                                                        name="examDate"
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="teachingStart"
                                                    class="col-sm-2 col-form-label"
                                                >Beginn des Unterrichtungszeitraum
                                                    <i class="text-danger">*</i>
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="teachingStart"
                                                        type="date"
                                                        class="form-control"
                                                        id="teachingStart"
                                                        name="teachingStart"
                                                    >
                                                    @error('teachingStart')
                                                        <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="teachingEnd"
                                                    class="col-sm-2 col-form-label"
                                                >Ende des UnterrichtungsZeitraum
                                                    <i class="text-danger">*</i>
                                                </label>
                                                <div class="col-sm-4">
                                                    <input
                                                        wire:model.defer="teachingEnd"
                                                        type="date"
                                                        class="form-control"
                                                        id="teachingEnd"
                                                        name="teachingEnd"
                                                    >
                                                    @error('teachingEnd')
                                                        <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label
                                                    for="IhkChamber"
                                                    class="col-sm-2 col-form-label"
                                                >IHK Kammer
                                                    <i class="text-danger">*</i>
                                                </label>
                                                <div class="col-sm-4">
                                                    <select
                                                        wire:model.defer="IhkChamber"
                                                        class="form-select"
                                                        id="IhkChamber"
                                                        name="IhkChamber"
                                                    >
                                                        <option value="">Bitte auswählen</option>
                                                        <option value="1">Kammer1</option>
                                                        <option value="2">Kammer2</option>
                                                        <option value="3">Kammer3</option>
                                                    </select>
                                                    @error('IhkChamber')
                                                        <div class="text-danger text-xs mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 6 End-->

                                <!-- Tab 7 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Zuständige Betriebsstätte
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="operatingSite"
                                                class="col-sm-2 col-form-label"
                                            >Zuständige Betriebsstätte
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="operatingSite"
                                                    class="form-select"
                                                    id="operatingSite"
                                                    name="operatingSite"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Betriebsstätte1</option>
                                                    <option value="2">Betriebsstätte2</option>
                                                    <option value="3">Betriebsstätte3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 7 End-->

                                <!-- Tab 8 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Vertragsdaten
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="jobTitle"
                                                class="col-sm-2 col-form-label"
                                            >Berufsbezeichnung
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="jobTitle"
                                                    type="text"
                                                    class="form-control"
                                                    id="jobTitle"
                                                    name="jobTitle"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="jobPosition"
                                                class="col-sm-2 col-form-label"
                                            >Berufliche Position
                                            </label>
                                            <div class="col-sm-4">
                                                <select
                                                    wire:model.defer="jobPosition"
                                                    class="form-select"
                                                    id="jobPosition"
                                                    name="jobPosition"
                                                >
                                                    <option value="">Bitte auswählen</option>
                                                    <option value="1">Vollzeit</option>
                                                    <option value="2">Teilzeit</option>
                                                    <option value="3">450 Euro-Basis</option>
                                                    <option value="4">Auszubildende(r)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="holidayDays"
                                                class="col-sm-2 col-form-label"
                                            >Urlaubstage
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="holidayDays"
                                                    type="number"
                                                    class="form-control"
                                                    id="holidayDays"
                                                    name="holidayDays"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="contractStart"
                                                class="col-sm-2 col-form-label"
                                            >Vertrgsbeginn
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="contractStart"
                                                    type="date"
                                                    class="form-control"
                                                    id="contractStart"
                                                    name="contractStart"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="trialPeriod"
                                                class="col-sm-2 col-form-label"
                                            >Probezeit
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="trialPeriod"
                                                    type="number"
                                                    class="form-control"
                                                    id="trialPeriod"
                                                    name="trialPeriod"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                class="form-check-label"
                                                for="temporaryEmployment"
                                            >Befristetes Arbeitsverhältnis
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    wire:model.defer="temporaryEmployment"
                                                    class="form-check-input"
                                                    type="radio"
                                                    id="temporaryEmployment"
                                                    name="temporaryEmployment"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="notice"
                                                class="col-sm-2 col-form-label"
                                            >Notizen
                                            </label>
                                            <div class="col-sm-4">
                                                <textarea
                                                    wire:model.defer="notice"
                                                    class="form-control"
                                                    id="notice"
                                                    name="notice"
                                                >
                                            </textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 8 End-->

                                <!-- Tab 9 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Bankdaten
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="bankingInstitute"
                                                class="col-sm-2 col-form-label"
                                            >Bankinstittut
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="bankingInstitute"
                                                    type="text"
                                                    class="form-control"
                                                    id="bankingInstitute"
                                                    name="bankingInstitute"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="bic"
                                                class="col-sm-2 col-form-label"
                                            >BIC
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="bic"
                                                    type="text"
                                                    class="form-control"
                                                    id="bic"
                                                    name="bic"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="swift"
                                                class="col-sm-2 col-form-label"
                                            >SWIFT
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="swift"
                                                    type="text"
                                                    class="form-control"
                                                    id="swift"
                                                    name="swift"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="iban"
                                                class="col-sm-2 col-form-label"
                                            >IBAN
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="iban"
                                                    type="text"
                                                    class="form-control"
                                                    id="iban"
                                                    name="iban"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="accounttHolder"
                                                class="col-sm-2 col-form-label"
                                            >Kontoinhaber
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="accounttHolder"
                                                    type="text"
                                                    class="form-control"
                                                    id="accounttHolder"
                                                    name="accounttHolder"
                                                >
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 9 End-->

                                <!-- Tab 10 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Logindaten
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <label
                                                for="email"
                                                class="col-sm-2 col-form-label"
                                            >E-Mail
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="email"
                                                    type="email"
                                                    class="form-control"
                                                    id="email"
                                                    name="email"
                                                >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label
                                                for="passowrd"
                                                class="col-sm-2 col-form-label"
                                            >Passwort
                                            </label>
                                            <div class="col-sm-4">
                                                <input
                                                    wire:model.defer="passowrd"
                                                    type="password"
                                                    class="form-control"
                                                    id="passowrd"
                                                    name="passowrd"
                                                >
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 10 End-->

                                <!-- Tab 11 -->
                                <div class="row mt-5">
                                    <div class="col mb-2 mt-3 ">
                                        <h5
                                            class="TabHeader p-2"
                                            for=""
                                        >Dokument Upload
                                        </h5>
                                    </div>
                                    <form
                                        wire:submit.prevent="upload"
                                        class="row"
                                    >
                                        <div class="col-md-6 form-group">
                                            <label
                                                for="file"
                                                class="form-label"
                                            ></label>
                                            <input
                                                wire:model="file"
                                                class="form-control"
                                                type="file"
                                                id="file"
                                            >
                                        </div>
                                        <div class="col-md-6">
                                            <button
                                                class="col-md-2 mt-4 btn btn-warning"
                                                type="submit"
                                            >Hochladen</button>
                                            <button
                                                class="col-md-2 mt-4 btn btn-danger"
                                                type="button"
                                            >Löschen</button>
                                        </div>
                                    </form>
                                </div>
                                <!--Tab 11 End-->
                            </div>
                        </div>
                        <!-- Tab overview End -->
                    </div>
                </div>
                <div class="card-footer">
                    <button
                        wire:click="prev()"
                        type="button"
                        class="btn btn-success"
                    >Zurück</button>
                    <button
                        wire:click="next()"
                        type="submit"
                        class="btn btn-success"
                    >Nächste</button>
                </div>
            </div>
        </div>
    </div>
</div>
