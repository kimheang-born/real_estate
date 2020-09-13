{{-- <!-- used for heading, separators, etc -->
@include('crud::fields.inc.wrapper_start')
	{!! $field['value'] !!}
@include('crud::fields.inc.wrapper_end') --}}

<input type="hidden" name="fake_sale_list_price">
<input type="hidden" name="fake_sale_commission">
<input type="hidden" name="fake_rent_list_price">
<input type="hidden" name="fake_rental_commission">

<div class="d-none" data-init-function="bpFieldInitListingScript"></div>

{{-- {{dd($entry)}} --}}
{{--  Prevent script load multiple time in backpack crud --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    @push('crud_fields_styles')
    
    @endpush


    @push('crud_fields_scripts')

        <script type="text/javascript">
            function bpFieldInitListingScript(element)
            {
                // $('input[name$="sale_commission"]').keypress(function(e) {
                //     var ch = String.fromCharCode(e.which);
                //     console.log(ch);
                //     if (!(/[0-9,%,.]/).test(ch)) {
                //         e.preventDefault();
                //         }
                // });

                // $('input[name$="rental_commission"]').keypress(function(e) {
                //     var ch = String.fromCharCode(e.which);
                //     if (!(/[0-9,%,.]/).test(ch)) {
                //         e.preventDefault();
                //     }
                // });

                //CHECK CONDITION FOR STATUS
                $('.close_reason').hide();
                $('.sold_price').hide();
                $('.sold_price_date').hide();
                $('.customer_id').hide();
                $('.rented_price').hide();
                $('.rented_price_date').hide();
                
                $("select[name='contact']").change(function(){
                    var val = $(this).val()
                    console.log(val);
                    $('input[name="contact_id"]').val(val);
                });
                // $("select[name='contact']").change();
                
                $("select[name='status']").change(function(){
                    var status = $("select[name='status']").val();
                    var contact_id = $("select[name='contact']").val();
                    // console.log(contact_id);

                    if(status == 'Inactive'){
                        $('.close_reason').show();
                        $('.hidden_col_9').hide();
                        
                        $('.sold_price').hide();
                        $('.sold_price_date').hide();
                        $('.customer_id').hide();

                        $('.close_reason label').append('<span class="text-danger">*</span>');

                        $('.sold_price span').remove();
                        $('.sold_price_date span').remove();
                        $('.rented_price span').remove();
                        $('.rented_price_date span').remove();

                        $('.rented_price').hide();
                        $('.rented_price_date').hide();
                        $('select[name="contact"]').prop('disabled', false);

                    }else if(status == 'Sold'){
                        $('.close_reason').hide();
                        $('.hidden_col_9').hide();

                        $('.sold_price').show();
                        $('.sold_price_date').show();
                        $('.customer_id').show();

                        $('.rented_price').hide();
                        $('.rented_price_date').hide();

                        $('.sold_price label').append('<span class="text-danger">*</span>');
                        $('.sold_price_date label').append('<span class="text-danger">*</span>');
                        $('.customer_id label').append('<span class="sale_star text-danger">*</span>');

                        $('.rented_price span').remove();
                        $('.rented_price_date span').remove();
                        $('.customer_id .rent_star').remove();
                        $('.close_reason span').remove();

                        $('input[name="contact_id"]').val(contact_id);
                        $('select[name="contact"]').prop('disabled', true);

                    }else if(status == 'Rented'){
                        $('.close_reason').hide();
                        $('.hidden_col_9').hide();
                        
                        $('.sold_price').hide();
                        $('.sold_price_date').hide();
                        $('.customer_id').show();

                        $('.rented_price').show();
                        $('.rented_price_date').show();

                        $('.rented_price label').append('<span class="text-danger">*</span>');
                        $('.rented_price_date label').append('<span class="text-danger">*</span>');
                        $('.customer_id label').append('<span class="rent_star text-danger">*</span>');

                        $('.sold_price span').remove();
                        $('.sold_price_date span').remove();
                        $('.customer_id .sale_star').remove();
                        $('.close_reason span').remove();
                        
                        $('input[name="contact_id"]').val(contact_id);
                        $('select[name="contact"]').prop('disabled', true);
                        
                    }else{
                        $('.close_reason').hide();
                        $('.hidden_col_9').show();
                        
                        $('.sold_price').hide();
                        $('.sold_price_date').hide();
                        $('.customer_id').hide();

                        $('.rented_price').hide();
                        $('.rented_price_date').hide();

                        $('.sold_price span').remove();
                        $('.sold_price_date span').remove();
                        $('.rented_price span').remove();
                        $('.rented_price_date span').remove();
                        $('.close_reason span').remove();

                        $('select[name="contact"]').prop('disabled', false);
                    }
                });
                
                $("select[name='status']").change();
                $('input[name="contact_id"]').val('{{$entry->contact_id}}');


                @php
                    function getErrorValue($key, $errors, $entry)
                    {
                        return $errors->first($key) ? old($key) : old($key) ?? $entry->{$key};
                    }
                @endphp
                
                // listing sale check box
                var server_is_sale = '{{ getErrorValue('is_sale', $errors, $entry)}}';
                var listing_sale = '{{ getErrorValue('sale_list_price', $errors, $entry) }}';
                var sale_commission = '{{ getErrorValue('sale_commission', $errors, $entry) }}';
                var check_box_sale  = $('#is_sale_checkbox').is(':checked');
                var input_is_sale = $('#is_sale_checkbox'); 

                input_is_sale.closest('.is_sale_button_checkbox').find('button').addClass('is_sale'); // class = is_sale
                input_is_sale.closest('.is_sale_button_checkbox').find('input[name="is_sale"]').attr('data-listing-sale', listing_sale).attr('data-sale-commission', sale_commission); 
                input_is_sale.closest('form').find('.sale-list-required label').append('<span class="sale-span-required text-danger">*</span>');

                if(check_box_sale == false){
                    input_is_sale.closest('.is_sale_button_checkbox').find('input[name="is_sale"]').val(0);
                    input_is_sale.closest('form').find('input[name="sale_list_price"]').attr('disabled',true).val('');
                    input_is_sale.closest('form').find('input[name="sale_commission"]').attr('disabled',true).val('');
                    input_is_sale.closest('form').find('label .sale-span-required').empty('*')
                }
                // remove value to empty if not is rent
                if (!server_is_sale) {
                    input_is_sale.closest('form').find('input[name="sale_list_price"]').attr('disabled',true).val('');
                    input_is_sale.closest('form').find('input[name="sale_commission"]').attr('disabled',true).val('');
                    input_is_sale.closest('form').find('label .sale-span-required').empty('*')
                }
                // action check box
                $('body').on('click','.is_sale', function(){
                    var form = $(this).closest('form');
                    var listing_sale = form.find('input[name="is_sale"]').attr('data-listing-sale');
                    var sale_commission = form.find('input[name="is_sale"]').attr('data-sale-commission');
                    var check_box_sale = $('#is_sale_checkbox').is(':checked');

                    if(check_box_sale == true){
                        form.find('input[name="sale_list_price"]').attr('disabled',false).val(listing_sale);
                        form.find('input[name="sale_commission"]').attr('disabled',false).val(sale_commission);
                        form.find('label .sale-span-required').text('*')
                        $('input[name="fake_sale_list_price"]').val(listing_sale)
                        $('input[name="fake_sale_commission"]').val(sale_commission)
                    }else{
                        form.find('input[name="sale_list_price"]').attr('disabled',true).val('');
                        form.find('input[name="sale_commission"]').attr('disabled',true).val('');
                        form.find('label .sale-span-required').empty('*')
                        $('input[name="fake_sale_list_price"]').val('')
                        $('input[name="fake_sale_commission"]').val('')
                    }
                })
                // end listing sale check box
                
                // listing sale check box
                var server_is_rent = '{{ getErrorValue('is_rent', $errors, $entry) }}';
                var listing_rent = '{{ getErrorValue('rent_list_price', $errors, $entry) }}';
                var rental_commission = '{{ getErrorValue('rental_commission', $errors, $entry) }}';
                var check_box_rent  = $('#is_rent_checkbox').is(':checked');
                var input_is_rent = $('#is_rent_checkbox'); 

                input_is_rent.closest('.is_rent_button_checkbox').find('button').addClass('is_rent'); // class = is_rent
                input_is_rent.closest('.is_rent_button_checkbox').find('input[name="is_rent"]').attr('data-listing-rent', listing_rent).attr('data-rent-commission', rental_commission); 
                input_is_rent.closest('form').find('.rent-list-required label').append('<span class="rent-span-required text-danger">*</span>');

                if(check_box_rent == false){
                    input_is_rent.closest('.is_rent_button_checkbox').find('input[name="is_rent"]').val(0);
                    input_is_rent.closest('form').find('input[name="rent_list_price"]').attr('disabled',true).val('');
                    input_is_rent.closest('form').find('input[name="rental_commission"]').attr('disabled',true).val('');
                    input_is_rent.closest('form').find('label .rent-span-required').empty('*')
                }
                // remove value to empty if not is rent
                if (!server_is_rent) {
                    input_is_rent.closest('form').find('input[name="rent_list_price"]').attr('disabled',true).val('');
                    input_is_rent.closest('form').find('input[name="rental_commission"]').attr('disabled',true).val('');
                    input_is_rent.closest('form').find('label .rent-span-required').empty('*')
                }
                // action check box
                $('body').on('click','.is_rent', function(){
                    var form = $(this).closest('form');
                    var listing_rent = form.find('input[name="is_rent"]').attr('data-listing-rent');
                    var rental_commission = form.find('input[name="is_rent"]').attr('data-rent-commission');
                    var check_box_rent = $('#is_rent_checkbox').is(':checked');

                    if(check_box_rent == true){
                        form.find('input[name="rent_list_price"]').attr('disabled',false).val(listing_rent);
                        form.find('input[name="rental_commission"]').attr('disabled',false).val(rental_commission);
                        form.find('label .rent-span-required').text('*')
                        $('input[name="fake_rent_list_price"]').val(listing_rent)
                        $('input[name="fake_rental_commission"]').val(rental_commission)
                    }else{
                        form.find('input[name="rent_list_price"]').attr('disabled',true).val('');
                        form.find('input[name="rental_commission"]').attr('disabled',true).val('');
                        form.find('label .rent-span-required').empty('*')
                        $('input[name="fake_rent_list_price"]').val('')
                        $('input[name="fake_rental_commission"]').val('')
                    }
                })
                // do not remove code use 
                $('.is_sale').trigger('click');
                $('.is_sale').trigger('click');
                // do not remove code use 
                $('.is_rent').trigger('click');
                $('.is_rent').trigger('click');
                // end listing sale check box
            }
    
        </script>
    @endpush
@endif