<!-- checkbox field -->

<div class="form-group col-12" >
    @include('crud::fields.inc.translatable_icon')
    <label for="">Vai</label>
    <div class="checkbox d-flex flex-wrap">
        @foreach($field['options'] as $v)
            <div class="form-group col-6 col-md-3">
            <label class="" for="{{ $v }}_checkbox">
                {{-- @php dd(old(square_brackets_to_dots($field['name']))); @endphp --}}
                <input type="checkbox"
                    id="{{ $v }}_checkbox"
                    name="{{ $field['name'] }}[]"
                    value="{{ $v }}"
                    @if(in_array($v, old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? []))
                        checked
                    @endif
                >
                {{ $v }}
            </label>
        </div>
        @endforeach
    	  {{-- <input type="checkbox"

          @if (old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? false)
                 checked="checked"
          @endif

          @if (isset($field['attributes']))
              @foreach ($field['attributes'] as $attribute => $value)
    			{{ $attribute }}="{{ $value }}"
        	  @endforeach
          @endif
          @if (!isset($field['attributes']['id']))
              id="{{ $field['name'] }}_checkbox"
          @endif
          > --}}
    	{{-- <label class="form-check-label font-weight-normal" for="{{ $field['attributes']['id'] ?? $field['name'] . '_checkbox' }}">{!! $field['label'] !!}</label> --}}

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
</div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp
    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script>
            // function bpFieldInitCheckbox(element) {
            //     var hidden_element = element.siblings('input[type=hidden]');

            //     // make sure the value is a boolean (so it will pass validation)
            //     if (hidden_element.val() === '') hidden_element.val(0);

            //     // set the default checked/unchecked state
            //     // if the field has been loaded with javascript
            //     if (hidden_element.val() != 0) {
            //       element.prop('checked', 'checked');
            //     } else {
            //       element.prop('checked', false);
            //     }

            //     // when the checkbox is clicked
            //     // set the correct value on the hidden input
            //     element.change(function() {
            //       if (element.is(":checked")) {
            //         hidden_element.val(1);
            //       } else {
            //         hidden_element.val(0);
            //       }
            //     })
            // }
        </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
