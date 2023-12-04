<div>
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <strong for="avatarPath">Profilbild</strong>
                <input type="file" class="form-control" id="avatarPath" wire:model.defer="avatarPath">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong for="personalNumber">Personalnummer</strong>
                <input type="text" class="form-control" id="personalNumber" wire:model.defer="personalNumber">
            </div>  
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong for="firstName">Vorname</strong>
                <input type="text" class="form-control" id="firstName" wire:model.defer="firstName">
            </div>
            <div class="col-md-6">
                <strong for="familyName">Nachname</strong>
                <input type="text" class="form-control" id="familyName" wire:model.defer="familyName">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong for="birthName">Geburtsname</strong>
                <input type="text" class="form-control" id="birthName" wire:model.defer="birthName">
            </div>
            <div class="col-md-6">
                <strong for="birthDate">Geburtsdatum</strong>
                <input type="date" class="form-control" id="birthDate" wire:model.defer="birthDate">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong for="birthPlace">Geburtsort</strong>
                <input type="text" class="form-control" id="birthPlace" wire:model.defer="birthPlace">
            </div>
            <div class="col-md-6">
                <strong for="countryOfBirth">Geburtsland</strong>
                <select
                    wire:model.defer="countryOfBirth"
                    class="form-select"
                    id="countryOfBirth"
                    name="countryOfBirth"
                >
                    <option value="">Bitte auswählen</option>
                    @foreach ( $countries as $c )
                        <option 
                            value="{{$c->id}}" 
                            @if($c->id == $countryOfBirth) 
                            selected 
                            @endif
                            >{{$c->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong for="gender">Geschlecht</strong>
                <select
                    wire:model.defer="gender"
                    class="form-select"
                    id="gender"
                    name="gender"
                >
                    <option value="">Bitte auswählen</option>
                    @foreach ( $genders as $g )
                        <option 
                            value="{{$g->id}}"
                            @if($g->id == $gender)
                            selected
                            @endif
                            >{{$g->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <strong for="nationality">Staatsangehörigkeit</strong>
                <select
                    wire:model.defer="nationality"
                    class="form-select"
                    id="nationality"
                    name="nationality"
                >
                    <option value="">Bitte auswählen</option>
                    @foreach ($nationalities as $n )
                        <option 
                            value="{{$n->id}}"
                            @if($n->id == $nationality)
                            selected
                            @endif
                            >{{$n->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong for="mobile">Mobilnummer</strong>
                <input type="text" class="form-control" id="mobile" wire:model.defer="mobile">
            </div>
            <div class="col-md-6">
                <strong for="tel">Telefonnummer</strong>
                <input type="text" class="form-control" id="tel" wire:model.defer="tel">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                <strong for="emailPrivate">E-Mail</strong>
                <input type="email" class="form-control" id="emailPrivate" wire:model.defer="emailPrivate">
            </div>
        </div> 
        <div class="row mb-4">
            <div class="col-md-8">
                <strong for="street">Straße</strong>
                <input type="text" class="form-control" id="street" wire:model.defer="street">
            </div>
            <div class="col-md-3">
                <strong for="houseNumber">Hausnummer</strong>
                <input type="text" class="form-control" id="houseNumber" wire:model.defer="houseNumber">
            </div>  
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <strong for="zipCode">Postleitzahl</strong>
                <input type="text" class="form-control" id="zipCode" wire:model.defer="zipCode">
            </div>
            <div class="col-md-8">
                <strong for="city">Stadt</strong>
                <input type="text" class="form-control" id="city" wire:model.defer="city">
            </div>
        </div>
        <div class="row mb-6">
            <div class="col-md-6">
                <strong for="country">Land</strong>
                <select
                    wire:model.defer="country"
                    class="form-select"
                    id="country"
                    name="country"
                >
                    <option value="">Bitte auswählen</option>
                    @foreach ( $countries as $c )
                        <option 
                            value="{{$c->id}}" 
                            @if($c->id == $country) 
                            selected 
                            @endif
                            >{{$c->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>       
    </div>
</div>