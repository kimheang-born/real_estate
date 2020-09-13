
<li id="address-{{ $filter->name.$crud->entity_name }}" filter-name="{{ $filter->name }}" filter-type="{{ $filter->type }}" class="address d-flex nav-item dropdown {{ Request::get($filter->name) ? 'active' : '' }}">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $filter->label }} <span class="caret"></span></a>
        <div class="dropdown-menu">
            <div class="form-group backpack-filter mb-0">
                <div class="input-group">
                    <div class="rows">

                        <div class="col-sm-12">
                            <label>City</label>
                            <select class="form-control" @change="cityChange" v-model="frm.city" :disabled="JSON.stringify(cities).length==2">
                                <option v-for="(val, text) in cities" :value="val">@{{text}}</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label>District</label>
                            <select class="form-control" @change="districChange"  v-model="frm.distric" :disabled="JSON.stringify(districs).length==2">
                                <option v-for="(val, text) in districs" :value="val">@{{text}}</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label>Commune</label>
                            <select class="form-control" @change="communeChange"  v-model="frm.commune" :disabled="JSON.stringify(communes).length==2">
                                <option v-for="(val, text) in communes" :value="val">@{{text}}</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label>Village</label>
                            <select class="form-control" @change="villageChange" v-model="frm.village" :disabled="JSON.stringify(villages).length==2">
                                <option v-for="(val, text) in villages" :value="val">@{{text}}</option>
                            </select>
                        </div>

                        <input type="hidden" v-model="hidden" name="{{ $filter->name }}" id="hidden-address-{{ Str::slug($filter->name) }}">
                        <div class="clearfix"></div>

                        <div class="col-sm-12 mt-3 btn-toolbar">
                            {{-- <div class="btn-toolbar"> --}}
                            <div class="btn-group mr-2">
                                <button class="btn btn-success btn-sm" id="address-apply-{{ Str::slug($filter->name) }}" type="button">Apply</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-sm" @click="clearAddress">Clear</button>
                            </div>
                            {{-- </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </li>

    {{-- ########################################### --}}
    {{-- Extra CSS and JS for this particular filter --}}


    {{-- FILTERS EXTRA JS --}}
    {{-- push things in the after_scripts section --}}

    @push('crud_list_scripts')
        <!-- include select2 js-->
      <script>
            jQuery(document).ready(function($) {
                $('.address .dropdown-menu').click(function(e) {
                    e.stopPropagation();
                });
                $('#address-apply-{{ Str::slug($filter->name) }}').on('click', function(e) {
                    if ($("#crudTable").length > 0) {

                        var parameter = '{{ $filter->name }}';
                        // var value = $(this).val();
                        var value = $('#hidden-address-{{ Str::slug($filter->name) }}').val();
                        // alert(value);

                        // behaviour for ajax table
                        var ajax_table = $('#crudTable').DataTable();
                        var current_url = ajax_table.ajax.url();
                        var new_url = addOrUpdateUriParameter(current_url, parameter, value);

                        // replace the datatables ajax url with new_url and reload it
                        new_url = normalizeAmpersand(new_url.toString());
                        ajax_table.ajax.url(new_url).load();
                        // mark this filter as active in the navbar-filters

                        crud.updateUrl(new_url);
                        if (URI(new_url).hasQuery('{{ $filter->name }}', true)) {
                            $('li[filter-name={{ $filter->name }}]').removeClass('active').addClass('active');
                        } else {
                            $('li[filter-name={{ $filter->name }}]').trigger('filter:clear');
                        }
                    }else {
                        mySearchSubmit();
                    }
                    $('#address-{{ $filter->name.$crud->entity_name }}').trigger('click')

                });

                $('li[filter-name={{ Str::slug($filter->name) }}]').on('filter:clear', function(e) {
                    $('li[filter-name={{ $filter->name }}]').removeClass('active');
                    $('#text-filter-{{ Str::slug($filter->name) }}').val('');
                });

                // datepicker clear button
                $(".text-filter-{{ Str::slug($filter->name) }}-clear-button").click(function(e) {
                    e.preventDefault();

                    $('li[filter-name={{ Str::slug($filter->name) }}]').trigger('filter:clear');
                    $('#text-filter-{{ Str::slug($filter->name) }}').val('');
                    $('#text-filter-{{ Str::slug($filter->name) }}').trigger('change');
                })
            });
      </script>
    @endpush
    {{-- End of Extra CSS and JS --}}
    {{-- ########################################## --}}
@push('after_scripts')
        {{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}
        <script>
            var appAddress = new Vue({
                el: '#address-{{ $filter->name.$crud->entity_name }}',
                data: {
                    toggleDropdown: false,
                    cities:{},
                    districs:{},
                    communes:{},
                    villages:{},
                    frm:{},
                    hidden: "{{ Request::get($filter->name) }}"
                    // hidden:"{{ old($filter->name) ? old($filter->name) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
                },
                methods:{
                    clearAddress: function () {
                        this.frm = {};
                        this.hidden = '';
                        this.cities = this.districs = this.communes = this.villages = {};
                        var me = this;
                        this.getData().then(function(response){
                            me.cities = response.data;
                        });

                         $('#address-{{ $filter->name.$crud->entity_name }}').trigger('click')
                         $('#address-apply-{{ Str::slug($filter->name) }}').trigger('click')

                    },
                    cityChange: async function(){
                        var me = this;
                        this.hidden = this.frm.city;
                         await this.getData(this.frm.city).then(function(response){
                            me.districs = response.data;
                            me.communes={};
                            me.villages={};
                        });
                    },
                    districChange: async function(){
                        var me = this;
                        this.hidden = this.frm.distric;
                         await this.getData(this.frm.distric).then(function(response){
                            me.communes = response.data;
                            me.villages={};
                        });
                    },
                    communeChange: async function(){
                        var me = this;
                        this.hidden = this.frm.commune;
                         await this.getData(this.frm.commune).then(function(response){
                            me.villages = response.data;
                        });
                    },
                    villageChange:function(){
                        this.hidden = this.frm.village;
                    },
                    getData:function(code=''){
                        if(code)
                           { return axios.get('{{route("web-api.address.index")}}?code='+code)}
                        else
                            {return axios.get('{{route("web-api.address.index")}}')}
                    }
                },
                created: async function(){
                    var me = this;
                    this.getData().then(function(response){
                       me.cities = response.data;
                    });
                    if(this.hidden.length>1){
                        var str = this.hidden;
                        var take = 2;
                        var i = 1;

                        do {
                            var res = str.substring(0, take*i);
                            if(i==1){
                                this.frm.city=res;
                                await this.cityChange();
                            }
                            if(i==2){
                                this.frm.distric=res;
                                await this.districChange();
                            }
                            if(i==3){
                                this.frm.commune=res;
                                await this.communeChange();
                            }
                            if(i==4){
                                this.frm.village=res;
                                await this.villageChange();
                            }
                            i++;
                        } while (res!=str);
                    }
                }
            });
        </script>

      @endpush
