<img 
    src="{{ $url ?? request()->getSchemeAndHttpHost() . '/images/logo.png' }}" 
    {{ $attributes->merge(['class' => 'proton-tags-logo']) }} 
    alt="Logo"
>