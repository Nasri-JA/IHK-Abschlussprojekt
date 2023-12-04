<?php

namespace App\Http\Livewire\Subcontractor;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.subcontractor.index')
            ->layoutData(['pageTitle' => __('modules.subcontractors')]);
    }
}
