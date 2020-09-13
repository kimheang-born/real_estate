@php
    $buildingNo = 1;
@endphp
@foreach($entry->unitOnlyParent as $building)
    <div class="building-content z-depth-1-half rounded p-3 mb-3">
        <div class="row">
            <div class="d-flex justify-content-between col-md-12">
                <div class="title-left">
                    <h5 class="building-title">@lang('flexi.properties.building') <span class="building-id">{{ $buildingNo }}</span></h5>
                </div>
                <div class="button-right">
                    <button type="button" class="close remove-building" aria-label="Close" data-id="{{ $id }}">
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
                                    <span class="navbar-brand mb-0 h4">{{trans('flexi.units.basic_information')}}</span>
                                </nav>
                            </div>
                            @include('crud::fields.hidden', [
                                "field" => [
                                    "value" => $building->id ?? '', 
                                    "name" => "hidden_id[]", 
                                    "label" => 'ID', 
                                    "type"=> "hidden"
                            ]])
                            @include('crud::fields.flexi.selection_types', [
                                "label" => trans('flexi.units.parents_project'), 
                                "name" => "unit_project_building[]", 
                                "value" => $building->project_building ?? '',
                                "options" => $unitParentsProjectTypes, 
                                'wrapper' => "col-md-12"
                            ])
                            @include('crud::fields.text', [
                                "field" => [
                                    "name" => "unit_project_name[]", 
                                    "label" => trans('flexi.units.project_name'), 
                                    "type" => "text", 
                                    "value" => $building->project_name ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.text', [
                                "field" => [
                                    "name" => "unit_name[]", 
                                    "label" => trans('flexi.units.name'), 
                                    "type"=> "text",
                                    "value" => $building->name ?? '', 
                                    'wrapper' => $colMd12
                            ]])
                            
                            @include('crud::fields.flexi.selection_types', [
                                "label" => trans('flexi.units.current_use'), 
                                "name" => "unit_current_use[]", 
                                "value" => $building->current_use ?? '',
                                "options" => $currentUse,
                                'wrapper' => "col-md-12"
                            ])
                            @include('crud::fields.flexi.selection_types', [
                                "label" => trans('flexi.units.style'), 
                                "name" => "unit_style[]", 
                                "value" => $building->style ?? '',
                                "options" => $buildingStyleTypes,
                                'wrapper' => "col-md-12"
                            ])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_width[]", 
                                    "label" => trans('flexi.units.width'), 
                                    "type" => "number", 
                                    "value" => $building->width ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_length[]", 
                                    "label" => trans('flexi.units.length'), 
                                    "type" => "number",
                                    "value" => $building->length ?? '', 
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_area[]", 
                                    "label" => trans('flexi.units.total_size'), 
                                    "type" => "number", 
                                    "value" => $building->area ?? '', 
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_gross_floor_area[]", 
                                    "label" => trans('flexi.units.gross_floor_area'), 
                                    "type" => "number", 
                                    "value" => $building->gross_floor_area ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_net_floor_area[]", 
                                    "label" => trans('flexi.units.net_floor_area'), 
                                    "type" => "number", 
                                    "value" => $building->net_floor_area ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_bedroom[]", 
                                    "label" => trans('flexi.units.bedroom'), 
                                    "type" => "number", 
                                    "value" => $building->bedroom ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_bathroom[]", 
                                    "label" => trans('flexi.units.bathroom'), 
                                    "type" => "number", 
                                    "value" => $building->bathroom ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_livingroom[]", 
                                    "label" => trans('flexi.units.livingroom'), 
                                    "type" => "number",
                                    "value" => $building->livingroom ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_diningroom[]", 
                                    "label" => trans('flexi.units.diningroom'), 
                                    "type" => "number", 
                                    "value" => $building->diningroom ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_floor[]", 
                                    "label" => trans('flexi.units.floor'), 
                                    "type" => "number", 
                                    "value" => $building->floor ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_stories[]", 
                                    "label" => trans('flexi.units.stories'), 
                                    "type" => "number", 
                                    "value" => $building->stories ?? '',
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
                                    "value" => $building->car_parking ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_motor_parking[]", 
                                    "label" => trans('flexi.units.motor_parking'), 
                                    "type" => "number", 
                                    "value" => $building->motor_parking ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.flexi.checkbox_building', [
                                "field" => [
                                    "name" => "unit_swimming_pool[]", 
                                    "label" => trans('flexi.units.swimming_pool'), 
                                    "type" => "checkbox", 
                                    "value" => $building->swimming_pool ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.flexi.checkbox_building', [
                                "field" => [
                                    "name" => "unit_fitness_gym[]", 
                                    "label" => trans('flexi.units.fitness_gym'), 
                                    "type" => "checkbox", 
                                    "value" => $building->fitness_gym ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.flexi.checkbox_building', [
                                "field" => [
                                    "name" => "unit_lift[]", 
                                    "label" => trans('flexi.units.lift'), 
                                    "type" => "checkbox", 
                                    "value" => $building->lift ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.flexi.checkbox_building', [
                                "field" => [
                                    "name" => "unit_balcony[]", 
                                    "label" => trans('flexi.units.balcony'), 
                                    "type" => "checkbox", 
                                    "value" => $building->balcony ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.flexi.checkbox_building', [
                                "field" => [
                                    "name" => "unit_kitchen[]", 
                                    "label" => trans('flexi.units.kitchen'), 
                                    "type" => "checkbox", 
                                    "value" => $building->kitchen ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.flexi.checkbox_building', [
                                "field" => [
                                    "name" => "unit_security[]", 
                                    "label" => trans('flexi.units.security'), 
                                    "type" => "checkbox", 
                                    "value" => $building->security ?? '',
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
                                    "value" => $building->cost_estimate ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_useful_life[]", 
                                    "label" => trans('flexi.units.useful_life'), 
                                    "type" => "number", 
                                    "value" => $building->useful_life ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_effective_age[]", 
                                    "label" => trans('flexi.units.effective_age'), 
                                    "type" => "number", 
                                    "value" => $building->effective_age ?? '',
                                    'wrapper' => $colMd12
                            ]])
                            @include('crud::fields.number', [
                                "field" => [
                                    "name" => "unit_completion_year[]", 
                                    "label" => trans('flexi.units.completion_year'), 
                                    "type" => "number",
                                    "value" => $building->completion_year ?? '',
                                    'wrapper' => $colMd12
                            ]])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@php
    $buildingNo += 1;
@endphp
@endforeach

