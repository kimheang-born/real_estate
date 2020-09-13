{{-- <div class="form-group col-md-12 mb-0">
    <div class="building-floors">
        <div class="row">
            <div class="form-group col-md-12 d-flex justify-content-end">
                <button class="btn btn-warning btn-sm create-floor" type="button" ><span class="ladda-label"><i class="la la-plus"></i></span> {{ trans('flexi.units.add_floor') }}</button>
            </div>
        </div>
    </div>
</div> --}}

@push('crud_fields_scripts')

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
    </script>
@endpush
