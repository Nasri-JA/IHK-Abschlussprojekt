<div>
    <div class="row g-3">
        <div class="col-12">
            <div class="row g-3">
                <x-module-dashboard
                    module-name="{{ __('hr.staff_create') }}"
                    color="personalabteilung"
                    icon="fa-thin fa-user-plus"
                    route="{{ route('hr.create-staff') }}"
                />
                <x-module-dashboard
                    module-name="{{ __('hr.staff_edit') }}"
                    color="personalabteilung"
                    icon="fa-thin fa-user-edit"
                    route="{{ route('hr.edit-staff') }}"
                />
                <x-module-dashboard
                    module-name="{{ __('hr.employment_contracts') }}"
                    color="personalabteilung"
                    icon="file-contract"
                    route="{{ route('hr.contracts') }}"
                />
                <x-module-dashboard
                    module-name="{{ __('hr.cancellations') }}"
                    color="personalabteilung"
                    icon="fa-thin fa-xmark"
                    route="{{ route('hr.cancellation') }}"
                />
                <x-module-dashboard
                    module-name="{{ __('hr.warnings') }}"
                    color="personalabteilung"
                    icon="fa-thin fa-exclamation-triangle"
                    route="#"
                />
            </div>
        </div>
        <div class="col-12">
            <x-table>
                <x-slot name="thead">
                    <tr>
                        <th>{{ __('hr.guard_id') }}</th>
                        <th>{{ __('hr.first_name') }}</th>
                        <th>{{ __('hr.last_name') }}</th>
                        <th>{{ __('hr.address') }}</th>
                        <th>{{ __('general.created_at') }}</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->guard_id ?? '-' }}</td>
                            <td>{{ $u->first_name }}</td>
                            <td>{{ $u->last_name }}</td>
                            <td>{{ $u->address ?? '-' }}</td>
                            <td>{{ $u->created_at->timezone($userTz)->format('d.m.Y H:i') }}</td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table>
        </div>
        <div class="col-12">
            <x-paginator :collection="$users"/>
        </div>
    </div>
</div>
