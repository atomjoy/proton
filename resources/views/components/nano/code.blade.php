@php
$password = (string) $password ?? '000000';
@endphp

<x-proton::nano.row>
    <div class="nano-padding-inline">
        <div class="nano-code">
            <ul>{{ $password[0] ?? 0 }}</ul>
            <ul>{{ $password[1] ?? 0 }}</ul>
            <ul>{{ $password[2] ?? 0 }}</ul>
            <ul>{{ $password[3] ?? 0 }}</ul>
            <ul>{{ $password[4] ?? 0 }}</ul>
            <ul>{{ $password[5] ?? 0 }}</ul>
        </div>
    </div>
</x-proton::nano.row>
