@extends ('master')

@section('title', 'Add New Products')

@section('content')

    <h1>Add New Products</h1>

    <form method="POST" action="/all-products">
        {{-- special helper field for extra security --}}
        {{ csrf_field() }}

        <div>
            <input type="text" name="skufield" placeholder="SKU">
        </div>

        <div>
            <input type="text" name="namefield" placeholder="Name">
        </div>

        <div>
            <input type="number" name="pricefield" placeholder="Price in EUR" min="0" step=".01">
        </div>

        <div>
            <input type="text" name="typefield" placeholder="Type of product">
        </div>

        <div>
            <button type="submit">Add Product</button>
        </div>
    
    </form>

    <h6>Designer should really work on this form :)</h6>

@endsection