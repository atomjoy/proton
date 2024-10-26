<x-proton::tags.div type="promocode" {{ $attributes }}>
    <div 
    style="display: inline; float: left; padding: 10px 0px;">{{ __('Promotional code:') }} <strong>{{ $slot }}</strong></div> 
    <img src="{{ $url ?? request()->getSchemeAndHttpHost() . '/images/icon-tag.png' }}" class="proton-tags-icon" alt="Icon" style="display: inline; height: 45px; width: auto; margin: 0px;">
</x-proton::tags.div>