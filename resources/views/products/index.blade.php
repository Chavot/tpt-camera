@extends('layouts.app')

@section('content')
    <h2>Products</h2>
    <a href="{{route('users.index')}}" class="btn btn-info text-bg-light">User panel</a>
    <div class="container">
        <a href="/products/create" class="btn btn-primary float-end"> New product</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td class="table-dark">
                        <div class="btn-group align-content-center">
                            <a href="{{route('products.show', ['product' => $product->id])}}" class="btn btn-success">show</a>
                            <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-warning">edit</a>
                            <button class="btn btn-danger" form="delete-form-{{$product->id}}">delete</button>
                        </div>

                        <form id="delete-form-{{$product->id}}" action="{{route('products.destroy', ['product' => $product->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection
