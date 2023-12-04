@props(['caption'])

<x-card class="overflow-hidden">
    <x-slot name="body" class="p-0">
        <div class="table-responsive">
            <table {{ $attributes->merge(['class' => 'table table-hover table-striped mb-0']) }}>
                @isset($caption)
                    <caption>{{ $caption }}</caption>
                @endisset
                <thead {{ $thead->attributes->merge([]) }}>
                    {{ $thead }}
                </thead>
                <tbody {{ $tbody->attributes->merge([]) }}>
                    {{ $tbody }}
                </tbody>
            </table>
        </div>
    </x-slot>
</x-card>
