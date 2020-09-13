
<!-- field_type_name -->
@php
    $entityName = $crud->entity_name;
    $lat = $field['set_lat'] ?? 'latitude';
    $lng = $field['set_lng'] ?? 'longitude';

    $setName = is_array($field['name']) && count($field['name']) ? 'latlng' : $field['name'];
    $uuid = Str::uuid();

    $field['wrapper'] = $field['wrapper'] ?? $field['wrapperAttributes'] ?? [];
    $field['wrapper']['id'] = "location-app".$uuid;

    $mapId = 'map-'.$uuid;
    $latlngId = 'latlng-'.$uuid;
    $geoId = 'geolink-'.$uuid;
@endphp
@include('crud::fields.inc.wrapper_start')
    {{-- <label class="d-none">{!! $field['label'] !!}</label> --}}
    
    @php
        $getValue = old($setName) ? old($setName) : '';
        if (isset($entry)) {
            if ($entry->{$lat} && $entry->{$lng}) {
                // dd(1);
                $getValue = $entry->{$lat} .','. $entry->{$lng};
            } else if (isset($field['default']))    {
                $getValue =$field['default'];
            }
        }

    @endphp

    <label for="{{ $latlngId }}">
        @lang('flexi.properties.google_point')
    </label> 
    <label class="font-weight-normal" for="{{ $latlngId }}">
        (Ex. 11.58402229,104.896571700)
    </label>
    <div class="row m-b-15">
        <div class="col-12 col-md-12">
            <div class="input-group">
                <input type="text" 
                {{-- name="fake_latlng_{{$entityName}}"  --}}
                id="{{ $latlngId }}" 
                class="form-control js-keypress-number-comma" 
                placeholder="{{ trans('flexi.properties.enter_latlng') }}" 
                v-model="fakeLatlng" 
                @blur="reloadMap">
               
                
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <a class="col-md-12" id="my-location" @click="getCurrentLocation" style="cursor: pointer;">{{ trans('flexi.properties.my_current_location') }}</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="{{ $geoId }}" class="mt-3 text-break">
                @lang('flexi.properties.geolocation_link')
            </label> 
            <label for="{{ $geoId }}" class="font-weight-normal">
                (Ex. https://www.google.com.kh/maps/ @11.5774458,104.9038455,15z?hl=en)
            </label>
            <input type="text" 
            id="{{ $geoId }}" 
            class="form-control" 
            placeholder="{{ trans('flexi.properties.enter_geolocation_link') }}" 
            v-model="fakeLink" 
            @change="getLatLongFromUrl" >
        </div>
    </div>
    <div id="{{$mapId}}" style="height:500px"></div>
    {{-- :value="`${fakeLat},${fakeLng}`" --}}
    <input
        type="hidden"
        {{-- id="latlng-{{ $setName }}-{{$entityName}}" --}}
        name="{{ $setName }}"
        :value="`${fakeLatlng}`"
        @include('crud::fields.inc.attributes')
    >
    <input
        type="hidden"
        name="{{ $lat }}"
        :value="`${fakeLatlng.split(',')[0]}`"
        @include('crud::fields.inc.attributes')
    >
    <input
        type="hidden"
        name="{{ $lng }}"
        :value="`${fakeLatlng.split(',')[1]}`"
        @include('crud::fields.inc.attributes')
    >
    @if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))
    @push('crud_fields_styles')
        <style>
            .isDisabled {
                pointer-events: none;
                cursor: not-allowed!important;
            }
        </style>
    @endpush
    @push('crud_fields_scripts')
        {{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}
        {{-- ?key=AIzaSyA4tdBAQDWfBVsqBct-QTpV8hjJLJnh2PQ --}}
        <script>
            new Vue({
                el: `#{{$field['wrapper']['id']}}`,
                data: () => ({
                    marker: '',
                    fakeLink:'',
                    fakeLatlng: '{{ $getValue }}'
                }),
                methods: {
                    getLatLongFromUrl: function(){
                        url = this.fakeLink.split('!3d');
                        if(url.length==2){
                            myll = url[1].split('!4d');
                            this.fakeLatlng = myll[0]+','+myll[1]
                            this.reloadMap()
                        }
                    },
                    getCurrentLocation: function () {
                        this.fakeLink = ''
                        this.getLocation();
                    },
                    getLocation: function () {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(this.showPosition);
                        } else {
                            alert("Geolocation is not supported by this browser.");
                        }
                    },
                    showPosition: function (position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;
                        
                        this.fakeLatlng = `${lat},${lng}`;
                        this.myMap(`${lat},${lng}`);
                    },
                    reloadMap: function() {
                        this.fakeLink = ''
                        
                        if (!this.fakeLatlng) {
                            this.fakeLatlng = ''
                        } else {
                            this.myMap(`${this.fakeLatlng }`);
                        }
                    },
                    
                    myMap: function (defaultValue = '11.5760393,104.9230512') {
                        const vm = this;
                        if (this.fakeLatlng) {
                            defaultValue = this.fakeLatlng;
                        }
                        const splitValue = defaultValue.split(',');

                        let mapPropmyMap= {
                            center: new google.maps.LatLng(splitValue[0], splitValue[1]),
                            zoom:16,
                        };
                        let map=new google.maps.Map(document.getElementById("{{ $mapId }}"), mapPropmyMap);

                        this.addMarkermyMap(mapPropmyMap.center, 'Default Marker', map);
                        map.addListener('center_changed', function() {
                            vm.moveMarker(map.getCenter());
                            vm.handleEvent(vm.marker.getPosition(), true);
                        });
                    },

                    moveMarker: function (latlng){
                        this.marker.setPosition(latlng);
                    },
                    
                    handleEvent: function (event, isSetPosition = false) {
                        let lat, lng;

                        if (isSetPosition) {
                            lat = event.lat();
                            lng = event.lng();
                        } else {
                            lat = event.latLng.lat();
                            lng = event.latLng.lng();
                        }
                        
                        this.fakeLatlng = `${lat},${lng}`;
                    },
                    addMarkermyMap: function (latlng,title,map) {
                        this.marker = new google.maps.Marker({
                                position: latlng,
                                map: map,
                                title: title,
                                draggable:true
                        });

                        this.marker.addListener('drag', this.handleEvent);
                        this.marker.addListener('dragend', this.handleEvent);
                    }
                },
                mounted() {
                    this.myMap();
                }
            });
        </script>
    @endpush
@endif
