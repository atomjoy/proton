<x-proton::nano.email title="{{ __('Email') }}" locale="{{ app()->getlocale() }}">

    <x-slot:style>
        <style></style>
    </x-slot:style>

    @if (!empty($browser_url))
    <x-proton::nano.browser url="{{ $browser_url }}" />
    @endif

    <x-proton::nano.header />

    <x-proton::nano.row>
        <div class="nano-padding-inline">
            <div class="nano-title">@lang('Welcome') {{ $user?->name ?? '' }}!</div>
            <div class="nano-p">
                {{ $text ?? 'Empty message.' }}
            </div>
        </div>
    </x-proton::nano.row>

    @if (!empty($url))
    <x-proton::nano.button url="{{ $url }}">
        @lang('Click here')
    </x-proton::nano.button>
    @endif

    @if (!empty($code))
    <x-proton::nano.code password="{{ $code }}" />
    @endif

    @if (!empty($password))
    <x-proton::nano.password password="{{ $password }}" />
    @endif

    <x-proton::nano.regards />

    <x-proton::nano.social />

    <x-proton::nano.footer />

</x-proton::nano.email>