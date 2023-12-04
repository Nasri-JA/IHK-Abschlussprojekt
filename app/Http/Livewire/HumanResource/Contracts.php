<?php

namespace App\Http\Livewire\HumanResource;

use Livewire\Component;

class Contracts extends Component
{
    public function render()
    {
        return view('livewire.human-resource.contracts')
            ->layoutData(['pageTitle' => __('modules.human_recources_contracts')]);
    }
}
