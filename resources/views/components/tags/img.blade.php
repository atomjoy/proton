<img 
    src="{{ $url ?? request()->getSchemeAndHttpHost() . '/images/logo.png' }}" 
    {{ $attributes->merge(['class' => 'proton-tags-img']) }} 
    alt="Image"
>