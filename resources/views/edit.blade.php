@extends ('master')

@section('title', 'All Products')

@section('content')

    <h1>Edit Product</h1>

<form method="POST" action="/{{ $product->id }}">
    {{-- form action should be {{ $product->id }} --}}
    {{-- we really want here PATCH request, please route accordingly --}}
    {{ method_field('PATCH') }}

    {{ csrf_field() }}

    <div class="field">
        <div class="control">
            <input name="skufield"  value="{{$product->SKU}}" class="input is-primary" type="text" placeholder="SKU">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input name="namefield" value="{{$product->Name}}" class="input is-info" type="text" placeholder="Name">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input name="pricefield" value="{{$product->Price_EUR}}" class="input is-success" type="text" placeholder="Price in EUR">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input name="typefield" value="{{$product->Type}}" class="input is-warning" type="text" placeholder="Type">
        </div>
    </div>

    <div class="control">
        <button type="submit" class="button is-primary">Update Product</button>
    </div>

    </form>

@endsection