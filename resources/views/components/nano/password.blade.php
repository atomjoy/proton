@php
$password = (string) $password ?? 'INVALIDPASS';
@endphp

<x-proton::nano.row>
    <div class="nano-padding-inline">
        <div class="nano-code">{{ $password }}</div>
    </div>
</x-proton::nano.row>
