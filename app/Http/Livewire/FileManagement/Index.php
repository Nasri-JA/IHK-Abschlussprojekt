<?php

namespace App\Http\Livewire\FileManagement;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.file-management.index')
            ->layoutData(['pageTitle' => __('modules.file_management')]);
    }
}
