<x-proton::nano.email title="{{ __('proton.f2a.subject') }}" locale="{{ app()->getlocale() }}">
    <x-slot:style>
        <style></style>
    </x-slot:style>

    <x-proton::nano.header_f2a />

    <x-proton::row class="nano-padding-inline">
        <div class="nano-title">@lang('proton.f2a.welcome') {{ $user?->name ?? '' }}!</div>
        <div class="nano-p">@lang('proton.f2a.message')</div>
    </x-proton::row>

    <x-proton::nano.code password="{{ $password }}" />

    <x-proton::nano.regards />

    <x-proton::nano.social />

    <x-proton::nano.footer />

</x-proton::nano.email>