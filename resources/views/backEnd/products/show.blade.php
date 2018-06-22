@extends('admin.app')
@section('title')
Product
@stop

@section('content')

    <h1>Product</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Product Title</th><th>Category</th><th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->id }}</td> <td> {{ $product->product_title }} </td><td> {{ $product->category }} </td><td> {{ $product->product_price }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection