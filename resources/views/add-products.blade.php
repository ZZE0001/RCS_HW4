@extends ('master')

@section('title', 'Add New Products')

@section('content')

    <h1>Add New Products</h1>

    <form method="POST" action="/all-products">
        {{-- special helper field for extra security --}}
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <input type="text" name="skufield" placeholder="SKU" class="input is-primary" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="text" name="namefield" placeholder="Name" class="input is-info" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="number" name="pricefield" placeholder="Price in EUR" min="0" step=".01" class="input is-success" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="text" name="typefield" placeholder="Type of product" class="input is-warning" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Add Product</button>
            </div>
        </div>
        
    </form>

@endsection