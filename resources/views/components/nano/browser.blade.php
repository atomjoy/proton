<x-proton::nano.row>
    <div class="nano-padding nano-bg nano-font-small">
        <center>
            <a href="{{ $url ?? request()->getSchemeAndHttpHost() }}" target="_blank">@lang('proton.browser_text') <strong>@lang('proton.browser_button')</strong></a>
        </center>
    </div>
</x-proton::nano.row>
