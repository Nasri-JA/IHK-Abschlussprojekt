<?php

namespace App\Http\Livewire\QualityManagement;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.quality-management.index')
            ->layoutData(['pageTitle' => __('modules.quality_management')]);
    }
}
