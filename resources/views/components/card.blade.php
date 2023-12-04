<div {{ $attributes->merge(['class' => 'card']) }}>

    @isset($header)
        <div {{ $header->attributes->merge(['class' => 'card-header']) }}>
            {{ $header }}
        </div>
    @endisset

    <div {{ $body->attributes->merge(['class' => 'card-body']) }}>
        {{ $body }}
    </div>

    @isset($footer)
        <div {{ $footer->attributes->merge(['class' => 'card-footer']) }}>
            {{ $footer }}
        </div>
    @endisset

</div>
