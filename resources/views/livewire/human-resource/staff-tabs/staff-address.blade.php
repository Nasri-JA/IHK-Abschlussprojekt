<div>
    <div
        class="tab-pane fade {{ $tab == 2 ? 'show active' : '' }}"
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
                            @foreach ($countries as $c )
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <div class="text-danger text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>