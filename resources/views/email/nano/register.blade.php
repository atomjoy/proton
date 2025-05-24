<x-proton::nano.email title="{{ __('proton.register.subject') }}" locale="{{ app()->getlocale() }}">
    <x-slot:style>
        <style></style>
    </x-slot:style>

    <x-proton::nano.header_register />

    <x-proton::nano.row>
        <div class="nano-padding-inline">
            <div class="nano-title">@lang('proton.register.welcome') {{ $user?->name ?? '' }}!</div>
            <div class="nano-p">
                @lang('proton.register.message')
            </div>
        </div>
    </x-proton::nano.row>

    <x-proton::nano.button url="{{ request()->getSchemeAndHttpHost() }}/activate/{{ $user?->id ?? '0' }}/{{ $user?->code ?? 'nocode' }}?locale={{ app()->getLocale() }}">
        @lang('proton.register.button')
    </x-proton::nano.button>

    <x-proton::nano.regards />

    <x-proton::nano.social />

    <x-proton::nano.footer />

</x-proton::nano.email>