@push('crud_fields_styles')
    <style>
        .border-selection {
            border: 1px solid rgba(0,40,100,.12) !important;
        }
    </style>
@endpush

@push('crud_fields_scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('.select2-selection').addClass('border-selection');
            $('.select2-container').addClass('w-100');
        });
    </script>
@endpush

@php
    $locations = DB::table('kh_address')->whereRaw('length(_code) = 2')->pluck('_code', '_name_en');
@endphp

@if(isset($entry) && $entry)
    @include('crud::fields.flexi.address')
@else
    @php
        $current_value = old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '';
    @endphp

    @include('crud::fields.inc.wrapper_start')
        <label>{!! $field['label'] !!} <span class="text-danger">*</span></label>
        @include('crud::fields.inc.translatable_icon')
        <select
            name="{{ $field['name'] }}"
            class="form-control js-example-basic-multiple"
            multiple="multiple"
            >
           @foreach ($locations as $key => $val)
                <option value="{{ $val }}">{{ $key }}</option>
           @endforeach
        </select>

        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    @include('crud::fields.inc.wrapper_end')
@endif