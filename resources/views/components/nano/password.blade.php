@php
$password = (string) $password ?? 'INVALIDPASS';
@endphp

<x-proton::row>
    <div class="nano-padding-inline">
        <div class="nano-code">{{ $password }}</div>
    </div>
</x-proton::row>