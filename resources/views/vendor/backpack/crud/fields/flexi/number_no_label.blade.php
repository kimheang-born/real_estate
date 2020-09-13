@if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
    @if(isset($field['prefix'])) <div class="input-group-prepend"><span class="input-group-text">{!! $field['prefix'] !!}</span></div> @endif
    <input
        type="text"
        name="{{ $field['name'] }}"
        id="{{ $field['name'] }}"
        class="form-control price_and_commission"
        step="0.00"
        value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
        class="form-control price_and_commission"
        @include('crud::fields.inc.attributes')
        >
    @if(isset($field['suffix'])) <div class="input-group-append"><span class="input-group-text">{!! $field['suffix'] !!}</span></div> @endif

@if(isset($field['prefix']) || isset($field['suffix'])) </div> @endif

@if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
@endif

