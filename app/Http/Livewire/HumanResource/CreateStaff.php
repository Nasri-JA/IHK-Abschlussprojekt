<?php

namespace App\Http\Livewire\HumanResource;

// "use" ist ein Schlüsselwort, das verwendet wird, um Klassen zu importieren.
use Livewire\Component;
use App\Models\Staff;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Nationality;
use Livewire\WithFileUploads;



class CreateStaff extends Component
{
    // "WithFileUploads" ist ein Trait, das es ermöglicht, Dateien hochzuladen.
    use WithFileUploads;

    public $tab = 1;

    public $personalNumber;
    public $avatarPath;
    public $firstName;
    public $familyName;
    public $birthName;
    public $birthDate;
    public $birthPlace;
    public $countryOfBirth;
    public $gender;
    public $nationality;
    public $mobile;
    public $tel;
    public $emailPrivate;

    public $street;
    public $houseNumber;
    public $zipCode;
    public $city;
    public $country;

    public $staff;


    // "prev()", welche aufgerufen wird, wenn der Benutzer den "Zurück"-Button auf der Seite klickt. 
    //Es überprüft, ob die aktuelle Tab-Nummer größer als 1 ist und reduziert sie um 1.
    public function prev()
    {
        $this->tab > 1 ? $this->tab-- : null;
    }

    // "next()", welche aufgerufen wird, wenn der Benutzer den "Weiter"-Button klickt.
    // Es überprüft zuerst die Eingaben des Benutzers, indem es die Methode "validateInput()" aufruft,
    // und erhöht dann die aktuelle Tab-Nummer um 1, wenn sie kleiner als 3 ist.
    public function next()
    {
        $this->validateInput();
        $this->tab < 3 ? $this->tab++ : null;
    }

    // "validateInput()" ist eine Hilfsmethode, die die Eingaben des Benutzers validiert.
    public function validateInput()
    {
        switch ($this->tab) {
            case 1: 
                $this->validate([
                    'personalNumber' => 'required',
                    'firstName' => 'required',
                    'familyName' => 'required',
                    'birthDate' => 'required|date',
                    'birthPlace' => 'required',
                    'countryOfBirth' => 'required',
                    'gender' => 'required',
                    'nationality' => 'required',
                    'mobile' => 'required',
                    'emailPrivate' => 'required|email',
                ]);
                break;
            case 2:
                $this->validate([
                    'street' => 'required',
                    'houseNumber' => 'required',
                    'zipCode' => 'required',
                    'city' => 'required',
                    'country' => 'required',
                ]);
                break;
            default:
                break;
        }  
    }      
    
    // "submit()" wird aufgerufen, wenn der Benutzer den "Speichern"-Button klickt.
    // Es ruft zuerst die "validateInput()"-Methode auf, um die Eingaben des Benutzers zu validieren,
    // und erstellt dann ein neues Mitarbeiter-Modell mit den Eingaben des Benutzers.
    public function submit()
    {
        $this->validateInput();

        $this->staff = Staff::create([
            'avatar_path' => $this->avatarPath ? $this->avatarPath->store('avatars', 'public') : null,
            'personal_number' => $this->personalNumber,
            'first_name' => $this->firstName,
            'family_name' => $this->familyName,
            'birth_name' => $this->birthName,
            'birth_date' => $this->birthDate,
            'birth_place' => $this->birthPlace,
            'country_of_birth_id' => $this->countryOfBirth,
            'gender_id' => $this->gender,
            'nationality_id' => $this->nationality,
            'mobile' => $this->mobile,
            'tel' => $this->tel,
            'email_private' => $this->emailPrivate,
            'street' => $this->street,
            'house_number' => $this->houseNumber,
            'zip_code' => $this->zipCode,
            'city' => $this->city,
            'country_id' => $this->country,
        ]);

        // Wenn ein Avatar hochgeladen wurde, speichert es den Pfad in der Datenbank.
        // Und wird das Bild direkt angezeigt.
        if ($this->avatarPath) {
            $path = $this->avatarPath->store('avatars', 'public');
            $this->staff->update([
                'avatar_path' => $path,
            ]);
        }

        // Wenn der Benutzer die Eingaben überprüft hat, wird er auf die Seite "Bearbeiten" weitergeleitet.
        $this->redirect(route('hr.edit-staff'));
    }
    
    // "render()" ist eine Livewire-Methode, die die View "create-staff.blade.php" rendert.
    // Die Daten aus der Datenbank werden an die View übergeben.
    public function render()
    {
        return view('livewire.human-resource.create-staff',
        [
            'countries' => Country::orderBy('name')->get(),
            'nationalities' => Nationality::orderBy('name')->get(),
            'genders' => Gender::orderBy('name')->get(),
        ])
        ->layoutData(['pageTitle' => __('modules.human_resources_create_staff')]);
    }
}
