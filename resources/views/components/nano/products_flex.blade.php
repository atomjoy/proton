@php
$n = 0;
@endphp
<x-proton::nano.row>
    <div class="nano-padding-inline">
        <div class="nano-title">@lang('proton.products_flex_title')</div>

        <div class="nano-products-flex">
            @php
            $count = count($products);
            @endphp
            @foreach ($products as $product)
            @php
            $n = $n + 1;
            in_array($n, [1,4,7,10]) ? $cl1 = 'nano-product-left-mini' : $cl1 = '';
            in_array($n, [3,6,9,12]) ? $cl2 = 'nano-product-right-mini' : $cl2 = '';
            in_array($n, [2,5,8,11]) ? $cl3 = 'nano-product-center-mini' : $cl3 = '';
            in_array($n, [1,2,3]) && $count > 3 ? $cl4 = 'nano-product-divider' : $cl4 = '' ;
            @endphp
            <div class="nano-product {{ $cl1 }} {{ $cl2 }} {{ $cl3 }} {{ $cl4 }}">
                <img class="nano-product-image" src="{{ $product['image'] ?? 'https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/public/proton-default.jpg' }}" alt="Foto">
                <div class="nano-product-name">{{ $product['name'] ?? 'Product' }}</div>
                @if (!empty($product['text']))
                <div class="nano-product-text">{{ $product['text'] ?? 'Product description' }}</div>
                @endif
                @if (!empty($product['price']))
                <div class="nano-product-price">{{ $product['price'] ?? '0.00' }} {{ $product['currency'] ?? 'PLN' }}</div>
                @endif
                <a href="{{ $product['url'] ?? request()->getSchemeAndHttpHost() }}" class="nano-buy-button" target="_blank">{{ $product['button'] ?? __('Buy') }}</a>
            </div>
            @endforeach
        </div>
    </div>
</x-proton::nano.row>
