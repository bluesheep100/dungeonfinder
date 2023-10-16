@props(['show' => false, 'active' => false])

<div @class(['tab-pane', 'fade', 'py-3', 'active' => $active, 'show' => $show]) role="tabpanel" aria-labelledby="home-tab" tabindex="0"
    {{ $attributes }}>
    {{ $slot }}
</div>
