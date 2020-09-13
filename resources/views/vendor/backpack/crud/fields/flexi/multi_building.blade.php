@php
    $colLg2 = ['class' => 'form-group col-lg-2'];
    $colMd3 = ['class' => 'form-group col-md-4 col-xl-3'];
    $colMd4 = ['class' => 'form-group col-md-4'];
    $colMd6 = ['class' => 'form-group col-md-6'];
    $colMd8 = ['class' => 'form-group col-md-8'];
    $colMd9 = ['class' => 'form-group col-md-9'];
    $colMd12 = ['class' => 'form-group col-md-12'];
@endphp

<div class="col-md-12 building-wrapper hidden-building-form mt-3">
    @if(isset($entry) && $entry)
        @include('crud::fields.flexi.update_building')
    @else
        @include('crud::fields.flexi.create_building_container')
    @endif    
</div>

<div class="col-md-12">
    <div class="hidden-print with-border float-left">
        <button id="btnAddBuilding" class="btn btn-primary my-3" type="button"><span class="ladda-label"><i class="la la-plus"></i></span> {{ trans('flexi.units.add_building') }}</button>
    </div>
</div>

@push('crud_fields_styles')
    <style>
        .building-content {
            border: 1px solid rgba(0,40,100,.12)!important;
        }
    </style>
@endpush

@push('crud_fields_scripts')
    <script type="text/javascript">

        $(document).ready(function() {
            
            // $('input[name="unit_swimming_pool[]"]').next().addClass('unit_swimming_pool');
            // function select_field() {
            //     // $('.unit_swimming_pool').each(function(index, value) {
            //     //     console.log(index, value);
            //     // });
            //     document.getElementsByClassName('unit_swimming_pool').forEach((element, index) => {
            //         console.log(index, element);
            //         console.log(document.getElementsByClassName('unit_swimming_pool')[index].getAttribute('type'));
            //     });
            // }
            
            // select_field();
            
            $("#btnAddBuilding").click(function(){     

                // var building = $(".building-content:first-child").clone()
                var building = $('.hidden-clone-building.d-none').find(".building-content").clone()
                building.find('input[type=text]').val('');
                building.find('input[type=number]').val('');
                building.find('input[type=hidden]').val('');
                building.find('input[type=checkbox]').removeAttr("checked","checked");
                building.find('input[type=checkbox]').prop('checked', false);
                building.find('.remove-value').children('option').removeAttr('selected');

                building.appendTo(".building-wrapper");
                rmInitializeFieldsWithJavascript('.building-wrapper')
                // $(".building-content:last-child").find('.building-title .building-id').html($(".building-content").length);
                $(".building-content:last-child").find('.building-title .building-id').html($(".building-content").length - 1);
                
                new Noty({
                    text: 'New building form has been created.',
                    type: 'success'
                }).show();
            });
            
            $('body').on('click','.remove-building',function(){

                $('input[name="hidden_delete_id[]"]').val($(this).attr('data-id')+',');

                if($(".building-content").length > 1){
                    $(this).closest('.building-content').remove();
                    $( ".building-content .building-title .building-id" ).each(function(index, value) {
                        // $(value).text(`${index + 1}`);
                        $(value).text(index);
                    });
                    new Noty({
                        text: 'Building form has been deleted.',
                        type: 'success'
                    }).show();
                }else{
                    new Noty({
                        text: '{{ trans("flexi.units.building_form_cannot_be_removed") }}',
                        type: 'danger'
                    }).show();
                }
            });
            $('body').on('click','.remove-floor',function(){
                $(this).closest('.building-floor').remove();
                new Noty({
                    text: '{{ trans("flexi.units.floor_has_been_successfully_deleted") }}',
                    type: 'success'
                }).show();
            });
        });

    </script>
@endpush