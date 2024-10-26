<x-proton::tags.center>
    <a 
        {{ $attributes->merge(['class' => 'proton-tags-button']) }}
        href="{{ $url ?? request()->getSchemeAndHttpHost() }}" 
        target="_blank"
    >{{ $slot }}</a>
</x-proton::tags.center>