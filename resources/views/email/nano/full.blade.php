<x-proton::nano.email title="{{ __('Email') }}" locale="{{ app()->getlocale() }}">

    <x-slot:style>
        <style></style>
    </x-slot:style>

    <x-proton::nano.header />

    <x-proton::row class="nano-padding-inline">
        <div class="nano-title">@lang('Welcome') {{ $user?->name ?? '' }}!</div>
        <div class="nano-p">
            Lorem ipsum dolor sit, amet consectetur adipisicing
            <a href="https://example.com" target="_blank" />click here</a>.
            Ea error eligendi, magni temporibus voluptas laboriosam,
            vitae tempore aspernatur consequatur iure nobis.
            Fugiat praesentium est eveniet neque architecto enim ab molestias?
        </div>
    </x-proton::row>

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