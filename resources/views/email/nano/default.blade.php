<x-proton::nano.email title="{{ __('Email') }}" locale="{{ app()->getlocale() }}">

    <x-slot:style>
        <style></style>
    </x-slot:style>

    <x-proton::nano.header />

    <x-proton::row class="nano-padding-inline">
        <div class="nano-title">@lang('Welcome') {{ $user?->name ?? '' }}!</div>
        <div class="nano-p">{{ $text ?? 'Empty message.' }}</div>
    </x-proton::row>

    @if (!empty($url))
    <x-proton::nano.button url="{{ $url }}">
        @lang('Click here')
    </x-proton::nano.button>
    @endif

    <x-proton::nano.regards />

    <x-proton::nano.social />

    <x-proton::nano.footer />

</x-proton::nano.email>