<div class="col-md-12">
    <div class="table-responsive mb-3">
        <table class="table border mb-0">
            <thead class="thead">
                <tr>
                    <th class="border text-center" scope="col"></th>
                    <th class="border text-center" colspan="2" scope="col">@lang('flexi.listings.asking_price')</th>
                    <th class="border text-center" colspan="2">@lang('flexi.listings.negotiable_price')</th>
                    <th class="border text-center" colspan="2">@lang('flexi.listings.listing_price')</th>
                    <th class="border text-center" colspan="2">@lang('flexi.listings.sold_or_rented')</th>
                    <th class="border text-center">@lang('flexi.listings.commission')</th>
                </tr>
                <tr>
                    <th class="border text-center" scope="col" width="10%"></th>
                    <th class="border text-center" scope="col" width="10%">@lang('flexi.listings.total')</th>
                    <th class="border text-center text-nowrap" scope="col" width="10%">@lang('flexi.listings.per_sqm')</th>
                    <th class="border text-center" scope="col" width="10%">@lang('flexi.listings.total')</th>
                    <th class="border text-center text-nowrap" scope="col" width="10%">@lang('flexi.listings.per_sqm')</th>
                    <th class="border text-center" scope="col" width="10%">@lang('flexi.listings.total')</th>
                    <th class="border text-center text-nowrap" scope="col" width="10%">@lang('flexi.listings.per_sqm')</th>
                    <th class="border text-center" scope="col" width="10%">@lang('flexi.listings.total')</th>
                    <th class="border text-center text-nowrap" scope="col" width="10%">@lang('flexi.listings.per_sqm')</th>
                    <th class="border text-center" scope="col" width="10%">@lang('flexi.listings.total')</th>
                </tr>
            </thead>
                <tbody>
                    <tr class="input-field">
                        <th class="border text-center p-1 align-middle" scope="row">@lang('flexi.listings.sale')</th>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sale_price_asking',
                                    'value' => $entry->sale_price_asking ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sale_asking_price_per_sqm',
                                    'value' => $entry->sale_asking_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sale_price',
                                    'value' => $entry->sale_price ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sale_price_per_sqm',
                                    'value' => $entry->sale_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sale_list_price',
                                    'value' => $entry->sale_list_price ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sale_listing_price_per_sqm',
                                    'value' => $entry->sale_listing_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sold_price',
                                    'value' => $entry->sold_price ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'sold_price_per_sqm',
                                    'value' => $entry->sold_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.text_no_label', ['field' => [
                                    'name' => 'sale_commission',
                                    'value' => $entry->sale_commission ?? ''
                                ]])
                        </td>
                    </tr>
                    <tr>
                        <th class="border text-center p-1 align-middle" scope="row">@lang('flexi.listings.rent')</th>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rent_price_asking',
                                    'value' => $entry->rent_price_asking ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rent_asking_price_per_sqm',
                                    'value' => $entry->rent_asking_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rent_price',
                                    'value' => $entry->rent_price ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rent_price_per_sqm',
                                    'value' => $entry->rent_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rent_list_price',
                                    'value' => $entry->rent_list_price ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rent_listing_price_per_sqm',
                                    'value' => $entry->rent_listing_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rented_price',
                                    'value' => $entry->rented_price ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.number_no_label', ['field' => [
                                    'name' => 'rented_price_per_sqm',
                                    'value' => $entry->rented_price_per_sqm ?? ''
                                ]])
                        </td>
                        <td class="border text-center p-0">
                            @include('crud::fields.flexi.text_no_label', ['field' => [
                                    'name' => 'rental_commission',
                                    'value' => $entry->rental_commission ?? ''
                                ]])
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>

@push('crud_fields_scripts')
    <script type="text/javascript">
        $('#sale_asking_price_per_sqm').attr('step', 'any');
        $('#sale_price_per_sqm').attr('step', 'any');
        $('#sale_listing_price_per_sqm').attr('step', 'any');
        $('#sold_price_per_sqm').attr('step', 'any');

        $('#rent_asking_price_per_sqm').attr('step', 'any');
        $('#rent_price_per_sqm').attr('step', 'any');
        $('#rent_listing_price_per_sqm').attr('step', 'any');
        $('#rented_price_per_sqm').attr('step', 'any');

        // function calculateSQM($value1, $value2){

        //     $(".price_and_commission").on('change', function() {
        //         var x = document.getElementById('land_area').value;
        //         x = parseFloat(x);

        //         var y = document.getElementById($value1).value;
        //         y = parseFloat(y);

        //         if(Number.isNaN(x))
        //         x = 0;
        //         else if(Number.isNaN(y))
        //         x = 0;

        //         document.getElementById($value2).value = (y / x).toFixed(2);
        //     });
        // }

        $(document).ready(function(){
            $(".price_and_commission").keypress(function(e) {

                var ch = String.fromCharCode(e.which);
                if (this.value.includes('.')) {
                    if (!(/[0-9]/).test(ch)) {
                        e.preventDefault();
                        return false;
                    }
                }
                if (!(/[0-9,.]/).test(ch)) {
                    e.preventDefault();
                }


                var totalSize = $('#land_area');
                $(`#${this.getAttribute('id')}`).on('click', function(e) {
                    $(`#${this.getAttribute('id')}`).popover('hide');
                });
                if (!totalSize.val()) {
                    e.preventDefault();
                    totalSize.addClass('is-invalid');
                    $(`#${this.getAttribute('id')}`).popover({
                        html: true,
                        content: '<a href="#land_area">Go to</a>',
                        title: "Please input Total Size!"
                    });
                    $(`#${this.getAttribute('id')}`).popover('show');
                    setTimeout(() => {
                        $(`#${this.getAttribute('id')}`).popover('hide');
                    }, 3000);
                }
            });

            function calculateSQM(totalSize, thePrice, componentId) {
                if (totalSize && thePrice) {
                    var x = parseFloat(totalSize);
                    var y = parseFloat(thePrice);
                    var result = (y / x).toFixed(2);
                    $(componentId).val(result);
                }
            }

            $(".price_and_commission").on('change', function(e) {
                var totalSize = $('#land_area').val();
                var thePrice = this.value;

                if (this.getAttribute('id') == 'sale_price_asking') calculateSQM(totalSize, thePrice, '#sale_asking_price_per_sqm');
                else if (this.getAttribute('id') == 'sale_price') calculateSQM(totalSize, thePrice, '#sale_price_per_sqm');
                else if (this.getAttribute('id') == 'sale_list_price') calculateSQM(totalSize, thePrice, '#sale_listing_price_per_sqm');
                else if (this.getAttribute('id') == 'sold_price') calculateSQM(totalSize, thePrice, '#sold_price_per_sqm');
                else if (this.getAttribute('id') == 'rent_price_asking') calculateSQM(totalSize, thePrice, '#rent_asking_price_per_sqm');
                else if (this.getAttribute('id') == 'rent_price') calculateSQM(totalSize, thePrice, '#rent_price_per_sqm');
                else if (this.getAttribute('id') == 'rent_list_price') calculateSQM(totalSize, thePrice, '#rent_listing_price_per_sqm');
                else if (this.getAttribute('id') == 'rented_price') calculateSQM(totalSize, thePrice, '#rented_price_per_sqm');
            //     calculateSQM($value1 = 'sale_list_price', $value2 = 'sale_listing_price_per_sqm');
            //     calculateSQM($value1 = 'sold_price', $value2 = 'sold_price_per_sqm');

            //     // RENT
            //     calculateSQM($value1 = 'rent_price_asking', $value2 = 'rent_asking_price_per_sqm');
            //     calculateSQM($value1 = 'rent_price', $value2 = 'rent_price_per_sqm');
            //     calculateSQM($value1 = 'rent_list_price', $value2 = 'rent_listing_price_per_sqm');
            //     calculateSQM($value1 = 'rented_price', $value2 = 'rented_price_per_sqm');
            });

            // $(".price_and_commission").on('input', function(e) {
            //     inpPrice = this.value;
            //     // if (this.value.includes('.')) {
            //     //     var arr = this.value.split('.');
            //     //     if (arr[arr.length - 1].length > 2) e.preventDefault();
            //     // }
            // });

            $("#land_area").on('change', function(e) {
                if ($(this).hasClass('is-invalid')) {
                    $(this).removeClass('is-invalid');
                }
            });

            // if ($('#land_area').val()) {
            //     // SALE
            //     calculateSQM($value1 = 'sale_price_asking', $value2 = 'sale_asking_price_per_sqm');
            //     calculateSQM($value1 = 'sale_price', $value2 = 'sale_price_per_sqm');
            //     calculateSQM($value1 = 'sale_list_price', $value2 = 'sale_listing_price_per_sqm');
            //     calculateSQM($value1 = 'sold_price', $value2 = 'sold_price_per_sqm');

            //     // RENT
            //     calculateSQM($value1 = 'rent_price_asking', $value2 = 'rent_asking_price_per_sqm');
            //     calculateSQM($value1 = 'rent_price', $value2 = 'rent_price_per_sqm');
            //     calculateSQM($value1 = 'rent_list_price', $value2 = 'rent_listing_price_per_sqm');
            //     calculateSQM($value1 = 'rented_price', $value2 = 'rented_price_per_sqm');
            // }

            // $('#sale_commission').keyup(function () {
            //     this.value = this.value.replace(/[^0-9%\.]/g,'');
            // });
            // $('#rental_commission').keyup(function () {
            //     this.value = this.value.replace(/[^0-9%\.]/g,'');
            // });

            $('#sale_commission').keypress(function(e) {
                var ch = String.fromCharCode(e.which);
                if (!(/[0-9,%,.]/).test(ch)) {
                    e.preventDefault();
                }
            });
            $('#rental_commission').keypress(function(e) {
                var ch = String.fromCharCode(e.which);
                if (!(/[0-9,%,.]/).test(ch)) {
                    e.preventDefault();
                }
            });
            // Turn off autocomplete
            $('.price_and_commission').attr('autocomplete', 'off');

        });

    </script>
@endpush
