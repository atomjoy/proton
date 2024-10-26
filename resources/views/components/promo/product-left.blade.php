<div class="proton-full-width">
    <table align="left" width="50%" border="0" cellpadding="0" cellspacing="0" class="proton-row-width-50 proton-row-width-padding-right">
        <tr>
            <td align="left">                        
                <img class="email-image-small" src="{{ $img }}" alt="Logo">
            </td>
        </tr>
    </table>		
    <table align="left" width="50%" border="0" cellpadding="0" cellspacing="0" class="proton-row-width-50 proton-row-width-padding-left">
        <tr>
            <td align="left">
                <x-proton::tags.margin />
                <x-proton::tags.margin />
                <x-proton::tags.p>{{ __($text) }}</x-proton::tags.p>
                <x-proton::tags.h3>{!! $h3 !!}</x-proton::tags.h3>
                <x-proton::tags.margin />
                <x-proton::tags.button url="{{ $url }}"  class="proton-promo-button-small">
                    {{ __('Order Now') }}
                </x-proton::tags.button>
            </td>
        </tr>
    </table>
</div>