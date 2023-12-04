<x-guest-layout>
    <form
        method="post"
        action="{{ route('login') }}"
    >
        @csrf
        <x-card style="width: 400px">
            <x-slot
                name="header"
                class="text-center"
            >
                <a href="/">
                    <img
                        src="{{ asset('img/logo-blue.png') }}"
                        alt="Logo"
                        style="height: 60px;"
                    >
                </a>
            </x-slot>
            <x-slot name="body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <x-alert
                            color="danger"
                            class="mb-3"
                        >
                            <x-error :message="$error" />
                        </x-alert>
                    @endforeach
                @endif
                <x-input
                    label="{{ __('auth.email') }}"
                    name="email"
                    type="email"
                    class="mb-2"
                />
                <x-input
                    label="{{ __('auth.password') }}"
                    name="password"
                    type="password"
                />
            </x-slot>
            <x-slot
                name="footer"
                class="d-grid text-center"
            >
                <x-button
                    label="{{ __('auth.login') }}"
                    type="submit"
                    color="purple-light"
                    class="mt-1"
                />
                <a
                    href="{{ route('password.request') }}"
                    class="mt-2 text-decoration-none text-muted"
                >
                    {{ __('auth.reset_password') }}
                </a>
            </x-slot>
        </x-card>
    </form>
</x-guest-layout>
