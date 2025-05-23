<x-proton::row>
    <div class="nano-padding nano-bg nano-font-small">
        <div class="nano-company">
            <img src="{{ config('proton.footer_image_url', 'https://raw.githubusercontent.com/atomjoy/proton/main/public/logo-proton-grey.png') }}" alt="Logo">

            <div class="nano-address">
                <div class="nano-address-line">{{ config('proton.footer_company', '© 2025 Proton AG') }}</div>
                <div class="nano-address-line">{{ config('proton.footer_street', 'Route de la Galaise 32') }}</div>
                <div class="nano-address-line">{{ config('proton.footer_city', '1228 Plan-les-Ouates, Geneva') }}</div>
            </div>
        </div>

        <div class="nano-divider"></div>

        <div class="nano-p nano-font-small">This message was sent to you because you indicated that you are willing to stay up to date with news from us. If you don't want to receive such emails in the future, please unsubscribe <a href="{{ request()->getSchemeAndHttpHost() . '/unsubscribe/email' }}" target="_blank">here</a>.</div>
    </div>
</x-proton::row>
