<x-guest-layout>
    <form
        method="post"
        action="{{ route('password.email') }}"
    >
        @csrf
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
                @if (session('status'))
                    <x-alert color="success" class="mb-3">
                        {{ session('status') }}
                    </x-alert>
                @endif
                <x-input
                    label="{{ __('auth.email') }}"
                    name="email"
                    type="email"
                    :value="old('email')"
                    autocomplete="username"
                    required
                    autofocus
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
