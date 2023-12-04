<?php

namespace App\Http\Livewire\HumanResource;

use App\Models\User;
use App\Traits\WithCustomPaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithCustomPaginator;

    public function render()
    {
        return view('livewire.human-resource.index', [
            'users' => User::query()
                ->orderBy('last_name')
                ->paginate($this->paginationSize)
        ])->layoutData(['pageTitle' => __('modules.human_resources')]);
    }
}
