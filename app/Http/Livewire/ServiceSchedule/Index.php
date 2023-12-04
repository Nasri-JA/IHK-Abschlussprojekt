<?php

namespace App\Http\Livewire\ServiceSchedule;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.service-schedule.index')
            ->layoutData(['pageTitle' => __('modules.service_schedule')]);
    }
}
