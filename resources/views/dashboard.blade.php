<x-app-layout page-title="Dashboard">
    <div class="text-center">
        <p wire:poll.1s>
            {{ __('general.welcome_dashboard', [
                'name' => auth()->user()->full_name,
            ]) }}<br>
            {{ __('general.last_login', [
                'date' => auth()->user()->last_login->timezone($userTz)->format('d.m.Y'),
                'time' => auth()->user()->last_login->timezone($userTz)->format('H:i:s'),
            ]) }}
        </p>
        <hr>
    </div>
    <div class="row gx-3 gy-3">
        @foreach ($modules as $m)
            <x-module-dashboard
                module-name="{{ $m->get('name') }}"
                color="{{ $m->get('color') }}"
                icon="{{ $m->get('icon') }}"
                route="{{ $m->get('route') }}"
            />
        @endforeach
    </div>
</x-app-layout>
