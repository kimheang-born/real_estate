@php
    $colMd6 = ['class' => 'form-group col-md-6'];

    $purpose = $entry->data_json['purpose'] ?? '';
    $typeofProperty = $entry->data_json['type_of_property'] ?? '';
    $maxPrice = $entry->data_json['max_price'] ?? '';
    $minPrice = $entry->data_json['min_price'] ?? '';
    $maxSize = $entry->data_json['max_size'] ?? '';
    $minSize = $entry->data_json['min_size'] ?? '';
    $detail = $entry->data_json['detail'] ?? '';

@endphp

@include('crud::fields.select2_from_array', [
    "field" => [
        'name'      => 'purpose',
        'type'      => 'select2_from_array',
        'label'     => trans('flexi.inquiries.purpose'),
        'default'   => $purpose,
        'options'   => $purposeType,
        'allows_null' => true,
        'wrapper'   => $colMd6,
]]) 
@include('crud::fields.select2_from_array', [
    "field" => [
        'name'      => 'type_of_property',
        'type'      => 'select2_from_array',
        'label'     => trans('flexi.inquiries.type_of_property'),
        'default'   => $typeofProperty,
        'options'   => $typeOfProperty,
        'allows_null' => true,
        'wrapper'   => $colMd6,
]])
@include('crud::fields.number', [
    "field" => [
        "name"      => "min_price", 
        "label"     => trans('flexi.inquiries.min_price'), 
        "type"      => "number",
        "default"   => $minPrice,
        'wrapper'   => $colMd6
]])
@include('crud::fields.number', [
    "field" => [
        "name"      => "max_price", 
        "label"     => trans('flexi.inquiries.max_price'), 
        "type"      => "number",
        "default"   => $maxPrice, 
        'wrapper'   => $colMd6
]]) 
@include('crud::fields.number', [
    "field" => [
        "name"      => "min_size", 
        "label"     => trans('flexi.inquiries.min_size'), 
        "type"      => "number",
        "default"   => $minSize,
        'wrapper'   => $colMd6
]]) 
@include('crud::fields.number', [
    "field" => [
        "name"      => "max_size", 
        "label"     => trans('flexi.inquiries.max_size'), 
        "type"      => "number",
        "default"   => $maxSize,
        'wrapper'   => $colMd6
]]) 
@include('crud::fields.textarea', [
    "field" => [
        "name"      => "detail", 
        "label"     => trans('flexi.inquiries.detail'), 
        "type"      => "textarea",
        "default"   => $detail,
        "attributes" => ['rows' => '5'] 
]])