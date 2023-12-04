<?php

namespace App\Http\Livewire\HumanResource;

use Livewire\Component;

class Cancellation extends Component
{
    public function render()
    {
        return view('livewire.human-resource.cancellation')
            ->layoutData(['pageTitle' => __('modules.human_recources_cancellations')]);
    }
}
