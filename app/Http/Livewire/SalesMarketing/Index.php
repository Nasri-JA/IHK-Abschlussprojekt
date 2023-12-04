<?php

namespace App\Http\Livewire\SalesMarketing;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.sales-marketing.index')
            ->layoutData(['pageTitle' => __('modules.sales_marketing')]);
    }
}
