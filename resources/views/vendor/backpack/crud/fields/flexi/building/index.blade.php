
<div class="col-md-12">
    <div class="hidden-print with-border float-right">
        <button id="btnAddBuilding" class="btn btn-primary" type="button"><span class="ladda-label"><i class="la la-plus"></i></span> {{ trans('flexi.units.add_building') }}</button>
    </div>
</div>
<div class="col-md-12 building-wrapper pt-3">
    @include('crud::fields.flexi.building.form_create')
</div>
