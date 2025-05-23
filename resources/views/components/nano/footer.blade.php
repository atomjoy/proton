<x-proton::nano.row>
    <div class="nano-padding nano-bg nano-font-small">
        <div class="nano-company">
            <img class="nano-company-logo" src="{{ config('proton.footer_image_url', 'https://raw.githubusercontent.com/atomjoy/proton/main/public/logo-proton-grey.png') }}" alt="Logo">

            <div class="nano-address">
                <div class="nano-address-line">{{ config('proton.footer_company', '© 2025 Proton AG') }}</div>
                <div class="nano-address-line">{{ config('proton.footer_street', 'Route de la Galaise 32') }}</div>
                <div class="nano-address-line">{{ config('proton.footer_city', '1228 Plan-les-Ouates, Geneva') }}</div>
            </div>
        </div>

        <div class="nano-divider"></div>

        <div class="nano-p nano-font-small">@lang('proton.footer_unsubscribe_text') <a href="{{ request()->getSchemeAndHttpHost() . '/unsubscribe/email' }}" target="_blank">@lang('proton.footer_unsubscribe_button_text')</a>.</div>
    </div>
</x-proton::nano.row>
