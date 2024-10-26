<x-proton::tags.div type="promocode" {{ $attributes }}>
    <p>
        <div style="display: inline; float: left; padding: 10px 0px;">{{ __('Promotional code:') }} <strong>{{ $slot }}</strong></div> 
        <img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/icon-tag.png" class="proton-tags-icon" alt="Icon" style="display: inline; height: 45px; width: auto; margin: 0px;">
    </p>
</x-proton::tags.div>