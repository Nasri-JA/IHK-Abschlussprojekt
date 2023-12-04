<div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul
                        class="nav nav-tabs"
                        id="staffTab"
                        role="tablist"
                    >
                        <li
                            class="nav-item"
                            role="presentation"
                            >
                                <button
                                    class="nav-link {{ $tab == 1 ? 'show active active-tab' : '' }}"
                                    id="personalData-tab"
                                    {{ $tab != 1 ? 'disabled' : '' }}
                                    data-bs-target="#personalData-tab-pane"
                                    type="button"
                                    role="tab"
                                    aria-controls="personalData-tab-pane"
                                    aria-selected="false"
                                >{{ __('hr.staff_data') }}</button>
                        </li>
                        <li
                            class="nav-item"
                            role="presentation"
                        >
                            <button
                                class="nav-link {{ $tab == 2 ? 'show active active-tab' : '' }}"
                                id="registrationAddress-tab"
                                {{ $tab != 2 ? 'disabled' : '' }}
                                data-bs-target="#registrationAddress-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="registrationAddress-tab-pane"
                                aria-selected="false"
                            >{{ __('hr.staff_address') }}t</button>
                        </li>
                    </ul>
                    <div
                        class="tab-content"
                        id="myTabContent"
                    >
                    @includeWhen($tab == 1, 'livewire.human-resource.staff-tabs.staff-data')
                    @includeWhen($tab == 2, 'livewire.human-resource.staff-tabs.staff-address')
                    </div>
                </div>
                <div class="card-footer">
                    <button
                        wire:click="prev()"
                        type="button"
                        class="btn btn-success"
                    >Zurück</button>
                    @if($tab == 1)
                    <button
                        wire:click="next()"
                        type="submit"
                        class="btn btn-success"
                    >Nächste</button>
                    @else
                    <button
                        wire:click="submit()"
                        type="submit"
                        class="btn btn-success"
                    >
                    Speichern</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
