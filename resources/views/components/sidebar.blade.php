<nav id="sidebar">
    <a href="{{ route('dashboard') }}">
        <div id="sidebar-logo" class="fixed-top">
            <h5 class="text-center">Hier kommt das Logo</h5>
        </div>
    </a>
    <div id="sidebar-menu">
        <div id="profile-container" class="mb-4 border-bottom border-purple-light pb-3">
            <div class="row gx-3 flex-nowrap align-items-center text-white">
                <div class="col-auto">
                    <img
                        id="profile-image"
                        src="{{ auth()->user()->avatar }}"
                        alt="Profile"
                        class="profile-image rounded-circle mt-1"
                        style="width: 20px; height: 20px;"
                    >
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            {{ Str::limit(auth()->user()->fullName ?? 'Guest', 12, '...') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{ Str::limit(auth()->user()->email ?? '-', 16, '...') ?? '-' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="nav-item-container">
            <div class="row gy-2">
                @if (Route::currentRouteName() != 'dashboard')
                    @foreach ($modules as $m)
                        <x-module-sidebar
                            module-name="{{ $m->get('name') }}"
                            color="{{ $m->get('color') }}"
                            icon="{{ $m->get('icon') }}"
                            route="{{ $m->get('route') }}"
                        />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
