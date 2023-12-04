<?php

namespace App\Http\Livewire\HumanResource;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Nationality;
use Livewire\WithFileUploads;



class EditStaff extends Component
{
    use WithFileUploads;


    public $staff;
    public $deleteStaff;

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

    public $showModal = false;

    // "rules" ist ein Array, das die Regeln enthält, die für die Validierung der Eingaben des Benutzers verwendet werden.
    protected $rules = [
        'personalNumber' => 'required',
        'firstName' => 'required',
        'familyName' => 'required',
        'countryOfBirth' => 'required',
        'emailPrivate' => 'required',
        'country' => 'required',
    ];

    // "showModal()" wird aufgerufen, wenn der Benutzer auf den "Bearbeiten"-Button klickt.
    // Es ruft die Methode "find()" auf, um die Daten des Mitarbeiters aus der Datenbank abzurufen,
    // und weist sie den Eigenschaften des Livewire-Komponenten zu.
    public function showModal($id)
    {
        $this->staff = Staff::find($id);
        $this->personalNumber = $this->staff->personal_number;
        $this->avatarPath = $this->staff->avatar_path;
        $this->firstName = $this->staff->first_name;
        $this->familyName = $this->staff->family_name;
        $this->birthName = $this->staff->birth_name;
        $this->birthDate = $this->staff->birth_date;
        $this->birthPlace = $this->staff->birth_place;
        $this->countryOfBirth = $this->staff->country_of_birth_id;
        $this->gender = $this->staff->gender_id;
        $this->nationality = $this->staff->nationality_id;
        $this->mobile = $this->staff->mobile;
        $this->tel = $this->staff->tel;
        $this->emailPrivate = $this->staff->email_private;
        $this->street = $this->staff->street;
        $this->houseNumber = $this->staff->house_number;
        $this->zipCode = $this->staff->zip_code;
        $this->city = $this->staff->city;
        $this->country = $this->staff->country_id;

        // Wenn die Methode "showModal()" aufgerufen wird, wird die Eigenschaft "showModal" auf "true" gesetzt.
        $this->showModal = true;
    }

    // "closeModal()" wird aufgerufen, wenn der Benutzer auf den "Schließen"-Button klickt.
    // Es setzt die Eigenschaft "showModal" auf "false".
    // Es ruft die Methode "reset()" auf, um die Eigenschaften des Livewire-Komponenten zurückzusetzen.
    public function closeModal()
    {
        $this->reset([
            'personalNumber',
            'avatarPath',
            'firstName',
            'familyName',
            'birthName',
            'birthDate',
            'birthPlace',
            'countryOfBirth',
            'gender',
            'nationality',
            'mobile',
            'tel',
            'emailPrivate',
            'street',
            'houseNumber',
            'zipCode',
            'city',
            'country'
        ]);
    }

    // "update()" wird aufgerufen, wenn der Benutzer auf den "Aktualisieren"-Button klickt.
    // Es ruft die Methode "validate()" auf, um die Eingaben des Benutzers zu validieren.
    // Es ruft die Methode "update()" auf, um die Daten des Mitarbeiters in der Datenbank zu aktualisieren.
    // Die variblen werden gleich der Spaltennamen in der Datenbank zugewiesen.
    public function update()
    {
        $this->validate();

        $data = [
            'personal_number' => $this->personalNumber,
            'avatar_path' => $this->avatarPath ? $this->avatarPath->store('avatars', 'public') : ($this->staff->avatar_path ?? null),
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
            'country_id' => $this->country
        ];

        // Hier wird das Feld in der Datenbank aktualisiert
        DB::table('staff')->where('id', $this->staff->id)->update($data);

        $this->closeModal();
    }

    // "showDeleteModal()" wird aufgerufen, wenn der Benutzer auf den "Löschen"-Button klickt.
    // Es setzt die Eigenschaft "deleteStaff" auf den Wert der ID des Mitarbeiters.
    public function showDeleteModal($id)
    {
        $this->deleteStaff = $id;
    }

    // "deleteStaff()" wird aufgerufen, wenn der Benutzer auf den "Löschen"-Button klickt.
    public function deleteStaff()
    {
        Staff::find($this->deleteStaff)->delete();
        $this->closeModal();
    }

    public function render()
    {
        $staffs = Staff::orderBy('family_name')->get();
        $countries = Country::orderBy('name')->get();
        $genders = Gender::orderBy('name')->get();
        $nationalities = Nationality::orderBy('name')->get();

        return view('livewire.human-resource.edit-staff')
            ->with('staffs', $staffs)
            ->with('countries', $countries)
            ->with('genders', $genders)
            ->with('nationalities', $nationalities)
            ->layoutData(['pageTitle' => __('modules.human_resources_edit_staff')]);
    }
}
