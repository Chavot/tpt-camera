@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/products/create" class="btn btn-primary"> New product</a>
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
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-warning">Middle</button>
                            <button a href="//{{}}" type="button" class="btn btn-danger">Left</button>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

</div>
@endsection
