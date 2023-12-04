<x-guest-layout>
    <form
        method="post"
        action="{{ route('password.update') }}"
    >
        @csrf
        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >
        <x-card style="width: 400px">
            <x-slot
                name="header"
                class="text-center"
            >
                {{ __('auth.reset_password') }}
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
                    :value="old('email', $request->email)"
                    class="mb-3"
                    autocomplete="username"
                    autofocus
                    required
                />
                <x-input
                    label="{{ __('auth.password') }}"
                    name="password"
                    type="password"
                    class="mb-3"
                    autocomplete="new-password"
                    required
                />
                <x-input
                    label="{{ __('auth.confirm_password') }}"
                    name="password_confirmation"
                    type="password"
                    autocomplete="new-password"
                    required
                />
            </x-slot>
            <x-slot
                name="footer"
                class="d-grid text-center"
            >
                <x-button
                    label="{{ __('auth.reset_password') }}"
                    type="submit"
                    color="purple-light"
                    class="mt-1"
                />
                <a
                    href="{{ route('login') }}"
                    class="mt-2 text-decoration-none text-muted"
                >
                    {{ __('auth.login') }}
                </a>
            </x-slot>
        </x-card>
    </form>
</x-guest-layout>
