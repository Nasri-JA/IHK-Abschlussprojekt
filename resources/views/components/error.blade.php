@props(['message'])

<div class="text-danger">
    {{ $message ?? $slot }}
</div>