<!-- textarea -->
@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')
    {{-- Shortcode --}}
    @if(isset($field['shortCode']['code']) && count($field['shortCode']['code']))
        <div class="col-12 py-3 px-0">
            @foreach($field['shortCode']['code'] as $v)
                <a
                    class="button_textarea_shortcode btn btn-sm btn-default
                    {{ $field['shortCode']['class'] ?? '' }}"
                    data-shortcode="{{ $v['input'] }}">
                    {{ $v['name'] }}
                </a>
            @endforeach
        </div>
    @endif
    {{-- End Shortcode --}}
    <textarea
    	name="{{ $field['name'] }}"
        @include('crud::fields.inc.attributes')

    	>{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}</textarea>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    @push('crud_fields_scripts')
        <script>
            $.fn.insertAtCaret = function (text) {
            return this.each(function () {
                if (document.selection && this.tagName == 'TEXTAREA') {
                    //IE textarea support
                    this.focus();
                    sel = document.selection.createRange();
                    sel.text = text;
                    this.focus();
                } else if (this.selectionStart || this.selectionStart == '0') {
                    //MOZILLA/NETSCAPE support
                    startPos = this.selectionStart;
                    endPos = this.selectionEnd;
                    scrollTop = this.scrollTop;
                    this.value = this.value.substring(0, startPos) + text + this.value.substring(endPos, this.value.length);
                    this.focus();
                    this.selectionStart = startPos + text.length;
                    this.selectionEnd = startPos + text.length;
                    this.scrollTop = scrollTop;
                } else {
                    // IE input[type=text] and other browsers
                    this.value += text;
                    this.focus();
                    this.value = this.value; // forces cursor to end
                }
            });
        };



        $('.button_textarea_shortcode').click(function (event) {
            event.preventDefault();
            var code = $(this).data('shortcode');
            $('textarea[name="{{ $field['name'] }}"]').insertAtCaret(code);
        });
        </script>
    @endpush

@endif
