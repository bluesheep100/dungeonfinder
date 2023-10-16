@props(['name', 'type' => 'text'])

<div class="mb-3">
    <label for="{{ $name }}" class="mb-1">{{ Str::headline($name) }}</label>
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
           id="{{ $name }}">

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
