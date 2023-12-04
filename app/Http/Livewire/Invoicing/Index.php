<?php

namespace App\Http\Livewire\Invoicing;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.invoicing.index')
            ->layoutData(['pageTitle' => __('modules.invoicing')]);
    }
}
