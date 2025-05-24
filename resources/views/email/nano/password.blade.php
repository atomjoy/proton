<x-proton::nano.email title="{{ __('proton.password.subject') }}" locale="{{ app()->getlocale() }}">
    <x-slot:style>
        <style></style>
    </x-slot:style>

    <x-proton::nano.header_password />

    <x-proton::nano.row>
        <div class="nano-padding-inline">
            <div class="nano-title">@lang('proton.password.welcome') {{ $user?->name ?? '' }}!</div>
            <div class="nano-p">
                @lang('proton.password.message')
            </div>
        </div>
    </x-proton::nano.row>

    <x-proton::nano.password password="{{ $password }}" />

    <x-proton::nano.regards />

    <x-proton::nano.social />

    <x-proton::nano.footer />

</x-proton::nano.email>