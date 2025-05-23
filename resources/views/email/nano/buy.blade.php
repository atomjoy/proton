<x-proton::nano.email title="{{ __('Email') }}" locale="{{ app()->getlocale() }}">

    <x-slot:style>
        <style></style>
    </x-slot:style>

    @if (!empty($browser_url))
    <x-proton::nano.browser url="{{ $browser_url }}" />
    @endif

    <x-proton::nano.header_buy />

    <x-proton::nano.row class="nano-padding-inline">
        <div class="nano-title">@lang('Welcome') {{ $user?->name ?? '' }}!</div>
        <div class="nano-p">
            {{ $text ?? 'Latest promotions in our shop.' }}
        </div>
    </x-proton::nano.row>

    <x-proton::nano.products :products="$products" />

    <x-proton::nano.regards />

    <x-proton::nano.social />

    <x-proton::nano.footer />

</x-proton::nano.email>
