<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ModuleComposer
{
    protected $modules;

    public function __construct()
    {
        $this->modules = collect([
            collect([
                'name' => __('modules.human_resources'),
                'color' => 'personalabteilung',
                'icon' => 'user',
                'route' => route('hr.index'),
            ]),
            collect([
                'name' => __('modules.employee_accounting'),
                'color' => 'abrechnung-mitarbeiter',
                'icon' => 'fa-solid fa-square-root-variable',
                'route' => route('ea.index'),
            ]),
            collect([
                'name' => __('modules.subcontractors'),
                'color' => 'nachunternehmer',
                'icon' => 'user-tie',
                'route' => route('sub.index'),
            ]),
            collect([
                'name' => __('modules.customers'),
                'color' => 'kunden',
                'icon' => 'fa-thin fa-building-user',
                'route' => route('customer.index'),
            ]),
            collect([
                'name' => __('modules.invoicing'),
                'color' => 'fakturierung',
                'icon' => 'file-invoice',
                'route' => route('invoicing.index'),
            ]),
            collect([
                'name' => __('modules.file_management'),
                'color' => 'dateimanagement',
                'icon' => 'fa-thin fa-folder-tree',
                'route' => route ('file-management.index'),
            ]),
            collect([
                'name' => __('modules.service_schedule'),
                'color' => 'dienstplan',
                'icon' => 'calendar',
                'route' => route('schedule.index'),
            ]),
            collect([
                'name' => __('modules.sales_marketing'),
                'color' => 'sales-marketing',
                'icon' => 'fa-thin fa-comment-dollar',
                'route' => route('sm.index'),
            ]),
            collect([
                'name' => __('modules.quality_management'),
                'color' => 'qm',
                'icon' => 'magnifying-glass',
                'route' => route('qm.index'),
            ])
        ]);
    }

    public function compose(View $view)
    {
        $view->with('modules', $this->modules);
    }
}
