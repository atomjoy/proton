<a 
    {{ $attributes->merge(['class' => 'proton-tags-a']) }}
    href="{{ $url ?? request()->getSchemeAndHttpHost() }}" 
    target="_blank"
>{{ $slot }}</a>