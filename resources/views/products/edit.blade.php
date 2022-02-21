@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Products Form</div>
    <div class="card-body">
        <form class="" action="{{ route('products.update', $product->id) }}" method="post">
            @csrf()
            @method('put')
            <input type="text" value="{{ $product->product_name }}" class="form-control mb-3" name="name" placeholder="Product Name">
            <input type="number" value="{{ $product->quantity }}" class="form-control mb-3" name="quantity" placeholder="Product Stock">
            <div class="input-group mb-3"><span class="input-group-text">$</span>
                <input class="form-control" type="text" value="{{ $product->price }}" name="price" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">.00</span>
            </div>

            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
</div>
@endsection()
