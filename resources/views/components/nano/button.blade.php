<x-proton::row class="nano-padding-inline">
    <center>
        <a href="{{ $url ?? request()->getSchemeAndHttpHost() }}" class="nano-button" target="_blank">{{ $slot ?? 'See more' }}</a>
    </center>
</x-proton::row>