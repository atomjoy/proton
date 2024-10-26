<div class="proton-full-width">

    <table align="left" width="33.333%" border="0" cellpadding="0" cellspacing="0" class="proton-row-width-33 proton-row-width-33-padding-right">
        <tr>
            <td align="left" colspan="2">                        
                <img class="email-image-small" src="{{ $img1 }}" alt="Logo">						
                <x-proton::tags.p class="proton-color-gray">{{ $text1 }}</x-proton::tags.p>
                <x-proton::tags.h4>{!! $title1 !!}</x-proton::tags.h4>
                <x-proton::tags.margin />
            </td>
        </tr>
        <tr>
            <td align="left" style="text-decoration: line-through;" class="proton-color-gray">{{ $price1 }}</td>
            <td align="right"><strong>{{ $promoprice1 }}</strong></td>
        </tr>
        <tr>
            <td align="left" colspan="2">
                @if ($divider1 == 'true')
                <x-proton::tags.divider />                    
                @else
                <x-proton::tags.margin />
                @endif
            </td>
        </tr>
    </table>

    <table align="left" width="33.333%" border="0" cellpadding="0" cellspacing="0" class="proton-row-width-33 proton-row-width-33-padding-center">
        <tr>
            <td align="left" colspan="2">                        
                <img class="email-image-small" src="{{ $img2 }}" alt="Logo">
                <x-proton::tags.p class="proton-color-gray">{{ $text2 }}</x-proton::tags.p>
                <x-proton::tags.h4>{!! $title2 !!}</x-proton::tags.h4>
                <x-proton::tags.margin />
            </td>
        </tr>
        <tr>
            <td align="left" style="text-decoration: line-through;" class="proton-color-gray">{{ $price2 }}</td>
            <td align="right"><strong>{{ $promoprice2 }}</strong></td>
        </tr>
        <tr>
            <td align="left" colspan="2">
                @if ($divider2 == 'true')
                <x-proton::tags.divider />                    
                @else
                <x-proton::tags.margin />
                @endif
            </td>
        </tr>
    </table>
    
    <table align="left" width="33.333%" border="0" cellpadding="0" cellspacing="0" class="proton-row-width-33 proton-row-width-33-padding-left">
        <tr>
            <td align="left" colspan="2">
                <img class="email-image-small" src="{{ $img3 }}" alt="Logo">						
                <x-proton::tags.p class="proton-color-gray">{{ $text3 }}</x-proton::tags.p>
                <x-proton::tags.h4>{!! $title3 !!}</x-proton::tags.h4>
                <x-proton::tags.margin />
            </td>
        </tr>
        <tr>
            <td align="left" style="text-decoration: line-through;" class="proton-color-gray">{{ $price3 }}</td>
            <td align="right"><strong>{{ $promoprice3 }}</strong></td>
        </tr>
        <tr>
            <td align="left" colspan="2">
                @if ($divider3 == 'true')
                <x-proton::tags.divider />                    
                @else
                <x-proton::tags.margin />
                @endif
            </td>
        </tr>
    </table>

</div>