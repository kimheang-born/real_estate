{{-- <!-- used for heading, separators, etc -->
@include('crud::fields.inc.wrapper_start')
	{!! $field['value'] !!}
@include('crud::fields.inc.wrapper_end') --}}
<div class="d-none" data-init-function="bpFieldInitContactScript"></div>

{{--  Prevent script load multiple time in backpack crud --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    @push('crud_fields_styles')
    
    @endpush


    @push('crud_fields_scripts')

        <script type="text/javascript">
            function bpFieldInitContactScript(element)
            {
                $("select[name='working_field']").change(function(){
                    var value = $(this).val();
                    loadOccupationByWorkingField(value, "{{ $entry->occupation ?? '' }}");
                });
                $("select[name='working_field'").change();
            }

            function loadOccupationByWorkingField(value, query){
                axios.get('{{route('web-api.type.select_working_field')}}', {
                    params: { parent: value } })
                .then(function (response) {
                    // console.log(response);
                    response.data.data.unshift({'id':'','text':'-'})
                    $("[name = occupation]").html('').select2({  theme: "bootstrap", data: response.data.data })

                    $("[name = occupation]").val(query);
                    $("[name = occupation]").trigger('change');
                })
                .catch(function (error) {
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });
            }
            $(".label-required").remove(); // remove start required from address
        </script>
    @endpush
@endif
{{-- Note: you can use @if ($crud->checkIfFieldIsFirstOfItsType($field, $fields)) to only load some CSS/JS once, even though there are multiple instances of it --}}
