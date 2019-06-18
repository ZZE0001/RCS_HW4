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
                <div><form action="/{{ $product->id }}/edit"><button class="button grey">Update</button></form></div>
                <div>
                        <form method="POST" action="/{{ $product->id }}">
                            {{ method_field('DELETE')}}
                            {{ csrf_field() }}
                        
                            <div class="control">
                                <button type="submit" class="button">Delete Product</button>
                            </div>
                            
                        </form>
                </div>
            </div>
        @endforeach

    </div>

@endsection

