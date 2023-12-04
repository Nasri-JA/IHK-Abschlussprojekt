@props(['color' => 'primary', 'message', 'dismissable' => true])

<div
    {{ $attributes->merge([
        'class' => "alert alert-$color" . ($dismissable ? ' alert-dismissible fade show ' : ''),
        'role' => 'alert',
    ]) }}>
    {{ $message ?? $slot }}
    @if ($dismissable)
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    @endif
</div>
