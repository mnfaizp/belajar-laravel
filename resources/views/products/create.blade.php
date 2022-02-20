@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Products Form</div>
    <div class="card-body">
        <form class="" action="{{ route('products.store') }}" method="post">
            @csrf()
            <input type="text" class="form-control mb-3" name="name" placeholder="Product Name">
            <input type="number" class="form-control mb-3" name="quantity" placeholder="Product Stock">
            <div class="input-group mb-3"><span class="input-group-text">$</span>
                <input class="form-control" type="text" name="price" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">.00</span>
            </div>

            <button type="submit" class="btn btn-info">Save</button>
        </form>
    </div>
</div>
@endsection()
