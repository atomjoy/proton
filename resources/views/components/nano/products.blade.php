@php
$count = 0;
@endphp
<x-proton::nano.row>
    <div class="nano-padding-inline">
        <div class="nano-title">@lang('proton.products_title')</div>

        @foreach ($products as $product)
        @php
        $count = $count + 1;
        $count % 2 != 0 ? $cl = 'nano-product-left' : $cl = 'nano-product-right'
        @endphp
        <x-proton::nano.flex50 class="{{ $cl }}">
            <img class="nano-product-image" src="{{ $product['image'] ?? 'https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/public/proton-default.jpg' }}" alt="Foto">
            <div class="nano-product-name">{{ $product['name'] ?? 'Product' }}</div>
            @if (!empty($product['text']))
            <div class="nano-product-text">{{ $product['text'] ?? 'Product description' }}</div>
            @endif
            @if (!empty($product['price']))
            <div class="nano-product-price">{{ $product['price'] ?? '0.00' }} {{ $product['currency'] ?? 'PLN' }}</div>
            @endif
            <a href="{{ $product['url'] ?? request()->getSchemeAndHttpHost() }}" class="nano-buy-button" target="_blank">{{ $product['button'] ?? __('Buy') }}</a>
        </x-proton::nano.flex50>
        @endforeach
    </div>
</x-proton::nano.row>