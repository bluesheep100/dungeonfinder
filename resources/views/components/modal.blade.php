<div class="modal fade" id="{{ $name }}" tabindex="-1" aria-labelledby="{{ $name }}" aria-hidden="true">
    <div @class(['modal-dialog', 'modal-dialog-centered' => $centered])>
        <div class="modal-content">
            <div class="modal-header">
                @isset($header)
                    {{ $header }}
                @endisset
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>

            @isset($footer)
            <div class="modal-footer">
                {{ $footer }}
            </div>
            @endisset
        </div>
    </div>
</div>
