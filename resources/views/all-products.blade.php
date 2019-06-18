@extends ('master')

@section('title', 'All Products')

@section('content')

    <h1>All Products</h1>

    <div id="product-grid">
    
        @foreach ($products as $product)
            <div class="product-details">
                <div> {{ $product->SKU }} </div>
                <div> {{ $product->Name }} </div>
                <div> {{ $product->Price_EUR }} EUR </div>
                <div> {{ $product->Type }} </div>
            </div>
        @endforeach

    </div>

@endsection

