@props(['tabs' => []])

<div>
    <ul class="nav nav-tabs" id="tab-nav" role="tablist">
        @foreach($tabs as $tab)
            <li class="nav-item" role="presentation">
                <button @class(['nav-link', 'active' => $loop->first]) data-bs-toggle="tab"
                        data-bs-target="#{{ Str::kebab($tab) }}-tab" type="button" role="tab"
                        aria-selected="true">
                    {{ $tab }}
                </button>
            </li>
        @endforeach
    </ul>
    <div class="tab-content" id="tab-nav">
        {{ $slot }}
    </div>
</div>
