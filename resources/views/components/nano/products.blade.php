<x-proton::nano.row>
    <div class="nano-padding-inline">
        <div class="nano-title">@lang('proton.products_title')</div>
    </div>

    @foreach ($products as $product)
    <x-proton::nano.flex50>
        <img src="{{ $product['image'] ?? 'https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/public/proton-default.jpg' }}" alt="Foto">
        <div class="nano-line"><strong>{{ $product['name'] ?? 'Product' }}</strong></div>
        <div class="nano-line-uppercase">{{ $product['text'] ?? 'Product description' }}</div>
        <a href="https://example.com/laptop" class="nano-buy">{{ $product['button'] ?? __('BUY') }}</a>
    </x-proton::nano.flex50>
    @endforeach
</x-proton::nano.row>
