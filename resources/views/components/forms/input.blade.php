@props(['name', 'class' => '', 'type' => 'text', 'model' => null])

<div class="mb-3 {{ $class }}">
    <label for="{{ $name }}" class="mb-1">{{ Str::headline($name) }}</label>
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
           name="{{ $name }}" id="{{ $name }}" value="{{ old($name, optional($model)->{$name}) }}"
           {{ $attributes }}
    >

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
