<div
    id="topbar"
    class="sticky-top"
>
    <div class="row h-100 align-items-center">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <h1 class="h4 mb-0">{{ $pageTitle }}</h1>
        </div>
        <div class="col-2">
            <form
                method="post"
                action="{{ route('logout') }}"
            >
                @csrf
                <x-button
                    label="{{ __('auth.logout') }}"
                    type="submit"
                    color="danger"
                    size="sm"
                    class="float-end"
                />
            </form>
        </div>
    </div>
</div>
