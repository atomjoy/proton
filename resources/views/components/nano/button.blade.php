<x-proton::nano.row>
    <div class="nano-padding-inline">
        <center>
            <a href="{{ $url ?? request()->getSchemeAndHttpHost() }}" class="nano-button" target="_blank">{{ $slot ?? __('See more') }}</a>
        </center>
    </div>
</x-proton::nano.row>