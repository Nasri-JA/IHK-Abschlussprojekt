@props(['moduleName', 'color', 'icon', 'route'])

<div class="col-12">
    <a href="{{ $route }}" class="text-decoration-none">
        <div class="card text-bg-{{ $color }} text-white">
            <div class="card-body p-3 text-center">
                <i class="fa-solid fa-2x fa-{{ $icon }}"></i>
                <h6 class="mt-2 mb-0">{!! $moduleName !!}</h6>
            </div>
        </div>
    </a>
</div>
