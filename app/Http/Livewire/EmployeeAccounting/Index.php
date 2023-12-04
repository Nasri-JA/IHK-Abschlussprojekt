<?php

namespace App\Http\Livewire\EmployeeAccounting;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.employee-accounting.index')
            ->layoutData(['pageTitle' => __('modules.employee_accounting')]);
    }
}
