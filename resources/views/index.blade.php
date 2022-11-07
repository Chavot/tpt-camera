@extends('layouts.app')

@section('content')

<div class="container">
    {{$products->links()}}
    <div class="row">
    @foreach($products as $product)

    <div class="col-sm-6 mb-4">
        <div class="card text-center" style="width:600px">
            <img class="card-img-top" src="{{$product->image}}" alt="product" style="width:100%;">
            <h5 class="card-header"> {{$product->name}}</h5>
            <div class="card-body">
                <p class="card-text">{{$product->description}}</p>


                <a href="#" class="card-link">{{$product->type}}</a>
                <a href="#" class="card-link">{{$product->brand}}</a>

                <div class="card-footer">
                    <p class="text-center">{{$product->created_at->diffForHumans()}}
            @if($product->status == '1')
                    <button class="btn btn-primary">Add item</button>
                    <a href="{{route('public.show', ['product'=> $product->id])}}" class="btn btn-outline-dark">Read more</a>
                @else
                    <button class="btn btn-primary" disabled>Add item</button>
                @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

        @endforeach
        </div>
    {{$products->links()}}
    </div>
@endsection
