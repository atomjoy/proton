<x-proton::nano.row class="nano-padding-inline">
    <center>
        <a href="{{ $url ?? request()->getSchemeAndHttpHost() }}" class="nano-button" target="_blank">{{ $slot ?? __('See more') }}</a>
    </center>
</x-proton::nano.row>
