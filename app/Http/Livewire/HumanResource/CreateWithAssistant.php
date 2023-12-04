<?php

namespace App\Http\Livewire\HumanResource;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class CreateWithAssistant extends Component
{

    use WithFileUploads;


    public $tab = 1;
    // Tab 1
    public $date;
    public $radio;
    // Tab 2
    public $avatar;
    public $personalNumber;
    public $firstName;
    public $familyName;
    public $birthName;
    public $birthDate;
    public $birthPlace;
    public $countryOfBirth;
    public $gender;
    public $nationality;
    public $mobile;
    public $emailPrivate;
    // Tab 3
    public $street;
    public $houseNumber;
    public $zipCode;
    public $city;
    public $country;
    // Tab 4
    public $cardType;
    public $location;
    public $idCardNumber;
    // Tab 5
    public $numberOfChildren;
    public $socialInsuranceNumber;
    public $taxClass;
    public $taxNumber;
    // Tab 6
    public $qualificationType;
    public $firstNameProof;
    public $familyNameProof;
    public $birthDateProof;
    public $teachingStart;
    public $teachingEnd;
    public $IhkChamber;
    // Tab 7
    public $operatingSite;
    // Tab 8
    public $jobTitle;
    public $jobPosition;
    public $holidayDays;
    public $contractStart;
    public $trialPeriod;
    public $temporaryEmployment;
    public $notice;
    // Tab 9
    public $bankingInstitute;
    public $bic;
    public $swift;
    public $iban;
    public $accounttHolder;
    // Tab 10
    public $email;
    public $passowrd;
    // Tab 11
    public $file;


    public function prev()
    {
        $this->tab > 1 ? $this->tab-- : null;
    }

    public function next()
    {
        $this->validateInput();
        $this->tab < 12 ? $this->tab++ : null;
    }

    public function validateInput()
    {
        switch ($this->tab) {
            case 1:
                $this->validate([
                    'date' => 'required|date',
                ]);
                break;
            case 2:
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
            case 3:
                $this->validate([
                    'street' => 'required',
                    'houseNumber' => 'required',
                    'zipCode' => 'required',
                    'city' => 'required',
                    'country' => 'required',
                ]);
                break;
            case 4:
                $this->validate([
                    'cardType' => 'required',
                    'location' => 'required',
                    'idCardNumber' => 'required',
                ]);
                break;
            case 6:
                $this->validate([
                    'qualificationType' => 'required',
                ]);
                if ($this->qualificationType == '3') {
                    $this->validate([
                        'firstNameProof' => 'required',
                        'familyNameProof' => 'required',
                        'birthDateProof' => 'required|date',
                        'teachingStart' => 'required|date',
                        'teachingEnd' => 'required|date',
                        'IhkChamber' => 'required',
                    ]);
                }
                break;
            default:
                break;
        }
    }

    public function upload()
    {
        $path = $this->file->store('documents');
        Storage::put('document.txt', $this->file);
    }


    public function render()
    {
        return view('livewire.human-resource.create-with-assistant')
            ->layoutData(['pageTitle' => __('modules.human_recources_assistant')]);
    }
}
