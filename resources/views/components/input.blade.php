@props([
    'id' => Str::slug($label),
    'label' => 'Label',
])

<div class="form-floating">
    <input
        {{ $attributes->merge([
            'type' => 'text',
            'class' => 'form-control',
        ]) }}
        id={{ $id }}"
        placeholder="{{ $label }}"
    >
    <label for="{{ $id }}">{{ $label }}</label>
</div>
