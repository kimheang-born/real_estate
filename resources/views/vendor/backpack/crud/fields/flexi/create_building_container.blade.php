<?php
    // var_dump(old('unit_area'));echo '<br>';
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
    $unit_project_names = old('unit_project_name');
    
    if($unit_names) {
        for($i=0; $i<count($unit_names); $i++) {
?>

        @include('crud::fields.flexi.create_building', 
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
                'unit_project_name' => $unit_project_names[$i],
            ])
<?php
        }
    }else {
?>
        @include('crud::fields.flexi.create_building', 
            [
                'unit_area'=>'', 
                'unit_cost_estimate' => '',
                'unit_name' => '',
                'unit_width' => '',
                'unit_length' => '',
                'unit_stories' => '',
                'unit_useful_life' => '',
                'unit_effective_age' => '',
                'unit_completion_year' => '',
                'unit_bedroom' => '',
                'unit_bathroom' => '',
                'unit_livingroom' => '',
                'unit_diningroom' => '',
                'unit_car_parking' => '',
                'unit_building_type' => '',
                'unit_motor_parking' => '',
                'unit_design_appeal_type' => '',
                'unit_quality_type' => '',
                'unit_roofing_type' => '',
                'unit_gross_floor_area' => '',
                'unit_net_floor_area' => '',
                'unit_main_walls' => '',
                'unit_ceiling' => '',
                'unit_flooring_materials' => '',
                'unit_window_frames' => '',
                'unit_other_facilities' => '',
                'unit_floor_plan' => '',
                'unit_rent_income_per_month_if_any' => '',
                'unit_kitchen' => '',
                'unit_balcony' => '',
                'unit_swimming_pool' => '',
                'unit_security' => '',
                'unit_fitness_gym' => '',
                'unit_lift' => '',
                'unit_floor' => '',
                'unit_current_use' => '',
                'unit_style' => '',
                'unit_project_building' => '',
                'unit_project_name' => '',
            ]) 
<?php
    }
?>