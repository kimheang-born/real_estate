<?php
    $unit_areas = old('unit_area');
    $unit_cost_estimates = old('unit_cost_estimate');
    $unit_names = old('unit_name');
    $unit_widths = old('unit_width');
    $unit_lengths = old('unit_length');
    $unit_stories = old('unit_stories');
    $unit_useful_lifes = old('unit_useful_life');
    $unit_effective_ages = old('unit_effective_age');
    $unit_completion_years = old('unit_completion_year');
    $unit_bedrooms = old('unit_bedroom');
    $unit_bathrooms = old('unit_bathroom');
    $unit_livingrooms = old('unit_livingroom');
    $unit_diningrooms = old('unit_diningroom');
    $unit_car_parkings = old('unit_car_parking');
    $unit_motor_parkings = old('unit_motor_parking');
    $unit_building_types = old('unit_building_type');
    $unit_design_appeal_types = old('unit_design_appeal_type');
    $unit_quality_types = old('unit_quality_type');
    $unit_roofing_types = old('unit_roofing_type');
    $unit_gross_floor_areas = old('unit_gross_floor_area');
    $unit_net_floor_areas = old('unit_net_floor_area');
    $unit_main_walls = old('unit_main_walls');
    $unit_ceilings = old('unit_ceiling');
    $unit_flooring_materials = old('unit_flooring_materials');
    $unit_window_frames = old('unit_window_frames');
    $unit_other_facilities = old('unit_other_facilities');
    $unit_floor_plans = old('unit_floor_plan');
    $unit_rent_income_per_month_if_anys = old('unit_rent_income_per_month_if_any');
    $unit_kitchens = old('unit_kitchen');
    $unit_balconies = old('unit_balcony');
    $unit_swimming_pools = old('unit_swimming_pool');
    $unit_securities = old('unit_security');
    $unit_fitness_gyms = old('unit_fitness_gym');
    $unit_lifts = old('unit_lift');
    $unit_floors = old('unit_floor');
    $unit_current_use = old('unit_current_use');
    $unit_styles = old('unit_style');
    $unit_project_buildings = old('unit_project_building');
    // $building_ids = old('id');   

    if($unit_names) {
        for($i=0; $i<count($unit_names); $i++) {
?>

        @include('crud::fields.flexi.update_building', 
            [
                'unit_area' => $unit_areas[$i],
                'unit_cost_estimate' => $unit_cost_estimates[$i],
                'unit_name' => $unit_names[$i],
                'unit_width' => $unit_widths[$i],
                'unit_length' => $unit_lengths[$i],
                'unit_stories' => $unit_stories[$i],
                'unit_useful_life' => $unit_useful_lifes[$i],
                'unit_effective_age' => $unit_effective_ages[$i],
                'unit_completion_year' => $unit_completion_years[$i],
                'unit_bedroom' => $unit_bedrooms[$i],
                'unit_bathroom' => $unit_bathrooms[$i],
                'unit_livingroom' => $unit_livingrooms[$i],
                'unit_diningroom' => $unit_diningrooms[$i],
                'unit_car_parking' => $unit_car_parkings[$i],
                'unit_building_type' => $unit_building_types[$i],
                'unit_motor_parking' => $unit_motor_parkings[$i],
                'unit_design_appeal_type' => $unit_design_appeal_types[$i],
                'unit_quality_type' => $unit_quality_types[$i],
                'unit_roofing_type' => $unit_roofing_types[$i],
                'unit_gross_floor_area' => $unit_gross_floor_areas[$i],
                'unit_net_floor_area' => $unit_net_floor_areas[$i],
                'unit_main_walls' => $unit_main_walls[$i],
                'unit_ceiling' => $unit_ceilings[$i],
                'unit_flooring_materials' => $unit_flooring_materials[$i],
                'unit_window_frames' => $unit_window_frames[$i],
                'unit_other_facilities' => $unit_other_facilities[$i],
                'unit_floor_plan' => $unit_floor_plans[$i],
                'unit_rent_income_per_month_if_any' => $unit_rent_income_per_month_if_anys[$i],
                'unit_kitchen' => $unit_kitchens[$i],
                'unit_balcony' => $unit_balconies[$i],
                'unit_swimming_pool' => $unit_swimming_pools[$i],
                'unit_security' => $unit_securities[$i],
                'unit_fitness_gym' => $unit_fitness_gyms[$i],
                'unit_lift' => $unit_lifts[$i],
                'unit_floor' => $unit_floors[$i],
                'unit_current_use' => $unit_current_use[$i],
                'unit_style' => $unit_styles[$i],
                'unit_project_building' => $unit_project_buildings[$i],
                // 'id' => $building_ids[$i],         
            ])
<?php
        }
    }else {
?>
    @foreach($entry->unitOnlyParent as $value)
        @include('crud::fields.flexi.update_building', 
        [
            'unit_area' => $value->area ?? '', 
            'unit_cost_estimate' => $value->cost_estimate ?? '',
            'unit_name' => $value->name ?? '',
            'unit_width' => $value->width ?? '',
            'unit_length' => $value->length ?? '',
            'unit_stories' => $value->stories ?? '',
            'unit_useful_life' => $value->useful_life ?? '',
            'unit_effective_age' => $value->effective_age ?? '',
            'unit_completion_year' => $value->completion_year ?? '',
            'unit_bedroom' => $value->bedroom ?? '',
            'unit_bathroom' => $value->bathroom ?? '',
            'unit_livingroom' => $value->livingroom ?? '',
            'unit_diningroom' => $value->diningroom ?? '',
            'unit_car_parking' => $value->car_parking ?? '',
            'unit_building_type' => $value->building_type ?? '',
            'unit_motor_parking' => $value->motor_parking ?? '',
            'unit_design_appeal_type' => $value->design_appeal_type ?? '',
            'unit_quality_type' => $value->quality_type ?? '',
            'unit_roofing_type' => $value->roofing_type ?? '',
            'unit_gross_floor_area' => $value->gross_floor_area ?? '',
            'unit_net_floor_area' => $value->net_floor_area ?? '',
            'unit_main_walls' => $value->main_walls ?? '',
            'unit_ceiling' => $value->ceiling ?? '',
            'unit_flooring_materials' => $value->flooring_materials ?? '',
            'unit_window_frames' => $value->window_frames ?? '',
            'unit_other_facilities' => $value->other_facilities ?? '',
            'unit_floor_plan' => $value->floor_plan ?? '',
            'unit_rent_income_per_month_if_any' => $value->rent_income_per_month_if_any ?? '',
            'unit_kitchen' => $value->kitchen ?? '',
            'unit_balcony' => $value->balcony ?? '',
            'unit_swimming_pool' => $value->swimming_pool ?? '',
            'unit_security' => $value->security ?? '',
            'unit_fitness_gym' => $value->fitness_gym ?? '',
            'unit_lift' => $value->lift ?? '',
            'unit_floor' => $value->floor ?? '',
            'unit_current_use' => $value->unit_current_use ?? '',
            'unit_style' => $value->style ?? '',
            'unit_project_building' => $value->project_building ?? '',
            // 'id' => $value->id ?? '',
        ]) 
    @endforeach

<?php
    }
?>


@push('crud_fields_scripts')

    {{-- Create Building --}}
    <script type="text/javascript">

        $(document).ready(function() {

            $('body').on('click','#btnAddBuilding',function(){

                var html =  '';
                
                html +='<div class="building-content z-depth-1-half rounded p-3 mb-3">';
                    html +='<div class="row">';
                        html +='<div class="form-group col-md-12 d-flex justify-content-end mb-0">';
                            html +='<button type="button" class="close remove-building" aria-label="Close">';
                                html +='<span aria-hidden="true">×</span>';
                            html +='</button>';
                        html +='</div>';
                        html +='<div class="form-group col-md-12">';
                            html +='<div class="row">';
                                html +='<div class="col-md-6">';
                                    html +='<div class="row">';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<nav class="navbar navbar-light bg-light mt-3">';
                                                html +='<span class="navbar-brand mb-0 h4">Basic Information</span>';
                                            html +='</nav>';
                                        html +='</div>';
                                        html +='<div class="hidden">';
                                            html +='<input type="hidden" name="hidden_id[]" value="" class="form-control" />';
                                        html +='</div>';
                                        // html +='<div class="form-group col-md-12">';
                                        //     html +='<label>Parents Project</label>';
                                        //     html +='<select name="unit_project_building[]" class="form-control">';
                                        //         html +='<option value="">-</option>';
                                        //         html +='<option value="Borey Peng Hout">Borey Peng Hout</option>';
                                        //         html +='<option value="Borey Leng Navatra">Borey Leng Navatra</option>';
                                        //     html +='</select>';
                                        // html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label>Building Name/House Type</label>';
                                            html +='<input type="text" name="unit_name[]" value="" class="form-control" />';
                                        html +='</div>';
                                        // html +='<div class="form-group col-md-12">';
                                        //     html +='<label>Style</label>';
                                        //     html +='<select name="unit_style[]" class="form-control">';
                                        //         html +='<option value="">-</option>';
                                        //         html +='<option value="Modern">Modern</option>';
                                        //         html +='<option value="Classic">Classic</option>';
                                        //     html +='</select>';
                                        // html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_width[]">Width</label>';
                                            html +='<input type="number" name="unit_width[]" id="unit_width[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_length[]">Length</label>';
                                            html +='<input type="number" name="unit_length[]" id="unit_length[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_gross_floor_area[]">Gross Floor Area</label>';
                                            html +='<input type="number" name="unit_gross_floor_area[]" id="unit_gross_floor_area[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_net_floor_area[]">Net Floor Area</label>';
                                            html +='<input type="number" name="unit_net_floor_area[]" id="unit_net_floor_area[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_bedroom[]"># of Bedroom</label>';
                                            html +='<input type="number" name="unit_bedroom[]" id="unit_bedroom[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_bathroom[]"># of Bathroom</label>';
                                            html +='<input type="number" name="unit_bathroom[]" id="unit_bathroom[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_livingroom[]"># of Living Room</label>';
                                            html +='<input type="number" name="unit_livingroom[]" id="unit_livingroom[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_diningroom[]"># of Dining Room</label>';
                                            html +='<input type="number" name="unit_diningroom[]" id="unit_diningroom[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_floor[]"># of Floor</label>';
                                            html +='<input type="number" name="unit_floor[]" id="unit_floor[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_stories[]"># of Stories</label>';
                                            html +='<input type="number" name="unit_stories[]" id="unit_stories[]" value="" class="form-control" />';
                                        html +='</div>';
                                    html +='</div>';
                                html +='</div>';
                                html +='<div class="col-md-6">';
                                    html +='<div class="row">';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<nav class="navbar navbar-light bg-light mt-3">';
                                                html +='<span class="navbar-brand mb-0 h4">Features</span>';
                                            html +='</nav>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_car_parking[]">Car Parkings</label>';
                                            html +='<input type="number" name="unit_car_parking[]" id="unit_car_parking[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_motor_parking[]">Motor Parkings</label>';
                                            html +='<input type="number" name="unit_motor_parking[]" id="unit_motor_parking[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<div class="checkbox">';
                                                html +='<input type="hidden" name="unit_swimming_pool[]" value="0" />';
                                                html +='<input type="checkbox" data-init-function="bpFieldInitCheckbox" id="unit_swimming_pool[]_checkbox" />';
                                                html +='<label class="form-check-label font-weight-normal" for="unit_swimming_pool[]_checkbox">Swimming Pool</label>';
                                            html +='</div>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<div class="checkbox">';
                                                html +='<input type="hidden" name="unit_fitness_gym[]" value="0" />';
                                                html +='<input type="checkbox" data-init-function="bpFieldInitCheckbox" id="unit_fitness_gym[]_checkbox" />';
                                                html +='<label class="form-check-label font-weight-normal" for="unit_fitness_gym[]_checkbox">Fitness Gym</label>';
                                            html +='</div>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<div class="checkbox">';
                                                html +='<input type="hidden" name="unit_lift[]" value="0" />';
                                                html +='<input type="checkbox" data-init-function="bpFieldInitCheckbox" id="unit_lift[]_checkbox" />';
                                                html +='<label class="form-check-label font-weight-normal" for="unit_lift[]_checkbox">Lift</label>';
                                            html +='</div>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<div class="checkbox">';
                                                html +='<input type="hidden" name="unit_balcony[]" value="0" />';
                                                html +='<input type="checkbox" data-init-function="bpFieldInitCheckbox" id="unit_balcony[]_checkbox" />';
                                                html +='<label class="form-check-label font-weight-normal" for="unit_balcony[]_checkbox">Balcony</label>';
                                            html +='</div>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<div class="checkbox">';
                                                html +='<input type="hidden" name="unit_kitchen[]" value="0" />';
                                                html +='<input type="checkbox" data-init-function="bpFieldInitCheckbox" id="unit_kitchen[]_checkbox" />';
                                                html +='<label class="form-check-label font-weight-normal" for="unit_kitchen[]_checkbox">Kitchen</label>';
                                            html +='</div>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<div class="checkbox">';
                                                html +='<input type="hidden" name="unit_security[]" value="0" />';
                                                html +='<input type="checkbox" data-init-function="bpFieldInitCheckbox" id="unit_security[]_checkbox" />';
                                                html +='<label class="form-check-label font-weight-normal" for="unit_security[]_checkbox">Security Guard</label>';
                                            html +='</div>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<nav class="navbar navbar-light bg-light mt-3">';
                                                html +='<span class="navbar-brand mb-0 h4">Other</span>';
                                            html +='</nav>';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_cost_estimate[]">Cost Estimate</label>';
                                            html +='<input type="number" name="unit_cost_estimate[]" id="unit_cost_estimate[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_useful_life[]">Useful Life</label>';
                                            html +='<input type="number" name="unit_useful_life[]" id="unit_useful_life[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_effective_age[]">Effective Ages</label>';
                                            html +='<input type="number" name="unit_effective_age[]" id="unit_effective_age[]" value="" class="form-control" />';
                                        html +='</div>';
                                        html +='<div class="form-group col-md-12">';
                                            html +='<label for="unit_completion_year[]">Completion Year</label>';
                                            html +='<input type="number" name="unit_completion_year[]" id="unit_completion_year[]" value="" class="form-control" />';
                                        html +='</div>';
                                    html +='</div>';
                                html +='</div>';
                            html +='</div>';
                        html +='</div>';
                        html +='<input type="hidden" name="buildingFloors[]" />';
                    html +='</div>';
                html +='</div>';

                $('.building-wrapper').append(html);

                new Noty({
                    text: 'New floor form has been created.',
                    type: 'success'
                }).show();
            });
            $('body').on('click','.remove-building',function(){
                $(this).closest('.building-content').remove();
                new Noty({
                    text: 'Building form has been deleted.',
                    type: 'success'
                }).show();
                // if($(".building-content").length > 1){
                //     $(this).closest('.building-content').remove();
                //     new Noty({
                //         text: 'Building form has been deleted.',
                //         type: 'success'
                //     }).show();
                // }
                // else{
                //     new Noty({
                //         text: '{{ trans("flexi.units.building_form_cannot_be_removed") }}',
                //         type: 'danger'
                //     }).show();
                // }
            });
        });

    </script>

    {{-- Create Floor --}}
    <script type="text/javascript">

        $(document).ready(function() {

            // CREATE FLOOR

            $('body').on('click','.create-floor',function(){

                var closest = $(this).closest('.building-floors');
                var count = closest.find('.building-floor').length + 1;
                var html =  '';

                html +='<div class="building-floor z-depth-1 rounded p-3 mb-3" style="border: 1px solid black;">';
                    html+='<div class="row">';
                        html+='<div class="form-group col-md-12 d-flex justify-content-between">';
                            html+='<div class="unit-title">';
                                html+='<h6 class="font-weight-bold text-uppercase">@lang('flexi.units.floor') '+count+'</h6>';
                            html+='</div>';
                            html+='<button type="button" class="close remove-floor" aria-label="Close">';
                                html+='<span aria-hidden="true">&times;</span>';
                            html+='</button>';
                        html+='</div>';
                        html+='<div  id="wrap-floor"></div>';
                            html+='<input type="hidden" name="floor-hidden-id" value="">';
                            html+='<div class="form-group col-md-6">';
                                html+='<label for="name">@lang('flexi.units.name')</label>';
                                html+='<input type="text" class="form-control" name="floor_name" id="floor_name">';
                            html+='</div>';
                            html+='<div class="form-group col-md-6">';
                                    html+='<label for="width">@lang('flexi.units.width')</label>';
                                    html+='<input type="number" class="form-control" name="floor_width" id="floor_width">';
                            html+='</div>';
                            html+='<div class="form-group col-md-6">';
                                    html+='<label for="area">@lang('flexi.units.length')</label>';
                                    html+='<input type="number" class="form-control" name="floor_length" id="floor_length">';
                            html+='</div>';
                            html+='<div class="form-group col-md-6">';
                                    html+='<label for="length">@lang('flexi.units.total')</label>';
                                    html+='<input type="number" class="form-control" name="floor_area" id="floor_area">';
                            html+='</div>';
                            html+='<div class="form-group col-md-6">';
                                    html+='<label for="estimated_cost_new">@lang('flexi.units.cost_estimates')</label>';
                                    html+='<input type="number" class="form-control" name="floor_cost_estimate" id="floor_cost_estimate">';
                            html+='</div>';
                            html+='<div class="form-group col-md-6">';
                                    html+='<label for="effective_age">@lang('flexi.units.effective_age')</label>';
                                    html+='<input type="number" class="form-control" name="floor_effective_age" id="floor_effective_age">';
                            html+='</div>';
                            html+='<div class="form-group col-md-6">';
                                    html+='<label for="useful_life">@lang('flexi.units.useful_life')</label>';
                                    html+='<input type="number" class="form-control" name="floor_useful_life" id="floor_useful_life">';
                            html+='</div>';
                        html+='</div>';
                    html+='</div>';
                html+='</div>';

                $(this).closest(".building-floors").append(html);
                new Noty({
                    text: 'New floor form has been created.',
                    type: 'success'
                }).show();
            });
            $('body').on('click','.remove-floor',function(){
                $(this).closest('.building-floor').remove();
                new Noty({
                    text: '{{ trans("flexi.units.floor_has_been_successfully_deleted") }}',
                    type: 'success'
                }).show();
            });
        });

        $(document).ready(function() {

            // GET ALL BUILDING FLOORS BEFOR FORM SUBMIT

            $("form").submit(function(){

                var buildings = $('.building-content');

                buildings.each(function(index, value){

                    var floors =  $(this).find(".building-floor")
                    var buildingFloors = new Array();
                    var arrayFloors = new Array();

                    floors.each(function(){

                        var getFloorInputs = new Array();
                        var inputs = $(this).find('input');

                        inputs.each(function(){
                            var name = $(this).attr('name');
                            var value = $(this).val();
                            getFloorInputs.push({ name : name, value : value });
                        });

                        arrayFloors.push(getFloorInputs);
                        // console.log(getFloorInputs);

                    });

                    buildingFloors.push(arrayFloors);
                    $(this).find('input[name="buildingFloors[]"]').val(JSON.stringify(buildingFloors));

                    console.log(buildingFloors);
                });
            });
        });

        $(function(){
            $(".remove-building").click(function(){
                $('.btnConfirmDeletePropertyBuilding').attr('data-id',$(this).attr('data-id'));
                $('#modalConfirmDeletePropertyBuilding').modal('show');
            })
            // $(".btnConfirmDeleteBuilding").click(function(){
            //     var building_id = $(this).attr('data-id');

            //     $.ajax({
            //         dataType: "json",
            //         url: "{{ route('web-api.building.delete') }}",
            //         data: { building_id : building_id},
            //     success: function (respond) {
            //             if(respond.message == true){
            //                 $('tr.unit-index'+building_id+'-remove').remove();
            //                 $('#modalConfirmDeleteBuilding').modal('hide');
            //                 new Noty({
            //                     text: 'The item has been deleted successfully',
            //                     type: 'success'
            //                 }).show();
            //             }else{
            //                 $('#modalConfirmDeleteBuilding').modal('hide');
            //                 new Noty({
            //                     text: 'Your item might not have been deleted.',
            //                     type: 'danger'
            //                 }).show();
            //             }
            //         },
            //     });
            // })
        });

    </script>
@endpush