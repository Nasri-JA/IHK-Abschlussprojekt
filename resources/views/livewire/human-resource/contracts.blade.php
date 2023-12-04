<div>
    <div class="row gx-3 gy-3">
        <x-module-dashboard
            module-name="{{ __('hr.create_with_assistant') }}"
            color="personalabteilung"
            icon="list-check"
            route="{{ route('hr.assistant') }}"
        />
        <x-module-dashboard
            module-name="{{ __('hr.enter_manually') }}"
            color="personalabteilung"
            icon="file-plus"
            route="#"
        />
    </div>
    
</div>
