<label for="{{ $id }}" class="{{ $class ?? 'label' }}" style="{{ $style ?? '' }}">
    {{ $label }}
    @if(isset($required) && $required == true)
        <span class="text-danger">*</span>
    @endif
</label>