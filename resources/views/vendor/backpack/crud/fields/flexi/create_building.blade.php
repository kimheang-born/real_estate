<div class="building-content z-depth-1-half rounded p-3 mb-3">
    <div class="row">
        <div class="d-flex justify-content-between col-md-12">
            <div class="title-left">
                <h5 class="building-title">@lang('flexi.properties.building') <span class="building-id">1</span></h5>
            </div>
            <div class="button-right">
                    <button type="button" class="close remove-building" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <nav class="navbar navbar-light bg-light mt-3">
                                <span class="navbar-brand mb-0 h4">@lang('flexi.units.basic_information')</span>
                            </nav>
                        </div>
                        <div class="hidden">
                            <input type="hidden" name="hidden_id[]" value="" class="form-control" />
                        </div>
                        @include('crud::fields.flexi.selection_types', [
                            "label" => trans('flexi.units.parents_project'), 
                            "name" => "unit_project_building[]", 
                            "value" => $unit_project_building,
                            "options" => $unitParentsProjectTypes, 
                            'wrapper' => "col-md-12"
                        ])
                        @include('crud::fields.text', [
                            "field" => [
                                "name" => "unit_project_name[]", 
                                "label" => trans('flexi.units.project_name'), 
                                "type" => "text", 
                                "value" => $unit_project_name,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.text', [
                            "field" => [
                                "name" => "unit_name[]", 
                                "label" => trans('flexi.units.name'), 
                                "type"=> "text",
                                "value" => $unit_name, 
                                'wrapper' => $colMd12
                        ]])                        
                        @include('crud::fields.flexi.selection_types', [
                            "label" => trans('flexi.units.current_use'), 
                            "name" => "unit_current_use[]", 
                            "value" => '',
                            "options" => [], 
                            'wrapper' => "col-md-12"
                        ])
                        @include('crud::fields.flexi.selection_types', [
                            "label" => trans('flexi.units.style'), 
                            "name" => "unit_style[]", 
                            "value" => $unit_style,
                            "options" => $buildingStyleTypes, 
                            'wrapper' => "col-md-12"
                        ])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_width[]", 
                                "label" => trans('flexi.units.width'), 
                                "type" => "number", 
                                "value" => $unit_width,
                                'wrapper' => $colMd12,
                                'attributes' => [
                                    'id' => 'unit_width',
                                ]
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_length[]", 
                                "label" => trans('flexi.units.length'), 
                                "type" => "number",
                                "value" => $unit_length, 
                                'wrapper' => $colMd12,
                                'attributes' => [
                                    'id' => 'unit_length',
                                ]
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_area[]", 
                                "label" => trans('flexi.units.total_size'), 
                                "type" => "number", 
                                "value" => $unit_area, 
                                'wrapper' => $colMd12,
                                'attributes' => [
                                    'id' => 'unit_area',
                                ]
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_gross_floor_area[]", 
                                "label" => trans('flexi.units.gross_floor_area'), 
                                "type" => "number", 
                                "value" => $unit_gross_floor_area,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_net_floor_area[]", 
                                "label" => trans('flexi.units.net_floor_area'), 
                                "type" => "number", 
                                "value" => $unit_net_floor_area,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_bedroom[]", 
                                "label" => trans('flexi.units.bedroom'), 
                                "type" => "number", 
                                "value" => $unit_bedroom,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_bathroom[]", 
                                "label" => trans('flexi.units.bathroom'), 
                                "type" => "number", 
                                "value" => $unit_bathroom,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_livingroom[]", 
                                "label" => trans('flexi.units.livingroom'), 
                                "type" => "number",
                                "value" => $unit_livingroom, 
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_diningroom[]", 
                                "label" => trans('flexi.units.diningroom'), 
                                "type" => "number", 
                                "value" => $unit_diningroom,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_floor[]", 
                                "label" => trans('flexi.units.floor'), 
                                "type" => "number", 
                                "value" => $unit_floor,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_stories[]", 
                                "label" => trans('flexi.units.stories'), 
                                "type" => "number", 
                                "value" => $unit_stories,
                                'wrapper' => $colMd12
                        ]])
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <nav class="navbar navbar-light bg-light mt-3">
                                <span class="navbar-brand mb-0 h4">@lang('flexi.units.features')</span>
                            </nav>
                        </div>
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_car_parking[]", 
                                "label" => trans('flexi.units.car_parking'), 
                                "type" => "number", 
                                "value" => $unit_car_parking,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_motor_parking[]", 
                                "label" => trans('flexi.units.motor_parking'), 
                                "type" => "number", 
                                "value" => $unit_motor_parking,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.flexi.checkbox_building', [
                            "field" => [
                                "name" => "unit_swimming_pool[]", 
                                "label" => trans('flexi.units.swimming_pool'), 
                                "type" => "checkbox", 
                                "value" => $unit_swimming_pool,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.flexi.checkbox_building', [
                            "field" => [
                                "name" => "unit_fitness_gym[]", 
                                "label" => trans('flexi.units.fitness_gym'), 
                                "type" => "checkbox", 
                                "value" => $unit_fitness_gym,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.flexi.checkbox_building', [
                            "field" => [
                                "name" => "unit_lift[]", 
                                "label" => trans('flexi.units.lift'), 
                                "type" => "checkbox", 
                                "value" => $unit_lift,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.flexi.checkbox_building', [
                            "field" => [
                                "name" => "unit_balcony[]", 
                                "label" => trans('flexi.units.balcony'), 
                                "type" => "checkbox", 
                                "value" => $unit_balcony,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.flexi.checkbox_building', [
                            "field" => [
                                "name" => "unit_kitchen[]", 
                                "label" => trans('flexi.units.kitchen'), 
                                "type" => "checkbox", 
                                "value" => $unit_kitchen,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.flexi.checkbox_building', [
                            "field" => [
                                "name" => "unit_security[]", 
                                "label" => trans('flexi.units.security'), 
                                "type" => "checkbox", 
                                "value" => $unit_security,
                                'wrapper' => $colMd12
                        ]])
                        <div class="form-group col-md-12">
                            <nav class="navbar navbar-light bg-light mt-3">
                                <span class="navbar-brand mb-0 h4">@lang('flexi.units.other')</span>
                            </nav>
                        </div>
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_cost_estimate[]", 
                                "label" => trans('flexi.units.cost_estimate'), 
                                "type" => "number", 
                                "value" => $unit_cost_estimate,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_useful_life[]", 
                                "label" => trans('flexi.units.useful_life'), 
                                "type" => "number", 
                                "value" => $unit_useful_life,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_effective_age[]", 
                                "label" => trans('flexi.units.effective_age'), 
                                "type" => "number", 
                                "value" => $unit_effective_age,
                                'wrapper' => $colMd12
                        ]])
                        @include('crud::fields.number', [
                            "field" => [
                                "name" => "unit_completion_year[]", 
                                "label" => trans('flexi.units.completion_year'), 
                                "type" => "number",
                                "value" => $unit_completion_year, 
                                'wrapper' => $colMd12
                        ]])
                    </div>
                </div>
            </div>
        </div>
        {{-- <input type="hidden" name="buildingFloors[]">
        @include('crud::fields.flexi.create_floor') --}}
    </div>
</div>

