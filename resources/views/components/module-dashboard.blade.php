@props(['moduleName', 'color', 'icon', 'route'])

<div class="col-12 col-md-6 col-lg-4 col-xl-3">
    <div class="card text-bg-{{ $color }} widget">
        <div class="card-body position-relative">
            <h5>{!! $moduleName !!}</h5>
            <i class="fa-solid fa-{{ $icon }}"></i>
        </div>
        <div class="card-footer">
            <a href="{{ $route }}">
                Zum Modul <i class="fa-solid fa-fw fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
