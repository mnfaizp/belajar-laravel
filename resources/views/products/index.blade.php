@extends('layouts/app')

@section('content')
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="{{ route('products.create') }}" class="btn btn-sm btn-success text-white">Add Product</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">List of Producst</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <form action="{{ route('products.delete', $product->id) }}" method="post">
                                        @csrf()
                                        @method('DELETE')
                                        <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">No Products</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()


