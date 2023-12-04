@props(['label', 'size' => 'md', 'color' => 'primary'])

<button {{ $attributes->merge([
    'type' => 'button',
    'class' => "btn btn-$size btn-$color",
]) }}>
    {{ $label ?? $slot }}
</button>
