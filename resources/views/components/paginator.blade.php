@props(['collection'])

<div class="row">
    <div class="col">
        <x-card>
            <x-slot name="body">
                {{ $collection->links() }}
            </x-slot>
        </x-card>
    </div>
</div>
